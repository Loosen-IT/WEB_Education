<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Projekte</title>
</head>

<body>
<div class = "container-fluid">
    <div class ="bg-light">
        <div class="row">
            <div class="col-8">
                <p class="text-center fs-1 p-5">
                    Aufgabenplaner: Projekte
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <ul class="list-group container">
            <li class="list-group-item">
                <a href="login.html">Login</a>
            </li>
            <li class="list-group-item">
                <a href="projekte.html">Projekte</a>
            </li>
            <li class="list-group-item">
                <a href="">Aktuelles Projekt</a>
            </li>
            <ul>
                <li class="list-group-item">
                    <a href="reiter.html">Reiter</a>
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

    <div class="col-8">

        <label class="fs-3 fw-semibold">Projekt auswählen:</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>- bitte auswählen -</option>
            <option value="1">Beispiel 1</option>
            <option value="2">Beispiel 2</option>
            <option value="3">Beispiel 3</option>
        </select>

        <br>

        <button type="button" class="btn btn-primary">Auswählen</button>
        <button type="button" class="btn btn-primary">Bearbeiten</button>
        <button type="button" class="btn btn-danger">Löschen</button>

        <br>

        <label class="fs-3 fw-semibold mt-2">Projekt bearbeiten/erstellen:</label>
        <br>
        <label class="fs-5 mt-1 mb-2">Projektname:</label>
        <input type="text" placeholder="Projekt" id="form12" class="form-control" />

        <br>

        <label class="fs-5 mt-1 mb-2">Projektbeschreibung:</label>
        <textarea class="form-control mb-2" placeholder="Beschreibung" style="height: 100px" id="textarea"></textarea>

        <button type="button" class="btn btn-primary">Speichern</button>
        <button type="button" class="btn btn-info">Reset</button>

    </div>
</div>

</body>
</html>