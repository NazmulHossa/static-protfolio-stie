<?php 
class Database{
private $host = "localhost";
private $username= "root";
private $password = "";
private $database = "online_books_store";
public $conn;

public function __construct(){
    $this->conn= new mysqli ($this->host, $this->username, $this->password, $this->database);
    if($this->conn->connect_error){
     die("connection failed");
    }   
}
public function getConnection(){
return $this->conn;
}

}
class Books{
 private $dbConn;

 public function __construct($databaseConnection)
 {
    $this->dbConn=$databaseConnection;
 }
 public function getBooks(){
    $selectSql= "SELECT * FROM books";
    $result = $this->dbConn->query($selectSql);
    $fatchdata = $result->fetch_all(MYSQLI_ASSOC);
    $jsondata=json_encode($fatchdata);
    echo $jsondata;

 }
}
$database=new Database();
$databaseConnection=$database->getConnection();

$bookObj = new Books($databaseConnection);
$bookObj->getBooks();