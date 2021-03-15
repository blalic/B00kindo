<?php
    include 'baza_conect.php';

    $podaci = $conn->query("SELECT * FROM proizvodi");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);

    $gru = $conn->query("SELECT * FROM grupe");
    $grupe = $gru->fetch_all(MYSQLI_ASSOC);

    $id = $_POST['id'];
    $ime_knjige = $_POST['ime_knjige'];
    $ime_autora = $_POST['ime_autora'];
    $god_izdanja = $_POST['god_izdanja'];
    $grupa = $_POST['grupa'];
    $slika = $_POST['slika'];
    $cena = $_POST['cena'];

    foreach($grupe as $g){
        if ($g['naziv_grupe']==$grupa)
            $gr = $g['id_grupe'];
    }

    if ($id!==''){ // promeni
        $upit = $conn->query("UPDATE `proizvodi` SET `naziv_knjige`='$ime_knjige',`ime_autora`='$ime_autora',`godina_izdanja`='$god_izdanja', `grupa`='$grupa', `slika`='$slika', `cena`='$cena' WHERE `id`= $id");
        echo "promenjeno!<br>";
    }

    else{   // snimi
        $upit = $conn->query("INSERT INTO `proizvodi`(`id`, `naziv_knjige`, `ime_autora`, `godina_izdanja`, `grupa`, `slika`, `cena`) VALUES ('','$ime_knjige','$ime_autora','$god_izdanja','$gr', '$slika', '$cena')");
        if($upit===false)
            echo "greska u snimanju<br>";
        else
            echo "snimljeno!<br>";
    }

    echo "<a href='admin.php'>Povratak na admin stranicu</a>";
?>