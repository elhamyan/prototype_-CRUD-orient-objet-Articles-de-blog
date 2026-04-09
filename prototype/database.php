   <?php
 class Database{
    private $host="localhost";
    private $dbname="blogdb";
    private $username="root";
    private $password="";
    public $conn;
    public function getConnection(){
        $this->conn=null;
        try{
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->conn = new PDO($dsn,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "connexion ruesser";
        }catch(PDOException $e){
            echo "error :". $e->getMessage();
        }
        return $this->conn;
    }
}