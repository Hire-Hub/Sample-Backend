<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'signupforms';

    $con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
    if ($con) {
        echo 'successfully connected';
    }
    else {
        die(mysqli_error($con));
    }
?>