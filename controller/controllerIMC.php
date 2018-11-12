<?php
require_once '../model/ModelIMC.php';
session_start();

$imc = new ModelIMC();
$opcion = $_REQUEST['opcion'];

switch ($opcion) {
    case "calcular":
        try {
              $peso=$_REQUEST['peso'];
        $altura=$_REQUEST['altura'];
         //obtenemos la lista de productos:
        $estado = $imc->calcularIMC($altura, $peso);
        $mensaje=$imc->estadoPersonal($estado);
        //y los guardamos en sesion:
        $_SESSION['mensaje'] = $mensaje;
        header('Location: ../view/imc.php');
        } catch (Exception $ex) {
            $_SESSION['mensajeError']=$ex->getMessage();
        }
        
     
       
        break;
    case "regresar":
        try {
          header('Location: ../index.php');
        } catch (Exception $ex) {
            
        }
        
     
       
        break;
    default :

}