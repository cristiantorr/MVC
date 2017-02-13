<?php

require("Model/ProductModel.php");

class ProductController
{
     function __construct(){
    }

    // function para retornar la vista de view
     function viewProduct(){

        return (require('Views/product.php'));
    }

    function allProductController(){
        $modelProductAll = new ProductModel();
        $modelProductAll->allProductModel();
         $queryProductAll = $modelProductAll->searchProductModel();//para actualizar cuando se inserta
        $_SESSION['nameProduct'] = $queryProductAll;
        header('Location: /');
    }

    function insertProductController($nameProduct, $ref, $price){
        $modelProductInsert = new ProductModel();
        $queryProductInsert =  $modelProductInsert->insertProductModel($nameProduct, $ref, $price);
       $queryProductSearch = $modelProductInsert->searchProductModel();//para actualizar cuando se inserta
        $_SESSION['nameProduct'] = $queryProductSearch;

        header('Location: /');
    }

    function searchProductController($ref){
        $modelProductSearch = new ProductModel();
        $queryProductSearch = $modelProductSearch->searchProductModel($ref);
        $_SESSION['nameProduct'] = $queryProductSearch;
        header('Location: /');
    }

    function editProductController($nameProduct, $ref, $price){
        $modelProductEdit= new ProductModel();
        $queryProductEdit = $modelProductEdit->editProductModel($nameProduct, $ref, $price);

        $queryProductSearch = $modelProductEdit->searchProductModel();//para actualizar cuando se edita

        $_SESSION['nameProduct'] = $queryProductSearch;
        header('Location: /');
    }

    function deleteProductController($ref){
        $modelProductDelete= new ProductModel();
        $queryProductDelete = $modelProductDelete->deleteProductModel($ref);
        $queryProductSearch = $modelProductDelete->searchProductModel();//para actualizar cuandose elimina
        $_SESSION['nameProduct'] = $queryProductSearch;
        header('Location: /');
    }
}



