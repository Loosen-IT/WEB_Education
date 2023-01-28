<div class="row px-2">
    <div class="col-2">
        <?php echo view('templates/sidebar'); ?>
    </div>

    <div class="col-8">

        <label class="fs-3 fw-semibold">Projekt auswählen:</label>
        <form method="post" action="<?= base_url('/projekte/delete_or_swap'); ?>">
            <select name="id_projekte" id="project" class="form-select" aria-label="Default select example">
                <?php
                foreach($DATA_projekte as $project) {
                ?>
                    <option value="<?php echo $project['id_projekte'];?>"><?php echo $project['name']; ?></option>
                <?php
                }
                ?>
            </select>
            <?php
            foreach($DATA_projekte as $project) {
                ?>
                <input type="text" id="<?php echo 'beschreibung_'.$project['id_projekte'];?>" value="<?php echo $project['beschreibung'];?>" style="display:none;">
                <input type="text" id="<?php echo 'name_'.$project['id_projekte'];?>" value="<?php echo $project['name']; ?>" style="display:none;">
                <input type="text" id="<?php echo 'ersteller_'.$project['id_projekte'];?>" value="<?php echo $project['id_ersteller']; ?>"style="display:none;">
                <?php
            }
            ?>
            <br>
            <button type="submit" name="change" class="btn btn-primary">Auswählen</button>
            <button type="button" onclick="edit()" class="btn btn-primary">Bearbeiten</button>
            <button type="button" id="delete" data-bs-toggle="modal" data-bs-target="#loesche" class="btn btn-danger">Löschen</button>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

            <!-- Modal -->
            <div class="modal fade" id="loesche" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Warnung</h5>
                        </div>
                        <div class="modal-body">
                            Bist du dir sicher, dass das Projekt gelöscht werden soll?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#loesche" >Abbruch</button>
                            <button type="submit" name="delete" class="btn btn-primary">Löschen</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <br>

        <label id="modus" class="fs-3 fw-semibold mt-2 pb-2">Erstellen</label>
        <br>
        <form id="methode" method="post" action="<?= base_url('projekte/create'); ?>">
            <input hidden name="id_projekte" type="text" placeholder="DEBUGGING" id="id_projekte" class="form-control" />
            <input hidden name="id_ersteller" type="text" placeholder="DEBUGGING" id="id_mitglieder" class="form-control" value="<?= $_SESSION['DATA_user']['id_mitglieder']; ?>"/>

            <label class="fs-6 mt-1 mb-2">Projektname:</label>
            <input name="name" type="text" placeholder="Projektname" id="name" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Beschreibung:</label>
            <textarea name="beschreibung" type="text-area" rows="4" placeholder="Beschreibung" id="description" class="form-control"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button id="reset" type="button" class="btn btn-info text-white">Reset</button>
        </form>

    </div>
</div>
</body>
<script>
    function edit(){
        let project = document.getElementById("project").value;
        document.getElementById("id_projekte").value = project;
        document.getElementById("modus").innerHTML = "Bearbeiten von Projekt " + project;
        document.getElementById("name").value = document.getElementById('name_' + project).value;
        document.getElementById("description").innerHTML = document.getElementById('beschreibung_' + project).value;
        document.getElementById("methode").setAttribute('action','<?php echo base_url('projekte/update');?>');
        document.getElementById("id_mitglieder").value = document.getElementById('ersteller_' + project).value;
    }

    document.getElementById('reset').onclick = function() {
        reset();
    }

    function reset(){
        document.getElementById("modus").innerHTML = "Erstellen";
        document.getElementById("name").value = "";
        document.getElementById("description").innerHTML = "";
        document.getElementById("methode").setAttribute('action','<?php echo base_url('projekte/create');?>');
        document.getElementById("id_mitglieder").value = <?= $_SESSION['DATA_user']['id_mitglieder']; ?>
    }
</script>
</html>