<?php 

class Database { 
	private $dbName = "dbuserapi" ;
	private $dbHost = "localhost" ;
	private $dbUsername = "root"; 
	private $dbUserPassword = ""; 
	private $pdo = null;
	private $results = array();

	public function __construct() {} 

	public function connect() 
	{ 
		if ( $this->pdo == null ) { 
			try { 
				$this->pdo = new PDO( "mysql:host=$this->dbHost; dbname=$this->dbName", $this->dbUsername, $this->dbUserPassword); 	
			} catch (PDOException $e) {
				die($e->getMessage()); 
        }
       }
       return $this->pdo;
    }  
    public function disconnect()
    {
        $this->pdo = null;
    }

	public function getAllUser()
    {
    		$sql = $this->pdo->prepare("SELECT * FROM user ");
			$sql->execute();
			$results = $sql->fetchAll();	
    		return $results;
    }

    public function getUserById() {
    	$sql = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
		$sql->bindParam(':id', $_GET['id']);
		$sql->execute();
		$result = $sql->fetchAll();	
    	return $result;
    }
}
