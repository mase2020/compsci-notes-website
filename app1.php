<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {

        require 'db.php';



        $username = $_POST['username'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        // form validation
        // code adapted from Youtube tutorial
        // author: channel: mmtuts
        // link: https://www.youtube.com/watch?v=LC9GaXkdxF8&t=1s
        // date:10/10/2018
        // title: 
        // How To Create A Login System In PHP For Beginners | Procedural MySQLi | 2018 PHP Tutorial | mmtuts 
        if (empty($username) || empty($email) || empty($password) || empty($fname) || empty($lname) || empty($confirmpassword)) {
            header("Location: registration.php?error=empty&username=" . $username . "&email=" . $email);
            exit();
            //checking for a valid email input.
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: registration.php?error=invalidemail&=" . $email);
            exit();
        //using regex so valid characters are typed for username.
        } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: registration.php?error=invalidusername&=" . $username);
            exit();
        } else if ($password !== $confirmpassword) {
            header("Location: registration.php?error=passworderror&username&=" . $username);
            exit();
        } else {

            //prepared statements is used in order for a user not to gain access to the database and change it.
            $sql = "SELECT username FROM user WHERE username =?";
            $stmt = mysqli_stmt_init($db);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: registration.php?error=databaseerror");
                exit();
            } else {
                //'s' represents how many strings of information, if 3, then 'sss'.
                // s for string, i for integer, d for double, b for boolean.
                mysqli_stmt_bind_param($stmt, "s", $username);
                // checks in the database.
                mysqli_stmt_execute($stmt);

                mysqli_stmt_store_result($stmt);
                //check how many rows have the data.
                $result = mysqli_stmt_num_rows($stmt);
                //if more than one, then apply error, as username has already been used.
                if ($result > 0) {
                    header("Location: registration.php?error=usernametaken&=" . $username);
                    exit();
                }
                //if username not found in the database, then data can be stored.
                else {
                    $sql = "INSERT INTO `user`(`username`, `email`, `password`,`firstName`, `lastName`)
                            VALUES (?,?,?,?,?)"; // the use of prepared statements help with security.
                    $stmt = mysqli_stmt_init($db);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: registration.php?error=sqlerror");
                        exit();
                    } else {
                        // salt the password in order to add extra encryption.
                        $salt = 'hfejiwenssnchyrgrjeks';
                        $password = $password.$salt;
                        //hash the password with the md5() function, for security purposes.
                        $password = md5($password);
                        // another method of hashing, can be used with php 5.0 and later.
                        // password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $password, $fname, $lname);
                        mysqli_stmt_execute($stmt);
                        //add data into the logintime table recording the login time.
                        $dateNow = date("Y-m-d H:i:s");
                        $date = "INSERT INTO `loginTime`(`login`, `username_fk`) VALUES ('$dateNow','$username')";
                        mysqli_query($db, $date);
                        header("Location: registration.php?registration=success");
                        exit();
                    }
                }
            }
        }
        // close the database in order to save resources.
        mysqli_stmt_close($stmt);
        mysqli_close($db);
    }
    // will need to signup by using the registration page. can't access this page unless the registration button is used.
    else {
        header("Location: registration.php");
        exit();
    }
}
