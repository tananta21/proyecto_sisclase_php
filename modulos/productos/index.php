
<html>
    <head>
        <title>title</title>
    </head>
    <body>
         
        <h1>PRODUCTOS</h1>
        
        <a href="form.php"> <h2>Crear Producto</h2> </a>
        <a href="../../index.php" style="color: red"><h2>Menu Modulos</h2> </a>
        
                    
        <?php  
        
        require '../../database/conexionmysql.php';
                  
                   
            // aca se listan todos los productos de cada categoria
             $query = " SELECT productos.producto_id,productos.nombre, productos.stock,"
                       ." IF(productos.is_igv=TRUE, 'activado' , 'desactivado')as is_igv,"
                       ." IF(productos.activo=1, 'actvivo' , 'inactivo')as estado,"
                       ." if(productos.sexo='M', 'masculino' , 'femenino') as sexo,"
                       ." categoria_productos.nombre as 'categoria'"
                       ." from productos inner join categoria_productos"
                       ." ON productos.categoria_id = categoria_productos.categoria_producto_id"
                       ." ORDER BY productos.nombre DESC";
             
                ?>
        
        <table border='1.5' >
            <tr>
             <th>ID</th>
            <th>NOMBRE</th>
            <th>STOCK</th>            
            <th>IS_IGV</th>
            <th>ESTADO</th>
            <th>SEXO</th>  
            <th>CATEGORIA</th>
            </tr> 
            
            <?php
             
            // echo $query;
             $resultado = mysql_query($query,$conexion);
           while($lineal = mysql_fetch_array($resultado,MYSQL_ASSOC)){
                                   
             echo  "<tr>."
        . "<td>".$lineal['producto_id']."</td>"              
        . "<td>".$lineal['nombre']."</td>"
        . "<td>".$lineal['stock']."</td>"
        . "<td>".$lineal['is_igv']."</td>"
        . "<td>".$lineal['estado']."</td>"        
        . "<td>".$lineal['sexo']."</td>"
        . "<td>".$lineal['categoria']."</td>"
        . "</tr>";   
              }
                            
            ?>
            
        </table>      
        
        
     
        
        
       
    </body>
</html>
