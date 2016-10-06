<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contas_receber_controller extends CI_Controller {

    public $dados;

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('financeiro/contas_receber_model', 'receber_model');
    }

    public function index() {
        $dados = $this->receber_model->select();
        //debbug($dados);
        $this->load->templete('painel/financeiro/contas/receber/index', compact('dados'));
    }

    public function add() {
        $dados = $this->input->post();
        //debbug($dados);
        if ($dados != null) {
            $this->receber_model->save($dados);
            $this->session->set_flashdata("success", "Conta cadastrada com sucesso");
            redirect('contas');
        }
        $this->load->templete('painel/financeiro/contas/receber/add');
    }

    public function edit($id) {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->receber_model->update($dados);
            $this->session->set_flashdata("success", "Conta atualizada com sucesso");
            redirect('contas');
        }
        if ($id != null) {
            $dados = $this->receber_model->select_id($id);
            $this->load->templete("painel/financeiro/contas/receber/edit", compact("dados"));
        } else {
            redirect('contas');
        }
    }

    public function delete($id) {
        $this->receber_model->drop($id);
        $this->session->set_flashdata("success", "Conta deletado com sucesso");
        redirect('contas');
    }

}
