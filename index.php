<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <?php 
        if(isset($_GET['mensaje'])){
            $resultado = $_GET['mensaje'];
        }else{
            $resultado = "0";
        }
     ?>
    <br>
    <div class="container">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-auto">
                        <h4><center>Calculadora</center></h4><br>
                        <form action="controller.php" method="post">
                                <label>Numero 1</label>
                                <input class="form-control" type="text" name="txtnum1" autofocus><br>
                                <select name="operacion" class="form-control">
                                        <option value="+">+</option>
                                        <option value="-">-</option>
                                        <option value="x">x</option>
                                        <option value="/">/</option>
                                </select><br>
                                <label>Numero 2</label>
                                <input class="form-control" type="text" name="txtnum2"><br>
                                <input type="submit" name="guardar" class="btn btn-success btn-block" ><br>
                                <label>Resultado</label>
                                <input class="form-control" type="text" value="<?php echo $resultado?>" readonly>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>
