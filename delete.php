<?php 
	require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM animal WHERE id = {$id}" ;
   $result = mysqli_query($conn, $sql);
   $row = $result->fetch_assoc();

   $conn->close();

   ?>
<!DOCTYPE html>
<html>
<head>
   <title> Delete Entry</title>
  <!-- bs.css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h3 class="ml-5 mt-5">Do you really want to delete this entry?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $row['id'] ?>" />
   <button type="submit" class="btn btn-primary m-5">Yes, delete it!</button >
   <a href="home.php"> <button type="button" class="btn btn-danger ml-5"> No, go back!</button ></a>
</form>

</body>
</html>
<?php
}
?>