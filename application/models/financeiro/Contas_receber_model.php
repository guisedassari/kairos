<?php

class Contas_receber_model extends CI_Model {

    public $date;

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $this->db->order_by('data', 'ASC');
        $this->db->where('data <=', '2016-10-31');
        $this->db->where('data >=', '2016-10-01');
        $this->db->from('contas_receber');
        return $this->db->get()->result_array();
    }

    public function select_date() {
        $this->db->order_by('data', 'ASC');

        return $this->db->get('contas_receber', array('data >' => '2016-009-30'))->result_array();
    }

    public function save($dados = null) {
        if ($dados != null) {
            $this->db->insert('contas_receber', $dados);
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
