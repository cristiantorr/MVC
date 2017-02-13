<?php
//action toma los valores por post y los manda como parametros a la fduncion del controlador ene ste caso insertProduct
session_start();
require ('Controller/ProductController.php');
$productController = new ProductController();
$nameProduct = $_POST['nameProduct'];
$ref         = $_POST['ref'];
$price       = $_POST['price'];
$validation  = $_POST['validation'];

switch($validation){
    case "Registrar":
      $productController->insertProductController($nameProduct, $ref, $price);
    break;
     case "Buscar":
      $productController->searchProductController($ref);
    break;
     case "Editar":
      $productController->editProductController($nameProduct, $ref, $price);
    break;
    case "Eliminar":
      $productController->deleteProductController($ref);
    break;
    case 'Listar':
      $productController->allProductController();
      break;

}
