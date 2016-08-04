<?php
class NutricionModel extends CI_Model { 
   public function __construct() {
      parent::__construct();
      $this-> load -> database(); 
   }   
   function insertar_datos_generales($ocupacion, $fecha, $sexo, $mail, $telefono){
      $datos = array('nombre'   => $ocupacion,
                     'fecha'    => $fecha,
                     'sexo'     => $sexo,
                     'mail'     => $mail,
                     'telefono' => $telefono);
      return $this->db->insert('datos-generales',$datos);
   }
   function buscar_user($mail){
      $this->db->where('mail',$mail);
      $query = $this->db->get('datos-generales');
      if($query->num_rows > 0) 
         return true;
      else 
         return false;
   }
   function insert_clinicos($enfermedades, $otra, $medicamentos, $cirugia, $mail){
      $datos = array('enfermedades'    => $enfermedades,
                     'otraenfermedad'  => $otra,
                     'medicamentos'    => $medicamentos,
                     'cirugiagastrica' => $cirugia,
                     'mail'            => $mail);
      return $this->db->insert('antecedentes-clinicos',$datos);
   }
   function insert_estilo($ocupacion,$tendencia,$fuma,$alcohol,$descripcion_actividad,$recreativas,$recreativas_si,$cigarros,$cantidad_cigarros,$vasos,$veces_vasos,$mail){
      $datos = array('ocupacion'            => $ocupacion,
                     'tendenciaalimentaria' => $tendencia,
                     'fuma'                 => $fuma,
                     'alcohol'              => $alcohol,
                     'mail'                 => $mail,
                     'descripcion_laboral'  => $descripcion_actividad,
                     'recreativas'          => $recreativas,
                     'recreativas_text'     => $recreativas_si,
                     'numero_cigarros'      => $cigarros,
                     'cantidad_cigarros'    => $cantidad_cigarros,
                     'numero_vasos'         => $vasos,
                     'cantidad_vasos'       => $veces_vasos);
      return $this->db->insert('estilo-de-vida',$datos);
   }
   function insert_mediciones($estatura,$peso,$cintura,$sexo,$muneca,$pagua,$pgrasa,$kmusculo,$tmb,$mail)
   {
      $imc = $peso/($estatura*$estatura);
      $imc = number_format($imc, 2, '.', '');
      if($imc < 16)
         $resultado = $imc . " (IMC), Delgadez severa";
      if($imc>=16 && $imc<16.99)
         $resultado = $imc . " (IMC), Delgadez moderada";
      if($imc>=17 && $imc<18.49)
         $resultado = $imc . ", Delgadez aceptable";
      if($imc>=18.50 && $imc<24.99)
         $resultado = $imc . " (IMC), Peso normal";
      if($imc>=25 && $imc<29.99)
         $resultado = $imc . " (IMC), Sobrepeso";
      if($imc>=30 && $imc<34.99)
         $resultado = $imc . " (IMC), Obesidad moderada";
      if($imc>=35 && $imc<39.99)
         $resultado = $imc . " (IMC), Obesidad severa";
      if($imc>=40)
         $resultado = $imc . " (IMC), Obecidad morbida";      
             
      $datos = array('estatura' => $estatura,
                     'peso'     => $peso,
                     'cintura'  => $cintura,
                     'muneca'   => $muneca,
                     'pagua'    => $pagua,
                     'pgrasa'   => $pgrasa,
                     'kmusculo' => $kmusculo,
                     'tmb'      => $tmb,
                     'mail'     => $mail,
                     'imc'      => $resultado,
                     'riesgo'   => 'Sin información');

      return $this->db->insert('mediciones',$datos);
   }
   function insert_habitos($frecuencia,$mail)
   {
      $datos = array('agua'                   => $frecuencia[0],
                     'liquidos'               => $frecuencia[1],
                     'cereales'               => $frecuencia[2],
                     'frutas'                 => $frecuencia[3],
                     'verduras'               => $frecuencia[4],
                     'lacteosyderivados'      => $frecuencia[5],
                     'embutidosycomidarapida' => $frecuencia[6],
                     'carnesavespescados'     => $frecuencia[7],
                     'legumbres'              => $frecuencia[8],
                     'aceites'                => $frecuencia[9],
                     'alimentosgrasos'        => $frecuencia[10],
                     'huevos'                 => $frecuencia[11],
                     'azucarespasteleria'     => $frecuencia[12],
                     'mail'                   => $mail);
      return $this->db->insert('habitos-de-alimentacion',$datos);
   }
   function insert_actividad($actividad,$actividad_fisica,$duracion_semana,$duracion_horas,$intensidad,$mail)
   {
     $datos = array( 'actividad'       => $actividad,
                     'actividadfisica' => $actividad_fisica,
                     'duracionsemana'  => $duracion_semana,
                     'duracionhoras'   => $duracion_horas,
                     'intensidad'      => $intensidad,
                     'mail'            => $mail);

     return $this->db->insert('actividad-fisica',$datos);
   }
   public function verificar_user($mail,$pass)
   {
      $this->db->where('mail',$mail);
      $this->db->where('pass',$pass);
      $query = $this->db->get('user');
      if($query->num_rows > 0)
         return 'si';
      else
         return 'no';
   }
   public function insert_user_pass($user,$pass)
   {
      $datos = array('mail' => $user,
                     'pass' => $pass);

      $this->db->insert('user',$datos);
   }
   public function recuperar_datos($mail,$tabla)
   {
      $this->db->where('mail',$mail);
      $query = $this->db->get($tabla);
      if($query->num_rows > 0) 
         return $query;
      else 
         return false;
   }
   public function update_datos_clinicos($enfermedades, $otra, $medicamentos, $cirugia, $mail)
   {
      $data = array(
                 'enfermedades'    => $enfermedades,
                 'otraenfermedad'  => $otra,
                 'medicamentos'    => $medicamentos,
                 'cirugiagastrica' => $cirugia);

      $this->db->where('mail', $mail);
      $this->db->update('antecedentes-clinicos', $data);
   }
   public function update_estilo($ocupacion,$tendencia,$fuma,$alcohol,$descripcion_actividad,$recreativas,$recreativas_si,$cigarros,$cantidad_cigarros,$vasos,$veces_vasos,$mail)
   {
      $data = array('ocupacion'            => $ocupacion,
                     'tendenciaalimentaria' => $tendencia,
                     'fuma'                 => $fuma,
                     'alcohol'              => $alcohol,
                     'mail'                 => $mail,
                     'descripcion_laboral'  => $descripcion_actividad,
                     'recreativas'          => $recreativas,
                     'recreativas_text'     => $recreativas_si,
                     'numero_cigarros'      => $cigarros,
                     'cantidad_cigarros'    => $cantidad_cigarros,
                     'numero_vasos'         => $vasos,
                     'cantidad_vasos'       => $veces_vasos);
      $this->db->where('mail', $mail);
      $this->db->update('estilo-de-vida', $data);
   }
   public function update_mediciones($estatura,$peso,$cintura,$sexo,$muneca,$pagua,$pgrasa,$kmusculo,$tmb,$mail)
   {
      $imc = $peso/($estatura*$estatura);
      $imc = number_format($imc, 2, '.', '');
      if($imc < 16)
         $resultado = $imc . " (IMC), Delgadez severa";
      if($imc>=16 && $imc<16.99)
         $resultado = $imc . " (IMC), Delgadez moderada";
      if($imc>=17 && $imc<18.49)
         $resultado = $imc . ", Delgadez aceptable";
      if($imc>=18.50 && $imc<24.99)
         $resultado = $imc . " (IMC), Peso normal";
      if($imc>=25 && $imc<29.99)
         $resultado = $imc . " (IMC), Sobrepeso";
      if($imc>=30 && $imc<34.99)
         $resultado = $imc . " (IMC), Obesidad moderada";
      if($imc>=35 && $imc<39.99)
         $resultado = $imc . " (IMC), Obesidad severa";
      if($imc>=40)
         $resultado = $imc . " (IMC), Obecidad morbida";
      if(strcmp($sexo,'masculino') == 0){
         if($cintura <= 95)
           $riesgo = 'Sin riesgo';
         else
            if($cintura > 95 && $cintura <=102)
               $riesgo = 'Riesgo moderado';
            else
               $riesgo = 'Riesgo elevado';
      }
      else{
         if($cintura <= 82)
            $riesgo = 'Sin riesgo';
         if($cintura > 82 && $cintura <=90)
            $riesgo = 'Riesgo moderado';
         if($cintura > 90)
            $riesgo = 'Riesgo elevado';
      }

      $datos = array('estatura' => $estatura,
                     'peso'     => $peso,
                     'cintura'  => $cintura,
                     'muneca'   => $muneca,
                     'pagua'    => $pagua,
                     'pgrasa'   => $pgrasa,
                     'kmusculo' => $kmusculo,
                     'tmb'      => $tmb,
                     'mail'     => $mail,
                     'imc'      => $resultado,
                     'riesgo'   => $riesgo );
      $this->db->where('mail', $mail);
      $this->db->update('mediciones', $datos);
   }
   public function update_habitos($frecuencia,$mail)
   {
      $datos = array('agua'                   => $frecuencia[0],
                     'liquidos'               => $frecuencia[1],
                     'cereales'               => $frecuencia[2],
                     'frutas'                 => $frecuencia[3],
                     'verduras'               => $frecuencia[4],
                     'lacteosyderivados'      => $frecuencia[5],
                     'embutidosycomidarapida' => $frecuencia[6],
                     'carnesavespescados'     => $frecuencia[7],
                     'legumbres'              => $frecuencia[8],
                     'aceites'                => $frecuencia[9],
                     'alimentosgrasos'        => $frecuencia[10],
                     'huevos'                 => $frecuencia[11],
                     'azucarespasteleria'     => $frecuencia[12]);
      $this->db->where('mail', $mail);
      $this->db->update('habitos-de-alimentacion', $datos);
   }
   public function update_datos_generales($mail,$telefono,$telefonoEmergencia,$direccion,$ciudad)
   {
      $datos = array('telefono'            => $telefono,
                     'telefono_emergencia' => $telefonoEmergencia,
                     'direccion'           => $direccion,
                     'ciudad'              => $ciudad);
      $this->db->where('mail', $mail);
      $this->db->update('datos-generales', $datos);
   }
   public function update_actividad($actividad,$actividad_fisica,$duracion_semana,$duracion_horas,$intensidad,$mail,$lugar)
   {
      $datos = array('actividad'       => $actividad,
                     'actividadfisica' => $actividad_fisica,
                     'duracionsemana'  => $duracion_semana,
                     'duracionhoras'   => $duracion_horas,
                     'intensidad'      => $intensidad,
                     'lugar'           => $lugar);
      $this->db->where('mail', $mail);
      $this->db->update('actividad-fisica', $datos);
   }
   public function buscar_horas($fechainicio){
      $this->db->where('fecha_inicio <=', $fechainicio);
      $this->db->where('fecha_fin >=', $fechainicio);
      $this->db->where('activa', 1);
      return $this->db->get('agenda');
   }   
   public function buscar_citas($id_agenda,$fecha){
      
      return $this->db->query("SELECT fecha_cita, id_user FROM cita WHERE id_agenda = $id_agenda AND CAST(fecha_cita AS DATE) = '$fecha'");
   }
   public function dias_activos(){
      return $this->db->query("SELECT * FROM agenda WHERE activa = 1");
   
   }
   public function insertar_cita($mail,$fecha){
      $this->db->query("INSERT INTO cita (id_agenda,id_user,fecha_cita) VALUES ((SELECT id FROM agenda where activa = 1),(SELECT id FROM user WHERE mail = '$mail'),'$fecha')");
   }
   public function insertar_examenes($Colesterol,$Capilar,$trigliceridos,$Lactato,$Sanguinea,$Creatitina,$ColesterolT,$ColesterolH,$ColesterolL,$Glicosilada,$Hematocrito,$HemoglobinaS,$mail,$otros,$insulina){
      $this->db->where('mail', $mail);
      $query = $this->db->get('examenes');
      if($query->num_rows > 0){
         $datos = array('colesterol'               => $Colesterol,
                        'glucosa_capilar'          => $Capilar,
                        'trigliceridos'            => $trigliceridos,   
                        'lactato'                  => $Lactato,
                        'glucosa_sanguinea'        => $Sanguinea,
                        'creatitina'               => $Creatitina,
                        'colesterol_total'         => $ColesterolT,
                        'colesterol_hdl'           => $ColesterolH,
                        'colesterol_ldl'           => $ColesterolL,
                        'hemoglobina_glicosilada'  => $Glicosilada,
                        'hematocrito'              => $Hematocrito,
                        'hemoglobina_sangre'       => $HemoglobinaS,
                        'otros'                    => $otros,
                        'insulina'                 => $insulina);

         $this->db->where('mail', $mail);
         $this->db->update('examenes', $datos);
      }
      else{
         $datos = array('colesterol'               => $Colesterol,
                        'glucosa_capilar'          => $Capilar,
                        'trigliceridos'            => $trigliceridos,   
                        'lactato'                  => $Lactato,
                        'glucosa_sanguinea'        => $Sanguinea,
                        'creatitina'               => $Creatitina,
                        'colesterol_total'         => $ColesterolT,
                        'colesterol_hdl'           => $ColesterolH,
                        'colesterol_ldl'           => $ColesterolL,
                        'hemoglobina_glicosilada'  => $Glicosilada,
                        'hematocrito'              => $Hematocrito,
                        'hemoglobina_sangre'       => $HemoglobinaS,
                        'mail'                     => $mail);
         $this->db->insert('examenes',$datos);
      }
   }
   public function mostrar_examenes($mail){
      $this->db->where('mail', $mail);
      $query = $this->db->get('examenes');
      if($query->num_rows > 0) 
         return $query;
      else 
         return false;
   }
   public function insertar_signos($Saturacion,$Pulso,$Presion,$mail){
      $this->db->where('mail', $mail);
      $query = $this->db->get('signos_vitales');
      if($query->num_rows > 0){
         $datos = array( 'saturacion'      => $Saturacion,
                        'pulso_reposo'    => $Pulso,
                        'presion_arterial'=> $Presion);
         $this->db->where('mail', $mail);
         $this->db->update('signos_vitales', $datos);
      }else{
         $datos = array( 'saturacion'      => $Saturacion,
                        'pulso_reposo'    => $Pulso,
                        'presion_arterial'=> $Presion,
                        'mail'            => $mail);
         $this->db->insert('signos_vitales',$datos);
      }
   }
   public function mostrar_signos($mail){
      $this->db->where('mail', $mail);
      $query = $this->db->get('signos_vitales');
      if($query->num_rows > 0) 
         return $query;
      else 
         return false;
   }
}
