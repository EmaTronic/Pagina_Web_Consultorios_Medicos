<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//si tengo vacío mi elemento de sesion me tiene que redireccionar al login
// al cerrarsesion para mate todo de la sesion y el se encarga de ubicar en el login


//voy a necesitar la conexion: incluyo la funcion de Conexion.
require_once 'funciones/conexion.php';

//genero una variable para usar mi conexion desde donde me haga falta
//no envio parametros porque ya los tiene definidos por defecto
$MiConexion = ConexionBD();

//ahora voy a llamar el script con la funcion que genera mi listado
require_once 'funciones/select_personas.php';


//voy a ir listando lo necesario para trabajar en este script: 
$Lista_Personas = ListaDePersonas($MiConexion);
$CantidadPersonas = count($Lista_Personas);

for ($i=0 ; $i < $CantidadPersonas ; $i++) {
                                                
    
    $Lista_Personas[$i]['ID_PERSONA'];
    $Lista_Personas[$i]['NOMBRE'];
    $Lista_Personas[$i]['APELLIDO'];
    $Lista_Personas[$i]['DNI'];
    $Lista_Personas[$i]['NIVEL'];
    $Lista_Personas[$i]['ID_OBRA_SOCIAL'];
    
}


?>