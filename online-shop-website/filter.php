<?php

include('./phpfiles/security.php');

// Check the database connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Initialize the WHERE clause
$whereClause = " WHERE 1=1";

// Check if checkboxes are set
if (!empty($_POST['box2'])) {
    $whereClause .= " AND category = 'watches'";
}
if (!empty($_POST['box3'])) {
    $whereClause .= " AND category = 'perfumes'";
}
if (!empty($_POST['box4'])) {
    $whereClause .= " AND category = 'makeup'";
}

// SQL query
$sql = "SELECT * FROM products $whereClause";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row['name'];?></a>

            <div class="d-flex align-items-center justify-content-center mt-2">
                <h5><?php echo $row['price'];?></h5>
            </div>

            <form method="post" action="./cart.php">
                <input type="hidden" name="prod_id" value="<?php echo $row['ID']; ?>">
                <button type="submit" name="chart" class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-shopping-cart"></i></button>
            </form>

            <div class="d-flex align-items-center justify-content-center mb-1">
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small>(99)</small>

            </div>

        </div>
        </div>
        </div>
        <?php
    }
} else {
    echo "No products found";
}
$connection->close();
?>
