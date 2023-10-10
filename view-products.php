<?php
include("includes/header.php");
?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Products List</h4>

        <table class="table table-bordered border-primary" id="showProducts">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Product</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT c.cat_name, p.product_name FROM product p JOIN category c ON c.id = p.cat_id";

                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $result = $stmt->fetchAll();

                $rowNumber = 1;
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $rowNumber . "</th>";
                    echo "<td>" . $row['cat_name'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "</tr>";
                    $rowNumber++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
