<?php
    session_start();

    include 'baza_conect.php';

    $ukupno = 0;
    foreach ($_SESSION['stavke_korpe'] as $stavka){
        $uk = $stavka['cena']*$stavka['kolicina'];
        $ukupno += $uk;
    }
    
    // snimanje korpe
    $sql="INSERT INTO `korpa`(`id`, `datum`, `ukupno`) VALUES ('', NOW(), '$ukupno')";
    if($conn->query($sql)===FALSE){
        echo "Greska prilikom unosa";
        echo $conn->error;
    }
    else{
        $last_id=$conn->insert_id;
    }

    // snimanje stavki korpe
    // $_SESSION['stavke_korpe'][0]['id']
    foreach($_SESSION['stavke_korpe'] as $stavke){
        $id=$stavke['id']; $cena = $stavke['cena']; $kolicina = $stavke['kolicina'];
        $sql_u = "INSERT INTO `stavke_korpe`(`id`, `proizvod_id`, `korpa_id`, `cena`, `kolicina`) VALUES ('', '$id', '$last_id', $cena, $kolicina)";
        
        if($conn->query($sql_u)===FALSE){
            echo "Greska prilikom unosa stavki";
            echo $conn->error;
        }
        else{
            echo "Uspesan upis stavke!<br>";
            $_SESSION['stavke_korpe']=[];
            header("Location: korpa.php");
        }
    }
?>