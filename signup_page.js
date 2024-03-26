function validateForm() {
    var fullName = document.getElementById("fullname").value;
    var deptNum = document.getElementById("dept-num").value;
    var email = document.getElementById("mail").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmpassword").value;

    // Check if any of the fields are empty
    if (
      fullName.trim() === "" ||
      deptNum.trim() === "" ||
      email.trim() === "" ||
      password.trim() === "" ||
      confirmPassword.trim() === ""
    ) {
      alert("All fields are required");
      return false;
    }

    // Check department number format
    var deptNumPattern = /^\d{2}-[A-Z]{3}-\d{3}$/; // Matches format "21-UCS-008"
    if (!deptNumPattern.test(deptNum)) {
        alert("Department number must be in the format '21-UCS-008'");
        return false;
    }

    // Check if email contains "@loyolacollege.edu"
   if (email.indexOf("@loyolacollege.edu") === -1) {
       alert("Register with your institutional email id. \nFor example: 21ucs008@loyolacollege.edu");
       return false;
   }

   // Check if email matches the format based on department number
     var emailFormat = deptNum.replace(/-/g, "").toLowerCase() + "@loyolacollege.edu";
     if (email !== emailFormat) {
         alert("Use your own institutional email id");
         return false;
     }



    // If all checks pass, the form will submit
    return true;
}
