﻿<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>



   

<form action="" method="post">
    <br /><br />
    <input type="text" name="login">
    <br /><br />
    <input type="password" name="password">
    <br /><br />
    <div class="g-recaptcha" data-sitekey="6LfAs2AUAAAAAHssICeXdYo7B7ktHhnujNHXpaNf"></div>
    <!--блок кнопки reCapcha-->
    <br /><br />
    <button>Отправить</button>
</form>





<?php
if (isset($_POST['g-recaptcha-response'])) {
    $url_to_google_api = "https://www.google.com/recaptcha/api/siteverify";
    $secret_key = '6LfAs2AUAAAAAIZoVUMiw8Tva_nAQb_z_XduS3W9';
    $query = $url_to_google_api . '?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];
    $data = json_decode(file_get_contents($query));
    if ($data->success) {
        // Продолжаем работать с данными для авторизации из POST массива

                      echo "<br />"; 
                      print_r($data);
                      echo "<br />"; 
                      <br />
                      
                      echo "Молодец! Авторизация пройдена!!!"; 

    } else {
        exit('Извините но похоже вы робот \(0_0)/');
    }
} else {
    exit('Вы не прошли валидацию reCaptcha');
}
?>



</body>
</html>