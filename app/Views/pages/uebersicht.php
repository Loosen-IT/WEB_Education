<div class="row px-2">
    <div class="col-2">
        <?php echo view('templates/sidebar'); ?>
    </div>
    <div class="col-10">
        <div class="row">
            <?php
            foreach($DATA_reiter as $reiter){
                ?>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $reiter['name']; ?>
                        </div>
                        <?php
                        foreach($DATA_aufgaben_mitglieder_COMPLETE as $exercise){
                            if(strcmp($reiter['id_reiter'],$exercise['id_reiter'])==0){
                                ?>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $exercise['name']." (".$exercise['username'].")"?></li>
                                </ul>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>