<?php
 error_reporting(1);
// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'bergshop';
$userdb = 'root';
$passdb = 'letmein';

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM `gds`";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
    $cols = $result->columnCount();           // Number of returned columns

    // echo 'Number of returned columns: '. $cols. '<br />';
    // Parse the result set
    foreach($result as $row) {
?>

<!-- DIV FOR A PRODUCT -->
<div class="product_container">
            <div id="<?= 'slidingProduct'.$row['id'] ?>" class="sliding_product">
            <img src="images/product.gif">
            <?= $row['name'] ?>
            <?= $row['price'] ?>
            </div>
                <a href="#" onclick="addToBasket(<?= $row['id'] ?>);return false;">
                <img src="images/basket.gif"></a>

                <div class="clear"></div>
        </div>
            <!-- END DIV FOR A PRODUCT -->

<?php

    }
  }

  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?> 
