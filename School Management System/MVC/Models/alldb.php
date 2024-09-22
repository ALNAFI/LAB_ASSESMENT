<?php
require_once('db.php');
  
function auth($id,$pass)
{
	$conn=con();
	$sql="select * from admintable where Id='$id' and Pass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from emptable";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}


function edit($id1)
{
	$conn=con();
	$sql2="select * from emptable where id='$id1'";
	$edit=mysqli_query($conn,$sql2);
	return $edit;

}
function update($id,$name,$email,$salary)
{
	$conn=con();
	$sql2="update emptable set Name='$name', Email='$email', Salary='$salary' where Id='$id'";
	$update=mysqli_query($conn,$sql2);
	return $update;
}

?>