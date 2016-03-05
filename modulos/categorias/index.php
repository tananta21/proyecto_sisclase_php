
<html>
    <head>
        <title>title</title>
    </head>
    <body>
         
        <h1>CATEGORIA PRODUCTOS</h1>        
        <a href="form.php" style="color: red"><h2>crear categoria</h2> </a>
        <a href="../../modulos/index.php" style="color: red"><h2>Menu Modulos</h2> </a>
        <input type="button" onclick=" location.href='../../modulos/index.php' " value="modulos" /> 
               
        <?php  
        
        require '../../database/conexionmysql.php';
        
        $q = "SELECT * FROM categoria_productos";
        mysql_query($q,$conexion);
        $result = mysql_query($q,$conexion)or die("hubo un error en hacer la consulta".  mysql_error());    
                
        // aca se listan todos las categorias de los productos    
        while ($line = mysql_fetch_array($result,MYSQL_ASSOC))
        {       
                   ?>
        
        <span><strong><h2><?php echo $line['categoria_producto_id'].'.-'.$line['nombre']; ?></h2></strong></span>
            
        
        <a href="form.php?categoria_producto_id=<?php echo $line['categoria_producto_id']?>"><button><h3>Editar</h3></button></a>
        <!--<a href="eliminarcategoria.php?categoria_producto_id= <?php echo $line['categoria_producto_id']?>"><button><h3>Eliminar</h3></button></a>
        <!-- envio categoria producto_id a ejercicio categoria -->
        <!-- con & puedes enviar mas de una informacion por la url -->
        
        <a href="#" onclick="eliminar(<?php echo $line['categoria_producto_id']?>,'<?php echo $line['nombre'] ?>')">Eliminar </a>
        
        <table border='1.5' >
            <tr>
             <th>ID</th>
            <th>NOMBRE</th>
            <th>STOCK</th>
            <th>CATEGORIA_ID</th>
            <th>IS_IGV</th>
            <th>ACTIVO</th>
            <th>SEXO</th>                
            </tr> 
            
            <?php
            
            // aca se listan todos los productos de cada categoria
             $query = "SELECT * FROM productos WHERE categoria_id".'='.$line['categoria_producto_id'];
             
            // echo $query;
             $resultado = mysql_query($query,$conexion);
           while($lineal = mysql_fetch_array($resultado,MYSQL_ASSOC)){              
             echo  "<tr>."
        . "<td>".$lineal['producto_id']."</td>"              
        . "<td>".$lineal['nombre']."</td>"
        . "<td>".$lineal['stock']."</td>"
        . "<td>".$line['nombre']."</td>"
        . "<td>".$lineal['is_igv']."</td>"
        . "<td>".$lineal['activo']."</td>"
        . "<td>".$lineal['sexo']."</td>"
        . "</tr>";   
              }
                            
            ?>
            
        </table>      
        
        
        <?php }?>
        
        <script src="../../static/js/index_categoria.js"></script>
        
        
        
       
    </body>
</html>



