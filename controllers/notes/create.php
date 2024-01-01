<?php 
//require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

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

view("notes/create.view.php", [
    'heading' => 'Create a Note',
    'errors' => $errors
]);

?>
