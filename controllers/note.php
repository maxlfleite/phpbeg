<?php 

$config = require_once ('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 3;

$note = $db->query('select * from notes where id = :id', [':id' => $_GET['id']])->findOrFail();

authorize($note['users_id'] === $currentUserId);

require "views/note.view.php";

?>
