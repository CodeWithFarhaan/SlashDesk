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
}
