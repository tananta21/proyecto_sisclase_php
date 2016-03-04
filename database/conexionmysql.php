
<?php

if (!$conexion= mysql_connect("localhost","root","")){

    "se ha producido un error";
    }

    else{
        
          echo "<p></p>"; echo "<p></p>";
       
         mysql_select_db("database001",$conexion);
        
    }
