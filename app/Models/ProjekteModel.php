<?php namespace App\Models;

use CodeIgniter\Model;

use AllowDynamicProperties;
#[AllowDynamicProperties]

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

    public function createProjekte() {

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

    //TODO: mit if clause vermutlich nicht korrekt
    public function getProjekte_Mitglieder($projekte_mitglieder_id = NULL) {
        $this->projekte_mitglieder = $this->db->table('projekte_mitglieder');
        $this->projekte_mitglieder->select('*');

        if ($projekte_mitglieder_id != NULL)
            $this->projekte_mitglieder->where('id_mitglieder', $projekte_mitglieder_id);

        //$this->projekte_mitglieder->orderBy('id_projekte');
        $result = $this->projekte_mitglieder->get();

        if ($projekte_mitglieder_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createProjekte_Mitglieder() {
        $query="insert into projekte_mitglieder values('".$_POST['id_projekte']."','".$_POST['id_mitglieder']."')";
        $this->db->query($query);
    }

    public function updateProjekte_Mitglieder() {
        $this->projekte_mitglieder = $this->db->table('projekte_mitglieder');
        $this->projekte_mitglieder->where('id_projekte', $_POST['id_projekte']);
        $this->projekte_mitglieder->update(array(
            'id_projekte' => $_POST['id_projekte'],
            'id_mitglieder' => $_POST['id_mitglieder']
        ));
    }

    public function deleteProjekte_Mitglieder() {
        $this->projekte_mitglieder = $this->db->table('projekte_mitglieder');
        $this->projekte_mitglieder->where('id_projekte', $_POST['id_projekte']);
        $this->projekte_mitglieder->where('id_mitglieder',$_POST['id_mitglieder']);
        $this->projekte_mitglieder->delete();
    }

    public function worksNotOnProjekte_Mitglieder($mitglieder_id, $projekte_id) {
        $this->projekte_mitglieder = $this->db->table('projekte_mitglieder');
        $this->projekte_mitglieder->where('id_projekte', $projekte_id);
        $this->projekte_mitglieder->where('id_mitglieder',$mitglieder_id);
        $get = $this->projekte_mitglieder->get()->getResultArray();

        return sizeof($get)==0;
    }

    public function getProjekte_Mitglieder_Join_M ($projekte_id = NULL) {

        $this->pm_join_m = $this->db->query('SELECT * FROM mitglieder m INNER JOIN projekte_mitglieder pm ON m.id_mitglieder=pm.id_mitglieder ');

        IF ($projekte_id != NULL)
            $this->pm_join_m->where('projekte_mitglieder.id_projekte', $projekte_id);

        //$this->aufgaben_mitglieder->orderBy('id_aufgaben');
        //$result = $this->aufgaben_mitglieder->get();

        if ($projekte_id != NULL)
            return $this->pm_join_m->getRowArray();
        else
            return $this->pm_join_m->getResultArray();
    }

    public function get_indexed_projekte(){
        $projekte = array();
        foreach($this->getProjekte() as $projekt){
            $projekte[$projekt['id_projekte']] = $projekt;
        }
        return $projekte;
    }

}