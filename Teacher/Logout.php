<?php

session_start();
session_destroy();
header('location:Teacher_Dashboard.php');

?>