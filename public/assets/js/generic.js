function confirmLogout() {
    showConfirm("Confirm Logout", "Are you sure you want to log out?", function () {
        window.location.href = window.URLROOT + "/../app/views/auth/logout.php";
    });
}
