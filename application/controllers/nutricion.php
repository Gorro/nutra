<?php

class Nutricion  extends SuperController {
	public function __construct() {
      parent::__construct();
      $this->load->helper(array('form','url','download','file','security'));
      $this->load->library('form_validation');      
      $this->load->library('session');    
      $this->load-> model('nutricionmodel');
      $this->removeCache();      
  	}
	public function index()
	{
		
		//$this->load->view('plantilla/homepage-three');
		$this->session->sess_destroy();
	   	$this->load->view('plantilla/header');
		$this->load->view('paginas/user');
		$this->load->view('plantilla/footer');
       
	}
	public function mediciones()
	{
		if($this->session->userdata('entrar')){
			$data['sexo'] = $this->session->userdata('sexo');
			$this->load->view('plantilla/header');
			$this->load->view('paginas/mediciones',$data);
			$this->load->view('plantilla/footer');
		}
		else
			redirect('/nutricion/index', 'refresh'); 
	}
	public function datos_clinicos()
	{
		if($this->session->userdata('entrar')){		
	       	$this->load->view('plantilla/header');
			$this->load->view('paginas/datos_clinicos');
			$this->load->view('plantilla/footer');			
		}
		else
			redirect('/nutricion/index', 'refresh');        
	}
	public function actividad_fisica()
	{
		if($this->session->userdata('entrar')){
			$this->load->view('plantilla/header');
			$this->load->view('paginas/actividad_fisica');
			$this->load->view('plantilla/footer');	
		}
		else
			redirect('/nutricion/index', 'refresh');		
	}
	public function plan_de_alimentacion(){
		if($this->session->userdata('entrar')){
			$data["peso"]     = $this->session->userdata('peso');
			$data["estatura"] = $this->session->userdata('estatura');
			$this->load->view('plantilla/header');
			$this->load->view('paginas/plan_de_alimentacion',$data);
			$this->load->view('plantilla/footer');	
		}
		else
			redirect('/nutricion/index', 'refresh');
	}
	public function password()
	{
		if($this->session->userdata('entrar')){
			$data['mail'] = $this->session->userdata('mail');
			$this->load->view('plantilla/header');
			$this->load->view('paginas/pass',$data);
			$this->load->view('plantilla/footer');
		}
		else
			redirect('/nutricion/index', 'refresh');
	}
	public function form_datos(){
		$this->form_validation->set_rules('nombre', 'Nombre Completo', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE){
        	$this->index();
        }
        else{
        	$nombre   = $this->input->post('nombre');
        	$fecha	  = $this->input->post('anoXD');
        	$fecha   .= '-'.$this->input->post('mes');
        	$fecha   .= '-'.$this->input->post('dia');
        	$mail	  = $this->input->post('mail');
        	$sexo	  = $this->input->post('sexo');
        	$estatura = $this->input->post('estatura');
        	$muneca	  = $this->input->post('circunferencia');
        	$peso	  = $this->input->post('peso');

        	$nuevosdatos = array(
                   'nombre'   => $nombre,
                   'fecha'    => $fecha,
                   'mail'     => $mail,
                   'sexo'     => $sexo,
                   'entrar'	  => true
                );
			$this->session->set_userdata($nuevosdatos);
        	redirect('/nutricion/mediciones', 'refresh');
        }
	}
	public function form_mediciones()
	{
		$estatura = $this->input->post('estatura');
        $muneca	  = $this->input->post('circunferencia');
        $peso	  = $this->input->post('peso');
        $cintura  = $this->input->post('cintura');

        $nuevosdatos = array(
                   'estatura' => $estatura,
                   'muneca'   => $muneca,
                   'peso'     => $peso,
                   'cintura'  => $cintura
                   );   
		$this->session->set_userdata($nuevosdatos);
		redirect('/nutricion/actividad_fisica', 'refresh');
	}
	public function form_clinicos(){
		$datos = $this->input->post('datos');
		$osi   = $this->input->post('osi');
		$otra  = $this->input->post('otra');
		$flag  = true;
		$flag2 = false;
		if(isset($osi)){
			if(strcmp($osi, 'Si') == 0){
				$data = array('otra' => $otra, 'osi' => true);
				$this->session->set_userdata($data);
			}
			else{
				if(strcmp($osi, 'No') == 0){
					$data = array('otra' => 'No', 'osi' => true);
					$this->session->set_userdata($data);
				}else{
					$data = array('osi' => false);
					$this->session->set_userdata($data);
				}
			}
		}

		for($i = 0; $i < 6; $i++){
			if(isset($datos[$i]))
				if(strcmp($datos[$i], 'Ninguna') == 0){
					$nuevosdatos = array('enfermedades' => $datos[$i]);
					$this->session->set_userdata($nuevosdatos);
				}
				else{
					if($flag){
						$enfermedad = $datos[$i];
						$flag = false;
					}
					else
						$enfermedad .= ",".$datos[$i];
					$flag2 = true;
				}
		}
		if($flag2){
			$nuevosdatos = array('enfermedades' => $enfermedad);
			$this->session->set_userdata($nuevosdatos);
			/*$this->load->view('plantilla/header');
			$this->load->view('paginas/consulta');
			$this->load->view('plantilla/footer');*/
		}
		redirect('/nutricion/actividad_fisica');
	}
	public function form_fisica(){
		$actividad = $this->input->post('actividad');

		if(strcmp($actividad, 'No') == 0){
			$nuevosdatos = array('actividad' 		=> $actividad,
								 'actividad-fisica' => null,
								 'duracion-semana'  => null,
								 'duracion-horas'   => null,
								 'intensidad'       => null);
			$this->session->set_userdata($nuevosdatos);
		}
		else{
			$dias 	= $this->input->post('dias');
			$tiempo = $this->input->post('tiempo');
			$nuevosdatos = array('actividad' 		=> $actividad,
								 'actividad-fisica' => null,
								 'duracion-semana'  => $dias,
								 'duracion-horas'   => $tiempo,
								 'intensidad'       => null);
			$this->session->set_userdata($nuevosdatos);
		}
		redirect('/nutricion/password','refresh');
	}
	public function form_pass()
        {
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[4]|max_length[20]');
		if ($this->form_validation->run() == FALSE){
        	$this->password();
        }
        else{
        	$pass = $this->input->post('pass');
        	$pass = do_hash($pass);
        	$nuevosdatos = array('pass' => $pass,
        						 'login' => true);

			$this->session->set_userdata($nuevosdatos);
        	$this->nutricionmodel->insert_user_pass($this->session->userdata('mail'),$this->session->userdata('pass'));            
            $this->nutricionmodel->insertar_datos_generales($this->session->userdata('nombre'),$this->session->userdata('fecha'),$this->session->userdata('sexo'),$this->session->userdata('mail'),0);    
            $this->nutricionmodel->insert_mediciones($this->session->userdata('estatura'),$this->session->userdata('peso'),$this->session->userdata('cintura'),null,$this->session->userdata('muneca'),null,null,null,null,$this->session->userdata('mail'));
            if(strcmp($this->session->userdata('actividad'), 'Si')==0)
            	$this->nutricionmodel->insert_actividad($this->session->userdata('actividad'),null,$this->session->userdata('duracion-semana'),$this->session->userdata('duracion-horas'),null,$this->session->userdata('mail'));
            else
            	$this->nutricionmodel->insert_actividad($this->session->userdata('actividad'),null,null,null,null,$this->session->userdata('mail'));
            
            redirect('/nutricion/plan_de_alimentacion','refresh');            
        }
	}
	public function decargar_archivo($archivo = null){
			$data = file_get_contents(base_url()."bootstrap/planes/".$archivo); // Lee el contenido del archivo
			force_download($archivo, $data);
	}
	
}
?>