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
            
            $dados = array();
            $clientesModel = $this->load->model('cadastro/clientes_model');
            

            
            
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
                 $this->clientes_model->inserir($dadosCliente);
                 
                 
		
            }
            
            $clientes = $this->clientes_model->buscar();
            $dados['clientes'] = $clientes;
            

            $this->load->view('cadastro/clientes',$dados);
             
             
	}
        
         public function itens()
	{
            
            $dados = array();
            $clientesModel = $this->load->model('cadastro/clientes_model');
            

            
            
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
                 $this->clientes_model->inserir($dadosCliente);
                 
                 
		
            }
            
            $clientes = $this->clientes_model->buscar();
            $dados['clientes'] = $clientes;
            
            $produtos = $this->clientes_model->buscarProdutos();
            $dados['produtos'] = $produtos;
            
            $itens = $this->clientes_model->buscarItens();
            $dados['itens'] = $itens;
            

            $this->load->view('cadastro/itens',$dados);
             
             
	}
        
        public function itensCliente()
        {
            echo "Entrou aqui";
        }
        
         public function produtos()
	{
            
            $dados = array();
            $clientesModel = $this->load->model('cadastro/clientes_model');          

            
            
            if ($this->input->server('REQUEST_METHOD') == 'POST')
            {
                 $dadosProdutos['nomeproduto'] = $this->input->input_stream('nomeproduto');                
                 $this->clientes_model->inserirProdutos($dadosProdutos);
            }
            
            $produtos = $this->clientes_model->buscarProdutos();
            $dados['produtos'] = $produtos;
            

            $this->load->view('cadastro/produtos',$dados);
             
             
	}
}
