<?php 

require_once ('functions.php');
require_once 'Database.php';

//require "router.php";

// connect to our MySQL database.
// Connect to database and execute a query.


$db = new Database();
$posts = $db->query("select * from phpforbeg")-> fetchAll(PDO::FETCH_ASSOC);

dd($posts);
?>