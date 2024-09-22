<?php
session_start();
require_once('../Models/alldb.php');
  
 if(isset($_GET['edit'])){
  $id1=$_GET['edit'];
 header("location:../Views/edit.php?id={$id1}");
 }
 if(isset($_GET['update']))
 {
  $id=$_GET['id'];
  $name=$_GET['name'];
  $email=$_GET['email'];
  $salary=$_GET['salary'];
  $res=update($id,$name,$email,$salary);
  if($res){
    header("location:../Views/home.php");
  }

  }
 
?>