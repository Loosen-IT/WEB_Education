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

    public function createMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->insert(array(
            'username' => $_POST['username'],
            'passwort' => $_POST['passwort'],
            'email' => $_POST['email']));
    }

    public function updateMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $this->mitglieder->update(array(
            'username' => $_POST['username'],
            'passwort' => $_POST['password_new'],
            'email' => $_POST['email']));
    }

    public function deleteMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $this->mitglieder->delete();
    }

    public function loginMitglied() {
        $this->mitglieder = $this->db->table('mitglieder');
        $this->mitglieder->select('passwort');
        $this->mitglieder->where('mitglieder.username', $_POST['username']);
        $ausgabe = $this->mitglieder->get();

        return $ausgabe->getRowArray();
    }
}