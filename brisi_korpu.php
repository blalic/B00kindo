<?php
    session_start();
    
    $_SESSION['stavke_korpe']=[];

    header("Location: korpa.php");
    // echo "korpa je ispraznjena!";
    // echo "<br><a href='proizvodi.php'>povratak na proizvode</a>";
?>