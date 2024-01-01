<?php 

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 3;

$note = $db->query('select * from notes where id = :id', [':id' => $_GET['id']])->findOrFail();

authorize($note['users_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);

?>
