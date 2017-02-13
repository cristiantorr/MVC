<?php

//instancia controller y llama a la funcion viewProduct();
require ('Controller/ProductController.php');
$controller = new ProductController();
$controller->viewProduct();