<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) && !isset($_SESSION['admin'])) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userName']; ?> </title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}   
</style>

</head>

<body>
			<div class="container">	
					<nav class="navbar navbar-light ">
  					<form class="form-inline">
     				
							<a href='general.php'><button class="btn btn-sm btn-outline-info mr-4" type="button">Small and Large Animals</button></a>
    					<a href='senior.php'><button class="btn btn-sm btn-outline-info mr-4" type="button">Older animals</button></a>
							<a href="logout.php?logout"><button class="btn btn-sm btn-outline-danger mr-auto" type="button">Log out</button></a>
						</form>	
						<?php
								if(isset($_SESSION['admin'])) {
								echo "<a href='admin.php'> <button class='btn btn-info mr-4'> ADMIN</button></a>";
								}
							?>
					</nav>

							<h1>Welcome  <?php echo $userRow['userName']; ?> </h1>

					<div class="row d-flex justify-content-center">
							<?php
								include ("actions/db_connect.php");
								$sql = "SELECT * FROM animal WHERE category = 'small' OR category = 'large' ";
								$result = mysqli_query($conn, $sql);
								$conn->close();

								if($result->num_rows > 0) {
		               while($row = $result->fetch_assoc()) {
												 echo "
												<div class='col-6 col-md-3 my-3'>
												 	<div class='card h-100' >
												 		<img class='card-img-top' src='".$row['image']."'>
												 			<div class='card-body'>
												 				<h5 class='card-title'>".$row['name']."</h5>
																<p class='card-text'>".$row['description']."</p> 
															</div>
													<ul class='list-group list-group-flush'>
														<li class='list-group-item'>Hobbies: <br> ".$row['hobbies']."</li>
		                       	<li class='list-group-item'>Age: ".$row['age']."</li>  	
		                       	<li class='list-group-item'>Size:  ".$row['category']."</li>
		                       	<li class='list-group-item'> Address: <br>".$row['address']." <br> ".$row['ZIP']." ".$row['city']."</li>
													</ul>
													</div>
												</div>";	 
										 }
		           				} else  {
	               				echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		           	}
							?>	
						</div>    
   		 </div>
</body>
</html>