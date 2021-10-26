<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

 
    public function index()
    {

        if (session()->role == 'Cliente')
            redirect()->to('/user/login');

        $userModel = new UserModel();
        
        $data['title'] = "Lista de Usuarios";
        $data['users'] = $userModel->findAll();
        
        echo view('template/header',$data);
        echo view('user/list',$data);
        echo view('template/footer');
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        $data['title'] = "Lista de Usuarios";
        $data['users'] = $userModel->findAll();

        echo view('template/header',$data);
        echo view('user/list',$data);
        echo view('template/footer');
    }

    public function create() {
        $data['title'] = "Crear Usuario";
        echo view('template/header',$data);
        echo view('user/create');
        echo view('template/footer');
    }

    public function save()
    {
        $userModel = new UserModel();

        $data = $this->request->getPost();

        $user = new \App\Entities\User();
        $user->fill($data);

        $userModel->save($user);

        $data['title'] = "Lista de Usuarios";
        $data['users'] = $userModel->findAll();
        
        echo view('template/header',$data);
        echo view('user/list',$data);
        echo view('template/footer');
    }

    public function login(){

        echo view('login/login', array('title' => 'Login'));

    }


    public function logout(){

        session()->destroy();

        return redirect()->to('/user/login');

    }


    public function autenticate() {
        // tomar los datos de login
        $data = $this->request->getPost();

        $userModel = new UserModel();
        //Validar con la BD ususario y pass.
        $result = $userModel->validUser($data);

        //Redireccionar segun resultado de validación.
        if ($result) {
            
            $sessData = array (
                'username' => $result[0]->username,
                'role' => $result[0]->role,
                'isLoggedIn' => true
            );

            session()->set($sessData);
            return redirect()->to('/user');
        } else {
            session()->set(array('error' =>'Error Usuario o Contraseña Invalidos' ));
            session()->markAsFlashdata('error');
            return redirect()->to('/user/login');
        }

    }


}
