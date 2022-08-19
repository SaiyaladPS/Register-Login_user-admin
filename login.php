<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;600;700&display=swap');
     *{
        font-family: 'DynaPuff', cursive;
     }
</style>
</head>
<body>
<div class="container">
        <h1 class="text-center">Register Page</h1>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error'];
                        unset($_SESSION['error']);
                 ?>
            </div>
            <?php } ?>
        <form action="login_db.php" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>  
           <div class="form-group my-2 mx-2">
           <input type="submit" value="Login" class="btn btn-primary" name="submit">
            <input type="reset" value="Reset" class="btn btn-danger">
            <a href="register.php" class="btn btn-info mx-5">Register</a>
           </div>
        </form>
    </div>
</body>
</html>