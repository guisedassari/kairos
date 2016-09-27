<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contas_receber_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('financeiro/contas_receber_model', 'receber_model');
    }

    public function index() {
        $this->load->templete('painel/financeiro/contas/receber/index');
    }

    public function add() {
        $dados = $this->input->post();

        if ($dados != null) {
            $this->receber_model->save($dados);
            $this->session->set_flashdata("success", "Conta cadastrada com sucesso");
            redirect('painel/contas/index.php');
        }
        $this->load->templete('painel/financeiro/contas/receber/add');
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

}
