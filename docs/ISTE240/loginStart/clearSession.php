<?php
    session_name("aaron");
    session_start();
    session_destroy();
    header("Location: index.php");
?>
