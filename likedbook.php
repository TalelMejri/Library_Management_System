<?php

session_start();
require_once("./classes/classes.php");
$admin=new user();
if(isset($_POST['like'])){
    extract($_POST);
    $admin->AddLikedBook($_SESSION['userid'],$idbook);
   
}
if(isset($_POST['liked'])){
    header("location:./allbook_foruser");
    exit;
}
else{
header("location:./profiluser");
exit;
}
?>