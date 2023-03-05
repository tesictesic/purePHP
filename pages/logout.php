<?php 
    session_start();

    session_destroy();
    header("Location:/moj sajt/index.php");
?>