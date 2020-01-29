<?php

namespace application\models;

use application\core\Model;

class Banner extends Model {

    public function getUser($login, $password) {
        $result = $this->db->row('SELECT title, description FROM Users');
        return $result;
    }
}