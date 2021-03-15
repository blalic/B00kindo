<?php
    include 'baza_conect.php';
    
    $podaci = $conn->query("SELECT * FROM proizvodi JOIN grupe ON proizvodi.grupa = grupe.id_grupe");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);

    include 'header.php';
    include 'classes.php';
    
    $id_grupe = $_GET['id'];

    $lista = [];
    foreach($niz as $knjiga){
        if($knjiga['grupa']==$id_grupe)
            $lista[]=$knjiga;
    }

    $kl = new listaProizvoda($lista);
?>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 sidebar">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-9">
                <div class="row">
                    <?php $kl->prikazi_proizvode(); ?>
                </div>
            </div>
        </div>
    </div>
    

<?php
    include 'footer.php';
?>