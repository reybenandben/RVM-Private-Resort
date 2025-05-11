document.addEventListener("DOMContentLoaded", function() {
    // Get all the eye icons
    const eyeIcons = document.querySelectorAll(".las.la-eye");
  
    // Loop through each eye icon and attach a click event listener
    eyeIcons.forEach(icon => {
      icon.addEventListener("click", function() {
        // Get the relevant reservation details
        const row = this.closest("tr");
        const firstName = row.querySelector(".client-info h4").innerText;
        const lastName = row.querySelector(".client-info small").innerText;
        const email = row.querySelector(".client-info small").innerText;
        const reservationDate = row.querySelectorAll("td")[3].innerText;
        const Type = "DAY TIME (9am-5pm)";
        const additionals = "Videoke, Gas Stove, Room A";
  
        // Populate the modal with the reservation details
        const modal = document.getElementById("myModal");
        const reservationDetails = document.getElementById("reservationDetails");
        reservationDetails.innerHTML = `
          <p><strong>First Name:</strong> ${firstName}</p>
          <p><strong>Last Name:</strong> ${lastName}</p>
          <p><strong>Email:</strong> ${email}</p>
          <p><strong>Reservation Date:</strong> ${reservationDate}</p>
          <p><strong>Accommodation Type:</strong> ${Type}</p>
          <p><strong>Additionals:</strong> ${additionals}</p>
          <!-- Add more details as needed -->
        `;
  
        // Display the modal
        modal.style.display = "block";
      });
    });
  
    // Close the modal when the close button or outside the modal is clicked
    const modal = document.getElementById("myModal");
    const closeButton = document.querySelector(".close");
    window.onclick = function(event) {
      if (event.target == modal || event.target == closeButton) {
        modal.style.display = "none";
      }
    };
  });

  var addRecordModal = document.getElementById("addRecordModal");
  var addRecordBtn = document.getElementById("addRecordBtn");
  var closeBtn = document.querySelector("#addRecordModal .close");
  var modalContent = document.querySelector("#addRecordModal .modal-content");
  
  // Show modal
  addRecordBtn.onclick = function() {
      addRecordModal.style.display = "block";
  }
  
  // Close modal when 'X' button is clicked
  closeBtn.onclick = function() {
      addRecordModal.style.display = "none";
  }
  
  // Close modal when clicked outside of it
  window.onclick = function(event) {
      if (event.target == addRecordModal) {
          addRecordModal.style.display = "none";
      }
  }

// JavaScript for form submission


document.addEventListener('DOMContentLoaded', (event) => {
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('reservation_date').setAttribute('min', today);
});


document.querySelectorAll('.view').forEach(item => {
  item.addEventListener('click', event => {
      const id = event.target.getAttribute('data-id');
      const firstName = event.target.getAttribute('data-firstName');
      const lastName = event.target.getAttribute('data-lastName');
      const phoneNumber = event.target.getAttribute('data-phoneNumber');
      const email = event.target.getAttribute('data-email');
      const type = event.target.getAttribute('data-type');
      const reservationDate = event.target.getAttribute('data-reservationDate');
      const additionals = event.target.getAttribute('data-additionals');
      const status = event.target.getAttribute('data-status');

      const modalContent = document.getElementById('reservationDetails');
      modalContent.innerHTML = `
      <form action="database/update_status.php" method="post">
          <p><strong>ID:</strong> ${id}</p>
          <p><strong>First Name:</strong> ${firstName}</p>
          <p><strong>Last Name:</strong> ${lastName}</p>
          <p><strong>Phone Number:</strong> ${phoneNumber}</p>
          <p><strong>Email:</strong> ${email}</p>
          <p><strong>Type:</strong> ${type}</p>
          <p><strong>Reservation Date:</strong> ${reservationDate}</p>
          <p><strong>Additionals:</strong> ${additionals}</p>
          <p><strong>Status:</strong> ${status}</p>
          <input type="hidden" name="id" value="${id}">
          <input type="hidden" name="status" value="Reserved">
          <button type="submit">Reserve Now</button>
      </form>
      `;

      const modal = document.getElementById('myModal');
      modal.style.display = "block";
  });
});

document.querySelector('.close').addEventListener('click', () => {
  const modal = document.getElementById('myModal');
  modal.style.display = "none";
});
