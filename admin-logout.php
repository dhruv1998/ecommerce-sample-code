<?php
session_start();
$a=session_destroy();
if($a) {
header('location:adminlogin.php');
}
session_unset();
?>