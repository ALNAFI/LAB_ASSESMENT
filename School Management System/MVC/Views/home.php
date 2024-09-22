<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
    $res=data();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <h1>Admin School Management</h1>
  
<br>
<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1">
      <tr>
        <th>Id</th>
         <th>Name</th>
          <th>Email</th>
          <th>Salary</th>
          <th>Update</th>
      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['Id']; ?></td>
        <td><?php echo $r['Name']; ?></td>
        <td><?php echo $r['Email']; ?></td>
        <td><?php echo $r['Salary']; ?></td>
        <form action="../Controllers/homeController.php">
        <td><button name="edit" value="<?php echo $r['Id']; ?>">Edit</button></td>
      </form>
      </tr>
 <?php } ?>
    </table>
   </form> 
    

  <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>