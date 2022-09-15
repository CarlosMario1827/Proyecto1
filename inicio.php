<?php

    if($_POST){
    //recibir informacion del formulario HTML ( Metodo POST )
        $nombre= $_POST["txtNombre"];
        $contra= $_POST["contrase"];
        if($nombre == "administrador" and $contra == "asd"){
            header('location: admin.php');
        }
        if($nombre == "cliente" and $contra == 123){
            header('location: tienda.php');
        }
        else{
            echo "Error, algunos datos estan vacios";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br/><br/>
<h1>Bienvenido<h1>
<br/><br/><br/><br/><br/><br/>
<body align="center" style="background-color:#AB5542">

    <form action="inicio.php" method="post">
        usuario:
        <input type="text" name="txtNombre" id="">
        <br/>
        <br/>
        contraseña:
        <input type="text" name="contrase" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>