<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado talles DB</title>
</head>
<body>
    <h3>Listado Talle DB</h3>
    <?php

        //conexion a la db
        $mySqlVentas = new myqli("localhost", "root", "", "ventas");

        if ($mySqlVentas->connect_errno) {
            die("Falló la conexion a la db mysqlVentas")
        } else {
            mysqli_set_charset($mysqli, "utf8");
        }

        $sql = "SELECT * FROM talles ORDER BY idtalle";


        $query = $mySqlVentas->query($sql);

        while ($resultado = $query) {
            # code...
        }
    ?>
</body>
</html>