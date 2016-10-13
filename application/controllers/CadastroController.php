<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('cadastro/clientes');
	}
        
        public function clientes()
	{

            
            if ($this->input->server('REQUEST_METHOD') == 'POST')
            {
                 $dadosCliente['nome'] = $this->input->input_stream('nome');
                 $dadosCliente['nomefantasia'] = $this->input->input_stream('nomefantasia');
                 $dadosCliente['endereco'] = $this->input->input_stream('endereco');
                 $dadosCliente['bairro'] = $this->input->input_stream('bairro');
                 $dadosCliente['cep'] = $this->input->input_stream('cep');
                 $dadosCliente['cnpj'] = $this->input->input_stream('cnpj');
                 $dadosCliente['vcto1'] = $this->input->input_stream('vcto1');
                 $dadosCliente['vcto2'] = $this->input->input_stream('vcto2');
                 $dadosCliente['vctomensal'] = $this->input->input_stream('vctomensal');
                 $dadosCliente['rota'] = $this->input->input_stream('rota');
                 $dadosCliente['telefone'] = $this->input->input_stream('telefone');
                 $dadosCliente['contato'] = $this->input->input_stream('contato');
                 $dadosCliente['email'] = $this->input->input_stream('email');
                 $clientesModel = $this->load->model('cadastro/clientes_model');
                 $this->clientes_model->inserir($dadosCliente);
                 
                 
		
            }
            $this->load->view('cadastro/clientes');
             
             
	}
}
