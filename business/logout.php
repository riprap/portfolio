<?php 
/*
    File Name: logout.php
    Name: Nolan Knill
    Web site name: Business Contacts List
    File Description: Ends the session if the user wants to logs out
*/

session_start();
session_destroy();
header("Location: index.php?logout=yes")
?>