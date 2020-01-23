<?php
session_start();
include('../model/function.php');

//Bouton execute function
if (isset($_POST['valid'])) {
    $target_dir = "../assets/";
    $target_file = $target_dir . basename($_POST['files']);
    $_SESSION['product'] = readCSV($target_file, 0); //lecture col product
    $_SESSION['price'] = readCSV($target_file, 1); //lecture col price
    $_SESSION['stock'] = readCSV($target_file, 2); //lecture col stock
    $_SESSION['quantite'] = 0;
    header('location: ../view/order.php');
}

if (isset($_POST['checkout'])) {
    $prix = $_SESSION['price'];
    $product = $_SESSION['product'];
    $a = $_POST;
    for ($i = 0; $i < count($product); $i++) {
        $stockBuy[$i] = $a[$i];
    }
    $_SESSION['stockBuy'] = $stockBuy;
    $ID = $_POST['acheteur'];
    $_SESSION['ID'] = $ID;
    header('location: ../view/invoice.php');
}
