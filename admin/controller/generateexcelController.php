<?php
//session_start();
header("Content-Type: text/html;charset=utf-8");


//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
require(dirname(__FILE__)."/Classes/PHPExcel.php");
if (ob_get_contents()) ob_end_clean();
if (!isset($_GET)) {
  die('Error, no exite el objeto POST.');
}
$get = $_GET;

if (!isset($get["tipo"])) {
  die('Error, no existe el dato "TIPO" el objeto POST.');
}

require_once(dirname(__FILE__) . "/../model/Generar_ExcelModel.php");

$id = $get['id'];
$datos_Empleado=Generar_ExcelModel::Datos_guru($id);

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
        'size'  => 12,
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
$objPHPExcel->getActiveSheet()->getStyle('O1')->applyFromArray($styleArray);




// Set the active Excel worksheet to sheet 0 
$objPHPExcel->setActiveSheetIndex(0) 
       ->setCellValue('A1', 'Fecha de inscripción')
       ->setCellValue('B1', 'Tipo de GURÚ')
      ->setCellValue('C1', 'Especialidad')
      ->setCellValue('D1','Nombres y apellidos')
      ->setCellValue('E1', 'Tipo de documento')
      ->setCellValue('F1', 'No. documento' )
      ->setCellValue('G1', 'Género')
      ->setCellValue('H1', 'Fecha de nacimiento')
      ->setCellValue('I1', 'Lugar de nacimiento' )
      ->setCellValue('J1', 'País de residencia')
      ->setCellValue('K1', 'Dirección')
      ->setCellValue('L1','Código del país' )
      ->setCellValue('M1','Teléfono' )
      ->setCellValue('N1','Correo electrónico' );



    $tipo_documento = "";
    if($datos_Empleado[0]['tipo_doc'] =="1"){
        $tipo_documento="Cédula de Ciudadania";
        
      }
      
      if($datos_Empleado[0]['tipo_doc'] =="2"){
        $tipo_documento="Cédula de Extranjeria";
        
      }
      
      if($datos_Empleado[0]['tipo_doc'] =="3"){
        $tipo_documento="Pasaporte";
        
      }
      
      $especialidad = "";
      $tipo = "";
      if($datos_Empleado[0]['medicina'] !=""){
        $especialidad=$datos_Empleado[0]['medicina'];
        $tipo="Medicina";
      }

      if($datos_Empleado[0]['alternativa'] !=""){
        $especialidad=$datos_Empleado[0]['alternativa'];
        $tipo="Alternativa";
      }
      if($datos_Empleado[0]['yoga'] !=""){
        $especialidad=$datos_Empleado[0]['yoga'];
        $tipo="Yoga";
      }
      if($datos_Empleado[0]['psiquico'] !=""){
        $especialidad=$datos_Empleado[0]['psiquico'];
        $tipo="Psiquico";
      }
      if($datos_Empleado[0]['religioso'] !=""){
        $especialidad=$datos_Empleado[0]['religioso'];
        $tipo="Religioso";
      }
      if($datos_Empleado[0]['coaching'] !=""){
        $especialidad=$datos_Empleado[0]['coaching'];
        $tipo="Coaching";
      }
      if($datos_Empleado[0]['idiomas'] !=""){
        $especialidad=$datos_Empleado[0]['idiomas'];
        $tipo="Idiomas";
      }
      if($datos_Empleado[0]['registro_x'] !=""){
        $especialidad=$datos_Empleado[0]['registro_x'];
        $tipo="Tutor";
      }
      if($datos_Empleado[0]['registro_y'] !=""){
        $especialidad=$datos_Empleado[0]['registro_y'];
        $tipo="Otros";
      }

      $genero="";
      if($datos_Empleado[0]['genero']=="f"){
        $genero="Femenino";
      }else{
        $genero="Masculino";
      }
      

      $objPHPExcel->setActiveSheetIndex(0) 
      ->setCellValue('A2', $datos_Empleado[0]['fecha_registro'])
      ->setCellValue('B2', $tipo)
      ->setCellValue('C2',$especialidad)
      ->setCellValue('D2', $datos_Empleado[0]['nombre'])
      ->setCellValue('E2', $tipo_documento)
      ->setCellValue('F2', $datos_Empleado[0]['documento'])
      ->setCellValue('G2', $genero)
      ->setCellValue('H2', $datos_Empleado[0]['fecha'])
      ->setCellValue('I2', $datos_Empleado[0]['estado_c'])
      ->setCellValue('J2', $datos_Empleado[0]['pais'])
      ->setCellValue('K2', $datos_Empleado[0]['direccion'])
      ->setCellValue('L2',"")
      ->setCellValue('M2',$datos_Empleado[0]['telefono'])
      ->setCellValue('N2',$datos_Empleado[0]['correo']);

      $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30); 
      $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30); 
      
   ; 


header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="Format1055.xls"'); 
header('Cache-Control: max-age=0');

//LogModel::Registrar($_SESSION['user_login_status']['id'],$_SESSION['user_login_status']['rol'],'Generate1099',$datos_Empleado['query']);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
