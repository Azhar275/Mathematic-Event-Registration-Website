<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in'))
        {
            return redirect()->to(base_url());
        }
        return view('vw_login');
    }
    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'nama' => $dataUser->nama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/profil'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    // function register(){
    //     return redirect()->to(base_url('register'));
    // }
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}