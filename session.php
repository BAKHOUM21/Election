<?php
require 'config.php';
  $db= new database();
  $query= $db->PDOConnexion();
  // récupérer tous les utilisateurs
  
        $sql = "SELECT * FROM ele";
        
        try{
        // $pdo = new PDO($dsn, $username, $password);
        $stmt = $db>query($sql);
        
        if($stmt === false){
            die("Erreur");
        }
        
        }catch (PDOException $e){
            echo $e->getMessage();

        }
       

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
<body style="background-color:silver;color:#382020;">
<div class="container">
 <h1>Liste des electeurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>numero electeur</th>
       <th>CNI</th>
       <th>nom electeur</th>
       <th>prenom electeur</th>
       <th>Date de naissance</th>
       <th>Lieu de naissance</th>
       <th>departement</th>
       <th>arrondissement</th>
       <th>Commune</th>
       <th>Bureau</th>
       

     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id_electeur']); ?></td>
       <td><?php echo htmlspecialchars($row['num_electeur']); ?></td>
       <td><?php echo htmlspecialchars($row['cni_election']); ?></td>
       <td><?php echo htmlspecialchars($row['nomelecteur']); ?></td>
       <td><?php echo htmlspecialchars($row['prenomelecteur']); ?></td>
       <td><?php echo htmlspecialchars($row['datenaissance']); ?></td>
       <td><?php echo htmlspecialchars($row['lieudenaissance']); ?></td>
       <td><?php echo htmlspecialchars($row['departement']); ?></td>
       <td><?php echo htmlspecialchars($row['arrondissement']); ?></td>
       <td><?php echo htmlspecialchars($row['commune']); ?></td>
       <td><?php echo htmlspecialchars($row['bureau']); ?></td>
       
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 </div>
</body>
</html>