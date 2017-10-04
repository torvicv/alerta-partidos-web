<?php
session_start();

session_unset();

session_destroy();

$newURL = "index.php";
header('Location: '.$newURL);


