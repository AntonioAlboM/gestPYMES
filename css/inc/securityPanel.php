<?php
session_start();
error_reporting(E_PARSE);
if (isset($_SESSION['empresa'])) {
    
} else {
    header("Location: index.php");
    exit();
}