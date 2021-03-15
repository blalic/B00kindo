<?php
    session_start();

    include 'korpa_klasa.php';

    // if(isset($_GET['id'])){
        $id = $_GET['id'];

        include 'baza_conect.php';
    
        $podaci = $conn->query("SELECT * FROM proizvodi WHERE id='$id'");
        $proizvod = $podaci->fetch_all(MYSQLI_ASSOC);
    
        if($korpa->da_li_postoji_proizvod($id)){
            //ako postoji
            $korpa-> dodaj_kolicinu($id, 1);
        }
        else{
            //ako ne postoji
            $korpa->dodaj_proizvod_u_korpu($id, 1, $proizvod[0]['cena'], $proizvod[0]['naziv_knjige']);
        }
        header("Location: proizvodi.php");
    // }

?>
