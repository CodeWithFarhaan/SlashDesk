<?php

namespace App\Controllers;

class MyTask extends BaseController
{
    public function index()
    {
    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }
        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/task/getalltask";
        try{
        	$response = $client->request('GET', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
                    ],
                    'json'=> [
                        'pageState' => null,
                        'pageSize' => "10"
                    ],  
                    'http_errors' => false // To handle HTTP errors manually
            ]);
            $responseBody = json_decode($response->getBody(), true);
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 300){
            	// print_r($responseBody);
            	// die;
            	$data["responseBody"] = $responseBody;

            	return view('pages/myTask',$data);
            }else{
            	// print_r(substr(session()->get('token'),0,));        
                print_r($responseBody);     
                print_r($statusCode);
                die;
            }
        }catch (\Exception $e){
        	 return $this->response->setJSON([
                'status' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
        // return view('pages/myTask'); 
    }


    public function create(){

    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }

        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');   
        $complexity = $this->request->getPost('complexity');  
        $tested_on = $this->request->getPost('tested_on');   
        $testing_status = $this->request->getPost('testing_status');
        $task_type = $this->request->getPost('task_type');
        $from_department = $this->request->getPost('from_department');
        $misrouted = $this->request->getPost('misrouted');
        $information_missing = $this->request->getPost('information_missing');

        $department = $this->request->getPost('department');
        $assignee = $this->request->getPost('assignee');
        
        $client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/task/create";
        try{
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
                ],
                'json'=> [
                    "title"         => $title,
                    "descriptions"  => $description,
                    "department_id" => "a3dcdc30-5b99-4f6f-b044-dcf2ca396d60",
                    "created_by"    => "akash" ,
                    "ticket_id"     => "b4bdf40f-71e2-4c46-8597-5e79e003c028",
                    "assigned_by"   => "55e0ba7b-9692-4785-b835-a6865388eeb3",
                    "status"        => "Open",
                    "task_details"  =>[
                        "task_type" => "code merge",
                        'complexity'=> $complexity,
                        'tested_on' => $tested_on,
                        'testing_status' => $testing_status,
                        'agent' => 'sahil'
                    ],
                    "due_date"      => "10-12-2025"
                ],  
                'http_errors' => false // To handle HTTP errors manually
            ]);
            $responseBody = json_decode($response->getBody(), true);
            $statusCode = $response->getStatusCode();
           
            if ($statusCode >= 200 && $statusCode < 300){
            	return redirect()->to('myTask');
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
