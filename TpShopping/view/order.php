<?php

session_start();
include '..\model\function.php';

$product = $_SESSION['product'];
$price = $_SESSION['price'];
$stock = $_SESSION['stock'];
$qte = $_SESSION['quantite'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    ​
    <title>Panier</title>
</head>

<body style="background-color: #DCDCDC ;">

    <section class="jumbotron text-center >
    <div class=" container style="background-color:black ; color: blanchedalmond;">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Product</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <form action="../controler/shopping.action.php" method="post">
                            <tbody>
                                <?php for ($i = 0; $i < sizeof($product); $i++) { ?>
                                    <tr>
                                        <td> </td>
                                        <td><?php echo $product[$i] ?></td>

                                        <td class="col-sm-1 col-md-1" style="text-align: center">
                                            <input type="number" oninput="maxLengthCheck(this)" onkeypress="return isNumeric(event)" class="form-control offset-md-4 col-md-4" name="<?php echo $i ?>" value="<?php echo $qte ?>" min=0 max=20>
                                        </td>
                                        <td class="text-right"><?php echo $price[$i] ?>$</td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">

                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        ID Card <input name="acheteur">
                        <button type="submit" class="btn btn-lg btn-block btn-dark" name="checkout" style="color: blanchedalmond;">checkout</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
​

</html>