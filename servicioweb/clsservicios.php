<?php
//NOMBRE DE LA CLASE
class clsservicios{
    //PROGRAMACIÓN DE MÉTODOS DE LA CLASE
    
    //LOS MÉTODOS SERÁN FUNCIONES PUBLICAS, EN ESTE CASO SE RECIBE UN PARÁMETRO
     public function nombre($nom)
     {
         //LOS DATOS QUE SE RETORNAS SON CADENAS O ARREGLOS DE CADENAS 
         //LOS CUALES PUEDEN SER REGRESADOR COMO ARRAY O ARCHIVOS JSON
         return "Bienvenido " .$nom .", estás usando el servicio web";
     }
     
     public function nombreUsuario($nom, $usu)
     {
        //Los datos que retornara son cadenas o arreglos de cadenas
        return "Bienvenido " . $nom . " [".$usu."] estas usando el servicio web";
     }

     public function calcPiramideHex($lado, $altura) {
        $volumen = (3 * sqrt(3) / 2) * pow($lado, 2) * $altura;
        return $volumen;
    }
}
?>