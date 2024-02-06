<?php

    require_once ( "core.php" );
    
    $lab = new Adaptowebs;
    
    $lab -> errors ();

    page (
            
            $lab 
        
        ,
    
            Element::get ( "title" , "adaptowebs" ) 
        
        ,
        
            Element::get ( "h1" , "Js Practica 1." ) .
            
            Element::get ( "script" , '
                function ponerTituloRojo() {document.getElementById("titulo").style="color: red";}
                function ponerTituloBlanco() {document.getElementById("titulo").style="color: white";}
            ' , 'defer') .
            
            Element::get ( "h1" , "Bienvenido a JavaScript TOTAL" , 'id="titulo" onmouseover="ponerTituloRojo();" onmouseout="ponerTituloBlanco();"') .
            
            Element::get ( "h2" , "El primer paso es el más grande") .
            
            Element::get ( "p" , "Esta página es muy sencilla") .
            
            Element::get ( "p" , "(pero tiene un secreto >>> Presiona F12)" )
            
    );

?>
