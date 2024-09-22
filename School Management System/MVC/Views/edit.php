<?php
require_once('../Controllers/homeController.php');

if(empty($_SESSION['id']))
{
   header("location:log.php");
}


$id = $_GET['id'];

$res=edit($id);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <h1>Update Page</h1>
<br>



<?php while($r=$res->fetch_assoc()) { ?>
  <form method="get" action="../Controllers/homeController.php">

   ID: <input type="text" name="id" value="<?php echo $r['Id']?>"readonly><br>
   Name: <input type="text" name="name" value="<?php echo $r['Name']?>"><br>
   Email: <input type="text" name="email" value="<?php echo $r['Email']?>"><br>
   Salary: <input type="text" name="salary" value="<?php echo $r['Salary']?>"><br>
 
   <button name="update">Update</button><br>
   </form>
   <?php } ?>
    

  <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>