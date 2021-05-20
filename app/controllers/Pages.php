<?php

class Pages extends Controller
{

  public function __construct()
  {
    if (!isset($_COOKIE['user'])) {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie($cookie_name, serialize($arr), time() + (86400 * 30), "/");
    }
    //$this->userModel = $this->model('User');
  }
  public function index()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Ballina'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    var_dump($array);
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/homepage', $data);
  
}

  public function autoret()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Autore'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Autoret',
      // 'users' => $users
    ];
    $this->view('pages/autoret', $data);
  }
  public function librat()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Libra'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'librat',
      // 'users' => $users
    ];
    $this->view('pages/librat', $data);
  }
  public function lajme()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Lajme'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => '1',
      // 'users' => $users
    ];
    $this->view('posts/lajme', $data);
  }

  public function update()
  {
    $data = [
      'titulli' => '1',
      // 'users' => $users
    ];
    $this->view('posts/update', $data);
  }

  public function create()
  {
    $data = [
      'titulli' => '1',
      // 'users' => $users
    ];
    $this->view('posts/create', $data);
  }


  public function galeria()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Galeria'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/galeria', $data);
  }
  public function kontakti()
  {
    if (isset($_COOKIE['user'])) {
      $array = unserialize($_COOKIE['user']);
      $array['Kontakti'] += 1;
      setcookie('user', serialize($array), time() + (86400 * 30), "/");
    } else {
      $cookie_name = 'user';
      $arr = [
        'Ballina' => 0,
        'Autore' => 0,
        'Libra' => 0,
        'Lajme' => 0,
        'Galeria' => 0,
        'Kontakti' => 0
      ];
      setcookie('user', serialize($arr), time() + (86400 * 30), "/");
    }
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/kontakti', $data);
  }

  public function profili()
  {
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    if (isset($_SESSION['user_id'])) {
      $this->view('pages/profili', $data);
    } else {
      $this->view('pages/homepage', $data);
    }
  }

  public function autoretcatalog()
  {
    //  $users = $this->userModel->getUsers();

    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/autoretcatalog', $data);
  }
  public function libratcatalog()
  {
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/libratcatalog', $data);
  }
}
