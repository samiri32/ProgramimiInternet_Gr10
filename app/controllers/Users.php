<?php
ob_start();
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['email'] = $user->email;
        $_SESSION['emri'] = $user->emri;
        $_SESSION['mbiemri'] = $user->mbiemri;
        $_SESSION['adresa'] = $user->adresa;
        $_SESSION['status'] = $user->status;
        $_SESSION['user_datejoined'] = $user->user_datejoined;
        header('location:' . URLROOT);
        die();
    }


    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['emri']);
        unset($_SESSION['mbiemri']);
        unset($_SESSION['adresa']);
        unset($_SESSION['status']);
        unset($_SESSION['user_datejoined']);
        header('location:' . URLROOT . '/pages/homepage');
        die();
    }

    public function regjistrohu()
    {
        if (!isLoggedIn()) {
            $data = [
                'emri' => '',
                'mbiemri' => '',
                'email' => '',
                'emailError' => '',
                'password' => '',
                'passwordError' => '',
                'confirmPassword' => '',
                'confirmPasswordError' => '',
                'telefoni' => '',
                'telefoniError' => '',
                'adresa' => '',
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['confirmPassword']),
                    'emri' => trim($_POST['emri']),
                    'mbiemri' => trim($_POST['mbiemri']),
                    'adresa' => trim($_POST['adresa']),
                    'telefoni' => trim($_POST['telefoni']),
                    'emailError' => '',
                    'passwordError' => '',
                    'telefoniError' => '',
                    'confirmPasswordError' => ''
                ];

                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                $telefoniValidation = "/(\+383)[4][3,4,5,8,9][0-9]{6}$/";

                //Validate phone
                if (empty($data['telefoni'])) {
                    $data['telefoniError'] = 'Ju lutem plotesoni numrin e telefonit.';
                } elseif (!preg_match($telefoniValidation, $data['telefoni'])) {
                    $data['telefoniError'] = 'Numri i telefonit duhet te jete i formatit +3834xxxxxxx.';
                }

                //Validate email
                if (empty($data['email'])) {
                    $data['emailError'] = 'Ju lutem plotesoni email adresen.';
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Ju lutem shkruani email adresen ne formatin e duhur.';
                } else {
                    //Check if email exists.
                    if ($this->userModel->findUserByEmail($data['email'])) {
                        $data['emailError'] = 'Email adresa eshte e zene.';
                    }
                }

                // Validate password on length, numeric values,
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Ju lutem plotesoni fjalekalimin.';
                } elseif (strlen($data['password']) < 8) {
                    $data['passwordError'] = 'Fjalekalimi duhet te kete te pakten 8 karaktere.';
                } elseif (preg_match($passwordValidation, $data['password'])) {
                    $data['passwordError'] = 'Fjalekalimi duhet te permbaje shkronja dhe numra.';
                }

                //Validate confirm password
                if (empty($data['confirmPassword'])) {
                    $data['confirmPasswordError'] = 'Ju lutem plotesoni fjalekalimin.';
                } else {
                    if ($data['password'] != $data['confirmPassword']) {
                        $data['confirmPasswordError'] = 'Fjalekalimet nuk perputhen, provoni perseri.';
                    }
                }

                // Make sure that errors are empty
                if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']) && empty($data['telefoniError'])) {

                    // Hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    //Register user from model function
                    if ($this->userModel->regjistrohu($data)) {
                        //Redirect to the login page
                        header('location: ../users/kycu');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
            $this->view('users/regjistrohu', $data);
        } else {
            $this->view('pages/homepage');
        }
    }

    public function kycu()
    {
        if (!isLoggedIn()) {
            $data = [
                'title' => 'Login page',
                'email' => '',
                'password' => '',
                'emri' => '',
                'mbiemri' => '',
                'emailError' => '',
                'passwordError' => '',
                'adresa' =>''
            ];

            $this->view('users/kycu', $data);

            //Check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'emailError' => '',
                    'passwordError' => '',
                ];
                //Validate username
                if (empty($data['email'])) {
                    $data['emailError'] = 'Ju lutem plotesoni email adresen.';
                }

                //Validate password
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Ju lutem plotesoni fjalekalimin.';
                }
                //Check if all errors are empty
                if (empty($data['emailError']) && empty($data['passwordError'])) {
                    $loggedInUser = $this->userModel->kycu($data['email'], $data['password']);
                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Email adresa apo fjalekalimi eshte gabim. Ju lutem provoni perseri.';
                        $this->view('users/kycu', $data);
                    }
                }
            } else {
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'emri' => '',
                    'mbiemri' => '',
                    'adresa' => ''
                ];
            }
            $this->view('users/kycu', $data);
        } else {
            $this->view('pages/homepage');
        }
    }
}
