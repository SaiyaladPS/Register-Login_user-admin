<?php 
    session_start();
    require('conn.php');


    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        $gender = $_POST['gender'];

        if(empty($fname)) {
            $_SESSION['error'] = "not First name";
            header("location: register.php");            
        } else if (empty($lname)) {
            $_SESSION['error'] = "not Last name";
            header("location: register.php");
        } else if (empty($email)) {
            $_SESSION['error'] = "not Email";
            header("location: register.php");
        } else if (empty($password_1)) {
            $_SESSION['error'] = "not Password";
            header("location: register.php");
        } else if (empty($password_2)) {
            $_SESSION['error'] = "not Confirm Password";
            header("location: register.php");
        } else if ($password_1 != $password_2) {
            $_SESSION['error'] = "Password NO set";
            header("location: register.php");
        } else if (strlen($password_1) < 4 || strlen($password_1) >8) {
            $_SESSION['error'] = "Passowrd 4 and 8 number";
            header("location: register.php");
        } else if (empty($_POST['skills'])) {
            $_SESSION['error'] = "Skill your 1";
            header("location: register.php");
        } else if (empty($gender)) {
            $_SESSION['error'] = "not Gender";
            header("location: register.php");
        } else {
            $sql1 = "SELECT * FROM users WHERE email = '$email'";
            $query = mysqli_query($conn,$sql1);
            
            $row = mysqli_fetch_assoc($query);

            if ($row['email'] == $email) {
                $_SESSION['error'] = "Email collate Data";
                header("location: register.php");
            } else {
                $password = md5($password_1);
                $skill = implode("," , $_POST['skills']);
                
                $sqli = "INSERT INTO users(fname,lname,gender,skills,password,email,satory) 
                VALUES('$fname','$lname','$gender','$skill','$password','$email','user')";
                mysqli_query($conn,$sqli);
                $_SESSION['user-login'] = $email;
                header("location: index.php");
            } 
        }
                    
            
    }

?>