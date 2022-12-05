<?php
include dirname(__FILE__).'/data/session.php';
require dirname(__FILE__).'/functions/head.php';
require dirname(__FILE__).'/functions/block.php';
head("Projekte");
block("Aufgabenplaner: Projekte");
?>

<div class="row px-2">
    <div class="col-2">
        <?php
        include 'functions/sidebar.php';
        ?>
    </div>

    <div class="col-8">

        <label class="fs-3 fw-semibold">Projekt auswählen:</label>
        <select id="project" class="form-select" aria-label="Default select example">
            <?php
            foreach($_SESSION['projects'] as $project) {
                ?>
                <option value="<?php echo $project['id']; ?>"><?php echo $project['name']; ?></option>
                <?php
            }
            ?>
        </select>

        <br>

        <button type="button" class="btn btn-primary">Auswählen</button>
        <button type="button" class="btn btn-primary">Bearbeiten</button>
        <button type="button" class="btn btn-danger">Löschen</button>

        <br>
        <br>

        <label class="fs-3 fw-semibold mt-2 pb-2">Projekt bearbeiten/erstellen:</label>
        <br>
        <form>
            <label class="fs-6 mt-1 mb-2">Projektname:</label>
            <input type="text" placeholder="E-Mail-Adresse" id="name" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Beschreibung:</label>
            <textarea type="text-area" rows="4" placeholder="Beschreibung" id="description" class="form-control"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info text-white">Reset</button>
        </form>

    </div>
</div>

</body>
</html>