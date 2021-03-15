<?php
    include 'header.php';

    include 'baza_conect.php';

    $id = $_GET['id'];

    $podaci = $conn->query("SELECT * FROM proizvodi WHERE id = $id");
    $knjiga = $podaci->fetch_all(MYSQLI_ASSOC);

    include 'classes.php';
            
    $a = new listaProizvoda($knjiga);

?>


<?php
    $a->prikazi_detaljnije();
?>


<?php
    include 'footer.php';
?>
