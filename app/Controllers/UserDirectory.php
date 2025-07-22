<?php

namespace App\Controllers;

class UserDirectory extends BaseController
{
    public function index()
    {
    	$client = \Config\Services::curlrequest();
        $url = env("URL_BACKEND")."/auth/allUser";

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

            	return view('pages/userDirectory',$data);
            }else{
            	// print_r(substr(session()->get('token'),0,));        
                print_r($responseBody);
            }
        }catch(\Exception $e){
        	log_message('error', 'Registration exception: ' . $e->getMessage());
            // print_r(esc(session()->get('userData')['data']['token']));
            return $e->getMessage();
            // $this->response->setJSON([
            //     'status' => false,
            //     'message' => $e->getMessage()
            // ])->setStatusCode(500);

        }
        // return view('pages/userDirectory');
    }
}