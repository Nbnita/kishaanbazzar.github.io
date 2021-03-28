<?php
/* session is used to link variable from one page to another. make global variables------*/
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kishaan Bazar</title>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Just an image -->
  <a class="navbar-brand mb-0 h1 text-capitalize" href="welcome.php">kishaan bazzar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="bazzar.php">Bazzar</a>
      </li>
    </ul>
    <div>
      <?php
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
        ?>
        <a href="my-cart.php" class="btn btn-outline-success">My Cart(<?php echo $count;?>)</a>
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>