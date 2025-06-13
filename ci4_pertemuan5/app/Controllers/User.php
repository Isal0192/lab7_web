<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';
        $model = new UserModel();
        $users = $model->findAll();

        return view('user/index', compact('users', 'title'));
    }

    public function login()
    {
        helper(['form']);
        $session = session();

        // Tampilkan form login jika belum submit
        if ($this->request->getMethod() !== 'post') {
            return view('user/login');
        }

        // Ambil input dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->where('useremail', $email)->first();

        if ($user) {
            if (password_verify($password, $user['userpassword'])) {
                $sessionData = [
                    'user_id'    => $user['id'],
                    'user_name'  => $user['username'],
                    'user_email' => $user['useremail'],
                    'logged_in'  => true,
                ];
                $session->set($sessionData);
                return redirect()->to('admin/artikel');
            } else {
                $session->setFlashdata('flash_msg', 'Password salah.');
                return redirect()->to('/user/login');
            }
        } else {
            $session->setFlashdata('flash_msg', 'Email tidak terdaftar.');
            dd($session->get());
            return redirect()->to('/user/login');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/user/login');
    }   
}