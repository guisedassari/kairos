<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Receber extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('receber');
    }

    public function index() {
        $this->load->templete('painel/contas/index.php');
    }

    public function add() {
        $dados = $this->input->post();

        if ($dados != null) {
            $this->receber->save($dados);
            $this->session->set_flashdata("success", "Conta cadastrada com sucesso");
            redirect('painel/contas/index.php');
        }
        $this->load->templete('painel/contas/receber/add.php');
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

}
