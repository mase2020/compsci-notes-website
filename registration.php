<?php
session_start();
$title = 'Registration';

include "header.php"; ?>
<!-- the code below will give the page a responsive design adapting to different web sizes. -->
<div class="container">

    <div class="row justify-content-center align-items-center ">

        <div class="col-lg-8">
            <!-- code adapted from Youtube tutorial
                author: channel: mmtuts
                link: https://www.youtube.com/watch?v=LC9GaXkdxF8&t=1s
                date:10/10/2018
                title: 
                How To Create A Login System In PHP For Beginners | Procedural MySQLi | 2018 PHP Tutorial | mmtuts -->
            <?php
            // if there is an error in the registration the following validation will be displayed with css formatted user feedback.
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "empty") {
                    echo '<p class = "empty" >Please fill in all fields!</p>';
                } else if ($_GET['error'] == "invalidemail") {
                    echo '<p class = "empty">Invalid Email!</p>';
                } else if ($_GET['error'] == "invalidusername") {
                    echo '<p class = "empty">Invalid username!</p>';
                } else if ($_GET['error'] == "passworderror") {
                    echo '<p class = "empty">Passwords do not match!</p>';
                } else if ($_GET['error'] == "usernametaken") {
                    echo '<p class = "empty">username has already been taken!</p>';
                }
            } else if (isset($_GET['registration'])) {
                if ($_GET['registration'] == "success") {
                    echo '<p class = "successful">You have successfully registered! <a href="login.php"><Strong>Log in</Strong></a></p></p>';
                }
            }
            ?>
            <!-- form for registration -->
            <form class="formlayout" action="app1.php" method="POST">
                <div class="form-group">
                    <label for="fname">First Name:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="text" placeholder="First Name" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="text" placeholder="Last Name" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="username">Username:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="text" placeholder="User Name" name="username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="new-password" required>
                </div>

                <div class="form-group">
                    <label for="confirmpassword">Confirm Password:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input class="form-control" type="date" placeholder="Date of Birth" name="dob">
                </div>


                <div class="form-group">
                    <input type="submit" value="Register" name="register" class="btn btn-block btn-primary">
                </div>


            </form>
            <p class="bottompage">Already registered? <a href="login.php"><Strong>Log in</Strong></a></p>

        </div>
    </div>


</div>

<?php include "footer.php"; ?>