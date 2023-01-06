<?php namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model {


    public function getReiter($reiter_id = NULL) {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('*');

        IF ($reiter_id != NULL)
            $this->reiter->where('reiter.id_reiter', $reiter_id);

        $this->reiter->orderBy('name');
        $result = $this->reiter->get();

        if ($reiter_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createReiter() {

        $this->reiter = $this->db->table('reiter');
        $this->reiter->insert(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
        ));
    }

    public function updateReiter() {

        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('reiter.id_reiter', $_POST['id_reiter']);
        $this->reiter->update(array(
            'name' => $_POST['name'],
            'beschreibung' => $_POST['beschreibung'],
            'id_ersteller' => $_POST['id_ersteller'],
        ));
    }

    public function deleteReiter() {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('reiter.id_reiter', $_POST['id_reiter']);
        $this->reiter->delete();
    }

    public function get_indexed_reiter(){
        $reiters = array();
        foreach($this->getReiter() as $reiter){
            $reiters[$reiter['id_reiter']] = $reiter;
        }
        return $reiters;
    }

}