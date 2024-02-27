function validateForm() {
    var fullName = document.getElementById("full-name").value.trim();
    var userName = document.getElementById("user-name").value.trim();
    var shift = document.getElementById("shift").value.trim();
    var department = document.getElementById("department").value.trim();
    var password = document.getElementById("password").value.trim();

    // Check if any field is empty
    if (fullName === "" || userName === "" || shift === "Select the Shift" || department === "Select the Department" || password === "") {
        alert("All fields are required");
        return false;
    }

    // Form is valid
    return true;
}