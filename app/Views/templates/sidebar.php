<ul class="list-group container">
    <li class="list-group-item">
        <a href="<?php echo base_url('/login/logout');?>">Ausloggen</a>
    </li>
    <li class="list-group-item">
        <a href="<?= base_url('/projekte') ?>">Projekte</a>
    </li>
    <li class="list-group-item">
        <a href="<?= base_url('/home') ?>">Aktuelles Projekt</a>
    </li>
    <ul>
        <?php
        use App\Models\ProjekteModel;
        $projektemodel = new ProjekteModel();
        if(!$_SESSION['STATUS_project']==0 || !$projektemodel->worksOnProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder'], $_SESSION['STATUS_project'])){
            ?>
            <li class="list-group-item">
                <a href="<?= base_url('/reiter') ?>">Reiter</a>
            </li>
            <li class="list-group-item">
                <a href="<?= base_url('/aufgaben') ?>">Aufgaben</a>
            </li>
            <li class="list-group-item">
                <a href="<?= base_url('/mitglieder') ?>">Mitglieder</a>
            </li>
            <?php
        }
        ?>
    </ul>
</ul>
