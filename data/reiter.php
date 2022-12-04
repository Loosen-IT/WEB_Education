<?php
function get_reiters(){
    $reiter = array(
        'r1' => array(
            'id' => 'r1',
            'name' => 'ToDo',
            'beschreibung' => 'Dinge die erledigt werden müssen.',
            'project' => 'p1'
        ),
        'r2' => array(
            'id' => 'r2',
            'name' => 'Erledigt',
            'beschreibung' => 'Dinge die erledigt sind.',
            'project' => 'p1'
        ),
        'r3' => array(
            'id' => 'r3',
            'name' => 'Verschoben',
            'beschreibung' => 'Dinge die später erledigt werden.',
            'project' => 'p1'
        ),
        'r4' => array(
            'id' => 'r4',
            'name' => 'Entspannt',
            'beschreibung' => 'Erstmal Pause machen!',
            'project' => 'p2'
        )
    );
    return $reiter;

}
?>