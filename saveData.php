<?php
// Check if the request contains data
if (isset($_POST['data']) && isset($_POST['fileName'])) {
    $fileName = preg_replace('/[^a-z0-9_\-]/i', '_', $_POST['fileName']); // Sanitize file name
    $data = $_POST['data'];
    $dirPath = "data"; // Directory path
    $filePath = $dirPath . "/" . $fileName . ".json";

    // Check if the directory exists, if not create it
    if (!file_exists($dirPath)) {
        mkdir($dirPath, 0777, true); // Create the directory with read/write/execute permissions
    }

    // Save the data to a file
    if (file_put_contents($filePath, $data) !== false) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Failed to save data"]);
    }
} else {
    echo json_encode(["error" => "No data or fileName provided"]);
}
?>
