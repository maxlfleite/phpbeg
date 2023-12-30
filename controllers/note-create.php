<?php 

$config = require_once ('config.php');
$db = new Database($config['database']);

$heading = 'Create a Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $db->query('insert into notes (body, users_id) values(:body, :users_id)', 
    [
        'body' => $_POST['body'],
        'users_id' => 3
    ]
);
}

require_once 'views/note-create.view.php';

?>