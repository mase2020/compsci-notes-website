<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['login-button'])) {

    require 'db.php';

    
        $username = $_POST['username'];

        $password = $_POST['password'];
    
  

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=fieldsincomplete");
        exit();
    } else {
// logic to retrieve data from multiple tables.
        $sql = "SELECT user . * , loginTime.login
        FROM user
        JOIN loginTime ON user.username = loginTime.username_fk
        where username = '$username'; ";
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        $dateNow = date("Y-m-d H:i:s");
        $date = "UPDATE `loginTime` SET `login`='$dateNow' WHERE `username_fk` = '$username'";
        mysqli_query($db, $date) or die(mysqli_error($db));
       

        if ($num_row >= 1) {
            $salt = 'hfejiwenssnchyrgrjeks';
            $password = $password.$salt;
            // hash password in order to match the database.
            $password = md5($password);
            if ($password == $row['password']) {
                session_start();
                $_SESSION['logintime'] = $row['login'];
                // setcookie('logintime', $row['login'], time()+ 60*20); 
                setcookie('userID', $row['username'], time()+ 60*20); 
                // $_SESSION['userID'] = true;
                // setcookie('username', $row['username'], time()+ 60*20);
                // setcookie('fname', $row['firstName'], time()+ 60*20);
                // setcookie('lname', $row['lastName'], time()+ 60*20);
                $_SESSION['username'] = $row['username'];
                $_SESSION['fname'] = $row['firstName'];
                $_SESSION['lname'] = $row['lastName'];
                echo 'true';
                header("Location: index.php?login=success");
            } else {

                echo 'false';
                header("Location: login.php?error=incorrectpassword&=");
            }
        } else {

            echo 'false';
            header("Location: login.php?error=username&notfound");
        }
    }
}
}


