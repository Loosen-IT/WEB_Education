<?php
function get_exercises(){
    $exercises = array(
        array(
            'id' => 'e0',
            'bezeichnung' => 'HTML Datei erstellen',
            'beschreibung' => 'HTML Datei erstellen',
            'reiter' => 'r1',
            'person' => 'm1',
            'project' => 'p1'
        ),
        array(
            'id' => 'e1',
            'bezeichnung' => 'CSS Datei erstellen',
            'beschreibung' => 'CSS Datei erstellen',
            'reiter' => 'r1',
            'person' => 'm1',
            'project' => 'p1'
        ),
        array(
            'id' => 'e2',
            'bezeichnung' => 'PC eingeschaltet',
            'beschreibung' => 'PC einschalten',
            'reiter' => 'r2',
            'person' => 'm2',
            'project' => 'p1'
        ),
        array(
            'id' => 'e3',
            'bezeichnung' => 'Kaffee trinken',
            'beschreibung' => 'Kaffee langsam trinken und genießen',
            'reiter' => 'r2',
            'person' => 'm2',
            'project' => 'p1'
        ),
        array(
            'id' => 'e4',
            'bezeichnung' => 'Für die Uni lernen',
            'beschreibung' => 'Für die Uni lernen',
            'reiter' => 'r3',
            'person' => 'm1',
            'project' => 'p1'
        ),
        array(
            'id' => 'e5',
            'bezeichnung' => 'Kaffee trinken',
            'beschreibung' => 'Kaffeepause machen und Zeit schinden',
            'reiter' => 'r4',
            'person' => 'm3',
            'project' => 'p2'
        )
    );
    return $exercises;
}
?>
