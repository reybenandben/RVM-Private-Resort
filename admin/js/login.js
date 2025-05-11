document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        const errorDiv = document.getElementById("error");
        
        
        if (username === "RVM2286" && password === "223415") {
            window.location.href = "calendar.php";
        } else {
            errorDiv.textContent = "Invalid username or password.";
        }
    });
});