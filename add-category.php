<?php
include("includes/header.php");
?>
        <div class="card table-bordered border-primary">
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
              
                <form method="POST" id="category-form">
                    <div class="mb-3">
                        <label for="category-name" class="form-label">Category Name:</label>
                        <input type="text" class="form-control" id="category-name" name="category-name">
                    </div>
                    <button type="button" class="btn btn-primary" id="add-category">Add Category</button>
                </form>
            </div>
        </div>
    </div>

<script>
$(document).ready(function() {
    $("#add-category").click(function(event) {
        event.preventDefault();
        var formData = $("#category-form").serialize();


        $.ajax({
            type: "POST",
            url: "add-category-ajax.php",
            data: formData,
            
            beforeSend: function(){
              $("#add-product").html("Adding...");
            },
            success: function(response) {

                if (response.status === "success") {
                    alert("Category added successfully");
                } else {
                    alert("Something went wrong!");
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