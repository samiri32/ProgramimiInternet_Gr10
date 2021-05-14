<?php

class Users extends Controller
{
    public function __construct()
    {
        // //QITU PE KRIJOJNA COOKIE NESE NUK EKZISTON
        // if(!isset($_COOKIE['user'])){
        //     $cookie_n='user';

        //     $pagesarray=[
        //         'Ballina'=>0,
        //         'Lajme'=>0,
        //         'Libra'=>0,
        //         'Autoret'=>0,
        //         'Galeria'=>0,
        //         'Kontakti'=>0,
        //     ];
        //     setcookie($cookie_n, serialize($pagesarray), time()+(3600));
        // }


        $this->userModel = $this->model('User');
    }
    public function kycu(){
        $data = [
            'title' => 'Login page'
        ];
        $this->view('users/kycu', $data);
    }
}



