// Function to update and persist the name
function updateName() {
  var newName = document.getElementById("userName").value;
  document.getElementById("name").innerText = newName;
  
  // Save the updated name to local storage
  localStorage.setItem("savedName", newName);
}

// Function to update and persist the email
function updateEmail() {
  var newEmail = document.getElementById("emailA").value;
  document.getElementById("email").innerHTML = "<b>" + newEmail + "</b>";
  
  // Save the updated email to local storage
  localStorage.setItem("savedEmail", newEmail);
}

// On page load, retrieve and display the saved values from local storage
document.addEventListener("DOMContentLoaded", function() {
  var savedName = localStorage.getItem("savedName");
  var savedEmail = localStorage.getItem("savedEmail");

  if (savedName) {
    document.getElementById("name").innerText = savedName;
  }

  if (savedEmail) {
    document.getElementById("email").innerHTML = "<b>" + savedEmail + "</b>";
  }
});

function downloadPDF() {
  var element = document.getElementById("stuff");

  html2pdf(element);
}