<?php 
require_once 'Validator.php';

$config = require_once 'config.php';
$db = new Database($config['database']);

$heading = 'Create a Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];

    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)){
        $db->query('insert into notes (body, users_id) values(:body, :users_id)', [
            'body' => $_POST['body'],
            'users_id' => 3
        ]);
    }
}

require_once 'views/notes/create.view.php';

?>
