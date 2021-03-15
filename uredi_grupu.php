<?php
    include 'baza_conect.php';

    $id_grupe = $_POST['id'];
    $naziv_grupe = $_POST['nova_grupa'];


    if ($id_grupe!==''){ // promeni
        $upit = $conn->query("UPDATE `grupe` SET `naziv_grupe`='$naziv_grupe' WHERE $id_grupe = id_grupe");
        echo "promenjeno!<br>";
    }

    else{   // snimi
        $upit = $conn->query("INSERT INTO `grupe`(`id_grupe`, `naziv_grupe`) VALUES ('','$naziv_grupe')");
        if($upit===false)
            echo "greska u snimanju<br>";
        else
            echo "snimljeno!<br>";
    }

    echo "<a href='admin.php'>Povratak na admin stranicu</a>";


?>