function validateForm() {
    var courseId = document.getElementById("course").value.trim();
    var chapterNumber = document.getElementById("chapter-no").value.trim();
    var chapterName = document.getElementById("chapter-name").value.trim();
    

    // Check if any field is empty
    if (courseId === "Select the course" || chapterNumber === "Select the Chapter Number" || chapterName === "" ) {
        alert("All fields are required");
        return false;
    }

    // Form is valid
    return true;
}
