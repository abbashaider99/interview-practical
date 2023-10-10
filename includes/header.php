<?php 
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebPatroid Practical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $('#showProducts').DataTable();
});
  </script>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">WebPatroid Practical</h3>
        
       <div class="mb-3">
              <a href="index.php">
  <button class="btn btn-sm btn-primary">
  <i class="fa fa-home" aria-hidden="true"></i>
 Home
</button>
</a>
<a href="view-products.php">
  <button class="btn btn-sm btn-warning">
  <i class="fa fa-eye" aria-hidden="true"></i>
 View Products
</button>
</a>
<a href="add-product.php">
  <button class="btn btn-sm btn-info">
  <i class="fa fa-plus" aria-hidden="true"></i>
 Add Product
</button>
</a>
<a href="add-category.php">
  <button class="btn btn-sm btn-success">
  <i class="fa fa-plus" aria-hidden="true"></i>
 Add Category
</button>
</a>
      </div>

