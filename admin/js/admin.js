var modal = document.getElementById("messageModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the modal content elements
var modalName = document.getElementById("modalName");
var modalEmail = document.getElementById("modalEmail");
var modalDate = document.getElementById("modalDate");
var modalPhone = document.getElementById("modalPhone");
var modalMessage = document.getElementById("modalMessage");

// Function to open the modal with the user's details
function openModal(event) {
    var element = event.currentTarget;
    var name = element.getAttribute("data-name");
    var email = element.getAttribute("data-email");
    var date = element.getAttribute("data-date");
    var phone = element.getAttribute("data-phone");
    var message = element.getAttribute("data-message");

    modalName.textContent = "Name: " + name;
    modalEmail.textContent = "Email: " + email;
    modalDate.textContent = "Date: " + date;
    modalPhone.textContent = "Phone: " + phone;
    modalMessage.textContent = "Message: " + message;

    modal.style.display = "flex"; // Change to flex to center the modal
}

// Attach the click event listener to the "las la-eye" icon
var eyeIcons = document.getElementsByClassName("las la-eye");
for (var i = 0; i < eyeIcons.length; i++) {
    eyeIcons[i].addEventListener("click", openModal);
}

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