<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Kishaan Bazzar</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <?php include("home.php"); ?>
        <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>SignUp Form</h2>
				<form action="bazzar.php" method="POST">
                    <div class="form-group">
						<label for="name">Name</label>
						<input type="name" class="form-control" name="name" required/>
                    </div>
                    <div class="form-group">
						<label for="city">City</label>
						<input type="city" class="form-control" name="city" required/>
                    </div>
                    <div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email"required/>
                    </div>
                    <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" required/>
                    </div>
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" value="submit"/>
                    <h6>Already Have account?<a href="login.php">Login here!</a></h6>
                </form>
			</div>
		</div>
	    </div>
    </body>
</html>
<?php
include "connect.php";

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `add`(`name`,`city`,`email`, `password`) VALUES ('$name','$city','$email','$password')";

    $res=mysqli_query($conn,$sql);

    if($res){
        ?>
        <script>
            alert('Data added successfully');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('not success');
        </script>
        <?php
    }
}
?>