<?php
//definicion de las cariables de conexion a la base de datos
$SERVER_NAME ="localhost";
$USER = "root";
$PASSWORD= "gersondev";
$DB_NAME= "conferenceDB";

// creamos la conexion a la base de datos
$cone = new mysqli($SERVER_NAME,$USER, $PASSWORD, $DB_NAME );

// validamos si existe algun error con la base de datos
if ($cone ->  conect_error) {
    die ("Conexion Fallida: " . $cone-> conect_error );
}

// verificar si se han enviados los datos
$name = $_POST["name"];
$email = $_POST["email"];

//preparamos la consulta para insertar los datos a la tabla 
$sql = "INSERT INTO users (name, email) VALUES('$name', '$email')"; 

//ejecutamos la consulta y verdificamos si se ha insertado correcatmente 
if ($cone->query($sql)===TRUE){
    echo "Has reservado tu cupo paera la conferencia";
}
else {
    echo "No te has registraso correctamente";
}

?>


