<?php

namespace App\Controllers;

use \App\Entities\User;

class Signup extends BaseController{
    private $model;
    public function __construct()
    {
        $this->model = new \App\Models\UserModel;
    }


    public function new(){
        return view("Signup/new");
    }

    public function create(){
        $user = new User($this->request->getPost()); 
        if($this->model->insert($user)){
            return redirect()->to("signup/success");
        }else{
            return redirect()->back()->with('errors', $this->model->errors())
            ->with('warning','Invalid Data')->withInput();
        }
    }

    public function success(){
        return view('Signup/success');
    }
}