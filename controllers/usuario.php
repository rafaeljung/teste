<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	public function verificar_sessao(){
		if ($this->session->userdata('logado')== false){
			redirect('dashboard/login');
		}
	} 
	public function index($indice=null)
	{

		$this->verificar_sessao();
		$this->db->select('*');
		$dados['usuarios'] = $this->db->get('usuario')->result();
		
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		if($indice==1){
			$data['msg']= "Usuario cadastrado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
				$data['msg']= "Não foi possivel cadastrar o usuário.";
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==3){
			$data['msg']= "Usuario excluido com sucesso.";
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==4){
				$data['msg']= "Não foi possivel excluir o usuário.";
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==5){
			$data['msg']= "Atualizado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==6){
				$data['msg']= "Não foi possivel atualizar.";
			$this->load->view('includes/msg_erro',$data);
		}
		
		$this->load->view('includes/html_footer');
		$this->load->view('listar_usuario',$dados);
		
	}
	public function cadastro()
	{
			$this->verificar_sessao();
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('includes/html_footer');
		$this->load->view('cadastro_usuario');
		
	}
	
	public function cadastrar()
	{
			$this->verificar_sessao();
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['endereco'] = $this->input->post('endereco');
		$data['email'] = $this->input->post('email');
		$data['senha'] = md5($this->input->post('senha'));
		$data['status'] = $this->input->post('status');
		$data['nivel'] = $this->input->post('nivel');
		
		if($this->db->insert('usuario',$data)){
			redirect('usuario/1');
		}else{
			redirect('usuario/2');
		}
	}
	
	public function excluir($id=null){
			$this->verificar_sessao();
		$this->db->where('idUsuario',$id);
		if($this->db->delete('usuario')){
			redirect('usuario/3');
		}else{
			redirect('usuario/4');
		}
		
	}
	public function atualizar($id=null){
			$this->verificar_sessao();
	  $this->db->where('idUsuario',$id);
      $data['usuario'] = $this->db->get('usuario')->result();
					
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('includes/html_footer');
		$this->load->view('editar_usuario',$data);
		}
	
	public function salvar_atualizacao()
	{
			$this->verificar_sessao();
		$id = $this->input->post('idUsuario');
		
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['endereco'] = $this->input->post('endereco');
		$data['email'] = $this->input->post('email');
		$data['status'] = $this->input->post('status');
		$data['nivel'] = $this->input->post('nivel');
		
		$this->db->where('idUsuario',$id);
			if($this->db->update('usuario',$data)){
			redirect('usuario/5');
		}else{
			redirect('usuario/6');
		}
	}
		
	}
