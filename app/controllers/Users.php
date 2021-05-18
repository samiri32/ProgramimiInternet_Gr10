<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['email'] = $user->email;
        flush();
        if (!headers_sent($filename, $linenum)) {
        header('location: ../pages/kycu');
    }
    else echo "$filename, $linenum";
    }
    
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        header('location: ../users/kycu');
        die();
    }

    public function regjistrohu()
    {
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
            $telefoniValidation = "/(\+383)[4][3,4,5,9][0-9]{6}$/";

            //Validate phone
            if (empty($data['telefoni'])) {
                $data['telefoniError'] = 'Please enter phone.';
            } elseif (!preg_match($telefoniValidation, $data['telefoni'])) {
                $data['telefoniError'] = 'Telefoni duhet te jete i formatit +3834xxxxxxx.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            // Validate password on length, numeric values,
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password.';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
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
    }

    public function kycu()
    {
        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
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
                $data['emailError'] = 'Please enter an email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->kycu($data['email'], $data['password']);
                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Password or email is incorrect. Please try again.';
                        $this->view('users/kycu', $data);
                    }
                }

            } else {
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => '',
                    'passwordError' => ''
                ];
            }
            $this->view('users/kycu', $data);
            
        }

    }