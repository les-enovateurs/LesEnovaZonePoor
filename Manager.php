<?php 
include_once "Basket.php"; 

$oBasket = new Basket(); 
$oBasket->addProduct("Raspberry Pi", "RPI", 37.90);
$oBasket->addProduct("Klim Domination", "KLIMDOM", 59.90);
$oBasket->addProduct("iPhone X", "IPHX", 1000);

$aProductFromBasket = $oBasket->getProductPrice("IPHX");

echo "Le prix de mon produit est ".$oBasket->getProductPrice("IPHX");

$oBasket->deleteProduct("IPHX");

$aProductFromBasket = $oBasket->getProductPrice("IPHX");

if(null != $oBasket->getProductPrice("IPHX")){
    echo "Le prix de mon produit qui est toujours vivant est ".$oBasket->getProductPrice("IPHX");
}
else{
    echo "Il n'y a pas de produit dont le nom est IPHX";
}

$nPrice = $oBasket->getPriceTotal();

echo $nPrice;
