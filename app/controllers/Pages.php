<?php

class Pages extends Controller
{

  public function __construct()
  {
    $this->postModel = $this->model('Post');
    //$this->userModel = $this->model('User');
  }

  
  public function index()
  {
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/homepage', $data);
  
}

  public function autoret()
  {
    
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Autoret',
      // 'users' => $users
    ];
    $this->view('pages/autoret', $data);
  }
  public function librat()
  {
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'librat',
      // 'users' => $users
    ];
    $this->view('pages/librat', $data);
  }
  public function lajme()
  {
   
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
    
    //  $users = $this->userModel->getUsers();
    $data = [
      'titulli' => 'Homepage',
      // 'users' => $users
    ];
    $this->view('pages/galeria', $data);
  }
  public function kontakti()
  {
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

  public function ajax($request='null')
  { 
     $post=$this->postModel->getTitlePosts($request);
    //TODO:fix this 
    
    echo '<table>';
   
    echo '<tr>';
    echo '<th>Title </th>';
    echo '<th>  ID </th>';
    echo '<th> Data </th>'; 
    foreach ($post as $specificPost) {
       $location=URLROOT.'/posts/lajme/'.$specificPost->id;
      echo '<tr>';
      echo "<td> <a href=$location> Title:$specificPost->title </td>";
      echo "<td> <a href=$location> ID:$specificPost->id </td>";
      echo "<td> $specificPost->created_at</td>";

      
      echo '</tr>';
//  echo "<a href=$location> ID:$specificPost->id </a> dhe eshte krijuar ne $specificPost->created_at";
     }
     echo '</table>';
    
  }

}
