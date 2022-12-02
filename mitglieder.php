<?php
require 'functions/head.php';
require 'functions/block.php';
head("Reiter");
block("Aufgabenplaner: Mitglieder");
?>

<div class="row px-2">
    <div class="col-2">
        <?php
        include 'functions/sidebar.php';
        ?>
    </div>
    <div class="col-8">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-dark">
                <div class="row">
                    <div class="col-4">
                        <p class="fw-semibold"> Name </p>
                    </div>
                    <div class="col-4">
                        <p class="fw-semibold"> E-Mail </p>
                    </div>
                    <div class="col-4">
                        <p class="fw-semibold"> In Projekt </p>
                    </div>
                </div>
            </li>

            <?php
            include "data/members.php";
            $arr = get_members();

            $c = count($arr);

            for($j=1; $j<=$c; $j++){
                if($arr[$j]==null) {
                    echo("Fehlendes Array");
                    break;
                }
            ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-4">
                            <p> <?php echo ($arr[$j]['username']==null) ? ('Fehlender Eintrag!') : $arr[$j]['username'] ?></p>
                        </div>
                        <div class="col-4">
                            <p> <?php echo ($arr[$j]['email']==null) ? ('Fehlender Eintrag!') : $arr[$j]['email'] ?> </p>
                        </div>
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="reiter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                            <button class="reiter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

            <?php
            }
            ?>
        </ul>

        <label class="fs-4 mt-4">Bearbeiten/Erstellen</label>
        <br>
        <label class="fs-6 mt-1 mb-2">Username:</label>
        <input type="text" placeholder="Username" id="form12" class="form-control" />
        <br>

        <div class="mb-3">
            <label for="exampleDropdownFormEmail1" class="form-label">E-Mail-Adresse:</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="E-Mail-Adresse eingeben">
        </div>
        <div class="mb-3">
            <label for="exampleDropdownFormPassword1" class="form-label">Passwort:</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Passwort">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                    Dem Projekt zugeordnet
                </label>
            </div>
        </div>

        <button type="button" class="btn btn-primary">Speichern</button>
        <button type="button" class="btn btn-info">Reset</button>

</div>
