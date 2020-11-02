<?php 
class Panier 
{ 
    protected $produit; 
    public function __construct(){$this->produit = array();}

    public function getProduits(){
        return $this->produit;
    }

    public function addProduit($name, $code, $price)
    {
        array_push($this->produit, array('name'=>$name,'code'=>$code, 'prix'=>$price));
    }

    public function getProduit($code){
        for($i=0;$i<count($this->produit);$i++)
            if($code == $this->produit[$i]['code'])
                return $this->produit[$i];
        return null;
    }

    public function getProduitPrix($code){
        for($i=0;$i<count($this->produit);$i++)
            if($code == $this->produit[$i]['code'])
                return $this->produit[$i]['prix'];
        return null;
    }

    public function deleteProduit($code){
        for($i=0;$i<count($this->produit);$i++)
            if($code == $this->produit[$i]['code'])
                unset($this->produit[$i]);
    }

    public function getPrixTotal(){
        $prix = 0;
        for($i=0;$i<count($this->produit);$i++)
            $prix += $this->produit[$i]['prix'];

        return $prix;
    }
}
