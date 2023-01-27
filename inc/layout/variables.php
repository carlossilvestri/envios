<?php
   //Web 1 (Web oculta) 11855. Web 2 (Web Normal) normal 919891120
   $phone = "919891120";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file); 
   $mainTitle = "Envíos Express";
    $titles = [
        "index.php" =>  $mainTitle . " - Inicio",
        "aviso-legal.php" =>  $mainTitle . " - Aviso Legal",
        "contacto.php" =>  $mainTitle . " - Contacto 24 horas",
        "politica-de-privacidad.php" =>  $mainTitle . " - Política de Privacidad",
        "servicios.php" =>  $mainTitle . " - Servicios"
    ];
    $pages = [
        "index.php" => "Inicio",
        "aviso-legal.php" => "Aviso Legal",
        "contacto.php" => "Información Contacto",
        "politica-de-privacidad.php" => "Política de Privacidad",
        "servicios.php" => "Servicios"
    ];
    $pagesHeader = [
        "index.php" => "Inicio",
        "servicios.php" => "Servicios de envío",
        "contacto.php" => "Contacto",
    ];
