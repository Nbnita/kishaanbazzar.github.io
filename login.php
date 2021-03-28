<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
    <body>
        <?php include("home.php"); ?>
        <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Register</h2>
				<form action="" method="POST">
                    <div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password"/>
                    </div>
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" value="Login"/>
                    <h6>New here?<a href="signup.php">Create Account!</a></h6>
                </form>
			</div>
		</div>
	    </div>
    </body>
</html>
<?php
include "connect.php";

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    
	$qry="SELECT * FROM `add` WHERE email='$email' AND password='$password';";

	$result=mysqli_query($conn,$qry);
	$row=mysqli_num_rows($result);
	if($row<1){
		?>
		<script>alert('email and password not matched');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else{
        $data=mysqli_fetch_assoc($result);
        ?>
        <script>
        alert("matched");
        </script>
        <?php
    }
}
?>