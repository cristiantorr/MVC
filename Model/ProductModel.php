<?php
require('db/database.php');

class ProductModel extends Database
{

    function __construct()
    {
        parent::__construct(); //constructor parent de database
    }

    //cerrando la conexión
    /*public function __destruct() {
        $closeResults = $this->_db->close();

        if($closeResults === false)
        {
            echo "Could not close MySQL connection.";
        }
    }*/

    public function allProductModel(){
      $sql = $this->_db->query("SELECT * FROM products");
      return $sql;
    }

     public function insertProductModel($nameProduct, $ref, $price)
     {
         $sql = $this->_db->query("INSERT INTO products(Name, Ref, Price)
              VALUES('$nameProduct','$ref','$price')");
             // echo "Registro exitoso";
              /*$this->_db->close();*/
             return $sql;

     }

     public function searchProductModel($ref){
        if (!empty( $ref )) {
         $sql = $this->_db->query("SELECT * FROM products WHERE Ref = '$ref'");
        }else{
            $sql = $this->_db->query("SELECT * FROM products");
        }
         $sqlFetch = $sql->fetch_all(MYSQLI_ASSOC);
         return $sqlFetch;
     }

     public function editProductModel($nameProduct, $ref, $price){
         $sql = $this->_db->query("UPDATE products SET Name ='$nameProduct', Price = '$price'  WHERE Ref = '$ref'");
        return $sql;
     }

     public function deleteProductModel($ref){
              $sql = $this->_db->query("DELETE FROM products WHERE Ref = '$ref'");
              return $sql;
     }
}


