<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->findAllPosts();
         $data = [
             'posts' => $posts
         ];

        $this->view('posts/lajme', $data);
    }

    public function create() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => '',
            'image' => '',
            'imageError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'image' => trim($_POST['image']),
                'titleError' => '',
                'bodyError' => '',
                'imageError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'Plotesoni titullin.';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'Pershkruani lajmin.';
            }

            if(empty($data['image'])){
                $data['imageError'] = 'Bashkangjitni nje foto.';
            }

            if (empty($data['titleError']) && empty($data['bodyError'] && empty($data['imageError']))) {
                if ($this->postModel->addPost($data)) {
                    header("Location: " . URLROOT . "/posts");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('posts/create', $data);
            }
        }

        $this->view('posts/create', $data);
    }

    public function update($id) {

        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => '',
            'image' => '',
            'imageError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'image' => trim($_POST['image']),
                'titleError' => '',
                'bodyError' => '',
                'imageError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'Plotesoni titullin.';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'Pershkruani lajmin.';
            }

            if($data['title'] == $this->postModel->findPostById($id)->title) {
                $data['titleError'] == 'Nuk keni ndryshuar titullin!';
            }

            if($data['body'] == $this->postModel->findPostById($id)->body) {
                $data['bodyError'] == 'Nuk keni ndryshuar pershkrimin!';
            }
            
            if($data['image'] == $this->postModel->findPostById($id)->image){
                $data['imageError'] == 'Nuk keni ndryshuar foton!';
            }

            if (empty($data['titleError']) && empty($data['bodyError'] && empty($data['imageError']))) {
                if ($this->postModel->updatePost($data)) {
                    header("Location: " . URLROOT . "/posts");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('posts/update', $data);
            }
        }

        $this->view('posts/update', $data);
    }

    public function delete($id) {

        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'image' => '',
            'titleError' => '',
            'bodyError' => '',
            'imageError' =>''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->postModel->deletePost($id)) {
                    header("Location: " . URLROOT . "/posts");
            } else {
               die('Something went wrong!');
            }
        }
    }
    public function getTitlePosts($title)
    {
      $this->db->query('SELECT * FROM posts WHERE REPLACE(title," ","") like :title');
      $this->db->bind(':title','%'.$title.'%');
      $results=$this->db->resultSet();
      return $results;

    }
    public function getTitleId($id)
    {
      $this->db->query('SELECT * FROM posts WHERE REPLACE(id," ","") like :id');
      $this->db->bind(':id','%'.$id.'%');
      $results=$this->db->resultSet();
      return $results;
}
}