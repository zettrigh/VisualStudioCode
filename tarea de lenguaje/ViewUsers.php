<?php
    require('conection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .pure-table{
        margin: 7% 0 0 35%;
        font-size: larger;
    }
    thead{
        background-color: black;
        color: aliceblue;
    }
    th{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    td{
        font-family: Arial, Helvetica, sans-serif;
    }
    h1{
        text-align: center;
        background-color: black;
        color: aliceblue;
        padding: 20px 0 25px 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .btn{
        background-color: black;
        border-radius: 10px;
        text-decoration: none;
        margin: 3% 0 0 46%;
        border: none;
        padding: 0 3% 0 3%; 
    }
    p{
        color: aliceblue;
        text-decoration: none;
        border: none;
        font-size: large;
    }
</style>

<body>
    <h1>LISTADO DE USUARIOS</h1>
    <hr>

    <table class="pure-table" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
        </thead>

        <?php 
        $Sql = "SELECT * FROM usuarios";
        $Ress = mysqli_query($Conection,$Sql);

        while ($View = mysqli_fetch_array($Ress)) {
        ?>
         <tbody>
            <tr>
                <td><?php echo $View['nombre']; ?></td>
                <td><?php echo $View['apellido']; ?></td>
                <td><?php echo $View['email']; ?></td>
            </tr>
         </tbody>
        <?php
        }
        ?>
    </table>
    <button class="btn"><a href="index.html"><p>Volver</p></a></button>
</body>
</html>