<?php
    session_start();
    $id = $_GET['id'];

    include 'korpa_klasa.php';
    $korpa = new korpa();
    $korpa->obrisi_proizvod($id);

    header("Location: korpa.php");

?>