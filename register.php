<?php
    session_start();
    require('conn.php');

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
        <form action="register_db.php" method="post">
            <div class="form-group my-2">
                <label for="" class="form-label">Frist Name</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group my-2">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password_1" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="password_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <div class="input-group-text mb-3">
                Male<input class="form-check-input mt-0" type="radio" value="Male" aria-label="Radio button for following text input" name="gender">
                    </div>
                <div class="input-group-text">
                Girl<input class="form-check-input mt-0" type="radio" value="Girl" aria-label="Radio button for following text input" name="gender">
                    </div>
            </div>
            <div class="form-group mt-2">
                <label for="" class="form-label">Skill</label>
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="JAVA">JAVA
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="PHP">PHP
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="HTML">HTML
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="CSS">CSS
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="C">C
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="C++">C++
                <input type="checkbox" name="skills[]" id="" class="mx-2" value="C#">C#
            </div>
           <div class="form-group my-2 mx-2">
           <input type="submit" value="Register" class="btn btn-primary" name="submit">
            <input type="reset" value="Reset" class="btn btn-danger">
            <a href="login.php" class="btn btn-info mx-5">Login</a>
           </div>
        </form>
    </div>
</body>
</html>