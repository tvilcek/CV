<div class="card-user-profile">
  <img class="card-user-profile-img" src="slike/pattern_1.png" alt="picture of space" />
  <div class="card-user-profile-content card-section">
    <div class="card-user-profile-avatar">
      <img src="slike/profilna.JPG" alt="picture of yeti" />
    </div>
  </div>
</div>

<div class="row">
<div class="large-12 columns">
<table border="1" class="tablica">
  <thead>
    <tr>
      <th colspan="3">OSOBNE INFORMACIJE</th>
    </tr>
  </thead>
  <tbody>

<?php
      $izraz = $db -> prepare("select * from osobne_inf");  
      $izraz -> execute();
      $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
      foreach ($rezultati as $r) {?>

      <tr>
          <td><?php echo $r->naziv; ?> </td>
          <td><?php echo $r->vrijednost; ?></td>
          <td><a href='detalji_osobne_inf.php?id=<?php echo $r->id; ?>'>Detalji</a></td>
      </tr>
 <?php } ?>
      <tr>
       <td colspan="3"><a href='detalji_osobne_inf.php?id=0'>Dodaj novu informaciju</a></td>
      </tr>

</tbody>
</table>
</div>
</div>
<?php include 'podnozje.php'; ?>