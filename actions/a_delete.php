<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
require_once 'db_connect.php';
if ($_POST) {
  $id = $_POST['id'];

$sql = "DELETE FROM animal WHERE id={$id}";
  if(mysqli_query($conn, $sql)){
    echo "<h3 class='ml-5 mt-5'>The animal has been deleted successfully.</h3> <br> <a href='../admin.php'> <button type='button' class='btn btn-success ml-5'>Back to Homepage</button></a>";
  }else {
    echo "error";
  }$conn->close();
}

?>