function validateForm() {
    var deptNum = document.getElementById("dept-num").value;
    var password = document.getElementById("password").value;
    if (deptNum.trim() === "" || password.trim() === "") {
        alert("Both Department Number and Password are required.");
        return false;
    }
    // Check department number format
    var deptNumPattern = /^\d{2}-[A-Z]{3}-\d{3}$/; // Matches format "21-UCS-008"
    if (!deptNumPattern.test(deptNum)) {
        alert("Department number must be in the format '21-UCS-008'");
        return false;
    }
    return true;
}
