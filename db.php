<?php
// start the database connection.
$db = mysqli_connect('fareham.city.ac.uk', 'adbd194','190053875','adbd194') ;
if ($db->connect_errno) {
    printf("Connection failed: %s\n", $db->connect_error);
    exit();
    } else {
    echo "Database connected successfully!";
    } 

    ?>