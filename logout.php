<?php
    session_start();
    if($_SESSION['EMAIL']!=''){
        $_SESSION['EMAIL']="";
        session_destroy();
    }
    header('location: index.php');
?>