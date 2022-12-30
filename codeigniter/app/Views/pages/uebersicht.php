<div class="row px-2">
    <div class="col-2">
        <?php echo view('templates/sidebar'); ?>
    </div>
    <div class="col-10">
        <div class="row">
            <?php
            foreach($DATA_reiter as $reiter){
                if(strcmp($reiter['project'],$_SESSION['project'])==0){
                    ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <?php echo $reiter['name']; ?>
                            </div>
                            <?php
                            foreach($DATA_aufgaben as $exercise){
                                if(strcmp($reiter['id'],$exercise['reiter'])==0){
                                    ?>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?php echo $exercise['bezeichnung']." (".$DATA_mitglieder[$exercise['person']]['username'].")"?></li>
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