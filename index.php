<?php
    session_start();

    if (!isset($_SESSION['user-login'])) {
        $_SESSION['error'] = "Login your";
        header("location: login.php");
    }
    if (isset($_GET['excn'])) {
        session_destroy();
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ເວັບໄຊ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;600;700&display=swap');
     *{font-family: 'DynaPuff', cursive;
     }
</style>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Hello PHP</h1>
    <a href="index.php?excn=1" class="btn btn-danger">Exmtn</a>
    </div>
</body>
</html>