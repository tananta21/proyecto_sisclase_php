
<?php  

if(isset($_GET['categoria_producto_id'])){
    
    require '../../database/conexionmysql.php';
    
    $id=$_GET['categoria_producto_id'];
    mysql_query("delete from categoria_productos where categoria_producto_id = ".$id)
            or die ("se esta eliminando mal".mysql_error());
   
    
}
 ?>

<script>
    location.href='index.php';
</script>
