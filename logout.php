<?php
// this will unset all sessions and cookies and log the user out.
session_start();
session_unset();
session_destroy();
setcookie('username', NULL, -1);
setcookie('userID', NULL, -1);
setcookie('fname', NULL, -1);
setcookie('lname', NULL, -1);
setcookie('logintime', NULL, -1);
header("Location: index.php?logout=true");
