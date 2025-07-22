<?php

namespace App\Controllers;

class Department extends BaseController
{
	public function index()
    {
    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }
        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/department/view";
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
            	return view('/pages/department',$data); 
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
    	// return view('/pages/department');
    }






   public function create(){

    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }

        $dpt_name = $this->request->getPost('dept_name');
        $dept_code = $this->request->getPost('dept_code');   
        $isActive = $this->request->getPost('status');  
        $Description = $this->request->getPost('description');
        // print_r($isActive);
        // die;
        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/department/create";
        try{
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
                ],
                'json'=> [
                    "department_name"=> $dpt_name,
                    "description"=> $Description,
                    "department_code"           => $dept_code,
                    "is_active"        => $isActive
                ],  
                'http_errors' => false // To handle HTTP errors manually
            ]);
            $responseBody = json_decode($response->getBody(), true);
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 300){
            	return redirect()->to('/department');
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
    }
}