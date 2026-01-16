<?php
class Pages extends Controller
{
    public function __construct()
    {
        require_once '../app/models/Advertisement.php';
    }

    public function index()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $currentUserId = $_SESSION['user_id'] ?? null;
        $ads = [];

        if ($currentUserId) {
            $con = Database::connect();
            $ads = Advertisement::getOthersAds($con, $currentUserId);
        }

        $data = [
            'title' => 'BuySel.lk',
            'ads' => $ads
        ];

        $this->view('pages/index', $data);
    }
}
