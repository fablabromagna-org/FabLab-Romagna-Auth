<?php
  require_once('inc/autenticazione.inc.php');
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <?php
      require_once('inc/header.inc.php');
    ?>
    <link type="text/css" rel="stylesheet" media="screen" href="/css/dashboard.css" />
  </head>
  <body>
    <?php
      include_once('inc/nav.inc.php');
    ?>
    <div id="contenuto">
      <h1>Ciao <?php echo $autenticazione -> nome ?></h1>
      <div id="contenitoreBox">
        <?php
          // Estraggo i box della dashboard
          $sql = "SELECT * FROM dashboard ORDER BY id ASC";

          // Eseguo la query
          if($query = $mysqli -> query($sql)) {

            // Stampo i box
            while($row = $query -> fetch_assoc()) {

              if($row['tipo'] == 2) {
              ?>
              <div class="box">
                <div class="titolo">
                  <p><?php echo $row['titolo'] ?></p>
                </div>
                <div class="descrizione">
                  <p><?php echo $row['descrizione'] ?></p>
                </div>
              </div>
              <?php
              } else {
              ?>
              <div class="box">
                <div class="titolo">
                  <p><?php echo $row['titolo'] ?></p>
                </div>
                <div class="descrizione">
                  <p><?php echo $row['descrizione'] ?></p>
                  <a href="<?php echo $row['linkBottone'] ?>" target="_blank" class="button"><?php echo $row['titoloLink'] ?></a>
                </div>
              </div>
              <?php
              }
            }

          // Errore nell'estrazione dei box dalla dashboard
          } else
            echo '<p style="margin-top: 20px">Impossibile caricare la dashboard (errore durante la comunicazione col database).</p>';
        ?>
        <!-- <div class="box">
          <div class="titolo">
            <p>Macchinari</p>
          </div>
          <div class="descrizione">
            <p>Non hai nessuna prenotazione aperta.</p>
            <a href="/macchinari/" class="button">Vai ai Macchinari</a>
          </div>
        </div>-->
        <div class="box">
          <div class="titolo">
            <p>Attività svolte</p>
          </div>
          <div class="descrizione">
            <p>Puoi vedere tutte le attività che hai svolto presso FabLab Romagna e che ti sono state riconosciute alla pagina "Attività".</p>
            <a href="/account/attivita.php" class="button">Vai ad Attività</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include_once('inc/footer.inc.html');
    ?>
  </body>
</html>