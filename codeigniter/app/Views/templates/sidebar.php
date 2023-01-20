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
        if(!$projektemodel->worksOnProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder'], $_SESSION['STATUS_project']) || $_SESSION['STATUS_project']==0){
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
