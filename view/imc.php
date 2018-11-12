<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>IMC</title>
        <link rel="stylesheet" href="../view/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <script src="view/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="../view/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../view/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
   <body>
        <div class="jumbotron text-center">
            <h1>ÍNDICE DE MASA CORPORAL</h1>
            <p>Controle su peso para vivir mejor!</p> 
            <?php
            session_start();
           if (isset($_SESSION['mensaje'])) {
           
               ?>
            <div class="alert alert-info">
  <strong>!</strong>
      <?php echo ''.$_SESSION['mensaje'];?>
</div>
     <?php      }
           if (isset($_SESSION['mensajeError'])) {
           
               echo ''.$_SESSION['mensajeError'];
           }

            ?>
            <form action="../controller/controllerIMC.php">
                <input type="hidden" name="opcion" value="regresar" />
               
                <button class="btn btn-primary" >CALCULAR DE NUEVO</button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Beneficios</h3>
                    <p>Disminución del colesterol</p>
                    <p>Disminuye la presión arterial</p>
                    <p>Mejora significativa de la movilidad física</p>
                    <p>Prevención de patologías cardíacas</p>
                    <p>Prevención de desarrollar artritis</p>
                    <p>Mejora de la calidad de vida</p>
                 </div>
                <div class="col-sm-4">
                    <h3>Enfermedades</h3>
                    <p>Enfermedad coronaria..</p>
                    <p>Diabetes tipo 2..</p>
                    <p>Cáncer..</p>
                    <p>Hipertensión..</p>
                    <p>Dislipidemia..</p>
                    <p>Accidente cerebrovascular..</p>
                    <p>Enfermedad del hígado y de la vesícula..</p>
 
                </div>
                <div class="col-sm-4">
                    <h3>Causas</h3> 
                    <p>Mala alimentación..</p>
                    <p>Falta de ejercicio..</p>
                    <p>Enfermedades hereditarias..</p>
                </div>
            </div>
        </div>
    </body>
</html>
