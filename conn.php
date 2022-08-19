<?php
    $server = "localhost";
    $usrname = "root";
    $password = "root";
    $dbname = "db_login";
    
    $conn = mysqli_connect($server,$usrname,$password,$dbname);

    if (!$conn) {
        die("ມີຂໍ້ຜິດພາດ") . mysqli_connect_error();
    } else {
        //  echo "ເຊືອມຕໍ່ແລ້ວ";
    }

?>