<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contas_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->helper('form');
        $this->load->model('financeiro/contas_pagar_model', 'pagar_model');
        $this->load->model('financeiro/contas_receber_model', 'receber_model');
    }

    public function index() {
        $dados_pagar = $this->pagar_model->select();
        $dados_receber = $this->receber_model->select();
        $this->load->templete('painel/financeiro/contas/index', compact('dados_pagar', 'dados_receber'));
    }
}