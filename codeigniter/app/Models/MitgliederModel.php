<?php namespace App\Models;

use CodeIgniter\Model;

class MitgliederModel extends Model {


    public function getMitglieder ($mitglieder_id = NULL) {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('*');

        IF ($mitglieder_id != NULL)
            $this->mitglieder->where('mitglieder.id_mitglieder', $mitglieder_id);

        $this->mitglieder->orderBy('username');
        $result = $this->mitglieder->get();

        if ($mitglieder_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createMitglieder() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->insert(array(
            'username' => $_POST['username'],
            'passwort' => $_POST['passwort'],
            'email' => $_POST['email']));
    }

    public function updateMitglieder() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $this->mitglieder->update(array(
            'username' => $_POST['username'],
            'passwort' => $_POST['password_new'],
            'email' => $_POST['email']));
    }

    public function deleteMitglieder() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $this->mitglieder->delete();
    }

    public function loginMitglieder() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('passwort');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $result = $this->mitglieder->get();

        return $result->getRowArray();
    }

    public function getAufgaben_Mitglieder ($aufgaben_id = NULL) {

        $this->aufgaben_mitglieder = $this->db->query('SELECT * FROM mitglieder m INNER JOIN aufgaben_mitglieder am INNER JOIN aufgaben a ON m.id_mitglieder=am.id_mitglieder AND a.id_aufgaben=am.id_aufgaben');

        IF ($aufgaben_id != NULL)
            $this->aufgaben_mitglieder->where('aufgaben_mitglieder.id_aufgaben', $aufgaben_id);

        $this->aufgaben_mitglieder->orderBy('id_aufgaben');
        $result = $this->aufgaben_mitglieder->get();

        if ($aufgaben_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function get_indexed_mitglieder(){
        $mitglieder = array();
        foreach($this->getMitglieder() as $mitglied){
            $mitglieder[$mitglied['id_mitglieder']] = $mitglied;
        }
        return $mitglieder;
    }

}