<?php 
session_start();
unset($_SESSION['client_id']);
unset($_SESSION['name']);
session_destroy();
header('location:index.html');

?>