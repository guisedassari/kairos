<?php

class Contas_receber_model extends CI_Model {

    public $date;

    public function __construct() {
        parent::__construct();
    }

    public function select($data) {
        if ($data != null) {
            $data = date_create($data['data']);
            $date = date_format($data, "Y-m");
        } else {
            $date = date_format(date_create(), 'Y-m');
        }
        $this->db->order_by('data', 'ASC');
        $this->db->like('data', $date);
        $this->db->from('contas_receber');
        return $this->db->get()->result_array();
    }

    public function select_id($id) {
        return $this->db->get_where('contas_receber', array('id_conta_receber' => $id))->row();
    }

    public function update($dados = null) {
        if ($dados != null) {
            return $this->db->update('contas_receber', $dados, array('id_conta_receber' => $dados['id_conta_receber']));
        }
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
