<?php

class Intranet  extends  SuperController {
	public function __construct() {
      parent::__construct();
      $this->load->helper(array('form', 'url','download','file'));
      $this->load->library('form_validation');      
      $this->load-> model('nutricionmodel');       
      $this->load-> model('adminmodel');     
      $this->load->library('session');
      $this->load->helper('security');
      $this->removeCache();
  	}
	public function index()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			if($this->session->userdata('login_admin')){
				$data["login_admin"] = $this->session->userdata('login_admin');
			}else{
				$data["login_admin"] = FALSE;
			}	
			$this->load->view('intranet/index',$data);
		}
		else
			redirect('/intranet/login','refresh');
       
	}
	public function user(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'datos-generales');
			foreach ($data->result() as $datos) {
				$datos_generales['nombre'] 	 		   = $datos->nombre;
				$datos_generales['fecha']  	 		   = $datos->fecha;
				$datos_generales['sexo']   	 		   = $datos->sexo;
				$datos_generales['mail']   	 		   = $datos->mail;
				$datos_generales['telefono'] 		   = $datos->telefono;
				$datos_generales['telefonoEmergencia'] = $datos->telefono_emergencia;
				$datos_generales['direccion'] 		   = $datos->direccion;
				$datos_generales['ciudad'] 		   	   = $datos->ciudad;
			}
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/index2',$datos_generales);
			$this->load->view('intranet/footer');
		}
		else
			redirect('/intranet/login','refresh');

	}
	public function agendar(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$datos_generales['mail'] = $this->session->userdata('mail');
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/agendar_hora',$datos_generales);
			$this->load->view('intranet/footer');
		}else{
			redirect('/intranet/login','refresh');
		}
	}
	public function datos_clinicos()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$datos_generales['login_admin'] = $this->administrador();
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'antecedentes-clinicos');
			if($data){
				foreach ($data->result() as $datos){
					$datos_generales['enfermedades'] = $datos->enfermedades;
					$datos_generales['otra']		 = $datos->otraenfermedad;
					$datos_generales['medicamentos'] = $datos->medicamentos;
					$datos_generales['cirugia']		 = $datos->cirugiagastrica;
				}
			}

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/datos_clinicos',$datos_generales);
			$this->load->view('intranet/footer');
		}
		else
			redirect('/intranet/login','refresh');
	}
	public function estilos_de_vida()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'estilo-de-vida');
			if($data !=false){
				foreach ($data->result() as $datos){
					$datos_generales['ocupacion'] 			  = $datos->ocupacion;
					$datos_generales['tendencia'] 			  = $datos->tendenciaalimentaria;
					$datos_generales['fuma'] 	  			  = $datos->fuma;
					$datos_generales['alcohol']   			  = $datos->alcohol;
					$datos_generales['descripcion_actividad'] = $datos->descripcion_laboral;
					$datos_generales['recreativas'] 		  = $datos->recreativas;
					$datos_generales['recreativas_si'] 		  = $datos->recreativas_text;
					$datos_generales['cigarros'] 			  = $datos->numero_cigarros;
					$datos_generales['cantidad_cigarros'] 	  = $datos->cantidad_cigarros;
					$datos_generales['vasos'] 				  = $datos->numero_vasos;
					$datos_generales['veces_vasos'] 		  = $datos->cantidad_vasos;
				}
			}
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			if(!isset($datos_generales)){
				$datos_generales = "";
			}
			$this->load->view('intranet/estilo',$datos_generales);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');
	}
	public function informes(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->plan_ejercicio();
			$mail = $this->session->userdata('mail');
			$data['mail'] = $mail;
			$data['archivos_desayuno'] = $this->adminmodel->ver_archivos($mail,'desayuno');		
			$data['archivos_colacion'] = $this->adminmodel->ver_archivos($mail,'colacion');
			$data['archivos_almuerzo'] = $this->adminmodel->ver_archivos($mail,'almuerzo');		
			$data['archivos_media_tarde'] = $this->adminmodel->ver_archivos($mail,'media_tarde');		
			$data['archivos_colacion2'] = $this->adminmodel->ver_archivos($mail,'colacion2');		
			$data['archivos_comida_nocturna'] = $this->adminmodel->ver_archivos($mail,'comida_nocturna');		
			$data['archivos_colacion3'] = $this->adminmodel->ver_archivos($mail,'colacion3');	
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/plan_alimentacion',$data);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');
	}
	public function mediciones()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'mediciones');
			foreach ($data->result() as $datos){
				$datos_generales['estatura'] = $datos->estatura;
				$datos_generales['peso']     = $datos->peso;
				$datos_generales['cintura']  = $datos->cintura;
				$datos_generales['muneca']	 = $datos->muneca;
				$datos_generales['pagua']	 = $datos->pagua;				
				$datos_generales['pgrasa']	 = $datos->pgrasa;
				$datos_generales['kmusculo'] = $datos->kmusculo;
				$datos_generales['tmb']		 = $datos->tmb;
				$datos_generales['imc']		 = $datos->imc;
				$datos_generales['riesgo']	 = $datos->riesgo;
			}
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'datos-generales');
			foreach ($data->result() as $datos){
				$datos_generales['sexo'] = $datos->sexo;
			}
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/mediciones',$datos_generales);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');
	}
	public function actividad_fisica()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'actividad-fisica');
			foreach ($data->result() as $datos){
				$datos_generales['actividad'] 		= $datos->actividad;
				$datos_generales['actividadfisica'] = $datos->actividadfisica;
				$datos_generales['duracionsemana']  = $datos->duracionsemana;
				$datos_generales['duracionhoras']	= $datos->duracionhoras;
				$datos_generales['intensidad']		= $datos->intensidad;
				$datos_generales['lugar']			= $datos->lugar;
			}
			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/actividad_fisica',$datos_generales);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');
	}
	public function habitos_de_alimentacion()
	{
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = $this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'habitos-de-alimentacion');
			if($data !=false){
				foreach ($data->result() as $datos){
					$datos_generales['agua']     		  	   = $datos->agua;
					$datos_generales['liquidos'] 		  	   = $datos->liquidos;
					$datos_generales['cereales'] 		  	   = $datos->cereales;
					$datos_generales['frutas']   		  	   = $datos->frutas;
					$datos_generales['verduras'] 		  	   = $datos->verduras;
					$datos_generales['lacteosyderivados'] 	   = $datos->lacteosyderivados;
					$datos_generales['embutidosycomidarapida'] = $datos->embutidosycomidarapida;
					$datos_generales['carnesavespescados'] 	   = $datos->carnesavespescados;
					$datos_generales['legumbres'] 			   = $datos->legumbres;
					$datos_generales['aceites']   			   = $datos->aceites;
					$datos_generales['alimentosgrasos'] 	   = $datos->alimentosgrasos;
					$datos_generales['huevos']    			   = $datos->huevos;
					$datos_generales['azucarespasteleria']     = $datos->azucarespasteleria;
				}
				$datos_generales['no_datos'] = true;
			}
			else{
				$datos_generales['no_datos'] = false;
			}

			$datos_generales['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$datos_generales);
			$this->load->view('intranet/habitos',$datos_generales);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');
	}
	public function plan_alimentacion(){
		
	}
	public function plan_ejercicio(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$query = $this->adminmodel->mostrar_ejercicio($this->session->userdata('mail'));
			$data = null;
			if($query){
				foreach ($query->result() as $datos) {
						$data['actividad'] 	 = $datos->actividad;
						$data['lugar']  	 = $datos->lugar;
						$data['veces']   	 = $datos->veces;
						$data['tiempo']   	 = $datos->tiempo;
						$data['intensidad']  = $datos->intensidad;
						$data['calorias']    = $datos->calorias;
						$data['otro']    = $datos->otro;
				}	
			}
			return $data;
		}else
			redirect('/intranet/login','refresh');
	}
	public function signos_vitales(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){	
			$query = $this->nutricionmodel->mostrar_signos($this->session->userdata('mail'));
			$data = null;
			if($query){
				foreach ($query->result() as $datos) {
					$data['Saturacion'] = $datos->saturacion;
					$data['Pulso'] 		= $datos->pulso_reposo;
					$data['Presion'] 	= $datos->presion_arterial;
				}	
			}

			$data['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$data);
			$this->load->view('intranet/signos_vitales',$data);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');			
	}
	public function examenes(){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
		$query = $this->nutricionmodel->mostrar_examenes($this->session->userdata('mail'));
			$data = null;
			if($query){
				foreach ($query->result() as $datos) {
					$data['Colesterol']		= $datos->colesterol;
					$data['Capilar']		= $datos->glucosa_capilar;
					$data['trigliceridos']	= $datos->trigliceridos;
					$data['Lactato']		= $datos->lactato;
					$data['Sanguinea']		= $datos->glucosa_sanguinea;
					$data['Creatitina']		= $datos->creatitina;
					$data['ColesterolT']	= $datos->colesterol_total;
					$data['ColesterolH']	= $datos->colesterol_hdl;
					$data['ColesterolL']	= $datos->colesterol_ldl;
					$data['Glicosilada']	= $datos->hemoglobina_glicosilada;
					$data['Hematocrito']	= $datos->hematocrito;
					$data['HemoglobinaS']	= $datos->hemoglobina_sangre;
					$data['otros']			= $datos->otros;
					$data['insulina']		= $datos->insulina;
				}	
			}
			$data['login_admin'] = $this->administrador();

			$this->load->view('intranet/header',$data);
			$this->load->view('intranet/examenes',$data);
			$this->load->view('intranet/footer');
		}else
			redirect('/intranet/login','refresh');	
	}
	public function insertar_user()
	{
		$telefono  = $this->input->post('telefono');
		$telefonoEmergencia = $this->input->post("telefonoEmergencia");
		$ciudad = $this->input->post("ciudad");	
		$direccion = $this->input->post("direccion");
		/*
		if(isset($telefono)){
			$telefono = NULL;			
		}
		if(isset($telefonoEmergencia)){
			$telefonoEmergencia = NULL;
		}*/
		$this->nutricionmodel->update_datos_generales($this->session->userdata('mail'),$telefono,$telefonoEmergencia,$direccion,$ciudad);
	}
	public function insertar_datos_clinicos()
	{
		$datos 		 = $this->input->post('datos');
		$oe 		 = $this->input->post('osi');
		$medicamento = $this->input->post('msi');
		$cirugia 	 = $this->input->post('csi');

		$flag = true;

		if(strcmp($oe,'Si') == 0){
			$oe = $this->input->post('otra');
		}
		if(strcmp($medicamento,'Si') == 0){
			$medicamento = $this->input->post('medicamento');
		}
		if(strcmp($cirugia,'Si') == 0){
			$cirugia = $this->input->post('cirugia');
		}

		for($i = 0; $i < 5; $i++){
			if(isset($datos[$i]))
				if($flag){
					$enfermedad = $datos[$i];
					$flag = false;
				}
				else
					$enfermedad .= ",".$datos[$i];
		}

		$this->nutricionmodel->update_datos_clinicos($enfermedad,$oe,$medicamento,$cirugia,$this->session->userdata('mail'));

	}
	public function insertar_estilo()
	{
		$ocupacion 				= $this->input->post('ocupacion');
		$tendencia 				= $this->input->post('tendencia');
		$fuma 	   				= $this->input->post('fuma');
		$alcohol   				= $this->input->post('alcohol');
		$descripcion_actividad  = $this->input->post('descripcion_actividad');
		$recreativas 			= $this->input->post('recreativas');
		$recreativas_si 		= $this->input->post('recreativas_si');
		$cigarros 				= $this->input->post('cigarros');
		$cantidad_cigarros 		= $this->input->post('cantidad_cigarros');
		$vasos 					= $this->input->post('vasos');
		$veces_vasos 			= $this->input->post('veces_vasos');

		if(strcmp($tendencia,'Otra') == 0)
			$tendencia = $this->input->post('otendencia');

		if($this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'estilo-de-vida') == false)
			$this->nutricionmodel->insert_estilo($ocupacion,$tendencia,$fuma,$alcohol,$descripcion_actividad,$recreativas,$recreativas_si,$cigarros,$cantidad_cigarros,$vasos,$veces_vasos,$this->session->userdata('mail'));
		else
			$this->nutricionmodel->update_estilo($ocupacion,$tendencia,$fuma,$alcohol,$descripcion_actividad,$recreativas,$recreativas_si,$cigarros,$cantidad_cigarros,$vasos,$veces_vasos,$this->session->userdata('mail'));
		
	}
	public function insertar_mediciones()
	{
		$estatura  = $this->input->post('estatura');
		$peso	   = $this->input->post('peso');
		$cintura   = $this->input->post('cintura');
		$muneca	   = $this->input->post('muneca');
		$pagua 	   = $this->input->post('agua');
		$pgrasa	   = $this->input->post('grasa');
		$kmusculo  = $this->input->post('musculo');
		$tmb	   = $this->input->post('tmb');
		$sexo	   = $this->input->post('sexo');

		if(!isset($pagua))
			$pagua = null;
		if(!isset($pgrasa))
			$pgrasa = null;
		if(!isset($kmusculo))
			$kmusculo = null;
		if(!isset($tmb))
			$tmb = null;

		if($this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'mediciones') == false)
			$this->nutricionmodel->insert_mediciones($estatura,$peso,$cintura,$sexo,$muneca,$pagua,$pgrasa,$kmusculo,$tmb,$this->session->userdata('mail'));
		else
			$this->nutricionmodel->update_mediciones($estatura,$peso,$cintura,$sexo,$muneca,$pagua,$pgrasa,$kmusculo,$tmb,$this->session->userdata('mail'));
		echo 'Datos ingresados';
	}
	public function insertar_habitos()
	{
		$frecuencia = $this->input->post('frecuencia');
		if($this->nutricionmodel->recuperar_datos($this->session->userdata('mail'),'habitos-de-alimentacion') == false)
			$this->nutricionmodel->insert_habitos($frecuencia,$this->session->userdata('mail'));
		else
			$this->nutricionmodel->update_habitos($frecuencia,$this->session->userdata('mail'));

		echo 'Datos ingresados';
	}
	public function insertar_actividad_fisica()
	{
		$actividad 		  = $this->input->post('actividad');
		$actividad_fisica = $this->input->post('actividad-fisica');
		$duracion_semana  = $this->input->post('duracion-semana');
		$duracion_horas   = $this->input->post('duracion-horas');
		$intensidad 	  = $this->input->post('intensidad');
		$lugar 	  			= $this->input->post('lugar');
		
		$this->nutricionmodel->update_actividad($actividad,$actividad_fisica,$duracion_semana,$duracion_horas,$intensidad,$this->session->userdata('mail'),$lugar);
		echo 'datos ingresados';

 	}
 	public function insertar_examenes(){
 		$Colesterol		= $this->input->post('Colesterol');
		$Capilar		= $this->input->post('Capilar');
		$Lactato		= $this->input->post('Lactato');
		$Sanguinea		= $this->input->post('Sanguinea');
		$Creatitina		= $this->input->post('Creatitina');
		$ColesterolT	= $this->input->post('ColesterolT');
		$ColesterolH	= $this->input->post('ColesterolH');
		$ColesterolL	= $this->input->post('ColesterolL');
		$Glicosilada	= $this->input->post('Glicosilada');
		$Hematocrito	= $this->input->post('Hematocrito');
		$HemoglobinaS	= $this->input->post('HemoglobinaS');
		$trigliceridos  = $this->input->post('trigliceridos');
		$otros  		= $this->input->post('otros');
		$insulina  		= $this->input->post('insulina');



		$this->nutricionmodel->insertar_examenes($Colesterol,$Capilar,$trigliceridos,$Lactato,$Sanguinea,$Creatitina,$ColesterolT,$ColesterolH,$ColesterolL,$Glicosilada,$Hematocrito,$HemoglobinaS,$this->session->userdata('mail'),$otros,$insulina);

 	}
 	public function insertar_signos(){
 		$Saturacion = $this->input->post('Saturacion');
		$Pulso 		= $this->input->post('Pulso');
		$Presion 	= $this->input->post('Presion');
		$this->nutricionmodel->insertar_signos($Saturacion,$Pulso,$Presion,$this->session->userdata('mail'));
 	}
 	public function login(){
 		if(!$this->session->userdata('login')){
 			$this->load->view('intranet/login');
 		}else
 			redirect('/intranet','refresh');
 	}
    public function form_login()
    {
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$pass = do_hash($pass);
		$retorno = $this->nutricionmodel->verificar_user($user,$pass);
		if(strcmp($retorno, 'si') == 0){
    		$nuevosdatos = array('pass' => $pass,
	    						 'mail' => $user,
	    						 'login' => true);
			$this->session->set_userdata($nuevosdatos);
			echo $retorno;
		}else
			echo $retorno;
	}
	public function buscar()
	{
		$mail = $this->input->post('mail');
		echo $this->nutricionmodel->buscar_user($mail);
	}
	public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect('/intranet/login','refresh');
	}
	public function decargar_archivo($archivo = null){
		if($this->session->userdata('login') || $this->session->userdata('login_admin')){
			$data = file_get_contents(base_url()."bootstrap/css/images/uploads/".$this->session->userdata('mail')."/".$archivo); // Lee el contenido del archivo  
			force_download($archivo, $data);
		}
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
			$result['horaIniciot'] 	  = $key->horainiciot;
			$result['horaFint'] 	  = $key->horafint;
			$id 					  = $key->id;
		}
		$result['fecha'] = $fechainicio;
		$datos = $this->nutricionmodel->buscar_citas($id,$fechainicio);
		foreach ($datos->result() as $key ) {
			$result['fechaCita'][] = $key->fecha_cita;
		}
		if(isset($result['fechaCita'])){
			$result['fechaCita'] = implode(",",$result['fechaCita']);			
		}else{
			$result['fechaCita'] = "";
		}
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);
	}
	public function dias_activos(){
		$datos = $this->nutricionmodel->dias_activos();
		foreach ($datos->result() as $key ) {
			$result['fechaInicio']   = $key->fecha_inicio;
			$result['fechaFin']      = $key->fecha_fin;
			$result['diasActivos']   = $key->diasactivos;
		}
		echo header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);
	}
	public function insertar_cita(){
		$mail  = $this->input->post('mail');
		$fecha = $this->input->post('fecha');

		$this->enviar_mail($mail,$fecha);

		$this->nutricionmodel->insertar_cita($mail,$fecha);
	}
	private function administrador(){
		if($this->session->userdata('login_admin')){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	function enviar_mail($mail,$fecha){
		$config = array('mailtype' => 'html');
		$this->load->library('email');

		$this->email->initialize($config);

		$this->email->from('noreply@nutra.cl', 'Contacto nutra.cl');
		$this->email->to($mail);
		$this->email->cc('a.leiva.miranda@gmail.com'); 
		$this->email->subject('Cita Nutricionista - Nutra.cl');
		$this->email->message("<p>Se ha agendado una cita para la fecha: '$fecha'</p>");	

		$this->email->send();
	}
}