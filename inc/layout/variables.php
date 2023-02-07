<?php
   //Web 1 (Web oculta) 11828. Web 2 (Web Normal) normal 931350811
   $phone = "11828";
   $file = basename($_SERVER['PHP_SELF']);
   $page = str_replace(".php", "", $file);
   $footerInformation = "Servicio de Información telefónica prestado por Duck Telecomunicaciones S.L. 3,03€ impuestos incluidos es el coste por minuto de esta llamada"; 
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
