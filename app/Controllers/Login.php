<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {

        $data['title'] = 'Login';

        echo view('backend/templates/html-header', $data);
        echo view('/login');
        echo view('backend/templates/footer');
        echo view('backend/templates/html-footer');
    }

    public function entrar()
    {

        $model = new UserModel();

        $user = $this->request->getVar('user');
        $password = $this->request->getVar('password');

        $data['utilizadores'] = $model->getUser($user, $password);


        if (empty($data['utilizadores'])) {

            return redirect()->to(base_url('login'));
        } else {

            if ($user == 'admin' && $password == '123') {
                $sessionData = [
                    'user' => $user,
                    'admin_in' => TRUE,
                    'logged_in' => TRUE
                ];

                session()->set($sessionData);

                return redirect()->to(base_url("admin/utilizadores"));
            } else {
                $sessionData = [
                    'user' => $user,
                    'logged_in' => TRUE
                ];


                session()->set($sessionData);

                return redirect()->to(base_url('home'));
            }
        }
    }


    public function logout()
    {

        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
