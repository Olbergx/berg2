<?php
 //error_reporting(1);
// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'bergshop';
$userdb = 'root';
$passdb = 'letmein';

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

if(!isset($_POST['productId']))exit;
if(isset($_POST['productId'])) {$productId=$_POST['productId'];} 

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM `gds` WHERE id=$productId";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
    $cols = $result->columnCount();           // Number of returned columns

    // echo 'Number of returned columns: '. $cols. '<br />';
    // Parse the result set
    foreach($result as $row) {


// if(!isset($_POST['productId']))exit;
// if(isset($_POST['productId'])) {$productId=$_POST['productId'];} 

echo $row['id'];
echo "|||";
echo $row['name'];
echo "|||";
echo $row['price'];


    }
  }

  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?> 