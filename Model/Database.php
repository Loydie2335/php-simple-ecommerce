<?php 
class Database{

    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $db_name = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct()
    {
        try {
            $this->dbh = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
        } catch (Exception $ex) {
           $this->error = $ex->getMessage();
        }
    }

    public function queryWithArrayResult($query){
        $this->stmt = mysqli_query($this->dbh,$query);
        return mysqli_fetch_all($this->stmt,MYSQLI_ASSOC);
    }   

    public function query($query){
        return $this->stmt = mysqli_query($this->dbh,$query);
    }

    public function single($query){
        $this->stmt = mysqli_query($this->dbh,$query);
        return $row['key'] = $this->stmt->fetch_assoc();
    }

    public function getLastInsertedId(){
        return mysqli_insert_id($this->dbh);
    }
}
?>