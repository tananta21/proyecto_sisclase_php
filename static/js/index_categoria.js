


            function eliminar(id, nombre){
                var respuesta = confirm("estas seguro que desea elimiar?"+nombre);
                if(respuesta){
                    location.href="categoriaeliminado.php?categoria_producto_id="+id;
                    return true;                   
                }
                else{
                    return false;
                }
            }
        
