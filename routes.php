<?php 
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

return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/contact' => 'controllers/contact.php'
];

?>