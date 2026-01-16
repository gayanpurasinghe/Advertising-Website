<?php
class Ads extends Controller
{
    public function __construct()
    {
        require_once '../app/models/Advertisement.php';
    }

    public function create()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header("Location: " . URLROOT . "/auth/login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $price = trim($_POST['price']);

            if (empty($title) || empty($description) || empty($price)) {
                $_SESSION['error'] = "All fields are required.";
                $this->view('ads/create_ad');
                exit();
            }

            if (!is_numeric($price) || $price <= 0) {
                $_SESSION['error'] = "Price must be a positive number.";
                $this->view('ads/create_ad');
                exit();
            }

            if (empty($_FILES['image']['name'])) {
                $_SESSION['error'] = "Please upload an image.";
                $this->view('ads/create_ad');
                exit();
            }

            $imagePath = '';

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

                $uploadDir = dirname(APPROOT) . '/public/uploads/';

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                $fileName = basename($_FILES['image']['name']);
                $uniqeName = time() . '_' . $fileName;
                $targetFile = $uploadDir . $uniqeName;

                $check = getimagesize($_FILES['image']['tmp_name']);
                if ($check === false) {
                    $_SESSION['error'] = "File is not an image.";
                    $this->view('ads/create_ad');
                    exit();
                }

                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    $imagePath = 'uploads/' . $uniqeName;
                } else {
                    $_SESSION['error'] = "Failed to upload image.";
                    $this->view('ads/create_ad');
                    exit();
                }
            }


            $con = Database::connect();

            $ad = new Advertisement($_SESSION['user_id'], $title, $description, $price, $imagePath);

            if ($ad->save($con)) {
                $_SESSION['success'] = "Ad created successfully.";
                header("Location: " . URLROOT . "/ads/create");
                exit();
            } else {
                $_SESSION['error'] = "Failed to create ad.";
                $this->view('ads/create_ad');
                exit();
            }

        } else {
            $this->view('ads/create_ad');
        }
    }
}
