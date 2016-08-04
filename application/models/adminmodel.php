<?php
	Class AdminModel extends CI_Model{
		public function __construct() {
	    	parent::__construct();
	      	$this-> load -> database(); 
	    }
	    function Mostrar_Usuarios($cantidad,$inicio){
	    	if(!$inicio)
	    		$inicio = 0;
	    	$this->db->limit($cantidad,$inicio);
	    	$this->db->select('datos-generales.mail, nombre, fecha, imc, riesgo, muneca');
	    	$this->db->from('datos-generales');
	    	$this->db->join('mediciones','mediciones.mail = datos-generales.mail');
	    	$this->db->order_by('nombre','asc');
	    	$query = $this->db->get();
	    	if($query->num_rows > 0) 
		        return $query;
		    else 
		        return false;
	    }
	    function Datos_Usuario($mail,$tabla){
	    	$this->db->where('mail',$mail);
      		$query = $this->db->get($tabla);
      		if($query->num_rows > 0) 
		        return $query;
		    else 
		        return false;
	    }
	    function Contar_Filas(){
	    	$numero = $this->db->query('SELECT COUNT(*) as numero FROM user')->row()->numero;
	    	return intval($numero);
	    }
	    function Eliminar_Usuario($mail){
	    	$tablas = array('user', 'mediciones', 'habitos-de-alimentacion','estilo-de-vida','datos-generales','antecedentes-clinicos','actividad-fisica');
	    	$this->db->where('mail', $mail);
			$this->db->delete($tablas);
	    }
	    function ingresar_archivo($mail,$nombre,$directorio,$tipo,$tipo_comida){
	    	$datos = array( 'mail' 			 => $mail,
	    					'nombre_archivo' => $nombre,
	    					'directorio' 	 => $directorio,
	    					'tipo'			 => $tipo,
	    					'tipo_comida'    => $tipo_comida);

	    	$this->db->insert('archivo',$datos);
	    }
	    function mostrar_archivos($mail){
	    	$this->db->where('mail',$mail);
	    	$query = $this->db->get('archivo');
	    	if($query->num_rows > 0) 
		        return $query;
		    else 
		        return false;
	    }
	    function contar_archivos($mail,$tipo_comida){
	    	$numero = $this->db->query("SELECT COUNT(mail) as numero FROM archivo WHERE mail = '$mail' and tipo_comida = '$tipo_comida'")->row()->numero;
	    	return intval($numero);
	    }
	    function ver_archivos($mail,$tipo_comida){
	    	$datos = array('mail' => $mail, 'tipo_comida' => $tipo_comida);
	    	$this->db->where($datos);
	    	$query = $this->db->get('archivo');
	    	if($query->num_rows > 0)
	    		return $query;
	    	else
	    		return false;
	    }
	    function insertar_ejercicio($mail, $actividad, $lugar, $veces, $tiempo,$intensidad,$calorias,$otro){
	      $datos = array('mail'       => $mail,
	                     'actividad'  => $actividad,
	                     'lugar'      => $lugar,
	                     'veces' 	  => $veces,
	                     'tiempo' 	  => $tiempo,
	                     'intensidad' => $intensidad,
	                     'calorias'   => $calorias,	                     
	                     'otro'   	  => $otro);
	      return $this->db->insert('ejercicio',$datos);
	   }
	   function eliminar_archivo($nombre,$mail){
	   	$this->db->delete('archivo', array('nombre_archivo' => $nombre,'mail' => $mail)); 
	   }
	   function ver_ejercicio($mail){
	   	$numero = $this->db->query("SELECT COUNT(mail) as numero FROM ejercicio WHERE mail = '$mail'")->row()->numero;
	    return intval($numero);
	   }
	   function actualizar_ejercicio($mail, $actividad, $lugar, $veces, $tiempo,$intensidad,$calorias,$otro){
	   	$datos = array(  'actividad'  => $actividad,
	                     'lugar'      => $lugar,
	                     'veces' 	  => $veces,
	                     'tiempo' 	  => $tiempo,
	                     'intensidad' => $intensidad,
	                     'calorias'   => $calorias,	                     
	                     'otro'   	  => $otro);
	    $this->db->where('mail', $mail);
      	$this->db->update('ejercicio', $datos);	
	   }
	   function mostrar_ejercicio($mail){
	   	$this->db->where('mail',$mail);
	   	$query = $this->db->get('ejercicio');
	   	if($query->num_rows > 0)
    		return $query;
    	else
    		return false;
	   }
	   public function verificar_user($mail,$pass)
	   {
	      $this->db->where('mail',$mail);
	      $this->db->where('pass',$pass);
	      $query = $this->db->get('admin');
	      if($query->num_rows > 0)
	         return 'si';
	      else
	         return 'no';
	   }
	   public function insertar_admin($mail,$pass){
	   	$datos = array( 'mail' => $mail,
	   					'pass' => $pass );
	   	$this->db->insert('admin',$datos);
	   }
	   public function verificar_admin($mail){
	   	$this->db->where('mail',$mail);
	   	$query = $this->db->get('admin');
	   	if($query->num_rows() > 0)
	   		return FALSE;
	   	else
	   		return TRUE;
	   }
	   public function crear_agenda($nombre_agenda,$profesional,$diasactivos,$horainicio,$horafin,$intervalo,$fechainicio,$fechafin,$horainiciot,$horafint){
	   	$datos = array('nombre_agenda'	=>$nombre_agenda,
	   				   'fecha_inicio'	=>$fechainicio,
	   				   'diasactivos'	=>$diasactivos,
	   				   'horainiciot'	=>$horainiciot,
	   				   'horainicio'		=>$horainicio,
	   				   'intervalo'		=>$intervalo,
	   				   'fecha_fin'		=>$fechafin,
	   				   'horafint'		=>$horafint,
	   				   'horafin'		=>$horafin,
	   				   'activa'			=>1);
	   	$this->db->insert('agenda',$datos);
	   }
	   public function desactivar_agenda(){
	   	$this->db->query("UPDATE agenda SET activa = 0 WHERE activa = 1");
	   }

	   public function buscar_mail($user){
	      $this->db->where('id',$user);
	      return $this->db->get('user');
	   }
	   public function obtener_nombre($mail){
	   	$this->db->where('mail',$mail);
	   	return $this->db->get('datos-generales');
	   }
	}
