<?php
    if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name']))
    {
        $tipo = $_FILES['nombre_archivo_cliente']['type'];
        if($tipo == "image/jpg" or $tipo == "image/jpeg" or $tipo == "image/gif" or $tipo == "image/png"){
            $nombreDirectorio = "archivos/";
            $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
            $nombreCompleto = $nombreDirectorio . $nombrearchivo;
            if (is_file($nombreCompleto)){
                $idUnico = time();
                $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
            }
    
            move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio.$nombrearchivo);
    
            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
        }else{
            echo "El archivo no tiene un formato valido, por favor suba un jpg, jpeg, gif o png";
        }
        
    }
    else
        echo "No se ha podido subir el archivo <br>";
?>