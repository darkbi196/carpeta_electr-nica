<?php 

    function modificarUsuario($idUsuario, $contrasena, $calle, $colonia, $ciudad, $estado, $pais, $escolaridadMAX){

//contraseña, dirección(calle, colonia, cuidad, estado, país), escolaridad, 
        include("conexion.php");

        $sql = "UPDATE usuarios SET  contrasena = '+$contrasena + ', calle = ' +$calle + ',colonia= '+$colonia+ 
           ',ciudad= ' +$ciudad+', estado= '+$estado+', pais= '+$pais+', escolaridadMAX= '+$escolaridadMAX+' WHERE  idUsuario='+$idUsuario;

        if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}

            $usuarioExiste = $db->affected_rows;

            if($usuarioExiste == 0)
            {

                echo "<script>alert('El usuario no está registrado.')</script>";
                $db->close();

            }
        $db->close();

    }

?>