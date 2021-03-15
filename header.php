<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid header">
        <div class="container title">
            <a href="index.php"><h1>B00KINDO</h1></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 logo">
                    <img src="assets/images/ex.jpg" alt="logo">
                </div>
                <div class="col-6 menu">
                    <?php
                        echo "<ul class='menu'>";
                        echo    "<li><a href='index.php'>HOME</a></li> | ";
                        echo    "<li><a href='proizvodi.php'>PRODUCTS</a></li> | ";
                        echo    "<li><a href='contact.php'>CONTACT</a></li> | ";
                        echo    "<li><a href='korpa.php'>BASKET</a></li>";
                        echo "</ul>";
                    ?>
                </div>
            </div>
        </div>
    </div>


