<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'/third_party/Spout/Autoloader/autoload.php';

 use Box\Spout\Reader\ReaderFactory;
 use Box\Spout\Common\Type;
class Welcome extends CI_Controller {

    function __construct()
    {
     parent::__construct();
     $this->load->model('bases_model');
     $this->load->library('grocery_CRUD');
     $this->load->library('encrypt');
    }
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
		//$this->load->view('welcome_message');
        //$this->load->view('head');
        //$this->load->view('body');
        $this->load->view('index');
	}

  public function validaLogin(){

   /*
      $encrypted_string = $this->encrypt->encode($this->input->post('pwd'));
      var_dump($encrypted_string);
      var_dump($this->encrypt->decode($encrypted_string));
      var_dump($this->input->post('login'));

   */

    $this->form_validation->set_rules('user','user','trim|required');
    $this->form_validation->set_rules('pasw','pasw','trim|required');
    //$this->form_validation->set_rules('g-recaptcha-response','recaptcha validation','trim|required|callback_validate_captcha');
    $this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es  obligatorio</div>');
    if ($this->form_validation->run() != FALSE)
    {
      $data = array(
               'user'=> $this->input->post('user'),'password'=>$this->input->post('pasw'));
      $usuarios = $this->bases_model->validaLogin($data);
       if ($usuarios == FALSE)
         redirect('/Welcome/index/', 'location');
      else{
        $datasession="";
        foreach($usuarios->result() as $row){
            $datasession = array(
            'user'=> $row->usrdoc,'password'=> $row->psw, 'usr'=>TRUE);
        }
        $this->session->set_userdata($datasession);
        $this->load->view('head');
        $this->load->view('encabezado');
        $data['pacientes']=$this->bases_model->getPacientes();
        $this->load->view('home',$data);
        $this->load->view('footer');
     }
    }else{
      //$this->load->view('head');
      //$this->load->view('body');
      $this->load->view('index');
    }
  }


    public function cerrarSesion()
    {
     $datasession = array('nivel' => '');
        $this->session->unset_userdata($datasession);
       $this->session->sess_destroy();
       redirect('/Welcome/index/', 'refresh');
     }

   public function buscador(){
     $valor = $this->session->flashdata('dd');
     if($valor==Null){
     $busca=$this->input->post('pacientes');
     $paciente = $this->bases_model->getperson($busca);
     $medicament = $this->bases_model->getmedicament($busca);
     $antecedentes = $this->bases_model->getantecedentes($busca);
     if($paciente!=FALSE){
         $data['pacientes']=$paciente;
         $data['medicament']=$medicament;
         $data['antecedentes']=$antecedentes;
         $this->load->view('head');
         $this->load->view('encabezado');
          $this->load->view('buscador',$data);
          $this->load->view('footer');
     }
     //if($valor!=null){var_dump($valor);}

   }else{
     $busca=$valor;
     $paciente = $this->bases_model->getperson($busca);
     if($paciente!=FALSE){
         $data['pacientes']=$paciente;
         $this->load->view('head');
         $this->load->view('encabezado');
          $this->load->view('buscador',$data);
          $this->load->view('footer');
     }
   }
   }




    public function bienvenida(){
      $this->load->view('head');
      $this->load->view('encabezado');
      $data['pacientes']=$this->bases_model->getPacientes();
      $this->load->view('home',$data);
      $this->load->view('footer');
    }

    public function registro(){
      $this->load->view('head');
      $this->load->view('encabezado');
      $this->load->view('registro');
      $this->load->view('footer');
    }

    public function setnotas($idp){
      $data = array(
               'notas'=> $this->input->post('notas'),'id'=>$idp);
      $notas = $this->bases_model->SetNotas($data);

      $this->session->set_flashdata('dd', $idp);
      redirect('/Welcome/buscador/', 'refresh');
    //  $this->buscador($idp);

  }


}
