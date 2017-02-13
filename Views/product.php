<?php
//$baseUrl = $_SERVER['HTTP_HOST'];
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capacitación</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../js/main.js" ></script>
</head>
<body>
    <header>
        <h1 class="text-center">CRUD MVC</h1>
    </header>
    <div class="container content">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <form action="action.php" method="POST" id="formProducts" class="form-inline">
                     <div class="form-group">
                        <label for="">Nombre producto: </label>
                        <input type="text" name="nameProduct" placeholder="Nombre del producto" class="form-control">
                        <label for="">Referencia producto: </label>
                        <input type="text" name="ref" placeholder="referencia del producto" class="form-control">
                        <label for="">Precio producto: </label>
                        <input type="text" name="price" placeholder="precio del producto" class="form-control">
                    </div>
                    <input type="hidden" value="Registrar" name="validation">
                    <input type="submit"  value="Registrar" class="btn btn-lg btn-success" class="form-control"/>
                   <!-- <input type="submit" value="Buscar" name="validation" class="btn btn-lg btn-success"/>-->
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="products col-xs-12 xol-md-12" id="products">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h2 class="text-center">PRODUCTOS</h2>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <form action="action.php" method="POST" class="form-inline">
                            <div class="form-group">
                                <label for="">Referencia producto: </label>
                                <input type="text" name="ref" placeholder="referencia del producto" class="form-control">
                            </div>
                             <input type="submit" value="Buscar" name="validation" class="btn btn-lg btn-success"/>
                                <input type="submit" value="Listar" name="validation" class="btn btn-lg btn-success"/>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                        <?php
                        $queryProductSearch = $_SESSION['nameProduct'];
                        foreach ($queryProductSearch as $key => $value) :?>
                            <div class="col-xs-12 col-md-12 records">
                                <form action="action.php" method="POST" class="form-inline">
                                    <div class="form-group">
                                        <label for="">Referencia: </label>
                                        <input type="text" name="ref" placeholder="referencia del producto" value="<?php echo $value['Ref'];?>" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nombre: </label>
                                        <input type="text" name="nameProduct" placeholder="Nombre del producto" value="<?php echo $value['Name'];?>" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Precio: </label>
                                        <input type="text" name="price" placeholder="precio del producto" value="<?php echo $value['Price'];?>" class="form-control">
                                    </div>
                                     <div class="form-group">
                                      <label for=""> </label>
                                        <?php echo $value['Date'];?>
                                      </div>
                                    <div class="form-group">
                                        <input type="submit" value="Editar" name="validation" class="btn btn-lg btn-success editButton"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Eliminar" name="validation" class="btn btn-lg btn-danger deleteButton"/>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        <?php endforeach;?>

                </div>
             </div>
        </div>
    </div>
    <footer class="">
        <div class="container">
            <p>Todos los derechos reserveselos...</p>
        </div>

    </footer>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>