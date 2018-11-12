<?php

class ModelIMC {

    
    
    public function  calcularIMC($altura,$peso){
        try {
        if($altura!=null&&$peso!=null)
        {
            $estatura=$altura*$altura; 
           
         
         $imc= ($peso/$estatura); 
         $mensaje=$imc+"";
        }else
        {
            $mensaje="VALORES FALSOS";
        }
            
        } catch (Exception $ex) {
            
        } 
    

        return $mensaje;
    }
    public function estadoPersonal($peso){
         if ($peso<18.5) {
            $estado="BAJO PESO";
        } else if ($peso>=18.5 && $peso<=24.9) {
           $estado="NORMAL";
        } else if ($peso>=25 && $peso<=29.9) {
            $estado="SOBREPESO";
        } else {
            $estado="OBESIDAD";
        }
        return $estado;
    }
    
}
