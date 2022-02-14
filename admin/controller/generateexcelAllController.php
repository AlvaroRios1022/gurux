<?php
//session_start();
header("Content-Type: text/html;charset=utf-8");


//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
require(dirname(__FILE__)."/Classes/PHPExcel.php");
if (ob_get_contents()) ob_end_clean();
require_once(dirname(__FILE__) . "/../model/Generar_ExcelModel.php");


$datos_Empleado=Generar_ExcelModel::Datos_guru_all();

$objPHPExcel = new PHPExcel();  

$styleArray = array(
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    ),
    'font'  => array(
        'bold'  => true,
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        ),
        'size'  => 14,
    ));


   


$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('I1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('J1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('K1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('L1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('M1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('N1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('O1')->applyFromArray($styleArray);;
$objPHPExcel->getActiveSheet()->getStyle('P1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('Q1')->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('R1')->applyFromArray($styleArray);




// Set the active Excel worksheet to sheet 0 
$objPHPExcel->setActiveSheetIndex(0) 
      ->setCellValue('A1', 'Fecha de inscripción')
      ->setCellValue('B1', 'Tipo de GURÚ')
      ->setCellValue('C1', 'Especialidad')
      ->setCellValue('D1', 'Nombres y apellidos')
      ->setCellValue('E1', 'Tipo de documento')
      ->setCellValue('F1', 'No. documento' )
      ->setCellValue('G1', 'Género')
      ->setCellValue('H1', 'Fecha de nacimiento')
      ->setCellValue('I1', 'Lugar de nacimiento' )
      ->setCellValue('J1', 'País de residencia')
      ->setCellValue('K1', 'Dirección')
      ->setCellValue('L1', 'Código del país' )
      ->setCellValue('M1', 'Teléfono' )
      ->setCellValue('N1', 'Correo electrónico' )

      /* alvaro esto de abajo le falto..... certificado y foto son links */

      ->setCellValue('O1', 'Idioma Nativo')
      ->setCellValue('P1', 'Otros idiomas')
      ->setCellValue('Q1', 'Hoja de vida' )
      ->setCellValue('R1', 'Foto' );

$cant = 2;

foreach($datos_Empleado as $val){
    
    if($val['url_image']=="s" || $val['url_image']=="S"){
        continue;
    }

    $tipo_documento = "";
    if($val['tipo_doc'] =="1"){
        $tipo_documento="Cédula de Ciudadania";
        
      }
      
      if($val['tipo_doc'] =="2"){
        $tipo_documento="Cédula de Extranjeria";
        
      }
      
      if($val['tipo_doc'] =="3"){
        $tipo_documento="Pasaporte";
        
      }
      
      $especialidad = "";
      $tipo = "";
      if($val['medicina'] !=""){
        $especialidad=$val['medicina'];
        $tipo="Medicina";
      }

      if($val['alternativa'] !=""){
        $especialidad=$val['alternativa'];
        $tipo="Alternativa";
      }
      if($val['preparacion'] !=""){
        $especialidad=$val['preparacion'];
        $tipo="Preparación Física";
      }
      if($val['psiquico'] !=""){
        $especialidad=$val['psiquico'];
        $tipo="Psiquico";
      }
      if($val['religioso'] !=""){
        $especialidad=$val['religioso'];
        $tipo="Religioso";
      }
      if($val['coaching'] !=""){
        $especialidad=$val['coaching'];
        $tipo="Coaching";
      }
      if($val['idiomas'] !=""){
        $especialidad=$val['idiomas'];
        $tipo="Idiomas";
      }
      if($val['registro_x'] !=""){
        $especialidad=$val['registro_x'];
        $tipo="Tutor";
      }
      if($val['registro_y'] !=""){
        $especialidad=$val['registro_y'];
        $tipo="Otros";
      }
      if($val['registro_y'] !=""){
        $especialidad=$val['registro_y'];
        $tipo="Otros";
      }
      if($val['especialista'] !=""){
        $especialidad=$val['especialista'];
        $tipo="Especialista de la Construcción";
      }

      $genero="";
      if($val['genero']=="f"){
        $genero="Femenino";
      }else{
        $genero="Masculino";
      }
      
      
      

      
      $newdateregistro = strtotime ('-5 hours' , strtotime($val['fecha_registro'])); //Se resta 5 horas;
      $newdate = date ('Y-m-d h:m:s',$newdateregistro);
      
      
      $objPHPExcel->setActiveSheetIndex(0) 
      
      ->setCellValue('A'.$cant, $newdate)
      ->setCellValue('B'.$cant, $tipo)
      ->setCellValue('C'.$cant,$especialidad)
      ->setCellValue('D'.$cant, $val['nombre'])
      ->setCellValue('E'.$cant, $tipo_documento)
      ->setCellValue('F'.$cant, strval($val['documento']))
      ->setCellValue('G'.$cant, $genero)
      ->setCellValue('H'.$cant, $val['fecha'])
      ->setCellValue('I'.$cant, $val['estado_c'])
      ->setCellValue('J'.$cant, $val['pais'])
      ->setCellValue('K'.$cant, $val['direccion'])
      ->setCellValue('L'.$cant,$val['codigo_pais'])
      ->setCellValue('M'.$cant,$val['telefono'])
      ->setCellValue('N'.$cant,$val['correo'])
        
      /* alvaro esto de abajo le falto..... certificado y foto son links */

      ->setCellValue('O'.$cant, $val['idioma'])
      ->setCellValue('P'.$cant,$val['otro_idioma'])
      ->setCellValue('Q'.$cant,$val['url_cert_formacion'])
      ->setCellValue('R'.$cant,$val['url_image']);
      $cant++;
}
      $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(40); 
      
   ; 


header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="gurus.xls"'); 
header('Cache-Control: max-age=0');

//LogModel::Registrar($_SESSION['user_login_status']['id'],$_SESSION['user_login_status']['rol'],'Generate1099',$datos_Empleado['query']);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
