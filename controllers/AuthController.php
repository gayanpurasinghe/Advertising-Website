<?php
require_once '../config/database.php';
require_once '../model/User.php';

class AuthController
{

    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($username) || empty($email) || empty($password)) {
                die("All fields are required.");
            }
            if (strlen($username) < 5) {
                die("Username must be at least 5 characters long.");
            }
            if (strlen($password) < 8) {
                die("Password must be at least 8 characters long.");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format.");
            }
            /*if($this->userModel->findByUsername($username)) {
                die("Username already exists.");
            }
            if($this->userModel->register($username, $email, $password)) {
                echo "Registration successful.";
            } else {
                die("Registration failed.");
            }*/
            $con = Database::connect();
            $user = new User($username, $email, $password);
            if ($user->save($con)) {
                echo "Registration successful.";
            } else {
                die("Registration failed.");
            }
        }
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                die("All fields are required.");
            }

            $con = Database::connect();
            $userData = User::login($con, $username, $password);
            if ($userData) {
                session_start();
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['username'] = $userData['username'];
                echo "Login successful.";
                header("Location: ../views/ads/view_ads.php");
            exit();
            } else {
                die("Invalid username or password.");
            }
        }
}

}
$controller = new AuthController();
if (isset($_GET['action']) && $_GET['action'] === 'register') {
    $controller->register();
}
if (isset($_GET['action']) && $_GET['action'] === 'login') {
    $controller->login();
}

?>