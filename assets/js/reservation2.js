let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

function buildCalendar(month, year) {
    let firstDayOfMonth = new Date(year, month, 1).getDay();
    let numberDays = new Date(year, month + 1, 0).getDate();

    let calendar = "<table>";
    calendar += `<caption>${months[month]} ${year}</caption>`;
    calendar += "<tr>";

    daysOfWeek.forEach(day => {
        calendar += `<th>${day}</th>`;
    });

    calendar += "</tr><tr>";

    for (let i = 0; i < firstDayOfMonth; i++) {
        calendar += "<td></td>";
    }

    for (let day = 1; day <= numberDays; day++) {
        if (firstDayOfMonth === 7) {
            firstDayOfMonth = 0;
            calendar += "</tr><tr>";
        }

        calendar += `<td>${day}</td>`;
        firstDayOfMonth++;
    }

    if (firstDayOfMonth !== 7) {
        let remainingDays = 7 - firstDayOfMonth;
        for (let i = 0; i < remainingDays; i++) {
            calendar += "<td></td>";
        }
    }

    calendar += "</tr></table>";
    document.getElementById('calendar').innerHTML = calendar;
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    buildCalendar(currentMonth, currentYear);
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    buildCalendar(currentMonth, currentYear);
}
// Ensure the calendar is built and displayed when the page loads
document.addEventListener("DOMContentLoaded", function() {
    buildCalendar(currentMonth, currentYear);
});

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
            xhr.open('POST', '../admin/database/insert_reservation.php', true);

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

document.addEventListener('DOMContentLoaded', (event) => {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('reservation_date').setAttribute('min', today);
});