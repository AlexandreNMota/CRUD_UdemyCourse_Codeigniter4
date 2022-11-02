<?php

namespace App\Controllers;

use \App\Entities\User;

class Signup extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model = new \App\Models\UserModel;
    }

    public function new()
    {
        return view("Signup/new");
    }

    public function create()
    {
        $user = new User($this->request->getPost());

        $user->startActivation();

        if ($this->model->insert($user)) {
            $this->sendActivationEmail($user);
            return redirect()->to("signup/success");
        } else {
            return redirect()->back()->with('errors', $this->model->errors())
                ->with('warning', 'Invalid Data')->withInput();
        }
    }

    public function success()
    {
        return view('Signup/success');
    }

    public function activate($token)
    {
        $this->model->activateByToken($token);
        return view("Signup/activated");
    }

    private function sendActivationEmail($user)
    {
        // !ALERT: Sandbox can only send email to authorized users
        /*
         alexandre.acustica@gmail.com
         alexandre.mota355@gmail.com
        */
        $email = service('email');
        $email->setTo($user->email);
        $email->setSubject('Account activation');
        $message = view('Signup/activation_email', [
            'token' => $user->token
        ]);
        $email->setMessage($message);
        $email->send();
    }
}