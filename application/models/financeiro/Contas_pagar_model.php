<?php

class Contas_pagar_model extends CI_Model {

    public $date;

    public function __construct() {
        parent::__construct();
    }
    
    public function select() {
        $this->db->order_by('id_conta_pagar', 'DESC');
        return $this->db->get('contas_pagar')->result_array();
    }
    
    public function save($dados = null) {
        if ($dados != null) {
            $this->db->insert('contas_pagar', $dados);
        }
    }
    
    public function drop($id = null) {
        return $this->db->delete('contas_receber', array('id_conta_receber' => $id));
    }

    public function teste() {
        $this->date = date_create();
        debbug($this->date);
        $this->db->insert('entries', $this);
    }
}
