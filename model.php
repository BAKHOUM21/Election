<?php
require 'config.php';
class Election 
{
    
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "gestionelection";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password,$this->db);

        }catch(Exception $e){
            echo "connection echoué" . $e->getMessage();
        }
    }

    public function inscrire()
    {
        if(isset($_POST['submit'])){
            if(isset($_POST['numelecteur']) && 
            isset($_POST['cni']) && 
            isset($_POST['nomelecteur']) && 
            isset($_POST['prenomelecteur']) && 
            isset($_POST['nompere']) &&
            isset($_POST['nommere']) &&
            isset($_POST['datenaissance']) &&
            isset($_POST['lieunais']) &&
            isset($_POST['mdp']) &&
            isset($_POST['departement']) &&
            isset($_POST['state']) &&
            isset($_POST['city']) &&
            isset($_POST['bureau'])){ 
                if(!empty($_POST['numelecteur']) &&
                    !empty($_POST['cni']) &&
                    !empty($_POST['nomelecteur']) &&
                    !empty($_POST['prenomelecteur']) &&
                    !empty($_POST['nompere']) &&
                    !empty($_POST['nommere']) &&
                    !empty($_POST['datenaissance']) &&
                    !empty($_POST['lieunais']) &&
                    !empty($_POST['mdp']) &&
                    !empty($_POST['departement']) &&
                    !empty($_POST['state']) &&
                    !empty($_POST['city']) &&
                    !empty($_POST['bureau'])){
                   
                 $numelecteur = $_POST['numelecteur'];   
                 $cni = $_POST['cni'];
                 $nomelecteur = $_POST['nomelecteur'];
                 $prenomelecteur = $_POST['prenomelecteur'];
                 $nompere = $_POST['nompere'];
                 $nommere = $_POST['nommere'];
                 $datenaissance = $_POST['datenaissance'];
                 $lieunais = $_POST['lieunais'];
                 $mdp = $_POST['mdp'];
                 $departement = $_POST['departement'];
                 $state = $_POST['state'];
                 $city = $_POST['city'];
                 $bureau = $_POST['bureau'];


		
                 $query = "INSERT INTO ele (num_electeur,cni_election,nomelecteur,prenomelecteur,nompere,nommere,datenaissance,lieudenaissance,mdp,departement,arrondissement,commune,bureau) VALUES ('$numelecteur', '$cni', '$nomelecteur','$prenomelecteur','$nompere','$nommere','$datenaissance','$lieunais','$mdp','$departement','$state','$city','$bureau')";
                //  $query = "SELECT * FROM ele";
                    if($sql = $this->conn->query($query)){
                        echo "Enregistrement reussi";
                      //  $query = "SELECT * FROM ele";
                }else{
                    echo "<script>alert('Veuillez remplir tous les champs');</script>";
                    echo  "<script>window.location.href = 'index.php';</script>";
                }
            }
         }
    }

}
}



?>