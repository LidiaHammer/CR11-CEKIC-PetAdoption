<?php
	require_once 'actions/db_connect.php';
	if ($_GET["id"]) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM animal WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    form {
        max-width: 40em;
    }
    </style>
    
</head>
<body>
<fieldset >
   <h3 class="m-3">Update Entry</h3>
	<form action="actions/a_update.php" class="form-group ml-3" method="post">
  <div class="form-row">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  
            <div class="form-group col-md-6">
               <label>imageURL</label>
               <input type="text" class="form-control" name="image" value="<?php echo $row['image'] ?>">
           </div>  

           <div class="form-group col-md-6">
               <label>name</label>
               <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>age</label>
               <input type="text" class="form-control" name="age" value="<?php echo $row['age'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>address</label>
               <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>ZIP</label>
               <input type="text" class="form-control" name="ZIP" value="<?php echo $row['ZIP'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>city</label>
               <input type="text" class="form-control" name="city" value="<?php echo $row['city'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>description</label>
               <input type="text" class="form-control" name="description" value="<?php echo $row['description'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>hobbies</label>
               <input type="text" class="form-control" name="hobbies" value="<?php echo $row['hobbies'] ?>">
           </div>

           <div class="form-group col-md-6">
               <label>category</label>			
               <select name="category" class="form-control" value="<?php echo $row['category'] ?>">
               <option value="small">small</option>
                <option value="large">large</option>
                
                </select>
           </div>
      
         
           <div class="form-group col-md-12">
               <button type ="submit" class="btn btn-primary">Save Changes</button>
               <a href= "home.php"><button  class="btn btn-secondary ml-2" type="button">Back</button></a>
           </div>
   </div>
   </form> 
   </fieldset >
	
</body>
</html>