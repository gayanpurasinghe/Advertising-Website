document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("reportModal");
    var btn = document.getElementById("reportBtn");
    var span = document.getElementsByClassName("close")[0];

    if (btn) {
        btn.onclick = function () {
            const isUserLoggedIn = btn.getAttribute('data-user-logged-in') === 'true';
            const loginUrl = btn.getAttribute('data-login-url');

            if (!isUserLoggedIn) {
                if (loginUrl) {
                    window.location.href = loginUrl;
                }
            } else {
                if (modal) {
                    modal.style.display = "block";
                }
            }
        }
    }

    if (span) {
        span.onclick = function () {
            if (modal) {
                modal.style.display = "none";
            }
        }
    }

    window.onclick = function (event) {
        if (modal && event.target == modal) {
            modal.style.display = "none";
        }
    }
});
