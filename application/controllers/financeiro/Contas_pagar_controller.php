<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contas_pagar_controller extends CI_Controller {

    public $dados;

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('financeiro/contas_pagar_model', 'pagar_model');
    }

    public function index() {
        $dados = $this->pagar_model->select();
        //debbug($dados);
        $this->load->templete('painel/financeiro/contas/pagar/index', compact('dados'));
    }

    public function add() {
        $dados = $this->input->post();
        //debbug($dados);
        if ($dados != null) {
            $this->pagar_model->save($dados);
            $this->session->set_flashdata("success", "Conta cadastrada com sucesso");
            redirect('contas');
        }
        $this->load->templete('painel/financeiro/contas/pagar/add');
    }

    public function edit($id) {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->pagar_model->update($dados);
            $this->session->set_flashdata("success", "Conta atualizada com sucesso");
            redirect('contas');
        }
        if ($id != null) {
            $dados = $this->pagar_model->select_id($id);
            $this->load->templete("painel/financeiro/contas/pagar/edit", compact("dados"));
        } else {
            redirect('contas');
        }
    }

    public function delete($id) {
        $this->pagar_model->drop($id);
        $this->session->set_flashdata("success", "Conta deletado com sucesso");
        redirect('contas');
    }

}
