<?php 
include('conn.php');
session_start();

if (isset($_SESSION['email'])) {
    echo ('Session activée !');
}

?>