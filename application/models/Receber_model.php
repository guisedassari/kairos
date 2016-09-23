<?php

class Receber_model extends CI_Model {
     public function salvar($dados = null) {
        if ($dados != null) {
            $this->db->insert('contas_receber', $dados);
        }
    }
}