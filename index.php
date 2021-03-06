<?php
// ROUTER
error_reporting(E_ALL);
ini_set('display_errors', 1);
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        require 'controllers/home.php';
        break;
    case '/webmaster-creation-site-vitrine':
        require 'controllers/webmaster-creation-site-vitrine.php';
        break;
    case '/consultant-seo':
        require 'controllers/consultant-seo.php';
        break;
    case '/mail':
        require 'controllers/mail.php';
        break;
    case '/conditions-generales':
        require 'controllers/conditions-generales.php';
        break;
    case '/mentions-legales':
        require 'controllers/mentions-legales.php';
        break;
    case '/prenoms':
        require 'controllers/prenoms/analyse-data.php';
        break;
    case '/cv':
        require 'CV/cv.php';
        break;
    default:
        require 'view/404.php';
}
