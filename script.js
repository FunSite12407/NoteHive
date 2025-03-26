document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function(event) {
            const username = document.getElementById("loginUsername").value;
            const password = document.getElementById("loginPassword").value;

            if (!username || !password) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener("submit", function(event) {
            const username = document.getElementById("registerUsername").value;
            const password = document.getElementById("registerPassword").value;

            if (!username || !password) {
                alert("Please fill in all fields.");
                event.preventDefault();
            }
        });
    }
});
