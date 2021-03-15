<?php
    include 'baza_conect.php';
    
    $podaci = $conn->query("SELECT * FROM proizvodi");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);

    $id = $_GET['id'];

    $upit = $conn->query("DELETE FROM `proizvodi` WHERE id = $id");
    if($upit===false)
        echo "brisanje neuspelo!<br>";
    else
        echo "brisanje uspelo!<br>";
    
    echo "<a href='admin.php'>Povratak na admin stranicu</a>";

?>