<?php
class Books extends Controller {
    public function __construct() {
        $this->bookModel = $this->model('Book');
    }

    public function index() {
        
               
          
        $books = $this->bookModel->findAllBooks();
         $data = [
             'books' => $books
         ];

        $this->view('books/librat', $data);
    }

    public function add() {
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/books");
        }

        $data = [
            'user_id' => '',
            'ISBN' => '',
            'titulli' => '',
            'autori' => '',
            'zhanri' => '',
            'datapub' => '',
            'gjuha' => '',
            'vleresimi' => '',
            'link' => '',
            'caption' => '',
            'img' => '',
            // errorat
            'ISBNerr' => '',
            'titullierr' => '',
            'autorierr' => '',
            'zhanrierr' => '',
            'datapuberr' => '',
            'gjuhaerr' => '',
            'linkerr' => '',
            'captionerr' => '',
            'imgerr' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'ISBN' => trim($_POST['ISBN']),
                'titulli' => trim($_POST['titulli']),
                'autori' => trim($_POST['autori']),
                'img' =>trim($_POST['img']),
                'zhanri' => trim($_POST['zhanri']),
                'datapub' => trim($_POST['datapub']),
                'gjuha' => trim($_POST['gjuha']),
                'vleresimi' => trim($_POST['vleresimi']),
                'link' => trim($_POST['link']),
                'caption' => trim($_POST['caption']),
                // errorat
                'ISBNerr' => '',
                'titullierr' => '',
                'autorierr' => '',
                'zhanrierr' => '',
                'datapuberr' => '',
                'gjuhaerr' => '',
                'linkerr' => '',
                'captionerr' => '',
                'imgerr' => ''
            ];

            if(empty($data['ISBN'])) {
                $data['ISBNerr'] = 'Plotesoni shifren.';
            }

            if(empty($data['titulli'])) {
                $data['titullierr'] = 'Shkruani titullin.';
            }

            if(empty($data['autori'])){
                $data['autorierr'] = 'Shkruani autorin.';
            }
            if(empty($data['img'])) {
                $data['imgerr'] = 'Bashkangjitni nje foto.';
            }

            if(empty($data['zhanri'])) {
                $data['zhanrierr'] = 'Shkruanin zhanrin.';
            }

            if(empty($data['datapub'])){
                $data['datapuberr'] = 'Shkruani daten e publikimit.';
            }
            if(empty($data['gjuha'])) {
                $data['gjuhaerr'] = 'Shkruani gjuhen.';
            }

            if(empty($data['link'])) {
                $data['linkerr'] = 'Bashkangjitni linkun.';
            }

            if(empty($data['caption'])) {
                $data['captionerr'] = 'Pershkruani librin.';
            }

            if (
                empty($data['ISBNerr']) && empty($data['titullierr']) && empty($data['imgerr']) && 
                empty($data['captionerr']) && empty($data['linkerr']) && empty($data['gjuhaerr']) &&
                empty($data['datapuberr']) && empty($data['zhanrierr'])  && empty($data['autorierr'])
            
            ) {
                if ($this->bookModel->addBook($data)) {
                    header("Location: " . URLROOT . "/books");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('books/add', $data);
            }
        }

        $this->view('books/add', $data);
    }

    public function change($id) {

        $book= $this->bookModel->findBookById($id);

        $data = [
            'book' => $book,
            'user_id' => '',
            'ISBN' => '',
            'titulli' => '',
            'autori' => '',
            'img' =>'',
            'zhanri' => '',
            'datapub' => '',
            'gjuha' => '',
            'vleresimi' => '',
            'link' => '',
            'caption' => '',
            // errorat
            'ISBNerr' => '',
            'titullierr' => '',
            'autorierr' => '',
            'zhanrierr' => '',
            'datapuberr' => '',
            'gjuhaerr' => '',
            'linkerr' => '',
            'captionerr' => '',
            'imgerr' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'book' => $book,
                'user_id' => $_SESSION['user_id'],
                'ISBN' => '',
                'titulli' => '',
                'autori' => '',
                'img' =>'',
                'zhanri' => '',
                'datapub' => '',
                'gjuha' => '',
                'vleresimi' => '',
                'link' => '',
                'caption' => '',
                // errorat
                'ISBNerr' => '',
                'titullierr' => '',
                'autorierr' => '',
                'zhanrierr' => '',
                'datapuberr' => '',
                'gjuhaerr' => '',
                'linkerr' => '',
                'captionerr' => '',
                'imgerr' => ''
            ];

            if(empty($data['ISBN'])) {
                $data['ISBNerr'] = 'Plotesoni shifren.';
            }

            if(empty($data['titulli'])) {
                $data['titullierr'] = 'Shkruani titullin.';
            }

            if(empty($data['autori'])){
                $data['autorierr'] = 'Shkruani autorin.';
            }
            if(empty($data['img'])) {
                $data['imgerr'] = 'Bashkangjitni nje foto.';
            }

            if(empty($data['zhanri'])) {
                $data['zhanrierr'] = 'Shkruanin zhanrin.';
            }

            if(empty($data['datapub'])){
                $data['datapuberr'] = 'Shkruani daten e publikimit.';
            }
            if(empty($data['gjuha'])) {
                $data['gjuhaerr'] = 'Shkruani gjuhen.';
            }

            if(empty($data['link'])) {
                $data['linkerr'] = 'Bashkangjitni linkun.';
            }

            if(empty($data['caption'])) {
                $data['captionerr'] = 'Pershkruani librin.';
            }

            if (
                empty($data['ISBNerr']) && empty($data['titullierr']) && empty($data['imgerr']) && 
                empty($data['captionerr']) && empty($data['linkerr']) && empty($data['gjuhaerr']) &&
                empty($data['datapuberr']) && empty($data['zhanrierr'])  && empty($data['autorierr'])
            
            ) {
                if ($this->bookModel->addBook($data)) {
                    header("Location: " . URLROOT . "/books");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('books/change', $data);
            }
        }

        $this->view('books/change', $data);
    }

    public function delete($id) {

        $book = $this->bookModel->findBookById($id);

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/books");
        } elseif($book->user_id != $_SESSION['user_id']){
            header("Location: " . URLROOT . "/books");
        }

        $data = [
            'book' => $book,
            'user_id' => $_SESSION['user_id'],
            'ISBN' => '',
            'titulli' => '',
            'autori' => '',
            'img' =>'',
            'zhanri' => '',
            'datapub' => '',
            'gjuha' => '',
            'vleresimi' => '',
            'link' => '',
            'caption' => '',
            // errorat
            'ISBNerr' => '',
            'titullierr' => '',
            'autorierr' => '',
            'zhanrierr' => '',
            'datapuberr' => '',
            'gjuhaerr' => '',
            'linkerr' => '',
            'captionerr' => '',
            'imgerr' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->bookModel->deleteBook($id)) {
                    header("Location: " . URLROOT . "/books");
            } else {
               die('Something went wrong!');
            }
        }
    }
}