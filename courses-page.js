// Get the modal element
var modal = document.getElementById('myModal');

// Get all enroll buttons
var enrollBtns = document.querySelectorAll('.enroll-btn');

// Get the close button element
var closeButton = document.querySelector('.close');

// Function to open the modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
  modal.style.display = 'none';
}

// When the user clicks on the close button, close the modal
closeButton.onclick = closeModal;

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
};

// Loop through each enroll button
enrollBtns.forEach(function(button, index) {
  // Add click event listener to each button
  button.addEventListener('click', function() {
    openModal();
    // Perform actions specific to each course (if needed)
    // Use 'index' to identify which course button was clicked
    console.log('Enroll button ' + (index + 1) + ' clicked');
  });
});
