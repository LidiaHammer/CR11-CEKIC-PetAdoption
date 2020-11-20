<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
	require_once 'db_connect.php';

	if ($_POST) {
    $id = $_POST["id"];
    $image = $_POST["image"];
		$name = $_POST["name"];
    $age = $_POST["age"];
		$address= $_POST["address"];
		$ZIP= $_POST["ZIP"];
		$city= $_POST["city"];
		$description= $_POST["description"];
		$hobbies= $_POST["hobbies"];
		$category= $_POST["category"];
   
    
    $sql = "INSERT INTO animal(image, name, age, address, ZIP, city, descriptiom, hobbies, category) VALUES ('$image', '$name', '$age', '$address','$ZIP','$city','$description','$hobbies', 'category')";

		$sql = "UPDATE `animal` SET `image` = '$image', `name` = '$name', `age` = '$age', `address` = '$address', `ZIP` = '$ZIP', `city` = '$city', `description` = '$description', `hobbies` = '$hobbies', `category` = '$category' WHERE id = $id";

		if (mysqli_query($conn, $sql)) {
			echo "<h3 class='ml-5 mt-5'>The information about the animal has been updated.</h3> <br> <a href='../admin.php'> <button class='btn btn-primary ml-5'>Back to home page</button>	</a>";
		}else {
			echo "error";
		}
	}
?>