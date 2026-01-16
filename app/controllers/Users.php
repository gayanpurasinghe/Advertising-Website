<?php
class Users extends Controller
{
    public function __construct()
    {
        require_once '../app/models/User.php';
    }

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' => '',
            ];


            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            if (empty($data['username_err']) && empty($data['password_err'])) {

                $con = Database::connect();
                $loggedInUser = User::login($con, $data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $_SESSION['error'] = 'invalid_credentials';
                    $this->view('auth/login', $data);
                }
            } else {
                $_SESSION['error'] = 'empty_fields';
                $this->view('auth/login', $data);
            }

        } else {

            $data = [
                'username' => '',
                'password' => '',
                'username_err' => '',
                'password_err' => '',
            ];

            $this->view('auth/login', $data);
        }
    }

    public function createUserSession($user)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('location: ' . URLROOT);
    }

    public function logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        session_destroy();
        header('location: ' . URLROOT . '/users/login');
    }
}
