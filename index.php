<?php //used PHP File for adding Code later ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <title>TODO-Liste</title>
</head>
<body>
    <div class="container-fluid">
        <header class="bg-light">
            <br>
            <h1 class="text-center">Aufgabenplaner: TODOS (aktuelles Projekt)</h1>
            <br>
        </header>
        <br>
        <div class="row">
            <div class="col-2">
                <ul class="list-group container">
                    <li class="list-group-item">
                        <a href="tmp.php">Login</a>
                    </li>
                    <li class="list-group-item">
                        <a href="tmp.php">Projekte</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Aktuelles Projekt</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="tmp.php">Reiter</a>
                        </li>
                        <li class="list-group-item">
                            <a href="tmp.php">Aufgaben</a>
                        </li>
                        <li class="list-group-item">
                            <a href="tmp.php">Mitglieder</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Todo:
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                                <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Erledigt:
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                                <li class="list-group-item">Kaffe trinken (Petra Müller)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Verschoben:
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>