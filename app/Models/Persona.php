<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona 
{

    private $personas = array( 

        "45123493" => array (
            /*datos personales */
            "codigo"=>"45123493",
            "apellido_paterno" => "GARCIA",
            "apellido_materno" => "BONILLA",   
            "nombres" => "HERNAN",
            "dni" => "45123493",
            "modalidad"=>"TRASLADO EXTERNO EXTRAORDINARIO (CICLO VIII)", 
            "ecuela_profesional"=>"CIENCIAS ADMINISTRATIVAS",
            "tipo_postulacion" => null,
            "fecha_examen" => null,
            "hora_ingreso" => null,


            /*datos de procedencia*/
            "lugar_nacimiento" => "CORIS",
            "fecha_nacimiento" => "10/11/2000",
            "direccion" => "W",
            "telefono" => "W",
            "email" => "ww@htomail.com",


            /*datos de colegio*/
            "insticion_educativa" => "GABINO URIBE ANTUNEZ",
            "tipo_colegio" => ": NACIONAL / PUBLICO",
            "lugar" => "AIJA",
            "año_egreso" => "2001",
        ),
        "45123412" => array (
            /*datos personales */
            "codigo"=>"45123412",
            "apellido_paterno" => "SHAREBA",
            "apellido_materno" => "PEREZ",   
            "nombres" => "PEPE",
            "dni" => "45123412",
            "modalidad"=>"ADMISIÓN", 
            "ecuela_profesional"=>"CIENCIAS SOCIALES",
            "tipo_postulacion" => null,
            "fecha_examen" => null,
            "hora_ingreso" => null,


            /*datos de procedencia*/
            "lugar_nacimiento" => "CORIS",
            "fecha_nacimiento" => "10/14/2001",
            "direccion" => "Huanuco",
            "telefono" => "W",
            "email" => "sadfsadf@htomail.com",


            /*datos de colegio*/
            "insticion_educativa" => "ANDRES AVELINO",
            "tipo_colegio" => ": PRIVADO",
            "lugar" => "AIJA",
            "año_egreso" => "2001",
        ),
        
        "45123417" => array (
            /*datos personales */
            "codigo"=>"45123417",
            "apellido_paterno" => "GOMEZ",
            "apellido_materno" => "SANTIAGO",   
            "nombres" => "JORGE",
            "dni" => "45123417",
            "modalidad"=>"ADMISIÓN", 
            "ecuela_profesional"=>"INGENIERIA",
            "tipo_postulacion" => null,
            "fecha_examen" => null,
            "hora_ingreso" => null,


            /*datos de procedencia*/
            "lugar_nacimiento" => "OTRO DISTRITO",
            "fecha_nacimiento" => "10/14/2003",
            "direccion" => "Huanuco",
            "telefono" => "W",
            "email" => "sadfsadf@htomail.com",


            /*datos de colegio*/
            "insticion_educativa" => "CESAR VALLEJO",
            "tipo_colegio" => ": PUBLICO",
            "lugar" => "AIJA",
            "año_egreso" => "2001",
        ),

      
     );


     public function all(){
         return $this->personas;
     }

}
