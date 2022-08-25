<?php
session_start();
if(empty($_SESSION['LOGIN']) || !isset($_SESSION['LOGIN'])){
    header('location: ./logn.php?msg=2');

}
?>