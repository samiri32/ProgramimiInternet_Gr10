<?php

class Pages extends Controller {
    public function __construct(){
    //$this->userModel = $this->model('User');
    }
    public function index(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/homepage', $data);
    }

    public function autoret(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Autoret',
              // 'users' => $users
        ];
        $this->view('views/pages/autoret', $data);
    }
    public function librat(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'librat',
              // 'users' => $users
        ];
        $this->view('pages/librat', $data);
    }
    public function lajme(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/lajme', $data);
    }
    public function galeria(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/galeria', $data);
    }
    public function kontakti(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/kontakti', $data);
    }
    



}