<div class="row px-2">
    <div class="col-2">
        <?php echo view('templates/sidebar'); ?>
    </div>

    <div class="col-8">
        <table class="table">
            <thead class="table-light">
            <tr>
                <th scope="Name">Name</th>
                <th scope="Beschreibung">Beschreibung</th>
                <th scope="Option"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $reiters = $DATA_reiter;
            foreach($reiters as $reiter){
                ?>
                <tr>
                    <td><?php echo $reiter['name']; ?></td>
                    <td><?php echo $reiter['beschreibung']; ?></td>
                    <td>
                        <div class="container d-flex justify-content-end">
                            <button class="table-button" id="<?php echo $reiter['id_reiter']; ?>_edit" class="reiter-button">
                                <svg style="margin-top:-0.2rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                            <button class="table-button" id="<?php echo $reiter['id_reiter']; ?>_delete">
                                <svg style="margin-top:-0.2rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <label class="fs-4 mt-4 pb-3">Bearbeiten/Erstellen</label>
        <form>
            <label class="fs-6 mt-1 mb-2">Bezeichnung des Reiters:</label>
            <input type="text" placeholder="E-Mail-Adresse" id="reiter" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Beschreibung:</label>
            <textarea type="text-area" rows="4" placeholder="Beschreibung" id="project" class="form-control"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info text-white">Reset</button>
        </form>

    </div>

    <div class="col-2">

    </div>
</div>
</body>
</html>
