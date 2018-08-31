<?

/* 	Input to this file $_POST['productIdToRemove'] 

This file only updates the database, i.e. remove a product from the shopping basket. It outputs the string "OK" if everything is correct.
*/

/* This is code only for the demo - You would most likely use a database for this */


// if(!isset($_POST['productIdToRemove']))die("Not OK");	/* No product id sent as input to this file */

// Add your db queries here

// echo "OK";



 //error_reporting(1);
// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'goods';
$userdb = 'root';
$passdb = '';

try {
  // Connect and create the PDO object
  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8


if(!isset($_POST['productIdToRemove']))die("Not OK");	/* No product id sent as input to this file */
if(isset($_POST['productIdToRemove'])) {$productIdToRemove=$_POST['productIdToRemove'];} 

// if(!isset($_POST['productId']))exit;
// if(isset($_POST['productId'])) {$productId=$_POST['productId'];} 

  // Define and perform the SQL SELECT query
  $sql = "SELECT * FROM `gds` WHERE id=$productIdToRemove";
  $result = $conn->query($sql);

  // If the SQL query is succesfully performed ($result not false)
  if($result !== false) {
    $cols = $result->columnCount();           // Number of returned columns

    // echo 'Number of returned columns: '. $cols. '<br />';
    // Parse the result set
    foreach($result as $row) {


// if(!isset($_POST['productId']))exit;
// if(isset($_POST['productId'])) {$productId=$_POST['productId'];} 

// echo $row['id'];
// echo "|||";
// echo $row['name'];
// echo "|||";
// echo $row['price'];

    	echo "OK";


    }
  }

  $conn = null;        // Disconnect
}
catch(PDOException $e) {
  echo $e->getMessage();
}






?>