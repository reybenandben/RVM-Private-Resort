document.addEventListener("DOMContentLoaded", function() {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Get the buttons that open the modal
    var viewButtons = document.querySelectorAll(".btn.view");

    // When the user clicks the button, open the modal 
    viewButtons.forEach(function(button) {
        button.onclick = function() {
            document.getElementById("modal-id").innerText = "ID: " + this.getAttribute("data-id");
            document.getElementById("modal-name").innerText = "Name: " + this.getAttribute("data-name");
            document.getElementById("modal-date").innerText = "Issued Date: " + this.getAttribute("data-date");
            document.getElementById("modal-phone").innerText = "Phone Number: " + this.getAttribute("data-phone");
            document.getElementById("modal-email").innerText = "Email: " + this.getAttribute("data-email");
            document.getElementById("modal-message").innerText = "Message: " + this.getAttribute("data-message");
            modal.style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
