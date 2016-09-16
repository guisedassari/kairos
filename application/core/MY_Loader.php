<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function templete($nome, $dados = null) {

        $this->view('painel/tema/header.php');
        $this->view($nome, $dados);
        $this->view('painel/tema/footer.php');
    }

    public function site($nome, $dados = null) {

        $this->view('painel/tema/header.php');
        $this->view($nome, $dados);
        $this->view('painel/tema/footer.php');
    }

}