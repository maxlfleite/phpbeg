<?php 

$routes = require_once 'routes.php';

//dd($_SERVER);


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

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController ($uri, $routes);

?>