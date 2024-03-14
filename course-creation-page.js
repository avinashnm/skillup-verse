function validateForm() {
    var courseId = document.getElementById("course-id").value.trim();
    var courseTitle = document.getElementById("course-title").value.trim();
    var category = document.getElementById("category").value.trim();
    var semester = document.getElementById("semester").value.trim();
    var courseDescription = document.getElementById("course-description").value.trim();

    // Check if any field is empty
    if (courseId === "" || courseTitle === "" || category === "Select the course category" || semester === "Select the Semester" || courseDescription === "" || department === "Select the Department" || instructor === "") {
        alert("All fields are required");
        return false;
    }

    // Validate course ID format
    var courseIdPattern = /^[a-zA-Z]{3}\s\d{4}$/;
    if (!courseIdPattern.test(courseId)) {
        alert("Enter a valid course id. eg: 'UCS 1506'");
        return false;
    }

    // Form is valid
    return true;
}
