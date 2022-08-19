<?php
    session_start();
    include_once('conn.php');

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email)) {
            $_SESSION['error'] = "Empty Email";
            header("location: login.php");
        } else if (empty($password)) {
            $_SESSION['error'] = "Empty Password";
            header("location: login.php");
        } else {
            $passwordmd5 = md5($password);

            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwordmd5' ";
            $query = mysqli_query($conn,$sql);

            $result = mysqli_num_rows($query);

            if ($result) {           
                $row = mysqli_fetch_assoc($query);

                    if($row['satory'] == 'user') {
                        $_SESSION['user-login'] = $row['id'];
                        header("location: index.php");
                    }
                    if ($row['satory'] == 'admin') {
                        $_SESSION['admin-login'] = $row['id'];
                        header("location: admin.php");
                    }
            } else {
                $_SESSION['error'] = "Email and Password undefire";
                header("location: login.php");
            }
        }
    }

?>