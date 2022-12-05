<?php
include dirname(__FILE__).'/data/session.php';
require dirname(__FILE__).'/functions/head.php';
require dirname(__FILE__).'/functions/block.php';
head("Aufgaben");
block("Aufgabenplaner: Aufgaben");
?>

<div class="row px-2">
    <div class="col-2">
        <?php
        include 'functions/sidebar.php';
        ?>
    </div>
    <div class="col-8 pb-5">
        <table class="table">
            <thead class="table-light">
            <tr>
                <th scope="Bezeichnung">Aufgabenbezeichnung:</th>
                <th scope="Beschreibung">Beschreibung der Aufgabe:</th>
                <th scope="Reiter">Reiter:</th>
                <th scope="Zustaendig">Zuständig:</th>
                <th scope="Options"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $exercises = $_SESSION['exercises'];
            foreach($exercises as $exercise){
                if(strcmp($exercise['project'],$_SESSION['project']) == 0){
                    ?>
                    <tr>
                        <td><?php echo $exercise['bezeichnung']; ?></td>
                        <td><?php echo $exercise['beschreibung']; ?></td>
                        <td><?php echo $_SESSION['reiter'][$exercise['reiter']]['name']; ?></td>
                        <td><?php echo $_SESSION['members'][$exercise['person']]['username']; ?></td>
                        <td>
                            <div class="container d-flex justify-content-end">
                                <button class="table-button" id="<?php echo $exercise['id']; ?>_edit" class="reiter-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </button>
                                <button class="table-button" id="<?php echo $exercise['id']; ?>_delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <label class="fs-4 mt-4 pb-3">Bearbeiten/Erstellen</label>
        <br>
        <form>
            <label class="fs-6 mt-1 mb-2">Aufgabe:</label>
            <input type="text" placeholder="Aufgabe" id="exercise" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Beschreibung der Aufgabe:</label>
            <textarea type="text" placeholder="Beschreibung" id="description" class="form-control"></textarea
            <br>
            <br>
            <label class="fs-6 mt-1 mb-2">Erstellungsdatum:</label>
            <input type="text" value="<?php echo date("d.m.y"); ?>" disabled placeholder="Aufgabe" id="create" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Fällig bis:</label>
            <input type="date" placeholder="Aufgabe" id="create" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Zugehöriger Reiter:</label>
            <select id="reiter" class="form-select" aria-label="Default select example">
                <?php
                foreach($_SESSION['reiter'] as $reiter)
                    if(strcmp($reiter['project'],$_SESSION['project'])==0){
                        ?>
                        <option value="<?php echo $reiter['id']; ?>"><?php echo $reiter['name']; ?></option>
                        <?php
                    }
                ?>
            </select>
            <br>
            <label class="fs-6 mt-1 mb-2">Zuständig:</label>
            <select class="form-select" aria-label="Default select example">
                <?php
                foreach($_SESSION['members'] as $member)
                    if(array_search($_SESSION['project'], $member['projects']) !== false){
                        ?>
                        <option value="<?php echo $member['id']; ?>"><?php echo $member['username']; ?></option>
                        <?php
                    }
                ?>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info text-white">Reset</button>
        </form>
    </div>
</div>

