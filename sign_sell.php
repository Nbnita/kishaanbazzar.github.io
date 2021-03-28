<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Kishaan Bazzar</title>
    <link rel="stylesheet" type='text/css' href='style3.css'>
    </head>
    <body>
        <?php include("home.php"); ?>
        <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>SignUp Form</h2>
				<form action="bazzar.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
						    <label for="name">Name</label>
						    <input type="name" class="form-control" name="name" required/>
                        </div>
                        <div class="form-group">
						    <label for="city">City</label>
						    <input type="city" class="form-control" name="city" required/>
                        </div>
                        <div class="form-group">
						    <label for="product">Product</label>
						    <input type="product" class="form-control" name="product" required/>
                        </div>
                        <div class="form-group">
						    <label for="file">Image</label>
						    <input type="file" class="form-control" name="file" required/>
                        </div>
                        <div class="form-group">
						    <label for="product_name">Product Name</label>
						    <input type="product_name" class="form-control" name="product_name" required/>
                        </div>
                        <div class="form-group">
						    <label for="price">Price</label>
						    <input type="price" class="form-control" name="price" required/>
                        </div>
                        <div class="form-group">
						    <label for="quantity">Quantity</label>
						    <input type="quantity" class="form-control" name="quantity" required/>
                        </div>
					    <div class="form-group">
						    <label for="email">Email</label>
						    <input type="email" class="form-control" name="email" required/>
                        </div>
                        <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" name="password" required/>
                        </div>
                        <input type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" value="submit"/>
                    <h6>Already Have account?<a href="log_sell.php">Login here!</a></h6>
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
    $product=$_POST['product'];
    $file=$_FILES['file'];

	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];

	$fileExt=explode('.',$fileName);
	$fileActualExt=strtolower(end($fileExt));


	$fileNameNew=uniqid('',true).'.'.$fileActualExt;
	$fileDestination="img/".$fileNameNew;

    move_uploaded_file($fileTmpName,$fileDestination);
        
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `seller`(`name`, `city`, `product`,`image`, `product_name`, `price`, `quantity`, `email`, `password`) VALUES ('$name','$city','$product','$fileName','$product_name','$price','$quantity','$email','$password')";

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