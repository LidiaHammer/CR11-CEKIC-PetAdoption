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
<h3 class="m-3">Insert information to create a new animal entry</h3>
 
	<form action="actions/a_create.php" method="post" class="form-group ml-3">
  <div class="form-row">
           <div class="form-group col-md-6">
               <label>imageURL</label>
            <input type="text" class="form-control "name="image"/>
           </div>   
           <div class="form-group col-md-6">
               <label>name</label>
               	<input type="text" class="form-control" name="name"/>
           </div>
           <div class="form-group col-md-6">
               <label>age</label>
               <input type="text" class="form-control" name="age"/>
           </div>
           <div class="form-group col-md-6">
               <label>address</label>
            <input type="text" class="form-control m-1" name="address"/>
           </div>
           <div class="form-group col-md-6">
               <label>ZIP</label>
               <input type="text" class="form-control" name="ZIP" />
           </div>
           <div class="form-group col-md-6">
               <label>city</label>
               <input type="text" class="form-control" name="city" />
           </div>
           <div class="form-group col-md-6">
               <label>description</label>
               <input type="text" class="form-control" name="description" />
           </div>
           <div class="form-group col-md-6">
               <label>hobbies</label>
               <input type="text" class="form-control" name="hobbies" />
           </div>
           <div class="form-group col-md-6">
               <label>category</label>
                <select name="category" class="form-control ">
                <option value="small">small</option>
                <option value="large">large</option>
                
                </select>
           </div>
          
               <div class="form-group col-md-12"> 
               <button type ="submit" class="btn btn-primary">Insert animal</button>
               <a href= "home.php"><button  type="button" class="btn btn-secondary  ml-3">Back </button></a>
               </div>

          
       </div>
   </form> 
   </fieldset >
	
</body>
</html>