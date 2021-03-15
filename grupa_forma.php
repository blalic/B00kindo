<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupa</title>
</head>
<body>
    <?php
        include 'baza_conect.php';
        
        $podaci = $conn->query("SELECT * FROM proizvodi");
        $niz = $podaci->fetch_all(MYSQLI_ASSOC);

        $gru = $conn->query("SELECT * FROM grupe");
        $grupe = $gru->fetch_all(MYSQLI_ASSOC);
        
        if(isset($_GET['id_grupe'])){
            $id_grupe = $_GET['id_grupe'];
            foreach ($grupe as $gr)
                if ($id_grupe==$gr['id_grupe'])
                    $pod = $gr;
        }
        
    ?>

    <form action="uredi_grupu.php" method="POST">
        Grupa: <input type="text" name="nova_grupa" value="<?= (isset($id_grupe))? $pod['naziv_grupe'] : '' ?>">
        <input type="hidden" name="id" value="<?= (isset($id_grupe))? $id_grupe : '' ?>">
        <input type="submit" value="<?= (isset($id_grupe))? 'PROMENI' : 'SNIMI' ?>">
    </form>

</body>
</html>