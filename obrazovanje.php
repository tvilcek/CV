<?php include 'zaglavlje.php';
?>

<div class="card-user-profile">
  <img class="card-user-profile-img" src="slike/pattern_4.png" alt="picture of space" />
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
      <th>Trajanje</th>
      <th>Stupanj</th>
      <th colspan="2">Obrazovna ustanova</th>
    </tr>
  </thead>
  <tbody>

<?php
      $izraz = $db -> prepare("select * from obrazovanje");  
      $izraz -> execute();
      $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
      foreach ($rezultati as $r) {?>

      <tr>
          <td><?php echo $r->trajanje; ?> </td>
          <td><?php echo $r->stupanj; ?></td>
          <td><?php echo $r->ustanova; ?></td>

          <td><a href='detalji_obrazovanje.php?id=<?php echo $r->id; ?>'>Detalji</a></td>
      </tr>
 <?php } ?>
     <tr>
     <td colspan="4"><a href='detalji_obrazovanje.php?id=0'>Dodaj novu informaciju</a></td>
     </tr>

</tbody>
</table>
</div>
</div>
<?php include 'podnozje.php';
?>
