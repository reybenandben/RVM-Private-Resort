document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const confirmationModal = document.getElementById("confirmationModal");
    const thankYouModal = document.getElementById("thankYouModal");
    const modalDetails = document.getElementById("modalDetails");
    const confirmButton = document.getElementById("confirmButton");
    const cancelButton = document.getElementById("cancelButton");
    const closeButton = document.getElementsByClassName("close")[0];

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // Validate all required fields
        if (!form.checkValidity()) {
            alert("Please fill out all required fields.");
            return;
        }

        // Collect form data
        const formData = new FormData(form);
        let confirmationMessage = "<br><p>Please confirm your message details:</p><ul><br>";
        
        formData.forEach((value, key) => {
            confirmationMessage += `<li>${key.replace('_', ' ')}:     ${value}</li>`;
        });
        confirmationMessage += "</ul>";

        // Show confirmation dialog with details
        modalDetails.innerHTML = confirmationMessage;
        confirmationModal.style.display = "block";

        confirmButton.onclick = function() {
            // Hide the confirmation modal
            confirmationModal.style.display = "none";

            // Create a new XMLHttpRequest object
            const xhr = new XMLHttpRequest();


            thankYouModal.style.display = "block";
            setTimeout(function() {
                window.location.href = "../homepage.php";
            }, 3000);  
            xhr.open('POST', '../admin/database/insertmess.php', true);

            // Set the request header
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Convert form data to URL encoded format
            const encodedFormData = new URLSearchParams(formData).toString();

            // Send the form data to the PHP script
            xhr.send(encodedFormData);
        }
    });

    // When the user clicks on <span> (x) or Cancel button, close the modal
    closeButton.onclick = cancelButton.onclick = function() {
        confirmationModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == confirmationModal) {
            confirmationModal.style.display = "none";
        }
    }
});