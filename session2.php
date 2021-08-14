<?php
require 'model.php';
class database
{
 public $Host;
 public $user ;
 public $pass ;
 public $db ;
 public $link;

 public function __construct($Host,$user,$pass,$db){
 $this->Host= "localhost";
 $this->user= "root";
 $this->pass= "";
 $this->db= "gestionelection";

 }
public function getDB(){
   if ($this->link == null){
       $this->link = new \PDO("mysql:dbname=".$this->db.";host=".$this->Host, $this->user, $this->pass);
       $this->link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
   }
       return $this->link;
}
   // try{
   //    $pdo = new PDO($this->link, $user, $pass);
   //    $stmt = $pdo->query($sql);
      
   //    if($stmt === false){
   //        die("Erreur");
   //    }
      
   //    }catch (PDOException $e){
   //        echo $e->getMessage();

   //    }
   //  $this->connect();
   //  $this->select();

 
 private function connect()
 {
  
   $this->link = new mysqli($this->Host, $this->user, $this->pass, $this->db);
    return $this->link;
 }

 public function select()
 {
   $sql = "SELECT * FROM ele";
        
        
    $result = $this->link->query($sql) or die($this->link->error.__LINE__);

    if($result->num_rows>0)
    {
      return $result;
    } 
    else 
    {
      return false;
    }
    echo "<table>";
     echo "<tr>";
        echo "<th>ID </th>";
        echo "<th>Nom electeur </th>";
     echo "</tr>";
     while($row = mysqli_fetch_array($result)) 
     {
        echo "<tr>";
        echo "<td> $row[id_electeur]</td>";
        echo "<td> $row[nomelecteur]</td>";
        echo "</tr>";
     }
   echo "</table>";
    
 }
    }
 ?>