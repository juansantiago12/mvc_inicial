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




require_once __DIR__ . '/../autoload.php';
require_once __DIR__ . '/../routes/web.php';

echo '<br>';
echo 'Hola desde el index.php';
