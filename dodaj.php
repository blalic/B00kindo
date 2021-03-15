<?php
    session_start();
    $id = $_GET['id'];

    include 'korpa_klasa.php';
    $korpa = new korpa();
    $korpa->dodaj_kolicinu($id,1);

    header("Location: korpa.php");

?>