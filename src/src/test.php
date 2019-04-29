<?php 
session_start();

var_dump($_POST);

// include_once "include/header.php";
print_r($_SESSION);

$myPost = array_values($_POST);
echo $myPost[1];