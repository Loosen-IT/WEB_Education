<?php namespace App\Models;

use CodeIgniter\Model;

class ProjekteModel extends Model {


    public function getProjekte($projekte_id = NULL) {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');

        IF ($projekte_id != NULL)
            $this->projekte->where('projekte.id_projekte', $projekte_id);

        $this->projekte->orderBy('name');
        $result = $this->projekte->get();

        if ($projekte_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createProjekt() {

        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'id_ersteller' => $_POST['id_ersteller']
        ));
    }

    public function updateProjekte() {

        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.id_projekte', $_POST['id_projekte']);
        $this->projekte->update(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'id_ersteller' => $_POST['id_ersteller'],
        ));
    }

    public function deleteProjekte() {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.id_projekte', $_POST['id_projekte']);
        $this->projekte->delete();
    }

    public function getProjekte_Mitglieder($projekte_mitglieder_id = NULL) {
        $this->projekte_mitglieder = $this->db->table('projekte_mitglieder');
        $this->projekte_mitglieder->select('*');

        IF ($projekte_mitglieder_id != NULL)
            $this->projekte_mitglieder->where('projekte_mitglieder.id_projekte', $projekte_mitglieder_id);

        $this->projekte_mitglieder->orderBy('id_projekte');
        $result = $this->projekte_mitglieder->get();

        if ($projekte_mitglieder_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function get_indexed_projekte(){
        $projekte = array();
        foreach($this->getProjekte() as $projekt){
            $projekte[$projekt['id_projekte']] = $projekt;
        }
        return $projekte;
    }

}