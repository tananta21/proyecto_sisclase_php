
<html>
    <head>
        <title>Nueva Categoria</title>
    </head>
    <body style="background: rgba(242,246,248,1);">        
        
       <?php 
      
      if(isset($_GET['categoria_producto_id'])){
                     
                require '../../database/conexionmysql.php';
                $categoria_producto = $_GET['categoria_producto_id'];

                $query_categoria = "select * from categoria_productos where categoria_producto_id =".$categoria_producto;

                $result = mysql_query($query_categoria);
                //recuperamos los datos de la base de datos-- recuperar como un array
                $categoria = mysql_fetch_array($result,MYSQL_ASSOC);      
                                           
                $checked = "checked";
            
            if(!$categoria['activo']){
                               
                $checked="";
            }   
       }            
      else{
          $checked = "checked";
      }
     
      
           
       ?>
        <div align="center" style="border: 1px; padding-top: 100px" >
        <div style="border: 1.5px solid blueviolet ; width: 30%; padding: 20px; background: #7EDEC2;" align="center" >
        
            <form action="guardarcategoria.php" method="POST" >
                
                <h2 align="center"><?php if (isset($_GET['categoria_producto_id'])){
                    echo "EDITAR CATEGORIA";    
                   
                }
                else {
                     echo "REGISTRAR NUEVA CATEGORIA"; 
                }
                ?></h2>
                <h3>Nombre 
              
                    <input type="hidden" name="id" value="<?php if (isset($_GET['categoria_producto_id'])) {echo $categoria['categoria_producto_id'];} ?>"/>
                    <input  type="text"  name="categoria" style="text-align: center;padding: 5px; font-style: normal; font-family: serif;"                          
                     size=30px      
                     value="<?php if(isset($_GET['categoria_producto_id'])){echo $categoria['nombre'];} ?>"
                     placeholder="categoria" autofocus /> <h3/>
                   
                     Activo : <input type="checkbox" name="activo"  <?php echo $checked; ?>
                                     /><br><br>
            
                     <input type="submit" value="GUARDAR" name="guardar"/>
                    <input type="submit" value="CANCELAR" name="cancelar"/>       
                     
                      
        </form>
            
            </div>
          </div>
    </body>
</html>
