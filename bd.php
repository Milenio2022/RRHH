<?php
$servidor="localhost";
$baseDeDatos="RRHH";/*nombre de la base de datos */
$usuario="root";
$contrasenia="";

try{
    
    $conexion=new  PDO("mysql:hots=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    echo "Conexion realizada";
    
}catch(Exception $error){
    echo $error->getMessage();
}
?>
