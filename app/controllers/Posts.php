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

        $this->view('pages/homepage', $data);
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
            'upload' => '',
            'uploadError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'upload' => trim($_POST['upload']),
                'titleError' => '',
                'bodyError' => '',
                'uploadError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'Plotesoni titullin.';
            }

            if(empty($data['body'])) {
                $data['bodyError'] = 'Pershkruani lajmin.';
            }

            if(empty($data['upload'])){
                $data['uploadError'] = 'Bashkangjitni nje foto.';
            }

            if (empty($data['titleError']) && empty($data['bodyError'] && empty($data['uploadError']))) {
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
            'upload' => '',
            'uploadError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'upload' => trim($_POST['upload']),
                'titleError' => '',
                'bodyError' => '',
                'uploadError' => ''
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
            
            if($data['upload'] == $this->postModel->findPostById($id)->upload){
                $data['uploadError'] == 'Nuk keni ndryshuar foton!';
            }

            if (empty($data['titleError']) && empty($data['bodyError'] && empty($data['uploadError']))) {
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
            'upload' => '',
            'titleError' => '',
            'bodyError' => '',
            'uploadError' =>''
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
}