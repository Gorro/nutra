<?php

class Admin  extends  SuperController {
	public function __construct() {
      parent::__construct();      
      $this->load-> model('adminmodel');      
      $this->load-> model('nutricionmodel');
      $this->load->helper('url');    
      $this->load->library('session');
      $this->load->helper('security');
      $this->removeCache();
  	}
	public function index(){
		$this->session->sess_destroy();
		if(!$this->session->userdata('login_admin')){
 			$this->load->view('admin/login');
 		}else
 			redirect('/admin/usuarios','refresh');  
	}

	function login(){
		$this->session->sess_destroy();
		if(!$this->session->userdata('login_admin')){
 			$this->load->view('admin/login');
 		}else
 			redirect('/admin/usuarios','refresh');
	}
	public function form_login()
    {
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$pass = do_hash($pass);
		$retorno = $this->adminmodel->verificar_user($user,$pass);
		if(strcmp($retorno, 'si') == 0){
    		$nuevosdatos = array('pass' => $pass,
	    						 'mail_admin' => $user,
	    						 'login_admin' => true);
			$this->session->set_userdata($nuevosdatos);
			echo $retorno;
		}else
			echo $retorno;
	}
	public function usuarios($inicio = 0){
		if($this->session->userdata('login_admin')){
			$this->load->library('pagination');
		    /* URL a la que se desea agregar la paginación*/
		    $config['base_url'] = base_url().'admin/usuarios';
		  
		    /*Obtiene el total de registros a paginar */
		    $config['total_rows'] = $this->adminmodel->Contar_Filas();
		      
		    /*Obtiene el numero de registros a mostrar por pagina */
		    $config['per_page'] = '11';
		 
		    /*Indica que segmento de la URL tiene la paginación, por default es 3*/
		    $config['uri_segment'] = '3';

		    $config['first_link'] = base_url('admin/usuarios');
		    $config['num_links']  = 5;
		  
		    /*Se personaliza la paginación para que se adapte a bootstrap*/
		    $config['full_tag_open'] 	= '<ul class="pagination">';
			$config['full_tag_close'] 	= '</ul>';
			$config['first_link'] 		= false;
			$config['last_link'] 		= false;
			$config['first_tag_open'] 	= '<li>';
			$config['first_tag_close'] 	= '</li>';
			$config['prev_link'] 		= '&laquo';
			$config['prev_tag_open'] 	= '<li class="prev">';
			$config['prev_tag_close'] 	= '</li>';
			$config['next_link'] 		= '&raquo';
			$config['next_tag_open'] 	= '<li>';
			$config['next_tag_close'] 	= '</li>';
			$config['last_tag_open'] 	= '<li>';
			$config['last_tag_close'] 	= '</li>';
			$config['cur_tag_open'] 	= '<li class="active"><a href="#">';
			$config['cur_tag_close'] 	= '</a></li>';
			$config['num_tag_open'] 	= '<li>';
			$config['num_tag_close'] 	= '</li>';
		  
		    /* Se inicializa la paginacion*/
		    $this->pagination->initialize($config);
		  
		    /* Se obtienen los registros a mostrar*/	    
			$data['resultado']  = $this->adminmodel->Mostrar_usuarios($config['per_page'], $inicio); 
			$data['inicio']		= $inicio;
		      
		    /*Se llama a la vista para mostrar la información*/
		    $this->load->view('admin/header');
			$this->load->view('admin/admin',$data);	
		}
		else
			redirect('/admin/login','refresh');
	}
	public function informe_avanzado($mail){		
		if($this->session->userdata('login_admin')){
			$data['mail'] = $mail;
			$data['desayuno'] 				  = $this->adminmodel->contar_archivos($mail,'desayuno');
			$data['colacion'] 				  = $this->adminmodel->contar_archivos($mail,'colacion');
			$data['almuerzo'] 				  = $this->adminmodel->contar_archivos($mail,'almuerzo');
			$data['media_tarde'] 			  = $this->adminmodel->contar_archivos($mail,'media_tarde');
			$data['colacion2'] 				  = $this->adminmodel->contar_archivos($mail,'colacion2');
			$data['comida_nocturna'] 		  = $this->adminmodel->contar_archivos($mail,'comida_nocturna');
			$data['colacion3'] 				  = $this->adminmodel->contar_archivos($mail,'colacion3');
			$data['archivos_desayuno'] 		  = $this->adminmodel->ver_archivos($mail,'desayuno');		
			$data['archivos_colacion'] 		  = $this->adminmodel->ver_archivos($mail,'colacion');
			$data['archivos_almuerzo'] 		  = $this->adminmodel->ver_archivos($mail,'almuerzo');		
			$data['archivos_media_tarde'] 	  = $this->adminmodel->ver_archivos($mail,'media_tarde');		
			$data['archivos_colacion2'] 	  = $this->adminmodel->ver_archivos($mail,'colacion2');		
			$data['archivos_comida_nocturna'] = $this->adminmodel->ver_archivos($mail,'comida_nocturna');
			$data['archivos_colacion3'] 	  = $this->adminmodel->ver_archivos($mail,'colacion3');		

			$query = $this->adminmodel->mostrar_ejercicio($mail);
			if($query){
				foreach ($query->result() as $datos) {
						$data['actividad'] 	 = $datos->actividad;
						$data['lugar']  	 = $datos->lugar;
						$data['veces']   	 = $datos->veces;
						$data['tiempo']   	 = $datos->tiempo;
						$data['intensidad']  = $datos->intensidad;
						$data['calorias']    = $datos->calorias;
						$data['otro']    	 = $datos->otro;
				}	
			}
								
			$this->load->view('admin/header');
			$this->load->view('admin/informe',$data);
		}
		else
			redirect('/admin/login','refresh');
	}
	public function ver_lista(){				
		if($this->session->userdata('login_admin')){
			$this->load->view('admin/header');
			$this->load->view('admin/ver_hora');
		}else{
			redirect('/admin/login','refresh');
		}			
	}
	public function mostrar_datos(){		
		if($this->session->userdata('login_admin')){
			$mail = $_POST['mail'];
			//$mail = 'mail@mail.mail';
			$result = array(
						'datos' 		=> false,
						'antecedentes' 	=> false,
						'estilo' 		=> false,
						'mediciones' 	=> false,
						'habitos' 		=> false,
						'ejercicio' 	=> false
					);
			$data   = array(
						'datos' 		=> $this->adminmodel->Datos_Usuario($mail,'datos-generales'),
						'antecedentes' 	=> $this->adminmodel->Datos_Usuario($mail,'antecedentes-clinicos'),
						'estilo' 		=> $this->adminmodel->Datos_Usuario($mail,'estilo-de-vida'),
						'mediciones' 	=> $this->adminmodel->Datos_Usuario($mail,'mediciones'),
						'habitos' 		=> $this->adminmodel->Datos_Usuario($mail,'habitos-de-alimentacion'),
						'ejercicio' 	=> $this->adminmodel->Datos_Usuario($mail,'actividad-fisica')
				);
			if( $data['datos'] ){
				$result['datos'] = true;
				foreach ($data['datos']->result() as $datos) {
						$result['nombre'] 	 = $datos->nombre;
						$fecha			  	 = $datos->fecha;
						$result['sexo']   	 = $datos->sexo;
						$result['mail']   	 = $datos->mail;
						$result['telefono']  = $datos->telefono;
						list($ano, $mes, $dia) = explode('-', $fecha); 
	                    $ano_diferencia  = date("Y") - $ano;
	                    $mes_diferencia = date("m") - $mes;
	                    $dia_diferencia   = date("d") - $dia;
	                    if ($dia_diferencia < 0 || $mes_diferencia < 0)
	                    	$result['fecha'] = ($ano_diferencia--)." años";
	                    else
	                    	$result['fecha'] = $ano_diferencia." años";
				}
			}
			if( $data['antecedentes'] ){
				$result['antecedentes'] = true;
				foreach ($data['antecedentes']->result() as $datos) {
						$result['enfermedades'] = $datos->enfermedades;
						$result['otra']		    = $datos->otraenfermedad;
						$result['medicamentos'] = $datos->medicamentos;
						$result['cirugia']		= $datos->cirugiagastrica;
					}
				}
			if( $data['estilo'] ){
				$result['estilo'] = true;
				foreach ($data['estilo']->result() as $datos) {
						$result['ocupacion'] = $datos->ocupacion;
						$result['tendencia'] = $datos->tendenciaalimentaria;
						$result['fuma'] 	 = $datos->fuma;
						$result['alcohol']   = $datos->alcohol;
					}
				}
			if( $data['mediciones'] ){
				$result['mediciones'] = true;
				foreach ($data['mediciones']->result() as $datos) {
						$result['estatura'] = $datos->estatura;
						$result['peso']     = $datos->peso;
						$result['cintura']  = $datos->cintura;
						$result['muneca']	= $datos->muneca;
						$result['pagua']	= $datos->pagua;				
						$result['pgrasa']	= $datos->pgrasa;
						$result['kmusculo'] = $datos->kmusculo;
						$result['tmb']		= $datos->tmb;
						$result['imc']		= $datos->imc;
						$result['riesgo']	= $datos->riesgo;
					}
				}
			if( $data['habitos'] ){
				$result['habitos'] = true;
				foreach ($data['habitos']->result() as $datos) {
						$result['agua']     		  	   = $datos->agua;
						$result['liquidos'] 		  	   = $datos->liquidos;
						$result['cereales'] 		  	   = $datos->cereales;
						$result['frutas']   		  	   = $datos->frutas;
						$result['verduras'] 		  	   = $datos->verduras;
						$result['lacteosyderivados'] 	   = $datos->lacteosyderivados;
						$result['embutidosycomidarapida']  = $datos->embutidosycomidarapida;
						$result['carnesavespescados'] 	   = $datos->carnesavespescados;
						$result['legumbres'] 			   = $datos->legumbres;
						$result['aceites']   			   = $datos->aceites;
						$result['alimentosgrasos'] 	       = $datos->alimentosgrasos;
						$result['huevos']    			   = $datos->huevos;
						$result['azucarespasteleria']      = $datos->azucarespasteleria;
					}
				}
			if( $data['ejercicio'] ){
				$result['ejercicio'] = true;
				foreach ($data['ejercicio']->result() as $datos) {
						$result['actividad'] 		= $datos->actividad;
						$result['actividadfisica'] 	= $datos->actividadfisica;
						$result['duracionsemana']  	= $datos->duracionsemana;
						$result['duracionhoras']	= $datos->duracionhoras;
						$result['intensidad']		= $datos->intensidad;
					}
				}
			$result['mail'] = $mail;
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($result);
		}else
			redirect('/admin/login','refresh');

	}
	public function mostrar_paciente(){
		$mail = $this->input->post('mail');
		$nuevosdatos = array('mail' => $mail);
		$this->session->set_userdata($nuevosdatos);
	}
	function eliminar_datos(){
		$mail = $this->input->post('mail');
		$this->adminmodel->Eliminar_Usuario($mail);
		$result['resultado'] = 'Usuario eliminado';
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);
	}
	function subir_pdf(){
		$tipo_comida = $this->input->post('tipo_comida');
		$mail		 = $this->input->post('user');
		$directorio = "bootstrap/css/images/uploads/".$mail;
		if(!is_dir($directorio)) 
    		mkdir($directorio,0777);	
		$config['upload_path']   = $directorio;
		$config['file_name']     = $_FILES['archivo']['name'];
		$config['max_size']      = "0";
		$config['max_width']     = "0";
		$config['max_height']    = "0";
		$config['overwrite']     = false;
		$config['allowed_types'] = "pdf";
    
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('archivo')) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
    	}
		$data = $this->upload->data();
    	$this->adminmodel->ingresar_archivo($mail,$data['file_name'],$directorio,'pdf',$tipo_comida);
		
	}
	function subir_imagen(){
		$tipo_comida = $this->input->post('tipo_comida');
		$mail		 = $this->input->post('user');
		$directorio = "bootstrap/css/images/uploads/".$mail;
		if(!is_dir($directorio)) 
    		mkdir($directorio,0777);	
		$config['upload_path'] 	 = $directorio;
		$config['file_name']	 = $_FILES['archivo']['name'];
        $config['max_size'] 	 = "0";
        $config['max_width'] 	 = "0";
        $config['max_height'] 	 = "0";
        $config['overwrite']	 = false;
	    $config['allowed_types'] = "gif|jpg|jpg|png";

	    $this->load->library('upload', $config);

	    if (!$this->upload->do_upload('archivo')) {
	        //*** ocurrio un error
	        $data['uploadError'] = $this->upload->display_errors();
	        echo $this->upload->display_errors();
	        return;
		}
		$data['uploadSuccess'] = $this->upload->data();		
		$data = $this->upload->data();
    	$this->adminmodel->ingresar_archivo($mail,$data['file_name'],$directorio,'imagen',$tipo_comida);    	
	}
	function eliminar_archivos(){
		$nombre = $this->input->post('nombre');
		$mail = $this->input->post('mail');
		$this->adminmodel->eliminar_archivo($nombre,$mail);
		$file = $directorio = "bootstrap/css/images/uploads/".$mail."/".$nombre;
		$do = unlink($file);
	}
	/*function mostrar_archivos(){
		$mail = $this->input->post('mail');
		$tipo_comida = $this->input->post('tipo_comida');
		$data = $this->adminmodel->mostrar_archivos($mail,$tipo_comida);
		foreach ($data->result() as $archivos) {
			
		}
	}*/
	function ingresar_ejercicio(){
		$actividad  = $this->input->post('actividad');
		$lugar 		= $this->input->post('lugar');
		$mail 		= $this->input->post('mail');
		$veces 		= $this->input->post('veces');
		$tiempo     = $this->input->post('tiempo');
		$intensidad = $this->input->post('intensidad');
		$calorias 	= $this->input->post('calorias');
		$otro 	    = $this->input->post('otro');

		if($this->adminmodel->ver_ejercicio($mail)==0)
			$this->adminmodel->insertar_ejercicio($mail, $actividad, $lugar, $veces, $tiempo,$intensidad,$calorias,$otro);
		else
			$this->adminmodel->actualizar_ejercicio($mail, $actividad, $lugar, $veces, $tiempo,$intensidad,$calorias,$otro);
	}
	function enviar_mail(){
		$mail = $this->input->post('mail');
		$config = array('mailtype' => 'html');
		$this->load->library('email');

		$this->email->initialize($config);

		$this->email->from('noreply@nutra.cl', 'Contacto nutra.cl');
		$this->email->to($mail);
		$this->email->subject('Plan de alimentación');
		$this->email->message('<p>Se han adjuntado nuevos archivos a su Plan de alimentación, <a href="'.base_url('intranet/login').'">Ingrese aquí</a> para ver.</p><p>o ingresando a www.nutra.cl</p>');	

		$this->email->send();
	}
	public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect('/admin/login','refresh');
	}
	public function insert_admin(){
		$mail = $this->input->post('mail');
		$pass = $this->input->post('pass');
		$pass = do_hash($pass);
		$this->adminmodel->insertar_admin($mail,$pass);
	}
	public function insertar_administrador(){
		if($this->session->userdata('login_admin')){
			$this->load->view('admin/header');
			$this->load->view('admin/ingresar_admi');
		}else
		redirect('/admin/login','refresh');
	}
	public function nueva_agenda(){
		if($this->session->userdata('login_admin')){
			$this->load->view('admin/header');
			$this->load->view('admin/crear_agenda');
		}else
		redirect('/admin/login','refresh');
	}
	public function verificar_admin(){
		$mail = $this->input->post('mail');
		if($this->adminmodel->verificar_admin($mail)){
			echo TRUE;
		}
		else{
			echo FALSE;
		}
	}
	public function crear_agenda(){
		$nombre_agenda 	= $this->input->post('nombre_agenda');
		$profesional 	= $this->input->post('profesional');
		$diasactivos 	= $this->input->post('diasactivos');
		$fechainicio 	= $this->input->post('fechainicio');
		$horainiciot 	= $this->input->post('horainiciot');
		$horainicio 	= $this->input->post('horainicio');
		$intervalo 		= $this->input->post('intervalo');
		$fechafin 		= $this->input->post('fechafin');
		$horafint 		= $this->input->post('horafint');
		$horafin 		= $this->input->post('horafin');

		$horainiciot  	= date("H:i",strtotime($horainiciot));
		$horainicio  	= date("H:i",strtotime($horainicio));
		$horafint 	 	= date("H:i",strtotime($horafint));
		$horafin 	 	= date("H:i",strtotime($horafin));

		$diasactivos = implode(",",$diasactivos);
		$fechainicio = str_replace('/','-',$fechainicio);
		$fechafin 	 = str_replace('/','-',$fechafin);
		$fechainicio = date('Y-m-d', strtotime($fechainicio));
		$fechafin 	 = date('Y-m-d', strtotime($fechafin));
		$this->adminmodel->desactivar_agenda();
		$this->adminmodel->crear_agenda($nombre_agenda,$profesional,$diasactivos,$horainicio,$horafin,$intervalo,$fechainicio,$fechafin,$horainiciot,$horafint);
	}
	public function buscar_horas(){
		$fechainicio = $this->input->post('fechainicio');
		$fechainicio = str_replace('/','-',$fechainicio);
		$fechainicio = date('Y-m-d', strtotime($fechainicio));
		$datos = $this->nutricionmodel->buscar_horas($fechainicio);
		foreach ($datos->result() as $key ) {
			$result['intervalo']  	  = $key->intervalo;
			$result['horaInicio'] 	  = $key->horainicio;
			$result['horaFin'] 	  	  = $key->horafin;
			$id 					  = $key->id;
		}
		$result['fecha'] = $fechainicio;
		$datos = $this->nutricionmodel->buscar_citas($id,$fechainicio);
		foreach ($datos->result() as $key ) {
			$result['fechaCita'][] = $key->fecha_cita;
			$query = $this->adminmodel->buscar_mail($key->id_user);
			if($query->num_rows > 0){
				foreach ($query->result() as $key ) {
					$mail = $key->mail;
					$result['mail'][] = $mail;
				}
				$query = $this->adminmodel->obtener_nombre($mail);
				foreach ($query->result() as $key ) {
					$result['nombre'][] = $key->nombre;
				}
			}
		}
		if(isset($result['fechaCita'])){
			$result['fechaCitas'] = implode(",",$result['fechaCita']);
		}else{
			$result['fechaCita'] = "";
			$result['mail']		 = "";
			$result['nombre'] 	 = "";
		}
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);

	}
}