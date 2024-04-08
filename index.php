<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boleta de Calificaciones</title>
  <link rel="stylesheet" href="estilos_boleta.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body{
    font-size:12px;
    font-family: Verdana;
  
   
    }
    
    .boleta {
      width: '80%';
      position:absolute;
      left: 20px;
      right: 20px;
      
    }
    .titulo{
      font-size:10px;
      font-family: Verdana;
      text-align: center;     
    }
    #titulo1{
        background-color: #2E75B5;
        height:20px;
        border:none;
    }
    .titulo2{
        background-color: #BDD6EE;
        height: 50px;
    }
    .textoT1{
        color: white;
    }
    .prom{
        background: #D8D8D8;
    }
    .table-bordered th{
      border: 0.2px solid #343231
        
    }
    .table-bordered td{
        border: 0.2px solid #343231
    }
    .img_fondo-R {
      width: 200px;
    
      
    }
    .img_fondo-L {
      width:120px;
      
      
    }
    .materias tbody td {
      height:30px;
      
    }
    .bloques tbody td {
      height: 120px;
      width:35%;
    }
    .firmas{
      margin-top: 25%;
      height: 250px;
      width:80%;
      position:relative;
      left:10%;
    }
    .firmas tbody td {
      height: 250px
    }
    .contI2{
      margin: 20px;
    }
    .firma-chema{
      height:12%;
      /* background-color: red; */
      position: absolute;
      left:75%;
      width:25%;
      border: 0.2px solid #343231;
    }
    .bloques{
      position: absolute;
      /* background-color: blue; */
      height:12%;
      width:40%;
    }
    

  </style>
</head>
<body>
<div class="boleta card">

 <!-- ********************************************************************************************************************************************** -->
 <table class="header text-center ">
      <tbody>
        <tr>
          <td class="align-top">
            <div class="contI1">
              <img class="img_fondo-R" src="https://dbepa.mx/web/images/logos/logo_sep.png" alt="Imagen 1">
            </div>
          </td>
          <th>
            <div class="titulo contI2">
              <p>SECRETARIA DE EDUCACION PÚBLICA DEL ESTADO</p>
              <p>SUBSECRETARIA DE EDUCACION OBLIGATORIA</p>
              <p>DIRECCION GENERAL DE EDUCACION MEDIA SUPERIOR</p>
              <p>DIRECCION DE BACHILLERATOS ESTATALES Y</p>
              <p>PREPARATORIA ABIERTA</p>
              <p>BACHILLERATO DIGITAL NÚM. 43</p>
              <p>OCOTLAMANIC, COXCATLÁN, PUE.</p>
            </div>
          </th>
          <td class="align-top">
            <div class="contI3">
              <img class="img_fondo-L" src="https://dbepa.mx/web/images/logos/digital.png" alt="Imagen 1">

            </div>
          </td>         
        </tr>
      </tbody>
    </table>

  <!-- ********************************************************************************************************************************************** -->


  <div class="contenedor-de-tablas">
     <!-- *********************************************************TABLA 1**************************************************************** -->
    <table class="table text-center mb-0 table-bordered">
      <thead>
        <tr>
          <th scope="col" colspan="5" id="titulo1"class="text-light textoT1">DATOS DE LA ESCUELA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" style="width: 50%; ">BACHILLERATO DIGITAL NÚM. 43</th>
          <th>SEGUNDO</td>
          <th>ÚNICO</td>
          <th>MATUTINO</td>
          <th>21EBH0999Q</td>
        </tr>
        <tr>
          <td scope="row" " >NOMBRE DE LA ESCUELA</th>
          <td>SEMESTRE</td>
          <td>Grupo</td>
          <td>Turno</td>
          <td> C. T. T.</td>
        </tr>
      </tbody>
      </table>
     <!-- *********************************************************TABLA 2**************************************************************** -->
     <table class="table text-center mb-0 table-bordered">
      <thead>
        <tr>
        <th scope="col" colspan="4" id="titulo1"class="text-center textoT1">DATOS DEL ALUMNO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>ALVA</th>
          <th>JUNCO</th>
          <th>JONATHA</th>
          <th>A123HJP789</th>
        </tr>
        <tr>
          <td scope="row" " >PRIMER APELLIDO</td>
          <td>SEGUNDO APELLIDO</td>
          <td>NOMBRE(S)</td>
          <td>CURP</td>
        </tr>
      </tbody>
    </table>
     <!-- *********************************************************TABLA 3**************************************************************** -->
    <table class="table text-center mb-0 table-bordered">
      <tbody>
        <tr>
          <th scope="col" id="titulo1"class="text-center textoT1">NOMBRE DEL PADRE O TUTOR</th>
          <td>ROBERTO LÓPEZ LÓPEZ</td>
        </tr>
      </tbody>
    </table>
    
     <!-- *********************************************************TABLA 4**************************************************************** -->
    <table class="materias table text-center  table-bordered">
      <thead>
        <tr>
          <th  class="titulo2 align-middle" >ASIGNATURAS</th>
          <td scope="col" colspan="3" class="text-center titulo2 align-middle">BLOQUES</td>
          <td class="titulo2 align-middle">PROM.FINAL</td>
          <td class="titulo2 align-middle">OBSERVACIONES</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>PENSAMIENTO MATEMÁTICO II</th>
          <td>10</td>
          <td>7.5</td>
          <td>9</td>
          <td class="prom" ></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">QUÍMICA II</th>
          <td>6</td>
          <td>5</td>
          <td>4</td>
          <td class="prom" ></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">HABILIDADES DIGITALES</th>
          <td></td>
          <td></td>
          <td></td>
          <td class="prom" ></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row"> </th>
          <td></td>
          <td></td>
          <td></td>
          <td class="prom" ></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">PROMEDIO PARCIAL</th>
          <td></td>
          <td></td>
          <td></td>
          <td class="prom" ></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <!-- *********************************************************TABLA 5**************************************************************** -->
    <table class="table text-center mb-0 table-bordered">
      <tbody>
        <tr>
          <th scope="col" id="titulo1"class="text-start textoT1">NOMBRE DE LA MADRE, PADRE DE FAMILIA O TUTOR(A)</th>
          <th scope="col" id="titulo1"class="text-sm-end textoT1">NOMBRE Y FIRMA DEL TUTOR DE GRUPO</th>
        </tr>
      </tbody>
    </table>
  <!-- *********************************************************TABLA 6**************************************************************** -->
  <div class="firma-chema text-center">
    <br><br><br><br><br><br><br>
      <p>José María Muñoz Hernandez</p>
    </div>  
  <table class="bloques  text-center table-bordered">
      <tbody>
        <tr>
          <th class="align-top">BLOQUE 1</th>
          <th class="align-top">BLOQUE 2</th>
          <th class="align-top">BLOQUE 3</th>         
        </tr>
        <tr>
          <td>10</td>
          <td>7.5</td>
          <td>9</td>         
        </tr>
      </tbody>
    </table>
    
  <!-- *********************************************************TABLA 7**************************************************************** -->
  <table class="firmas table text-center table-bordered">
      <thead>
        <tr>
        <th id="titulo1"class="text-light textoT1">NOMBRE Y FIRMA DEL DIRECTOR</th>
        <th id="titulo1"class="text-light textoT1">SELLO INSTITUCIONAL</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-bottom">VÍCTOR MARÍN PACHECO</td>
          <td class="align-bottom"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
<?php
$html= ob_get_clean();
require_once 'libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dom = new Dompdf();
$options = $dom ->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dom -> setOptions($options);
$dom->loadhtml($html);
$dom->setPaper('A4','portrait');
$dom ->render();
$dom ->stream("boleta_pdf",array("Attachment"=>false));
echo $dom->output();
?>