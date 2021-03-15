<?php
    include 'baza_conect.php';
    
    $podaci = $conn->query("SELECT * FROM grupe");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);

    $id_grupe = $_GET['id_grupe'];

    $upit = $conn->query("DELETE FROM `grupe` WHERE id_grupe = $id_grupe");
    if($upit===false)
        echo "brisanje neuspelo!<br>";
    else
        echo "brisanje uspelo!<br>";
    
    echo "<a href='admin.php'>Povratak na admin stranicu</a>";

?>