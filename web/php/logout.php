<?php
session_start();
session_unset();
include 'connection.php';
echo "<script>window.location='../index.php';</script>";
?>
