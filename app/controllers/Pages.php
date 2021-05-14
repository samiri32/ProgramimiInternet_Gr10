<?php 

class Pages extends Controller{
    public function __construct(){
    $this->userModel = $this->model('User');
    }
    public function index(){
        $data = [
               'titulli' => 'Homepage',
               'emri' => 'Arbresha'
        ];
        $this->view('pages/test', $data);
    }
}