<?php 

$config = require_once ('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes where users_id = 3')->get();

require "views/notes.view.php";

?>