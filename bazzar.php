<?php
include ("connect.php");
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
    <?php include("header.php"); ?> 
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 align="center">Product Details</h1>
            </div>
        </div>
        <div class="row mt-4">
            <?php 
                $query="SELECT * FROM `seller` ORDER BY id ASC";
                $res=mysqli_query($conn,$query);
                if(mysqli_num_rows($res)>0)
                {
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <div class="col-md-3">
                        <form action="manage.php" method="POST">
                            <div class="card">
                                <img src="<?php echo $row['image']; ?>" width="200px" height="200px" alt="images">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                    <p class="card-text">Rs.<?php echo $row['price']; ?></p>
                                    <p class="card-text">Sellar: <?php echo $row['name'];?><p>
                                    <button type="submit" name="add_to_cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="item_name" value=<?php echo $row['product_name'];?>>
                                    <input type="hidden" name="price" value=<?php echo $row['price'];?>>
                                </div>
                            </div>
                        </form>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>