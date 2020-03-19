<?php
    
    try{
         $conexion = new PDO('mysql=localhost:3306;dbname=login_tuto', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>