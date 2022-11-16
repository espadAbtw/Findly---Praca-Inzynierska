<?php
session_start();
unset($_SESSION['unique_id']);
header('Location: ../index.php');
?>