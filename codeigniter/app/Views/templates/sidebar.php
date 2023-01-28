<!--<ul class="list-group container">-->
<!--    <li class="list-group-item">-->
<!--        <a href="--><?php //echo base_url('/login/logout');?><!--">Ausloggen</a>-->
<!--    </li>-->
<!--    <li class="list-group-item">-->
<!--        <a href="--><?//= base_url('/projekte') ?><!--">Projekte</a>-->
<!--    </li>-->
<!--    <li class="list-group-item">-->
<!--        <a href="--><?//= base_url('/home') ?><!--">Aktuelles Projekt</a>-->
<!--    </li>-->
<!--    <ul>-->
<!--        --><?php
//        use App\Models\ProjekteModel;
//        $projektemodel = new ProjekteModel();
//        if(!$projektemodel->worksNotOnProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder'], $_SESSION['STATUS_project']) || $_SESSION['STATUS_project']==0){
//            ?>
<!--            <li class="list-group-item">-->
<!--                <a href="--><?//= base_url('/reiter') ?><!--">Reiter</a>-->
<!--            </li>-->
<!--            <li class="list-group-item">-->
<!--                <a href="--><?//= base_url('/aufgaben') ?><!--">Aufgaben</a>-->
<!--            </li>-->
<!--            <li class="list-group-item">-->
<!--                <a href="--><?//= base_url('/mitglieder') ?><!--">Mitglieder</a>-->
<!--            </li>-->
<!--            --><?php
//        }
//        ?>
<!--    </ul>-->
<!--</ul>-->

<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>-->


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-column me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('/login/logout');?>">Ausloggen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/projekte') ?>">Projekte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/home') ?>">Aktuelles Projekt</a>
                </li>
                <?php
                use App\Models\ProjekteModel;
                $projektemodel = new ProjekteModel();
                if(!$projektemodel->worksNotOnProjekte_Mitglieder($_SESSION['DATA_user']['id_mitglieder'], $_SESSION['STATUS_project']) || $_SESSION['STATUS_project']=='0'){
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" id="dropdown">
                            <li><a class="dropdown-item" href="<?= base_url('/reiter') ?>">Reiter</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= base_url('/aufgaben') ?>">Aufgaben</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= base_url('/mitglieder') ?>">Mitglieder</a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
