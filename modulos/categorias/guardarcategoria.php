
 <?php
              require '../../database/conexionmysql.php';
                       
             
        if(isset($_POST['guardar'])){            
             
            $activo=1;
             $id= $_POST['id'];
             $categoria = $_POST['categoria'];
                                   
             if(!isset($_POST['activo']))
                    {  $activo=0;
                            }
           
                 if(!empty($id)){
                   
                  mysql_query("UPDATE categoria_productos SET nombre='".$categoria."', activo=".$activo." WHERE categoria_producto_id".'='."$id")
                 or die("la consulta malaaaaaaaaaaaa  ". mysql_error());
                  ?> 
                    <script type='text/javascript'>;                        
                              window.alert('SE ACTUALIZO CATEGORIA');
                              location.href='index.php';
                   </script>
                   <?php
                  }                 
                
            else {
                 mysql_query("insert into categoria_productos(nombre,activo)values('$categoria','$activo')")
                 or die("la consulta esta mal hecha  ". mysql_error());
                 
                 ?>
                   <script type='text/javascript'>;                        
                              window.alert('SE REGISTRO NUEVA CATEGORIA');
                              location.href='index.php';
                   </script>
                                
                   <?php
                
                 } 
                 
                 
             }
                            
              else if (isset($_POST['confirmar']))
              {
                  $id= $_POST['id'];
                   mysql_query("DELETE FROM categoria_productos where categoria_productos.categoria_producto_id".'='."$id")
                 or die("la consulta dee eliminar esta mal".mysql_error()); 
                     ?>                                 
                <script type='text/javascript'>;                        
                       location.href='index.php';
                   </script> 
              <?php    
              }


               else{ 
                  ?>                                 
                <script type='text/javascript'>;                        
                       location.href='index.php';
                   </script> 
                   <!-- console.log(variable)  permite depurar si existe una falla en javascript -->
                   
              <?php              
                
             }  



                       