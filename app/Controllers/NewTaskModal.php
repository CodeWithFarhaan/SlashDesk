<?php

namespace App\Controllers;

class NewTaskModal extends BaseController
{
    public function index()
    {
        return view('partials/newTaskModal'); 
    }
}
