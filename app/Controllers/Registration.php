<?php
namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Registration extends BaseController
{
    use ResponseTrait;
    protected $session;

    public function __construct(){
        $this->session = \Config\Services::session();
    }

    public function index(): string{
        return view('pages/registration');;
    }

    public function registration(){
        // Get cleaned input data
        $name = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');   
        $phone = $this->request->getPost('phone');  
        $password = $this->request->getPost('password');   
        $ext = $this->request->getPost('extension');

        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/auth/signup";
        try {
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer your_api_token_here'
                    ],
                    'json' => [ // Use 'json' instead of 'body' for proper JSON encoding
                        'username' => $name,
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

                    // Success response
                    // return $this->response->setJSON([
                    //     'status' => true,
                    //     'message' => 'Registration successful',
                    //     'data' => $responseBody
                    // ]);

                    return redirect()->to('login');
                } else {
                	
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
                // print_r(e->getMessage());
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'An error occurred while processing your request'
                ])->setStatusCode(500);
            }
    }

    public function login() {
        // Get cleaned input data
        $email = $this->request->getPost('email');     
        $password = $this->request->getPost('password');   

        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/auth/login";

        try{
            $response = $client->request('POST', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer your_api_token_here'
                    ],
                    'json' => [ // Use 'json' instead of 'body' for proper JSON encoding
                        'username' => $email,
                        'email' => $email,
                        'password' => $password
                    ],
                    'http_errors' => false // To handle HTTP errors manually
                ]);

                $responseBody = json_decode($response->getBody(), true);
                $statusCode = $response->getStatusCode();

                if ($statusCode >= 200 && $statusCode < 300) {

                    // Success response
                    // return $this->response->setJSON([
                    //     'status' => true,
                    //     'message' => 'Registration successful',
                    //     'data' => $responseBody
                    // ]);
                    $sessionData = [
                        'isLoggedIn' => true,
                        'userData' => [
                            'id' => $responseBody['data']['user']['id'],
                            'username' => $responseBody['data']['user']['username'],
                            'email' => $responseBody['data']['user']['email'],
                            'phone' => $responseBody['data']['user']['phone'],
                            'ext' => $responseBody['data']['user']['ext']
                        ],
                        'token' => $responseBody['data']['token'],
                        'loginTime' => time()
                    ];
                    session()->set($sessionData);   
                    return redirect()->to('dashboard');
                } else {
                    
                    // API returned an error
                    log_message('error', 'Registration API error: ' . $response->getBody());
                    return $this->response->setJSON([
                        'status' => false,
                        'message' => $responseBody['message'] ?? 'Registration failed',
                        'api_response' => $responseBody
                    ])->setStatusCode($statusCode);
                }

        }catch(\Exception $e){
            log_message('error', 'Registration exception: ' . $e->getMessage());
            // print_r(e->getMessage());
            return $this->response->setJSON([
                'status' => false,
                'message' => $e->getMessage(),
            ])->setStatusCode(500);
        }
    }

    public function logout() {
        // Get session service
        $session = session();
        
        // Add logout activity to logs if needed
        if ($session->has('userData')) {
            $userId = $session->get('userData')['id'] ?? 'unknown';
            log_message('info', "User {$userId} logged out");
        }
        
        // Destroy the session
        $session->destroy();
        
        // Clear any remember me cookies if you have them
        // helper('cookie');
        // delete_cookie('remember_token');
        
        // Redirect with flash message
        return redirect()->to('login')
            ->with('status', 'success')
            ->with('message', 'You have been successfully logged out');
    }

    public function getAllUsers(){
        if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }

        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/auth/allUser";
        try{
            $response = $client->request('GET', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer '.substr(session()->get('token'),0,)
                    ],
                    'http_errors' => false // To handle HTTP errors manually
                ]);

                $responseBody = json_decode($response->getBody(), true);
                $statusCode = $response->getStatusCode();

                if ($statusCode >= 200 && $statusCode < 300) {

                    // Success response
                    // return $this->response->setJSON([
                    //     'status' => true,
                    //     'message' => 'Registration successful',
                    //     'data' => $responseBody
                    // ]);
                    $data['responseBody'] = $responseBody ;
                    return view('pages/access_level',$data);
                } else {
                    
                    // API returned an error
                    // log_message('error', 'Registration API error: ' . $response->getBody());
                   return $this->response->setJSON([
                       'status' => false,
                       'message' => $e->getMessage()
                   ])->setStatusCode(500);
                }

        }catch(\Exception $e){
            // log_message('error', 'Registration exception: ' . $e->getMessage());
            // print_r(e->getMessage());
            return $this->response->setJSON([
                'status' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    }
}
?>