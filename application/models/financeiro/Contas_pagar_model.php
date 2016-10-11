<?php

class Contas_pagar_model extends CI_Model {

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
        return $this->db->get('contas_pagar')->result_array();
    }

    public function save($dados = null) {
        if ($dados != null) {
            $this->db->insert('contas_pagar', $dados);
        }
    }

    public function drop($id = null) {
        return $this->db->delete('contas_pagar', array('id_conta_pagar' => $id));
    }
    
    public function select_id($id) {
        return $this->db->get_where('contas_pagar', array('id_conta_pagar' => $id))->row();
    }

    public function update($dados = null) {
        if ($dados != null) {
            return $this->db->update('contas_pagar', $dados, array('id_conta_pagar' => $dados['id_conta_pagar']));
        }
    }
    
    public function teste() {
        $this->date = date_create();
        debbug($this->date);
        $this->db->insert('entries', $this);
    }

}
