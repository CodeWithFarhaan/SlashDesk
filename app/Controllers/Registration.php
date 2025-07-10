<?php
namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Registration extends BaseController
{
    use ResponseTrait;

    public function index(): string
    {
        return view('pages/registration');;
    }

    public function registration(){
    	// Validate input first
        $validation = \Config\Services::validation();
        $validation->setRules([
            'full_name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'password' => 'required|min_length[6]',
            'extension' => 'permit_empty'
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validation->getErrors()
            ])->setStatusCode(400);
        }

        // Get cleaned input data
        $name = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');   
        $phone = $this->request->getPost('phone');  
        $password = $this->request->getPost('password');   
        $ext = $this->request->getPost('extension');

        $client = \Config\Services::curlrequest();
        $url = "http://localhost:7888/api/auth/signup";
        try {
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer your_api_token_here'
                    ],
                    'json' => [ // Use 'json' instead of 'body' for proper JSON encoding
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'ext' => $ext,
                        'password' => $password
                    ],
                    'http_errors' => false // To handle HTTP errors manually
                ]);


                $responseBody = json_decode($response->getBody(), true);
                $statusCode = $response->getStatusCode();

                if ($statusCode >= 200 && $statusCode < 300) {
                	print_r("successful response");
                    // Success response
                    return $this->response->setJSON([
                        'status' => true,
                        'message' => 'Registration successful',
                        'data' => $responseBody
                    ]);
                } else {
                	print_r("error_reporting");
                    // API returned an error
                    log_message('error', 'Registration API error: ' . $response->getBody());
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => $responseBody['message'] ?? 'Registration failed',
                        'api_response' => $responseBody
                    ])->setStatusCode($statusCode);
                }
            } catch (\Exception $e) {
                log_message('error', 'Registration exception: ' . $e->getMessage());
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'An error occurred while processing your request'
                ])->setStatusCode(500);
            }
    }
}