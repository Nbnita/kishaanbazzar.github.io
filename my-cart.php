<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[item_name]</td>
                                        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                        <td><input class='text-center iquantity' onchange='subTotal()' type='number' value=$value[quantity] min='1' max='20'></td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage.php' method='POST'>
                                                <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='item_name' value='$value[item_name]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class='border rounded bg-light p-4'>
                    <h4>Grand Total:</h4>
                    <h5 class='text-right' id='gtotal'></h5>
                    <br>
                    <form action="">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash On delivery
                        </label>
                        </div>
                        <button class="btn btn-outline-primary btn-block">Make Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText=gt;
    }
    subTotal();

</script>
</body>
</html>