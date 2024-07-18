<?php
include 'conexion.php'; // Aseg�rate de que este archivo contenga la conexi�n a la base de datos
$cmd = $_REQUEST["cmd"];


switch ($cmd){
    case 'insertaPersona':
        // Obtener los datos del formulario
        $nombre       = $_REQUEST["nombre"];
        $apellidos    = $_REQUEST["apellidos"];
        $idprofesion  = $_REQUEST["profesion"];
        $genero       = $_REQUEST["genero"];
        $correo       = $_REQUEST["correo"];
        $notificacion = $_REQUEST["notificaciones"]; 
        // Consulta SQL con par�metros el error era que le falta un parametro numero 6
        $sql = "INSERT INTO debugphp.persona(nombre, apellido, idprofesion, genero, notificacion, correo) 
                VALUES($1, $2, $3, $4, $5,$6) 
                RETURNING idpersona AS resultado";

        // Par�metros para la consulta
        $params = array($nombre, $apellidos, $idprofesion, $genero, $correo, $notificacion);

        // Ejecutar la consulta con pg_query_params
        $result = pg_query_params($conn, $sql, $params);
        $lastError = pg_last_error($conn);
        
        $response = array();
        die();
        // Verificar si hubo un error
        if ($lastError) {
            // Si hay un error, agregarlo al objeto de respuesta
            $response['success'] = false;
            $response['error'] = $lastError;

        } else {
            // Si la consulta se ejecut� correctamente, obtener el resultado
            $row = pg_fetch_object($result);
            $response['resultado'] = $row->resultado;
        }

        // Devolver la respuesta como JSON
        echo json_encode($response);
        break;
    
    default:
        // Si el comando no es reconocido, devolver un mensaje de error
        die("cmd incorrecto");
        break;
}
?>
