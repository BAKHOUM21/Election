<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Dynamic Dependent Select Box using jQuery, Ajax and PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="font-family:Times New Roman;">
<?php
  include_once 'config.php';
  $query = "SELECT * FROM country Order by country_name";
  $result = $db->query($query);
?>
<div class="container bg-danger">
    <?php

        include 'model.php';
        
        $model = new Election();
        $insert = $model->inscrire();

        ?>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <form method="POST">
         <div class="form-group">
        <label for="">Num electeur</label>
          <input type="number" name="numelecteur" class="form-control">
        </div>
        <div class="form-group">
        <label for="">CNI electeur</label>
          <input type="number" name="cni" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nom</label>
          <input type="text" name="nomelecteur" class="form-control">
        </div>

        <div class="form-group">
        <label for="">Prenom</label>
          <input type="text" name="prenomelecteur" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Prenom du pére</label>
          <input type="text" name="nompere" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nom de la mére</label>
          <input type="text" name="nommere" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Date de naissance</label>
          <input type="date" name="datenaissance" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Lieu de naissance</label>
          <input type="text" name="lieunais" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Mot de passe</label>
          <input type="password" name="mdp"  class="form-control">
        </div>

        <div class="form-group">
          <label for="">Département</label>
          <select name="departement" id="country" class="form-control" onchange="FetchState(this.value)"  required>
          <?php
            if ($result->num_rows > 0 ) {
               while ($row = $result->fetch_assoc()) {
                echo '<option value='.$row['id'].'>'.$row['country_name'].'</option>';
               }
            }
          ?> 
          </select>
        </div>
        <div class="form-group">
          <label for="">Arrondissement</label>
          <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
            <option>Selection arrondissement</option>
            <!-- <option value="dakar_plateau">Dakar plateau</option>
            <option value="grand_dakar">Grand Dakar </option>
            <option value="pa">Parcelles Assainies </option>
            <option value="almadies">almadies</option>
            <option value="niayes">Niayes </option>
            <option value="pikine_dagoudane">Pikine Dagoudane </option>
            <option value="thiaroye">Thiaroye </option>
            <option value="wakhinane">wakhinane </option>
            <option value="Sahm">Sahm </option> -->

          </select>
        </div>

        <div class="form-group">
          <label for="">Commune</label>
          <select name="city" id="city" class="form-control">
            <option>Selection commune</option>
            <!-- <option value="dalifort">Dalifort</option>
            <option value="diamaguene">Diamaguene Sicap Mbao</option>
            <option value="guinaw_rail_nord">Guinaw rail Nord</option>
            <option value="sandaga">Sandaga</option>
            <option value="wakhinane">wakhinane </option>
            <option value="Sahm">Sahm </option> -->

          </select>
        </div>

        <div class="form-group">
            <label for="">Bureau de vote</label>
            <input type="number" name="bureau" class="form-control">
        </div>
        

        <div class="form-group mt-3">
           <input type="submit" name="submit" value="ENREGISTRER"class="form-control" style="background-color:#2ee222;">
        </div>
      </form>
  </div>
  </div>
</div>
<script type="text/javascript">
  function FetchState(id){
    $('#state').html('');
    $('#city').html('<option>Select City</option></br>
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { country_id : id},
      success : function(data){
         $('#state').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { state_id : id},
      success : function(data){
         $('#city').html(data);
      }

    })
  }
  function Fetchbureau(id){ 
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { city_id : id},
      success : function(data){
        $('#bureau').html(data);
      }
    })
  }
  

  
</script>
</body>
</html>
