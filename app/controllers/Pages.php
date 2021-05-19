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
        $this->view('pages/autoret', $data);
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

    public function profili(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        if(isset($_SESSION['user_id'])){
          $this->view('pages/profili', $data);
        }
          else{
            $this->view('pages/homepage', $data);
          }
        }
        
    public function autoretcatalog(){
      //  $users = $this->userModel->getUsers();
     
       $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/autoretcatalog', $data);
    }
    public function libratcatalog(){
      //  $users = $this->userModel->getUsers();
        $data = [
               'titulli' => 'Homepage',
              // 'users' => $users
        ];
        $this->view('pages/libratcatalog', $data);
    }



}