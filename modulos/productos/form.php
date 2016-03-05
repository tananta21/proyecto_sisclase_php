

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <div style=" position: absolute; top: 50%; left: 50%;
                    width: 600 px;
                    height: 350px;
                    margin-top: -250px;
                    margin-left: -250px; ">
        <div style="border: 1.5px solid black; padding: 20px">
        <form method="POST" action="guardar_producto.php"> 
            
            Categoria Producto :
            <select name="categoria" required autofocus>
                <option>seleccione categoria</option>
                <?php
                require '../../database/conexionmysql.php';
                $q= " select * from categoria_productos";
                $query = mysql_query($q);
                 while($l = mysql_fetch_array($query,MYSQL_ASSOC)){
                     ?>
                 
                <option><?php echo $l['nombre']?></option>
                
                <?php } ?>
            </select>  <br><br>
             
            Nombre:<br>
            <input type="text" name="nombre" placeholder="nombre producto" size="50px" style="padding: 5px; 
                   text-transform:uppercase" /> <br><br>
            
             Stock : 
            <input type="number" min="0" max="500" name="stock"/>
            
            Sexo : 
             <select name="sexo">
                 <option value="M">Seleccione sexo</option>
                 <option value="M">MASCULINO</option>
                 <option value="F">FEMENINO</option>
                 <option value="O">AMBOS</option>
                 
             </select><br><br>
           
            Estado:<br>
            <input type="checkbox" name="estado" checked/>Activo<br><br>
             IGV:<br>
             <input type="checkbox" name="igv"/>Activo <br><br>
             
             <fieldset align="center" style="border: 0.1px">
                 <label style="padding: 10px"><input type="submit" name="cancelar" value="CANCELAR"/></label>
                 <label style="padding: 10px;" ><input type="submit" name="guardar" value="GUARDAR"/> </label>
             </fieldset>
            
            
        </form>
         
        </div>
       </div>

    </body>
</html>

