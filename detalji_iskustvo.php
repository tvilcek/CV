<?php include 'zaglavlje.php';
include 'pdo.php';

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

if($id != 0){
    $query = $db->query("SELECT * FROM iskustvo WHERE id = $id");
    $rezultati = $query->fetchAll();
    $id = $rezultati[0]["id"];
    $trajanje = $rezultati[0]["trajanje"];
    $pozicija = $rezultati[0]["pozicija"];
    $ustanova = $rezultati[0]["ustanova"];

}else{
    $id = 0;
    $trajanje = "";
    $pozicija = "";
    $ustanova = "";
}

?>


<div class="card-user-profile">
  <img class="card-user-profile-img" src="slike/pattern_3.jpg" alt="picture of space" />
  <div class="card-user-profile-content card-section">
    <div class="card-user-profile-avatar">
      <img src="slike/profilna.JPG" alt="picture of yeti" />
    </div>
  </div>
</div>


<form  method="post" action="detalji_iskustvo_sql.php" enctype="multipart/form-data" name="form" id="forma-detalji">
    <div class="row">
    <div class="large-4 columns">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <label>Trajanje
        <input type="text"  name="trajanje" value="<?php echo $trajanje;?>"/>
      </label>
    </div>
    <div class="large-4 columns">
      <label>Pozicija
        <input type="text" name="pozicija" value="<?php echo $pozicija;?>"/>
      </label>
    </div>
    <div class="large-4 columns">
      <label>Ustanova (Tvrtka / Organizacija)
        <input type="text" name="ustanova" value="<?php echo $ustanova;?>"/>
      </label>
    </div>
  </div>
  
  <?php
  if($id != 0){?>

<div class="row">
  <div class="large-2 columns"><p></p></div>
  <div class="large-8 columns">
    <ul class="button-group even-2">
    <li> <input type="submit" name="submit" value="Uredi" class="button"></li>
    <li><input type="submit" name="submit" value="Obriši" class="button alert"></li>
    </ul>
  </div>
  <div class="large-2 columns"><p></p></div>
</div>
  

<?php 
} else {?>

  <div class="row">
    <div class="large-2 columns"><p></p></div>
    <div class="large-8 columns">
     <input type="submit" name="submit" value="Dodaj" class="button expand success">
    </div>
    <div class="large-2 columns"><p></p></div>
  </div>

<?php } ?>
  
</form>

<?php include 'podnozje.php'; ?>