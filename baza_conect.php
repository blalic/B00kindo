<?php
    $conn = new mysqli('localhost','root','','bookindo');
    if($conn->connect_error)
        die("Greska u konekciji: ".$conn->connect_error);

    

?>