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
    '/phpbeg/' => 'controllers/index.php',
    '/phpbeg/about' => 'controllers/about.php',
    '/phpbeg/notes' => 'controllers/notes.php',
    '/phpbeg/note' => 'controllers/note.php',
    '/phpbeg/notes/create' => 'controllers/note-create.php',
    '/phpbeg/contact' => 'controllers/contact.php'
];

?>