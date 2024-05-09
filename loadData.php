<?php
if (isset($_GET['fileName'])) {
    $fileName = preg_replace('/[^a-z0-9_\-]/i', '_', $_GET['fileName']); // Sanitize file name
    $filePath = "data/" . $fileName . ".json";

    if (file_exists($filePath)) {
        $data = file_get_contents($filePath);
        echo $data;
    } else {
        echo json_encode(["error" => "File not found"]);
    }
} else {
    echo json_encode(["error" => "No fileName provided"]);
}
?>