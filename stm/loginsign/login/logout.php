<?php
    include "{$hostname}/stm/sm/indexlogin.php";
     include "conn.php";
     session_start();
     session_unset();
     session_destroy();
     header("Location: login.php")
?>