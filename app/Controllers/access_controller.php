<?php

namespace App\Controllers;

class access_controller extends BaseController
{
	public function index()
    {
    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }
        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/access/view";
        try{
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
                ],
                // 'json'=> '',  
                'http_errors' => false // To handle HTTP errors manually
            ]);
            $responseBody = json_decode($response->getBody(), true);
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 300){
            	$data['responseBody'] = $responseBody;
            	return view('/pages/access_level',$data); 
            }else{
            	// print_r(substr(session()->get('token'),0,));        
                print_r($responseBody);
                print_r($statusCode);
            }
        }catch(\Exception $e){
        	log_message('error', 'Registration exception: ' . $e->getMessage());
            // print_r(esc(session()->get('userData')['data']['token']));
            return $this->response->setJSON([
                'status' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    	// return view('/pages/access_level');
    }

    public function create() {
    if (!session()->get('isLoggedIn') || !session()->get('token')) {
        return redirect()->to('login');
    }

    $user_id = $this->request->getPost('user_id');
    $department_id = $this->request->getPost('department_id'); // Fixed typo in variable name
    $status = $this->request->getPost('status');  
    
    // Get permission arrays
    $tickets_permission = $this->request->getPost('tickets_permission');
    $tasks_permission = $this->request->getPost('tasks_permission');
    $comments_permission = $this->request->getPost('comments_permission');

    $client = \Config\Services::curlrequest();
    $url = env("URL_BACKEND")."/access/create";
    
    try {
        $response = $client->request('POST', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
            ],
            'json'=> [
                "user_id"=>"55e0ba7b-9692-4785-b835-a6865388eeb3",
                "deparment_id"=>"da34e7dc-6f27-4dbe-98a0-da17ebeb1703", // Fixed typo in key name
                "status" => $status,
                "tickets_permission" => $tickets_permission,
                "tasks_permission" => $tasks_permission,
                "comments_permission" => $comments_permission,
            ],  
            'http_errors' => false
        ]);
        
        $responseBody = json_decode($response->getBody(), true);
        $statusCode = $response->getStatusCode();
        
        if ($statusCode >= 200 && $statusCode < 300) {
        	print_r($responseBody);
            die;
            return redirect()->to('/access_level');
        } else {
            // Return with error message to show in the form
            return redirect()->back()->withInput()->with('error', $responseBody['message'] ?? 'Failed to create access');
        }
    } catch(\Exception $e) {
        log_message('error', 'Access creation exception: ' . $e->getMessage());
        return redirect()->back()->withInput()->with('error', $e->getMessage());
    }
}
}