<?php

$nombre = $_POST['nombre'];
$password = $_POST['password'];

if(isset($nombre)){
    
    require '../database/conexionmysql.php';
    
    //inicio de las variables de sesion
    
    session_start();
    
    // consultar los usuarios que estan guardados en la base de datos
    $consulta = "select * from usuarios where name ='$nombre' and password ='$password'";
    $resultado = mysql_query($consulta) or die(mysql_error());
    $fila = mysql_fetch_array($resultado); 
    
    // si : el usario no existe o los datos son incorrectos
    if(!$fila['id']){ 
        
        header('location: ../acceso.php');
    }        
   
    else{
        //usuario logueado correctamente
        
        $_SESSION['id_usuario']=$fila['id'];
        $_SESSION['nombre_user']=$fila['name'];
    
        
        header('location: ../inicio/index.php');
      
    }

}

else{
    
    header('location: ../acceso.php');
}