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
}