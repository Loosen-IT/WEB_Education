<?php
require 'functions/head.php';
require 'functions/block.php';
head("Liste");
block("Aufgabenplaner: TODO's (Aktuelles Projekt)");
?>

<div class="row px-2">
    <div class="col-2">
        <?php
        include 'functions/sidebar.php';
        ?>
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