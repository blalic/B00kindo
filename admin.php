<?php
    session_start();
?>
<?php include 'header.php'; ?>
    <?php
        if(!(isset($_SESSION['admin']['user_id'])))
            header("Location: admin_log.php");
        else{
            include 'baza_conect.php';

            $podaci = $conn->query("SELECT * FROM proizvodi");
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);

            $gru = $conn->query("SELECT * FROM grupe");
            $grupe = $gru->fetch_all(MYSQLI_ASSOC);
            
            echo "<div class='admin'>";
            echo "<h1>SPISAK SVIH KNJIGA U BAZI</h1><br>";

            echo "<table border='1px'><thead><td>ID</td><td>KNJIGA</td><td>AUTOR</td><td>GODINA IZDANJA</td>><td>CENA</td><td>GRUPA</td><td>PROMENI</td><td>OBRISI</td></thead>";
            foreach ($niz as $podatak){
                echo "<tr><td>".$podatak['id']."</td><td>".$podatak['naziv_knjige']."</td><td>".$podatak['ime_autora']."</td><td>".$podatak['godina_izdanja']."</td><td>".$podatak['cena']."</td><td>".$podatak['grupa']."</td><td><a href='unos_forma.php?id=".$podatak['id']."'>promeni</a></td><td><a href='obrisi.php?id=".$podatak['id']."'>obrisi</a></td></tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<a href='unos_forma.php'>Unesi novu knjigu</a>";
            
            echo "<br><br>";
            echo "<h1>SPISAK GRUPA U BAZI KNJIGA</h1>";
            echo "<table border='1px'><thead><td>ID GRUPE</td><td>NAZIV GRUPE</td><td>PROMENI</td><td>OBRISI</td></thead>";
            foreach($grupe as $gr){
                echo "</td><td>".$gr['id_grupe']."</td><td>".$gr['naziv_grupe']."</td><td><a href='grupa_forma.php?id_grupe=".$gr['id_grupe']."'>promeni</a></td><td><a href='obrisi_gr.php?id_grupe=".$gr['id_grupe']."'>obrisi</a></td></tr>";
            }
            echo "</table><br>";
            echo "<a href='grupa_forma.php'>Dodaj novu grupu</a>";

            echo "<br><a href='logout.php'>logout</a>";

            echo "<div>";
        }
    
    include 'footer.php';
    
    ?>