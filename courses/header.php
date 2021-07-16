<!-- <?php
        session_start();
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- link to bootstrap 4.0 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- link to font awesome cdn
         https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- link to css file  -->
    <link rel="stylesheet" type="text/css" href="../../app.css">
</head>
<!-- adapted nav bar from bootstrap 4.0 documentation.
link: https://getbootstrap.com/docs/4.0/components/navbar/ -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?php echo $title ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            // if logged in, then access to the course pages is granted.
            if (isset($_COOKIE['userID'])) : ?>
                <!-- if logged in, name will be displayed in the navbar -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modules
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../../WebDevelopment.php">Web Development</a>
                        <a class="dropdown-item" href="../../DiscreteMaths.php">Discrete Maths</a>
                        <a class="dropdown-item" href="../../SystemsArchitecture.php">Systems Architecture</a>
                        <a class="dropdown-item" href="../../Java.php">Java</a>
                        <a class="dropdown-item" href="../../Algorithms.php">Algorithms</a>
                        <a class="dropdown-item" href="../../OS.php">Operating Systems</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../index.php">Home</a>
                    </div>
                </li>

            <?php endif ?>

        </ul>
        <ul class="navbar-nav ml-auto">
            <?php
            if (isset($_COOKIE['userID'])) { ?>
                <!-- navbar menu will change depending on the login status -->
                <li class="nav-item">
                    <p class="nav-link"> Welcome <strong> <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?></strong></p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../logout.php">Logout</a>
                </li>
        </ul>

    <?php
            } else { ?>

        <li class="nav-item">
            <a class="nav-link" href="../../login.php">Login </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../../registration.php">Signup</a>
        </li>
        </ul>

    <?php }  ?>
    </div>


</nav>

<body>
    <!-- setting out the header -->
    <header id="header" class="jumbotron text-center">
        <!-- // what to display depending on what page -->
        <?php
        if ($title === 'Computer Science') {
            $heading = ' BSc Computer Science Course ';
            $description = 'This website will allow you to access year one materials from our computer science program';
        } else if ($title === 'Login') {
            $heading = 'Account Log in';
            $description = 'Log in to your account in order to access course materials';
            $heading = 'Account Log in';
        } else if ($title === 'Registration') {
            $heading = 'Account Registration ';
            $description = 'Register here in order to access course material';
        } else {
            $heading = 'Welcome to ' . $title;
            $description = "Access all material with regards to  " . $title . " here!";
        }

        ?>
        <h1 class="display-4"><?php echo $heading ?></h1>
        <p id="description"><?php echo $description ?></p>

        <!-- if the user logs in print information about them -->
        <?php
        if (!isset($_COOKIE['userID'])) {
            // when on login or registration page, the login and registration buttons would not show.
            if ($title === 'Login' || $title === 'Registration') {
            } else { ?>

                <h3 class=loggedOut> <?php echo 'You are currently logged out!' ?></h3>;
                <a class="btn btn-success " href="../../registration.php">Sign up</a>
                <a class="btn btn-primary " href="../../login.php">Login</a>

            <?php }
        } else { ?>
            <!-- last logged in data is displayed. -->
            <h3 class="loggedIn"> Welcome <strong> <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?></strong></h3>

            <a class="btn btn-danger " href="../../logout.php">Log Out</a>

        <?php } ?>

        <div id="headerAttribution">
            Image by <a href="https://pixabay.com/users/sumanley-2265479/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3228704">Sumanley xulx</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3228704">Pixabay</a>
        </div>
    </header>