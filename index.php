<?php
include("includes/header.php");
?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Categories</h4>

        <table class="table table-bordered border-primary" id="showProducts">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Products</th>
                    <th scope="col">Product Count</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT c.cat_name, GROUP_CONCAT(p.product_name SEPARATOR ', ') AS products, COUNT(p.id) AS pro_count
                        FROM category c
                        LEFT JOIN product p ON c.id = p.cat_id
                        GROUP BY c.id, c.cat_name
                        ORDER BY c.cat_name";

                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $result = $stmt->fetchAll();

                $rowNumber = 1;
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $rowNumber . "</th>";
                    echo "<td>" . $row['cat_name'] . "</td>";
                    echo "<td>" . $row['products'] . "</td>";
                    echo "<td>" . $row['pro_count'] . "</td>";
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
