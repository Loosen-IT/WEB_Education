<?php namespace App\Models;

use CodeIgniter\Model;

use AllowDynamicProperties;
#[AllowDynamicProperties]

class AufgabenModel extends Model {

    public function getAufgaben ($aufgaben_id = NULL) {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');

        IF ($aufgaben_id != NULL)
            $this->aufgaben->where('aufgaben.id_aufgaben', $aufgaben_id);

        $this->aufgaben->orderBy('name');
        $result = $this->aufgaben->get();

        if ($aufgaben_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createAufgaben() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'id_ersteller' => $_POST['id_ersteller'],
            'id_reiter' => $_POST['id_reiter'],
            'erstellungsdatum' => $_POST['erstellungsdatum'],
            'faelligkeitsdatum' => $_POST['faelligkeitsdatum'],
        ));
    }

    public function updateAufgaben() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id_aufgaben', $_POST['id_aufgaben']);
        $this->aufgaben->update(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'id_ersteller' => $_POST['id_ersteller'],
            'id_reiter' => $_POST['id_reiter'],
            'erstellungsdatum' => $_POST['erstellungsdatum'],
            'faelligkeitsdatum' => $_POST['faelligkeitsdatum'],
        ));
    }

    public function deleteAufgaben() {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id_aufgaben', $_POST['id_aufgaben']);
        $this->aufgaben->delete();
    }

    public function getAufgaben_Mitglieder ($aufgaben_id = NULL) {

        $this->aufgaben_mitglieder = $this->db->query('SELECT * FROM mitglieder m INNER JOIN aufgaben_mitglieder am INNER JOIN aufgaben a ON m.id_mitglieder=am.id_mitglieder AND a.id_aufgaben=am.id_aufgaben');

        IF ($aufgaben_id != NULL)
            $this->aufgaben_mitglieder->where('aufgaben_mitglieder.id_aufgaben', $aufgaben_id);

        //$this->aufgaben_mitglieder->orderBy('id_aufgaben');
        //$result = $this->aufgaben_mitglieder->get();

        if ($aufgaben_id != NULL)
            return $this->aufgaben_mitglieder->getRowArray();
        else
            return $this->aufgaben_mitglieder->getResultArray();
    }

    public function get_indexed_aufgaben(){
        $aufgaben = array();
        foreach($this->getAufgaben() as $aufgabe){
            $aufgaben[$aufgabe['id_aufgaben']] = $aufgabe;
        }
        return $aufgaben;
    }

}