<?php

session_start();

if($_SESSION['nombre']){
    
    session_destroy();
    header("location: ../acceso.php");
}
else{
    header("location: ../acceso.php");
}
    
