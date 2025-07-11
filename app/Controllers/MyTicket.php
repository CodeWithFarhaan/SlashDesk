<?php

namespace App\Controllers;

class MyTicket extends BaseController
{
    public function index()
    {
    	$client = \Config\Services::curlrequest();
        $url = "http://192.168.0.154:7888/api/ticket/tickets";

        try{
        	$response = $client->request('GET', $url, [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer '.substr(session()->get('token'),0,) 
                    ],
                    'data'=>'',
                    'http_errors' => false // To handle HTTP errors manually
            ]);
            $responseBody = json_decode($response->getBody(), true);
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 300){
            	// print_r($responseBody);
            	// die;
            	$data["responseBody"] = $responseBody;

            	return view('pages/myTicket',$data);
            }else{
            	print_r(substr(session()->get('token'),0,));
            
            }
        }catch(\Exception $e){
        	log_message('error', 'Registration exception: ' . $e->getMessage());
            // print_r(esc(session()->get('userData')['data']['token']));
            return $this->response->setJSON([
                'status' => false,
                'message' => $e->getMessage()
            ])->setStatusCode(500);
        }
    	// view('pages/myTicket');

    }


    public function getAllTicket(){

    }
}
