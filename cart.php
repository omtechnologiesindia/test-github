<?php
include('cart_class.php');


$cartObj = new omtechCart;  
$productArr=array("Colour"=>"Red","Size"=>"Big","Pattern"=>"Mix");
$prodId=$cartObj->addToCart($productArr);
$productArr2=array("Colour"=>"Blue","Size"=>"Small","Pattern"=>"Plain");
$prodId=$cartObj->addToCart($productArr2);

$productArr3=array("Colour"=>"pink","Size"=>"Very Big","Pattern"=>"Simple");
$prodId=$cartObj->addToCart($productArr3);
$rmvprod=$cartObj->removeFromCart(2);
$productArr4=array("Colour"=>"pink","Size"=>"Very Big","Pattern"=>"Simple");
$prodId=$cartObj->addToCart($productArr4);

$cartContentArr=$cartObj->cartContentAsArray();
var_dump($cartContentArr);

?>
