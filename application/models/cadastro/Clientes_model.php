<?php

class Clientes_model extends CI_Model {

        
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        
        public function inserir($dados)
	{
            $dadosCliente = array();
            if(!empty($dados) && isset($dados))
            {
                 $dadosCliente['nomefantasia'] = $dados['nomefantasia'];
                 $dadosCliente['nome'] = $dados['nome'];
                 $dadosCliente['endereco'] = $dados['endereco'];
                 $dadosCliente['bairro'] = $dados['bairro'];
                 $dadosCliente['cep'] = $dados['cep'];
                 $dadosCliente['cnpj'] = $dados['cnpj'];
                 $dadosCliente['vcto1'] = $dados['vcto1'];
                 $dadosCliente['vcto2'] = $dados['vcto2'];
                 $dadosCliente['vctomensal'] = $dados['vctomensal'];
                 $dadosCliente['rota'] = $dados['rota'];
                 $dadosCliente['telefone'] = $dados['telefone'];
                 $dadosCliente['contato'] = $dados['contato'];
                 $dadosCliente['email'] = $dados['email'];
                 $this->db->insert('clientes',$dadosCliente);
                
                
            }

	}
}