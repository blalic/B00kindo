<?php
    session_start();
?>

    <?php include 'header.php'; ?>
    <div class='korpa'>
        <?php
            require 'korpa_klasa.php';
            $korpa = new korpa();
            // echo $korpa;
            echo "<div class='korpa'>";

            echo "<center><br><a href='brisi_korpu.php'>OBRISI KORPU</a></center>";
            echo "<center><br><form action='snimi_korpu.php' method='POST'><input type='submit' value='SNIMI KORPU'></form></center><br>";

            // session_destroy();

            echo "<div class='table'><table border='1px'><thead><tr><td>KNJIGA</td><td>CENA</td><td>KOLICINA</td><td>UKUPNO</td><td>OBRISI</td><td>DODAJ</td></tr></thead>";
            foreach ($_SESSION['stavke_korpe'] as $stavka){
                $ukupno = $stavka['cena']*$stavka['kolicina'];
                echo "<tr><td>{$stavka['naziv']}</td><td>{$stavka['cena']}</td><td>{$stavka['kolicina']}</td><td>{$ukupno}</td><td><a href='brisi.php?id=".$stavka['id']."'>obrisi</a></td><td><a href='dodaj.php?id=".$stavka['id']."'>dodaj</a></td></tr>";
            }
            echo "</table></div>";

            echo "</div>";
        ?>
    </div>

    <?php include 'footer.php'; ?>