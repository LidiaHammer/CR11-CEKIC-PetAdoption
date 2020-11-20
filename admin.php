<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
if(isset($_SESSION["user"])){
	header("Location: home.php");
	exit;
}
// select logged-in users details
$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
	<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
	<!-- bs.css -->
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
img {
	height: 10em;
}
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
</style>
</head>

<body>

<div class="container">
	<nav class="navbar navbar-light ">
  					<form class="form-inline">
								<a href="home.php?home"> <button class="btn btn btn-outline-info" type="button">USER view</button> </a>
								<a href="logout.php?logout"><button class="btn btn btn-outline-danger" type="button">Log out</button></a>
						</form>
					
	</nav>
		<h1>Welcome <?php echo $userRow['userName' ]; ?></h1>
					
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Library Media</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="create.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Medium</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
						<th>Image URL</th>
	               <th>name</th>
	               <th>age</th>
	               <th>address</th>
	               <th>ZIP</th>
	               <th>city</th>
	               <th>description</th>
	               <th>hobbies</th>
	               <th>category</th>
	               
								 <?php
		               	include ("actions/db_connect.php");
	                    $sql = "SELECT * FROM animal";
	                    $result = mysqli_query($conn, $sql);
	                    if($result->num_rows > 0) {
	                        echo "<th>Edit</th>
	                    		<th>Delete</th>";
	                    } 
                   ?>
						</tr>
					</thead>
					<tbody>
						<tr>
						
							<?php
					include ("actions/db_connect.php");

					$sql = "SELECT * FROM animal";
					$result = mysqli_query($conn, $sql);
					$conn->close();

					if($result->num_rows > 0) {
		                while($row = $result->fetch_assoc()) {
		                   	echo "<tr class='text-center'>
												 <td><img class='img-fluid' src='".$row['image']."'</td>
		                       	<td>".$row['name']."</td>
		                       	<td>".$row['age']."</td>
		                       	<td>".$row['address']."</td>
		                       	<td>".$row['ZIP']."</td>
		                       	<td>".$row['city']."</td>
		                       	<td>".$row['description']."</td>
		                       	<td>".$row['hobbies']."</td>
		                       	<td>".$row['category']."</td>
		                       
														 <td><a href='update.php?id=".$row['id']."' class='edit'><i class='material-icons'  title='Edit'>&#xE254;</i></a>	 </td>
														 <td> <a href='delete.php?id=".$row['id']."' class='delete' ><i class='material-icons' data-toggle='modal' data-target='#delete' title='Delete'>&#xE872;</i></a></td>
													 </tr>";	 
										 }
		           	} else  {
	               		echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
								 }
								 ?>	
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>        
</div>
</body>
</html>