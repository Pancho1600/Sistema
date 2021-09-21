<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SistemaController extends CI_Controller {

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
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SistemaModel');
	}


    public function Agregar()
	{
		$data['categoria1'] = $this->SistemaModel->listarCat();
		
		$this->form_validation->set_rules(
			array(
				array(
					'field' => 'nombre1',
					'label' => 'Nombre',
					'rules' => 'required'
				),
				array(
					'field' => 'cantidad1',
					'label' => 'cantidad',
					'rules' => 'required'
				),
				array(
					'field' => 'categoria1',
					'label' => 'categoria',
					'rules' => 'required'
				),	
			)
			);

		if($this->form_validation->run() && $this->input->post()){
			$data=array(
				'Nombre'=>$this->input->post('nombre1',TRUE),
				'Cantidad'=>$this->input->post('cantidad1',TRUE),
				'idCategoria'=>$this->input->post('categoria1',TRUE),
			);
			$this->alertas->db($this->SistemaModel->agregar($data), SistemaController);
		}
		$this->load->view('crud/Agregar',$data);
	}
	

	public function Editar($id = null)
	{
		$data['producto1']=$this->SistemaModel->obtener_dato($id);
		$data['categoria1'] = $this->SistemaModel->listarCat();

		$this->form_validation->set_rules(
			array(
				array(
					'field' => 'nombre1',
					'label' => 'Nombre',
					'rules' => 'required'
				),
				array(
					'field' => 'cantidad1',
					'label' => 'cantidad',
					'rules' => 'required'
				),
				array(
					'field' => 'categoria1',
					'label' => 'categoria',
					'rules' => 'required'
				),
			)
		);
		
		if($this->form_validation->run() && $this->input->post()){
			$data=array(
				'Nombre'=>$this->input->post('nombre1',TRUE),
				'Cantidad'=>$this->input->post('cantidad1',TRUE),
				'idCategoria'=>$this->input->post('categoria1',TRUE),
			);
			$this->alertas->db($this->SistemaModel->actualizar($data, $id), SistemaController);
		}
		$this->load->view('crud/Editar',$data);
		
    }

    public function Leer()
	{
		$this->load->view('templeate');
    }

	public function Eliminar($id = null)
	{
		$this->alertas->db($this->SistemaModel->eliminar($id), SistemaController);
	}

	public function index()
	{
		$data['categoria1'] = $this->SistemaModel->listarCat();
		
		$nombre = $this->input->post('buscar');

		if($nombre == null){
			$data['producto1'] = $this->SistemaModel->listar();
			$this->load->view('crud/Listar',$data);
		}
		else{
			$data['producto1'] = $this->SistemaModel->obtener_datos($nombre);
			$this->load->view('crud/Listar',$data);
		}
		
    }

}