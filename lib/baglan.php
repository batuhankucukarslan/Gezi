<?php 
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
try {
    $db = new PDO("mysql:host=localhost;dbname=mobil;charset=utf8", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}

?>