<?php
include("includes/db.php");

$response = array(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product-name'];
    $catId = $_POST['choose-category']; 

    // INSERT THE PRODUCT INTO DATABASE
    $sql = "INSERT INTO `product` (product_name, cat_id) VALUES (:productName, :catId)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productName', $productName, PDO::PARAM_STR);
    $stmt->bindParam(':catId', $catId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $lastInsertedId = $conn->lastInsertId();
        if ($lastInsertedId) {
            $response['status'] = "success";
            $response['message'] = "Product added successfully!";
        }
    } else {
        $response['status'] = "error";
        $response['message'] = "Error adding product: ";
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
