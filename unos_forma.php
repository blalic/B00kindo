<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma unosa</title>
</head>
<body>
    <?php
        
        include 'baza_conect.php';

        $podaci = $conn->query("SELECT * FROM proizvodi JOIN grupe ON proizvodi.grupa = grupe.id_grupe");
        $niz = $podaci->fetch_all(MYSQLI_ASSOC);

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach($niz as $podatak){
                if ($podatak['id']==$id){
                    $pod = $podatak;
                    break;
                }
            }
        }
    ?>

    <form action="uredi.php" method="POST">
        Ime knjige: <input type="text" name="ime_knjige" value="<?= (isset($id))? $pod['naziv_knjige'] : '' ?>">
        Autor: <input type="text" name="ime_autora" value="<?= (isset($id))? $pod['ime_autora'] : '' ?>">
        God. izd.: <input type="text" name="god_izdanja" value="<?= (isset($id))? $pod['godina_izdanja'] : '' ?>">
        Grupa: <input type="text" name="grupa" value="<?= (isset($id))? $pod['grupa'] : '' ?>">
        Cena: <input type="text" name="cena" value="<?= (isset($id))? $pod['cena'] : '' ?>">
        Naziv slike: <input type="text" name="slika" value="<?= (isset($id))? $pod['slika'] : '' ?>">
        <input type="hidden" name="id" value="<?= (isset($id))? $id : '' ?>">
        <input type="submit" value="<?= (isset($id))? 'PROMENI' : 'SNIMI' ?>">
    </form>

</body>
</html>