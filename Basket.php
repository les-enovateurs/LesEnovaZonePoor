<?php 

class Basket { 
    
    protected $aProduct = []; 
    
    /**
    * Constructeur du panier
    */
    public function __construct()
    { 
        $this->aProduct = [];
    }

    /**
    * Récupérer l'ensemble des produits
    * @return array $this->aProduct un tableau de produit
    */
    public function getProducts():array
    {
        return $this->aProduct;
    }

    /**
    * Ajouter un produit dans le panier
    * @param string $sName le nom du produit
    * @param string $sCode le code du produit
    * @param float $nPrice le prix du produit
    * @return void
    */
    public function addProduct(string $sName, string $sCode, float $nPrice): void
    {
        /** TODO Mettre en indice du tableau le code produit 
        * cela sera plus facile à gérer et il y aura beaucoup moins de "for" 
        */
        array_push($this->aProduct,
            [
                'name'     => $sName,
                'code'     => $sCode,
                'price'    => $nPrice
            ]
        );
    }

    /**
    * Récupérer un produit par rapport à un code.
    * @param string $sCode le code du produit en question
    * @return array un tableau décrivant le produit ou un null 
    */
    public function getProduct(string $sCode):?array
    {
        for ($i = 0; $i < count($this->aProduct); $i++)
        {
            if ($sCode == $this->aProduct[$i]['code'])
            {
                return $this->aProduct[$i];
            }
        }
        return null;
    }

    /**
    * Récupération d'un prix par rapport à un code
    * @param string $sCode le code en question
    * @return float le prix du produit ou un null
    */
    public function getProductPrice(string $sCode):?float
    {
        for ($i = 0; $i < count($this->aProduct); $i++)
        {
            if ($sCode == $this->aProduct[$i]['code'])
            {
                return $this->aProduct[$i]['price'];
            }
        }
        return null;
    }

    /**
    * Supprimer un produit
    * @param string $sCode le code du produit à supprimer
    * @return void
    */
    public function deleteProduct(string $sCode): void
    {
        /** FIXME Générer une erreur ou gérer le cas où le produit n'est pas présent
        * dans le tableau
        */
        for ($i = 0; $i < count($this->aProduct); $i++)
        {
            if ($sCode == $this->aProduct[$i]['code'])
            {
                unset($this->aProduct[$i]);
            }
        }
    }

    /**
    * Récupérer le montant total du panier
    * @return float le montant du panier
    */
    public function getPriceTotal():float
    {
        $nPrice = 0;
        for ($i = 0; $i < count($this->aProduct); $i++)
        {
            $nPrice += $this->aProduct[$i]['price'];
        }
        return $nPrice;
    }
}
