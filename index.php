<?php 

require ('functions.php');

//require "router.php";

// connect to our MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=phpbeg;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statment = $pdo->prepare("select * from maxdatabase");

$statment->execute();

$posts = $statment->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>".$post['Title']."</li>";
}
?>