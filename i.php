<?php		

$view = empty($_GET['view']) ? 'index' : $_GET['view'];

include($_SERVER['DOCUMENT_ROOT'].'/view.php');

?>