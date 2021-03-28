<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kishaan Bazzar</title>
</head>
<body>
    <?php include('home.php');?>
    <div class="container py-5">
        <div class="col-lg-12 text-center border rounded bg-light">
            <h1>Contact/Feedback form</h1>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-8 text-center pt-5">
                <form action="welcome.php" method="POST">
                    <div class="form-group">
                        <input type="name" class="form-control" name="name" placeholder="Name" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required/>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="message"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-outline-success btn-block my-2 my-sm-0" name="submit" value="Submit"/>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
<?php
    include "connect.php";

    if(isset($_POST['submit'])){
       
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql="INSERT INTO `comment`(`name`, `email`, `message`) VALUES ('$name',$email','$message')";

        $res=mysqli_query($conn,$sql);

        if($res)
        {
            ?>
            <script>
                alert('Thank you for your feedback.');
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