<?php
    include 'baza_conect.php';

    $podaci = $conn->query("SELECT * FROM proizvodi");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);

    include 'classes.php';
            
    $a = new listaProizvoda($niz);

?>

<div class="row">
    <?php
        $a->prikazi_proizvode();
    ?>
</div>
