 
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <?php 
        require '../database/conexionmysql.php';        
        //iniciar sesion
        session_start();
        
        //validar seguridad
        if(!$_SESSION){
            header("location:../acceso.php");
        }        
        ?>
        
        <h1>WELCOME TO SISCLASE UCP</h1>
        <a href="../modulos/index.php">Módulos</a>
        </br></br></br>
        <a href="../acceso/script_desconectar.php">cerrar sesion</a>

    </body>
</html>




