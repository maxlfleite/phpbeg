<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($_SERVER);
/*
This is the first lógic. The working refactored one is down bellow.
if ($uri === '/phpbeg/') {
    require ('controllers/index.php');
}
elseif ($uri === '/phpbeg/about') {
    require ('controllers/about.php');
}
elseif ($uri === '/phpbeg/contact') {
    require ('controllers/contact.php');
}
*/

$routes = [
    '/phpbeg/' => 'controllers/index.php',
    '/phpbeg/about' => 'controllers/about.php',
    '/phpbeg/contact' => 'controllers/contact.php'
];

function routeToController ($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require ($routes[$uri]);
    } else {
    //The "else" is to control pages that don't exist.
       abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require ("views/{$code}.php");
    die();

}

routeToController ($uri, $routes);

?>