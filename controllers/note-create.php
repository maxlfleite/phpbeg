<?php 
$heading = 'Create a Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    dd($_POST);
}

require_once 'views/note-create.view.php';

?>