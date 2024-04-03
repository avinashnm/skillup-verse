<?php
// Retrieve material ID from URL parameter
if(isset($_GET['material_id'])) {
    $material_id = $_GET['material_id'];

    // Determine material type
    $file_extension = pathinfo($material_id, PATHINFO_EXTENSION);

    // Set appropriate content type based on file extension
    switch($file_extension) {
        case 'pdf':
            header('Content-Type: application/pdf');
            break;
        case 'jpg':
        case 'jpeg':
            header('Content-Type: image/jpeg');
            break;
        // Add more cases for other file types as needed
        default:
            // Handle unsupported file types
            header('Content-Type: text/plain');
            break;
    }

    // Output material content
    readfile('materials/' . $material_id); // Assuming materials directory
} else {
    // Handle case when material ID is not provided
    echo 'Material ID not provided.';
}
?>
