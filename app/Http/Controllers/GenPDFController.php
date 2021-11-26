<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use Codedge\Fpdf\Fpdf\Fpdf;


class GenPDFController extends Controller
{

    public function getPDF($id)
    {
        //emulando el modelo
        $this->personaModel = new Persona();
        $this->personasArray=$this->personaModel->all(); 
        




        $this->fpdf = new Fpdf('P','mm','A4');
        $this->fpdf->AddPage();

        //$this->fpdf->Image('http://localhost:8000/storage/foto.jpg',15,12,18);

        $logo = storage_path('app/public/logo.jpg');
        $this->fpdf->Image($logo,15,12,22);
        $this->fpdf->Image($logo,175,12,22);


        $foto=storage_path('app/public/foto.jpg');
        $this->fpdf->Image($foto,160,65,30);

        $fotoFirma=storage_path('app/public/firma.png');
        $this->fpdf->Image($fotoFirma,130,225,55);


        //$this->fpdf->Image('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/220px-Image_created_with_a_mobile_phone.png',15,12,18);

        //$this->fpdf->SetTopMargin(25);
        
        
        $this->fpdf->SetFont('Arial','B',11);

        


        $this->fpdf->MultiCell(0, 6 , utf8_decode("UNIVERSIDAD NACIONAL HERMILIO VALDIZÁN - HUÁNUCO"), 0,'C');   
        $this->fpdf->MultiCell(0, 6 , utf8_decode("VICERRECTORADO ACÁDEMICO"), 0,'C');   

        $this->fpdf->MultiCell(0, 6 , utf8_decode("DIRECCIÓN DE ADMISIÓN"), 0,'C');   

     
        $this->fpdf->MultiCell(0, 6 , utf8_decode("PROCESO DE ADMISIÓN: EXAMEN EXTRAORDINARIO 2022 I"), 0,'C');  
        
     
        $this->fpdf->SetFont('Arial','B',18);
        $this->fpdf->SetXY(10, 40);

        $this->fpdf->MultiCell(0, 9 , utf8_decode("FICHA DE INSCRIPCIÓN"), 0,'C');   
        

        $this->fpdf->SetFont('Arial','',10);
   
        
        
        $spacing=6;
        $pointStart=65;
        $this->fpdf->Text(10, $pointStart, utf8_decode( "Código de Postulante"));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Apellido Paterno"));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Apellido Materno"));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Nombres "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "N° D.N.I. "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Escuela Profesional "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Fecha de examen: "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Hora de ingreso: "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Modalidad "));

        
        $spacing=6;
        $pointStart=65;
        $this->fpdf->SetFont('Arial','B',10);
        $this->fpdf->Text(50, $pointStart, utf8_decode(":  ".$this->personasArray[$id]["codigo"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["apellido_paterno"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["apellido_materno"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["nombres"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["dni"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["modalidad"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["ecuela_profesional"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["fecha_examen"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["hora_ingreso"] ));

      

        $this->fpdf->SetFillColor(0,143,57);
        $this->fpdf->SetTextColor(255);
        $this->fpdf->SetDrawColor(255,233,0);
        $this->fpdf->SetLineWidth(.3);
        $this->fpdf->SetFont('','B');
        $this->fpdf->SetXY(10, 55);
        $this->fpdf->Cell(190, 6, '1. DATOS PERSONALES',1,0,'C',1);

        
           $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();
        $this->fpdf->Ln();

        $this->fpdf->Ln();

         $this->fpdf->Cell(90, 6, utf8_decode('2. DATOS PROCEDENCIA'),1,0,'C',1);
         $this->fpdf->SetFillColor(255,255,255);
         $this->fpdf->SetDrawColor(255,255,255);

        $this->fpdf->Cell(10, 6, '',1,0,'C',1);
        $this->fpdf->SetFillColor(0,143,57);
        $this->fpdf->SetDrawColor(255,233,0);
            $this->fpdf->Cell(90, 6, '3. DATOS DEL COLEGIO',1,0,'C',1);
     
            $this->fpdf->SetXY(10, 165  );

            $this->fpdf->Cell(190, 6, utf8_decode('4. DECLARACIÓN JURADA'),1,0,'C',1);


        $this->fpdf->SetFillColor(255,255,255);
         $this->fpdf->SetDrawColor(255,255,255);
         $this->fpdf->SetTextColor(0);
        $this->fpdf->SetFont('Arial','',10);



                
        $spacing=6;
        $pointStart=131;
        $this->fpdf->Text(10, $pointStart, utf8_decode( "Lugar de Nacimiento"));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Fecha de Nacimiento "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Dirección"));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Teléfonos "));
        $this->fpdf->Text(10, $pointStart+=$spacing, utf8_decode( "Email "));
      

        $spacing=6;
        $pointStart=131;
        $this->fpdf->Text(110, $pointStart, utf8_decode( "Institución Educativa"));
        $this->fpdf->Text(110, $pointStart+=$spacing, utf8_decode( "Tipo de Colegio "));
        $this->fpdf->Text(110, $pointStart+=$spacing, utf8_decode( "Lugar"));
        $this->fpdf->Text(110, $pointStart+=$spacing, utf8_decode( "Año de egreso "));


        $spacing=6;
        $pointStart=131;
        $this->fpdf->SetFont('Arial','B',10);
        $this->fpdf->Text(50, $pointStart, utf8_decode(":  ".$this->personasArray[$id]["lugar_nacimiento"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["fecha_nacimiento"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["direccion"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["telefono"] ));
        $this->fpdf->Text(50, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["email"] ));
 



        $spacing=6;
        $pointStart=131;
        $this->fpdf->SetFont('Arial','B',10);
        $this->fpdf->Text(150, $pointStart, utf8_decode(":  ".$this->personasArray[$id]["insticion_educativa"] ));
        $this->fpdf->Text(150, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["tipo_colegio"] ));
        $this->fpdf->Text(150, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["lugar"] ));
        $this->fpdf->Text(150, $pointStart+=$spacing, utf8_decode(":  ".$this->personasArray[$id]["año_egreso"] ));
 
        $this->fpdf->MultiCell(800, 6 , utf8_decode("VICERRECTORADO ACÁDEMICO"), 0,'C');   


        

        

        
        $this->fpdf->SetXY(10, 172);
        $this->fpdf->SetFont('Arial','',9);

    $this->fpdf->MultiCell(190, 5, utf8_decode("Declaro bajo juramento que información registrada al momento de inscribirme es verdadera y de mi entera responsabilidad. 
La fotografía registrada es actual.
En caso de faltar a la verdad perderé mis derechos de postulante sometiéndome a las sanciones reglamentarias y legales que correspondan.
Conozco y acepto todas las disposiciones del Reglamento General de Admisión al cual me someto.
En caso de alcanzar una vacante, me comprometo a cumplir con lo dispuesto en el capítulo VII del RGA.
Declaro no tener antecedentes policiales.

DÍA DEL EXAMEN:
Presentarse con la ficha de inscripción en el local que le corresponde rendir su Examen de Admisión.
    "));



    $this->fpdf->SetXY(120, 260     );
    $this->fpdf->SetFont('Arial','',8);

$this->fpdf->MultiCell(270, 4, utf8_decode("¡No debe firmar ni colocar su impresión dactilar (huella digital) 
en el carné de postulante-declaración jurada! 
La firma e impresión dactilar se harán el día del examen en el
aula y en presencia del docente responsable.
"));
 

$this->fpdf->Text(45, 247, utf8_decode("-------------------------------------------"));

$this->fpdf->Text(48, 250, utf8_decode("FIRMA DEL POSTULANTE"));
$this->fpdf->Text(45, 272, utf8_decode("-------------------------------------------"));

$this->fpdf->Text(50, 275, utf8_decode("FIRMA DEL DOCENTE"));

$this->fpdf->Rect(50 ,250, 50, 10);


$this->fpdf->Output();


exit;


    }

}

