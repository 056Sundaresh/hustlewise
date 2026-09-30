<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        echo "Upload error code: " . $_FILES['file']['error'];
    } else {
        echo "No file in request";
    }
} else {
    echo "Send a POST request";
}
