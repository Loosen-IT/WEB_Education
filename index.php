<?php
    include 'data/session.php';
    require 'functions/head.php';
    require 'functions/block.php';
    head("Liste");
    block("Aufgabenplaner: TODO's ".$_SESSION['projects'][$_SESSION['project']]['name']);
?>

<div class="row px-2">
    <div class="col-2">
        <?php
        include 'functions/sidebar.php';
        ?>
    </div>

    <div class="col-10">
        <div class="row">
            <?php
            foreach($_SESSION['reiter'] as $reiter){
                if(strcmp($reiter['project'],$_SESSION['project'])==0){
                ?>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        <?php echo $reiter['name']; ?>
                        </div>
                        <?php
                        foreach($_SESSION['exercises'] as $exercise){
                            if(strcmp($reiter['id'],$exercise['reiter'])==0){
                                ?>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $exercise['bezeichnung']." (".$_SESSION['members'][$exercise['person']]['username'].")"?></li>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>