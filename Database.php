<?php 
class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = '') {
        
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = []){
        // this way ($query, $params=[]) my method is ready to accept 2 parameters and I can do this safely: query('select * from notes where id = :id', [':id' => $_GET['id']])->fetch();
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

      return $statement;
    }
}
?>