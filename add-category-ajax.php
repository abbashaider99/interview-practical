<?php
include("includes/db.php");

$response = array(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['category-name'];

    // INSERT THE PRODUCT INTO DATABASE
    $sql = "INSERT INTO category (cat_name) VALUES (:catName)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':catName', $catName);

    if ($stmt->execute()) {
        $lastInsertedId = $conn->lastInsertId();
        if ($lastInsertedId) {
            $response['status'] = "success";
            $response['message'] = "Category added successfully!";
        }
    } else {
        $response['status'] = "error";
        $response['message'] = "Error adding product: ";
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
