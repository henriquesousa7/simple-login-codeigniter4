<?php 

namespace App\Controllers;

use AccountsModel;

class Users extends BaseController
{
	public function index()
	{
        helper('form');
        
        echo view('templates/header');
        echo view('login/login');
        echo view('templates/footer');
	}

    public function register()
    {
        helper('form');

        echo view('templates/header');
        echo view('login/register');
        echo view('templates/footer');
    }

    public function responseLogin()
    {
        helper('form');
        
        $model = new AccountsModel();

        $rules = [
            'email' => 'required|min_length[6]|max_length[50]',
            'senha' => 'required|min_length[8]|max_length[255]'
        ];

        
        if ($this->validate($rules)) {

            $email = $this->request->getVar('email');
            $senha = $this->request->getVar('senha');

            if ($model->getAccount($email, $senha)) {
                echo view('templates/header');
                echo view('login/loginSuccess');
                echo view('templates/footer');
            } else {
                echo view('templates/header');
                echo view('login/loginError');
                echo view('templates/footer');
            }
        } else {
            echo view('templates/header');
            echo view('login/loginError');
            echo view('templates/footer');
        }
    }

    public function responseRegister()
    {
        helper('form');

        $model = new AccountsModel();
        
        $rules = [
            'usuario' => 'required|min_length[6]',
            'email' => 'required|min_length[6]|max_length[50]',
            'senha' => 'required|min_length[8]|max_length[255]'
        ];

        if ($this->validate($rules)) 
        {
            $model->insert([
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'senha' => $this->request->getVar('senha')
            ]);
            echo view('templates/header');
            echo view('login/registerSuccess');
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('login/registerError');
            echo view('templates/footer');
        }
    }
}
