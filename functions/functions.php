<?php
    function head($title){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="styles/bootstrap.css">
            <title><?php echo $title; ?></title>
        </head>
        <?php
    }

    function block($title){
        ?>
        <div class = "container-fluid">
            <div class ="bg-light">
                <p class="text-center fs-1 p-5">
                    <?php echo $title; ?>
                </p>
            </div>
        </div>
        <?php
    }

    function sidebar(){
        ?>
        <ul class="list-group container">
            <li class="list-group-item">
                <a href="login.php">Login</a>
            </li>
            <li class="list-group-item">
                <a href="projekte.php">Projekte</a>
            </li>
            <li class="list-group-item">
                <a href="index.php">Aktuelles Projekt</a>
            </li>
            <ul>
                <li class="list-group-item">
                    <a href="reiter.php">Reiter</a>
                </li>
                <li class="list-group-item">
                    <a href="https://google.de">Aufgaben</a>
                </li>
                <li class="list-group-item">
                    <a href="https://google.de">Mitglieder</a>
                </li>
            </ul>
        </ul>
        <?php
    }
?>


