<?php
namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Registration extends BaseController
{
    use ResponseTrait;

    public function index(): string
    {
        return view('pages/registration');
    }

    public function registration()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'email'             => 'required|valid_email',
            'full_name'         => 'required|min_length[3]',
            'phone'             => 'required',
            'password'          => 'required|min_length[8]',
            'confirm_password'  => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Prepare the payload
        $data = [
            'email'            => $this->request->getPost('email'),
            'username'        => $this->request->getPost('full_name'),
            'password'         => $this->request->getPost('password'),
        ];
        
        // API endpoint 
        $apiUrl = 'http://192.168.0.123:7888/api/auth/signup';
        
        $client = \Config\Services::curlrequest();

        try {

            $response = $client->post($apiUrl, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'body' => json_encode($data),
            ]);
            // print_r($response); die;
            $responseBody = json_decode($response->getBody(), true);

            // Handle success based on your API's response structure
            if ($response->getStatusCode() === 201 || $response->getStatusCode() === 200) {
                return redirect()->to('/login')->with('success', 'Registration successful!');
            } else {
                return redirect()->back()->withInput()->with('errors', ['Unexpected error from API']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('errors', [$e->getMessage()]);
        }
    }
}
