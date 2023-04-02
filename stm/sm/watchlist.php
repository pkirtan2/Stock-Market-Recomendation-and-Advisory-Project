<?php
include "conn.php";
session_start();

if(isset($_SESSION['uid'])){
    header("Location: indexlogin.php");

}else{
   
    $p_id=$_SESSION['id'];
    $inwatch="INSERT into wlist(pid) values ('$p_id')";
    if(mysqli_query($conn,$inwatch)){
        echo 'inserted';
    }
}
?>
