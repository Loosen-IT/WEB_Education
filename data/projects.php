<?php
function get_projects(){
    $projekte = array(
        'p1' => array(
                'id' => 'p1',
                'name' => 'Webentwicklung WS 22',
                'beschreibung' => 'Wir bauen eine To-Do-Liste.'
        ),
        'p2' => array(
            'id' => 'p2',
            'name' => 'Kaffee-Trink AG',
            'beschreibung' => 'Wir trinken gerne Kaffe.'
        )
    );
    return $projekte;
}
?>