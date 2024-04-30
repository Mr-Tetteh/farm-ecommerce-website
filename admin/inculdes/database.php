<?php require_once "new_config.php"; ?>

<?php
class Database{

    public $connection;

    function __construct(){
        $this->open_db_connection();

    }

    public function open_db_connection(){

        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


        if($this->connection->errno){
            die("Database failed badly Wini" . $this->connection->errno);
        }
    }

    public function query($sql){
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    public function confirm_query($result){
        if(!$result){
            die('Query failed' .$this->connection->error);
        }
    }


    public function escape_string($string){
        return $this->connection->real_escape_string($string);
    }

    public function the_insert_id(){
        return mysqli_insert_id($this->connection);

    }
}

$database = new Database();


?>