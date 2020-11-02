<?php

include_once "Panier.php";


$panier = new Panier();
$panier->addProduit("Raspberry Pi", "RPI", 37.90);
$panier->addProduit("Klim Domination", "KLIMDOM", 59.90);

$panier->addProduit("iPhone X", "IPHX", 1000);

$produit_from_panier = $panier->getProduitPrix("IPHX");

echo "Le prix de mon produit est ".$panier->getProduitPrix("IPHX")."<br />";


$panier->deleteProduit("IPHX");

$produit_from_panier = $panier->getProduitPrix("IPHX");

if(null != $panier->getProduitPrix("IPHX")){
    echo "Le prix de mon produit qui est toujours vivant est ".$panier->getProduitPrix("IPHX")."<br />";
}
else{
    echo "Il n'y a pas de produit dont le nom est IPHX"."<br />";
}

$prix = $panier->getPrixTotal();

echo $prix;
