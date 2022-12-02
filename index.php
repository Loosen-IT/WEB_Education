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
</body>
</html>