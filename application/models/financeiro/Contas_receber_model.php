<?php

class Contas_receber_model extends CI_Model {

    public $date;

    public function __construct() {
        parent::__construct();
    }

    public function save($dados = null) {

        if ($dados != null) {
            $this->db->insert('contas_receber', $dados);
        }
    }

    public function teste() {

        $this->date = date_create();
        debbug($this->date);
        $this->db->insert('entries', $this);
    }

}
