<?php 
class Database {
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '') {
        
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = []){
        // this way ($query, $params=[]) my method is ready to accept 2 parameters and I can do this safely: query('select * from notes where id = :id', [':id' => $_GET['id']])->fetch();
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

      return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();

        if(! $result){
            abort(Response::NOT_FOUND);
        }
        return $result;
    }
}
?>