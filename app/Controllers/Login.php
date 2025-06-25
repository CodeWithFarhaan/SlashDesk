<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('pages/login'); 
    }

    public function login()
    {
        // Get form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Prepare API request
        $client = \Config\Services::curlrequest();
        
        try {
            $response = $client->post('http://192.168.0.123:7888/api/auth/login', [
                'json' => [
                    'email' => $email,
                    'password' => $password
                ],
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $responseData = json_decode($response->getBody(), true);
            
            if ($response->getStatusCode() === 200 && $responseData['success']) {
                // Store user data in session
                $session = session();
                // print_r($responseData['data']['user']['username']); die;
                $session->set([
                    'user_id'    => $responseData['data']['user']['id'] ?? null,
                    'username'   => $responseData['data']['user']['username'] ?? null,
                    'email'      => $responseData['data']['user']['email'] ?? null,
                    'token'     => $responseData['data']['token'] ?? null,
                    'logged_in'  => true
                ]);
                // print_r($session->get()); die;
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', $responseData['message'] ?? 'Incorrect Email or Password.');
            }

        } catch (\Exception $e) {
            log_message('error', 'Login API Error: '.$e->getMessage());
            return redirect()->back()->with('error', 'Server is busy sorry for the inconveniences');
        }
    }
}