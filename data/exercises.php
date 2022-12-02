<?php
function get_exercises(){
    $exercises = array(
        array(
            'bezeichnung' => 'HTML Datei erstellen',
            'beschreibung' => 'HTML Datei erstellen',
            'reiter' => 'ToDo',#
            'person' => 'janniclas'
        ),
        array(
            'bezeichnung' => 'CSS Datei erstellen',
            'beschreibung' => 'CSS Datei erstellen',
            'reiter' => 'ToDo',#
            'person' => 'janniclas'
        ),
        array(
            'bezeichnung' => 'PC eingeschaltet',
            'beschreibung' => 'PC einschalten',
            'reiter' => 'Erledigt',#
            'person' => 'janniclas'
        ),
        array(
            'bezeichnung' => 'Kaffee trinken',
            'beschreibung' => 'Kaffee langsam trinken und genießen',
            'reiter' => 'Erledigt',#
            'person' => 'janniclas'
        ),
        array(
            'bezeichnung' => 'Für die Uni lernen',
            'beschreibung' => 'Für die Uni lernen',
            'reiter' => 'Verschoben',
            'person' => 'janniclas'
        )
    );
    return $exercises;
}
?>
