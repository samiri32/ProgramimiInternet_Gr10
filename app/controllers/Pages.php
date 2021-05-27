<?php
class Pages extends Controller
{

  public function __construct()
  {
    $this->postModel = $this->model('Post');
    //$this->userModel = $this->model('User');
    if(isLoggedIn()){
    $emri=$_SESSION['user_id'];
    if(!isset($_COOKIE[$emri]))
    {
      $profili=[
        'Profili'=>0
      ];
      setcookie($emri, serialize($profili), time() + 60*60*24*31, "/");
    }

  }
  }

  
  public function index()
  {
 
    $data = [
      'titulli' => 'Homepage',
    
    ];
    $this->view('pages/homepage', $data);
  
}

  public function autoret()
  {

    $data = [
      'titulli' => 'Autoret',

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

  
  public function change()
  {
    $data = [
      'titulli' => '1',
      // 'users' => $users
    ];
    $this->view('books/ndrysho', $data);
  }

  public function add()
  {
    $data = [
      'titulli' => '1',
      // 'users' => $users
    ];
    $this->view('books/add', $data);
  }


  public function galeria()
  {
   
    $data = [
      'titulli' => 'Homepage',
     
    ];
    $this->view('pages/galeria', $data);
  }
  public function kontakti()
  {
    
    $data = [
      'titulli' => 'Homepage',
     
    ];
    $this->view('pages/kontakti', $data);
  }

  public function profili()
  {
    if(isLoggedIn()){
    $emri=$_SESSION['user_id'];
    
    if (isset($_COOKIE[$emri])) {
     
      $array = unserialize($_COOKIE[$emri]);
      $array['Profili'] += 1;
      setcookie( $emri, serialize($array), time() + 60*60*24*31, "/");
    } else {
      $arr = [
        'Profili' => 2,        
      ];
      setcookie( $emri, serialize($arr), time() + 60*60*24*31, "/");
    }
  
    $data = [
      'titulli' => 'Homepage',
   
    ];
    if (isset($_SESSION['user_id'])) {
      $this->view('pages/profili', $data);
    } else {
      $this->view('pages/homepage', $data);
    }
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
   
    
    echo "<table style='position: relative; margin-top: 0em; align-self: left;'>";
   
    echo '<tr style="margin-top: 0em; position: relative;">';
    
    
    foreach ($post as $specificPost) {
      
       $location= URLROOT.'/posts/lajme/#'.$specificPost->id;
      echo '<tr style= "align-self: left; padding: 0; margin-top: -1em; margin-bottom: 0em; position: relative;">';
      
      echo "<td class='kerkimi'style='align-self: left; margin-top: 0em; max-width: 45em; margin-bottom: 0em; position: relative;  border-bottom:1px solid grey;' id='kerkimi'> <a href=$location>$specificPost->title</td>";

      echo '</tr>';
      
     }
     echo '</table>';
    
  }

}
 