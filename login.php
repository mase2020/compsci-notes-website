<?php
session_start();
$title = 'Login';
include "header.php"; ?>


<!-- the code below will give the page a responsive design adapting to different web sizes. -->
<div class="container">


    <div class="row justify-content-center align-items-center ">

        <div class="col-lg-6">
            <?php
            // if there is an error in the registration the following validation will be displayed with css formatted user feedback.
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "fieldsincomplete") {
                    echo '<p class = "empty" >Please fill in all fields!</p>';
                } else if ($_GET['error'] == "incorrectpassword") {
                    echo '<p class = "empty">Username and password do not match, please try again!</p>';
                } else if ($_GET['error'] == "username") {
                    echo '<p class = "empty">Username not found, please try again!</p>';
                } else if (isset($_GET['login'])) {
                    if ($_GET['login'] == "success") {
                        echo '<p class = "successful">You have successfully logged in! </p>';
                    }
                }
            }
            ?>
            <!-- form for login -->
            <form class="formlayout" action="app2.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:<span class="requiredstar">*</span></label>
                    <input class="form-control" type="text" placeholder="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="requiredstar">*</span></label>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Login" name="login-button" class="btn btn-block btn-primary">
                </div>


            </form>
            <p class="bottompage"> Not yet registered? <a href="registration.php"><Strong>Sign Up</Strong></a></p>

        </div>


    </div>
</div>

<?php include "footer.php" ?>