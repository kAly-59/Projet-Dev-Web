<?php

session_start();
include('../model/function.php');
$prix = $_SESSION['price'];
$product = $_SESSION['product'];
$stockBuy = $_SESSION['stockBuy'];
$ID = $_SESSION['ID'];
$buyer = IDNumber($ID);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="load.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Files</title>
</head>

<body>

    <div class="container inv my-5 py-5">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <h1 class="font-weight-lighter py-1 px-3">INVOICE</h1>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-6">
                <p class="mb-0">INVOICE TO</p>
                <h5 class="mb-0"><b><?php echo $buyer; ?></b></h5>

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">ITEM</th>
                            <th scope="col">QTY</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                    </thead>
                    <?php for ($i = 0; $i < sizeof($product); $i++) {
                        if (!$stockBuy[$i] == 0) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $i + 1 ?></td>
                                    <td>
                                        <b><?php echo $product[$i] ?></b>
                                    </td>
                                    <td><?php echo $stockBuy[$i] ?></td>
                                    <td><?php echo $prix[$i] ?>$</td>
                                    <td><?php echo number_format($prix[$i] * $stockBuy[$i], 2) ?>$</td>
                                </tr>
                        <?php $total[$i] = ($stockBuy[$i] * $prix[$i]); //Calcul som des articles & prix 
                        }
                    } ?>

                        <tr class="bg-dark" style=" color: #0099D5;">
                            <td colspan="3"></td>
                            <td><b>TOTAL</b></td>
                            <td><b><?php echo number_format(array_sum($total), 2); ?>$</b></td><!-- Calcul som total -->
                        </tr>
                            </tbody>
                </table>
            </div>
        </div>
</body>

</html>