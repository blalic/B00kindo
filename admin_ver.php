<?php
    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    include 'baza_conect.php';
    
    $podaci = $conn->query("SELECT * FROM useri where `username` = '$user' AND `password` = '$pass'");
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);
    // print_r($niz);

    if(mysqli_num_rows($podaci)==1){
        $_SESSION['admin']['user_id'] = $niz[0]['id'];
        $_SESSION['admin']['user'] = $niz[0]['username'];
        echo "Uspesno logovanje!";
        header("Location: admin.php");
    }
        
    else
        die("Pogresan user ili lozinka. Molimo vas, logujte se ponovo!");

?>