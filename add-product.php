<?php
include("includes/header.php");
?>
<div class="card table-bordered border-primary p-3">
  <div class="card-body">

    <h4 class="card-title">Add Product</h4>

    <form method="POST" id="product-form">
        <div class="mb-3">
            <label for="product-name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="product-name" name="product-name">
        </div>
        <div class="mb-3">
            <label for="choose-category" class="form-label">Choose Category:</label>
            <select class="form-select" id="choose-category" name="choose-category">
                <option selected disabled>Select Category</option>
                <?php
                $sql = "SELECT id, cat_name FROM category";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $categories = $stmt->fetchAll();

                foreach ($categories as $category) {
                    echo "<option value='" . $category['id'] . "'>" . $category['cat_name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="button" class="btn btn-primary" id="add-product">Add Product</button>
    </form>
</div>
</div>

<script>
$(document).ready(function() {
    $("#add-product").click(function(event) {
        event.preventDefault();
        var formData = $("#product-form").serialize();


        $.ajax({
            type: "POST",
            url: "add-product-ajax.php",
            data: formData,
            
            beforeSend: function(){
              $("#add-product").html("Adding...");
            },
            success: function(response) {

                if (response.status === "success") {
                    alert("Product added successfully");
                } else {
                    alert("Product added successfully");
                }
              $("#add-product").html("Add Product");
              setTimeout(() => {
    window.location.href = 'index.php';
}, 200);

            }
        });
    });
});

</script>

</body>
</html>