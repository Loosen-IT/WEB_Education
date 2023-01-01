<div class="row px-2">
    <div class="col-2">
        <?php echo view('templates/sidebar'); ?>
    </div>
    <div class="col-8">
        <table class="table">
            <thead class="table-light">
            <tr>
                <th scope="Name">Name</th>
                <th scope="Beschreibung">E-Mail</th>
                <th scope="In Projekt">In Projekt</th>
                <th scope="Options"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $members = $DATA_mitglieder;
            foreach($members as $member){
                ?>
                <tr>
                    <td><?php echo $member['username']; ?></td>
                    <td><?php echo $member['email']; ?></td>
                    <td>
                        <input type="checkbox" disabled id="<?php echo $member['id_mitglieder']; ?>_status"
                            <?php
                                $db = db_connect();
                                $query = $db->query('SELECT * FROM projekte_mitglieder WHERE id_projekte='.$_SESSION['project'].' AND id_mitglieder='.$member['id_mitglieder']);
                                if(sizeof($query->getResultArray()) !== 0){ echo 'checked'; }
                            ?>
                        >
                    </td>
                    <td>
                        <div class="container d-flex justify-content-end">
                            <button class="table-button" id="<?php echo $member['id_mitglieder']; ?>_edit" class="reiter-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                            <button class="table-button" id="<?php echo $member['id_mitglieder']; ?>_delete">
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
            ?>
        </table>

        <label class="fs-4 mt-4 pb-3">Bearbeiten/Erstellen</label>
        <br>
        <form>
            <label class="fs-6 mt-1 mb-2">Username:</label>
            <input type="text" placeholder="Username" id="username" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">E-Mail Adresse:</label>
            <input type="text" placeholder="E-Mail-Adresse" id="mail" class="form-control" />
            <br>
            <label class="fs-6 mt-1 mb-2">Passwort:</label>
            <input type="password" placeholder="Passwort" id="password" class="form-control" />
            <br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="belong">
                <label class="form-check-label" for="belong">
                    Zum Projekt zugeordnet
                </label>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info text-white">Reset</button>
        </form>
    </div>

    <div class="col-2">

    </div>
</div>
