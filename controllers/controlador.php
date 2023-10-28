<?php
#Declaramos un a clase Mvccontroller con un método público que se llama plantilla
class Mvccontroller{
    /* Include es una sentencia que permite incluir el contenido de un archivo externo dentro de otro archivo */
    public function plantilla(){
        include "views/plantilla.php";
    }
    #Usuario-interacion
    public function enlacesPagController(){
    $enlacesController= $_GET["action"];
    echo $enlacesController;
    #Enviando esta información al modelo para que realice las operaciones 
    $respuesta=EnlacesPag::enlacesPagController($enlacesController);
    #:: es para heredar la clase Enlaces Pag y el modelo enlacesPagModel
}
}

?>