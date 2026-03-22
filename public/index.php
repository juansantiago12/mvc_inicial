<?php

/**
 * -------------------------------------------------------------------------
 * FRONT CONTROLLER - PUNTO DE ENTRADA ÚNICO
 * -------------------------------------------------------------------------
 * * Este archivo centraliza todas las peticiones de la aplicación.
 * * NOTAS SOBRE EL ENTORNO (WSL / UBUNTU):
 * 1. Servidor de Desarrollo (php -S localhost:8000 -t public):
 * - Al usar el flag '-t public', la carpeta 'public' se convierte en la raíz (/).
 * - Los assets (CSS/JS) deben llamarse como '/css/style.css', NO '/public/css/...'.
 * - El servidor interno de PHP redirige automáticamente rutas inexistentes a 
 * este index.php, actuando como un ruteador básico.
 * * 2. Entorno de Producción (Apache/Nginx):
 * - En Apache, el archivo .htaccess es OBLIGATORIO para habilitar mod_rewrite
 * y simular este comportamiento de "embudo" hacia index.php.
 * - En Nginx, se requiere configurar 'try_files' en el bloque del servidor.
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unico punto de acceso a la aplicacion</h1>
</body>
</html>