<?php
 
class Database {
 
    protected $host;
    protected $db;
    protected $username;
    protected $pass;
 
    public function __construct($host, $db, $username, $pass) {
        $this->host = $_host;
        $this->db = $db;
        $this->username = $username;
        $this->pass = $pass;
    }
 
    public function PDOConnexion() {
        $bdd = new PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->username, $this->pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
 
 
?>