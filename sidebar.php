<?php

    include 'baza_conect.php';
    
    $gru = $conn->query("SELECT * FROM grupe");
    $grupe = $gru->fetch_all(MYSQLI_ASSOC);

    echo "<h2>ZANROVI</h2>";
    echo "<table border='1px'>";
    foreach($grupe as $gr){
        echo "<tr><td><a href='pokazi_grupu.php?id=".$gr['id_grupe']."'>".$gr['naziv_grupe']."</a></td></tr>";
    }
    echo "</table>";

?>