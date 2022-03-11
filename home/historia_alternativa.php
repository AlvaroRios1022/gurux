<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
	
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<title>Gurus Center</title>
	<style type="text/css">
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
		}
		.mCS-rounded.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
			background-color: #fff;
			margin-top:60px;			
			margin-left:-3px;
		}

		.mCS-rounded.mCSB_scrollTools .mCSB_draggerRail {
			margin-right:10px;
			margin-top:60px;
			width:4px;
			background-color: #A5CE39;
		}
.mySlides {display:none;}

.holder1::-webkit-input-placeholder {
  text-align: center;
  color: #452167;
  
}
input:focus, select:focus, select, input.form-control:focus {

outline:none !important;

outline-width: 0 !important;

box-shadow: none;

-moz-box-shadow: none;

-webkit-box-shadow: none;

}
	

		
	</style>
</head>

<body class="cabecera">
		
<?php
		if(empty($_SESSION['userlog'])) {
	?>
	<div id="container2" >
		<div class="logo">
		<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
		<nav  style=" margin-left:-20px; margin-top:-5x ">
				<ul  >
					<li class="menuamarillo" style=" margin-top:-3px; margin-left:10px; width:120px; height:30px; background-color:transparent; ">
					<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
					<ul style="margin-left:-35px; height:auto; max-width:130px;">
							
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COMUNIDAD GURÚ</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="seguros.php" style="font-size:10px; text-decoration:none; color:#000;" >SEGUROS</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COBRU</a>	</li>
						</ul>
					</li>
					</nav>
			</div>
		<div class="menu">
			
			<div class="menusuperiorizquierdo" align="right" style="margin-left: 70px" >
			<nav  >
				<ul  >
					<li class="menuamarillo" style=" width:150px; height:30px; background-color:transparent; ">
					<a class="menuamarillo" href="#" style="font-size: 15px;  text-decoration:none;">SOBRE NOSOTROS</a>
					<ul style="margin-left:-35px; height:auto; max-width:130px;">
							
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000;" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="politicas.pdf" download="politicas.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POLÍTICAS DE PRIVACIDAD</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="terminos.pdf" download="terminos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >TÉRMINOS Y CONDICIONES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="datos.pdf" download="datos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POLÍTICAS DE DATOS</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000; " href="contacto.php">CONTÁCTENOS</a></li>
						</ul>
					</li>
					<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style="margin-left:-20px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="https://www.guruxy.com" style="font-size: 15px; text-decoration:none;">TRABAJA CON NOSOTROS</a>
					</li>
					<li style="font-size: 15px; color: #FFF;margin-left:-20px;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style=" margin-left:-40px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="#" style="font-size: 15px; text-decoration:none;">¿CÓMO FUNCIONA?</a>
					</li>
				</ul> 
			</nav>
				<!--<ul id="lista">
					<li class="itemlista">SOBRE NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">TRABAJA CON NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">¿CÓMO FUNCIONA?</li>
				</ul>-->   
			</div>
			
			<div class="menusuperiocentro"  style="margin-left: -30px">
				<a href="usuarios.php"> <img src="img/registros_.png" width="176px" height="30px" alt="registro" /></a>
				<img src="img/sesiones_.png" width="176px"" height="30px" alt="sesion" />
			</div>
			<a href="cobru.php" ><img src="img/logoheader.png" width="7%"  alt="sesion" style="margin-top:10px" /></a>


			<div class="menusuperiorderecho" align="left"  style="margin-left: -20px">
				<span class="itemlista">IDIOMA  <a style="color:#FFC808"> ES </a>  |  EN</span>
			</div>
			
			<div class="menuinferior" >
				<br>
				<nav>
					<ul align="right">
					<a href="medicos.php"><li class="azulmedicos" style="">MÉDICOS</li></a>
						<a href="medicina_alternativa.php"><li class="verdemedicos">MÉDICINA ALTERNATIVA</li></a>
						<a href="preparacion.php"><li class="amarilloyoga" >PREPARACIÓN FÍSICA</li></a>
						<a href="psiquicos.php"><li class="moradosiquico">PSÍQUICOS</li></a>
						<a href="religiosos.php"><li class="azulreligioso">RELIGIOSOS</li></a>
						<a href="coaching.php"><li class="naranjacoaching">COACHING</li></a>
						<a href="idiomas.php"><li class="azulidioma">IDIOMAS</li></a>
						<a href="tutores.php"><li class="rosadotutores">TUTORES</li></a>
						<a href="otros.php"><li class="verdeotros">OTROS PROFESIONALES</li></a>
						<a href="construccion.php"><li class="amarillocontruccion">ESPECIALISTAS CONSTRUCCIÓN</li></a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="barra2" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="medicina_alternativa.php" > HOME MEDICINA ALTERNATIVA </a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_alternativos.php" >PREGUNTAS FRECUENTES</a></li>
				<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="presencial_alternativa.php">CITA PRESENCIAL</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">PRUEBAS DE LABORATORIO</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">FARMACIA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="historia_alternativa.php" style="color:#fff;text-shadow: 1px 1px 1px black;">HISTORIA CLÍNICA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_alternativa.php">LIBRERÍA</a></li>
            </ul>
        </div>

		<div class="contenido">
            <div class="barraizquierdaalterna">
			
					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadoralterna" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchalterna" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
							<div class="especialalterno" >
								<a href=" "><li style="color: #333; " value=">Acidez">Acidez</li></a><br>
								<a href=" "><li style="color: #333; " value=">Acné">Acné</li></a><br>
								<a href=" "><li style="color: #333; " value=">Acoso escolar">Acoso escolar</li></a><br>
								<a href=" "><li style="color: #333; " value=">Adicción a medicamentos">Adicción a medicamentos</li></a><br>
								<a href=" "><li style="color: #333; " value=">Agorafobia">Agorafobia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Alcoholismo y abuso de alcohol">Alcoholismo y abuso de alcohol</li></a><br>
								<a href=" "><li style="color: #333; " value=">Alergia a insectos">Alergia a insectos</li></a><br>
								<a href=" "><li style="color: #333; " value=">Alergia ocular">Alergia ocular</li></a><br>
								<a href=" "><li style="color: #333; " value=">Ambliopía">Ambliopía</li></a><br>
								<a href=" "><li style="color: #333; " value=">Amenaza de aborto">Amenaza de aborto</li></a><br>
								<a href=" "><li style="color: #333; " value=">Anorexia nerviosa">Anorexia nerviosa</li></a><br>
								<a href=" "><li style="color: #333; " value=">Anorgasmia">Anorgasmia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Ansiedad">Ansiedad</li></a><br>
								<a href=" "><li style="color: #333; " value=">Artritis">Artritis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Artrosis">Artrosis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Asma en niños">Asma en niños</li></a><br>
								<a href=" "><li style="color: #333; " value=">Astigmatismo">Astigmatismo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Aversión al sexo">Aversión al sexo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Bronquiolitis">Bronquiolitis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Bruxismo">Bruxismo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Bulimia nerviosa">Bulimia nerviosa</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cambios hormonales">Cambios hormonales</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cáncer cervical">Cáncer cervical</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cáncer cutáneo">Cáncer cutáneo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Capsulitis adhesiva">Capsulitis adhesiva</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cataratas">Cataratas</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cefaleas tensionales">Cefaleas tensionales</li></a><br>
								<a href=" "><li style="color: #333; " value=">Celopatía">Celopatía</li></a><br>
								<a href=" "><li style="color: #333; " value=">Cicatriz">Cicatriz</li></a><br>
								<a href=" "><li style="color: #333; " value=">Colitis ulcerativa">Colitis ulcerativa</li></a><br>
								<a href=" "><li style="color: #333; " value=">Colon espástico">Colon espástico</li></a><br>
								<a href=" "><li style="color: #333; " value=">Coronavirus COVID-19">Coronavirus COVID-19</li></a><br>
								<a href=" "><li style="color: #333; " value=">Croup (Laringotraqueobronquitis)">Croup (Laringotraqueobronquitis)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Demencia">Demencia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Demencia senil, tipo de Binswanger">Demencia senil, tipo de Binswanger</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dentición">Dentición</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dependencia emocional">Dependencia emocional</li></a><br>
								<a href=" "><li style="color: #333; " value=">Depresión">Depresión</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dermatitis">Dermatitis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dermatitis atópica">Dermatitis atópica</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dermatomiositis juvenil">Dermatomiositis juvenil</li></a><br>
								<a href=" "><li style="color: #333; " value=">Desarrollo motor">Desarrollo motor</li></a><br>
								<a href=" "><li style="color: #333; " value=">Deseo sexual hipoactivo">Deseo sexual hipoactivo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Desnutrición">Desnutrición</li></a><br>
								<a href=" "><li style="color: #333; " value=">Diabetes">Diabetes</li></a><br>
								<a href=" "><li style="color: #333; " value=">Diabetes gestacional">Diabetes gestacional</li></a><br>
								<a href=" "><li style="color: #333; " value=">Diarrea">Diarrea</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dificultades del aprendizaje">Dificultades del aprendizaje</li></a><br>
								<a href=" "><li style="color: #333; " value=">Disfunción eréctil">Disfunción eréctil</li></a><br>
								<a href=" "><li style="color: #333; " value=">Disfunción sexual femenina">Disfunción sexual femenina</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dispareunia">Dispareunia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Displasia cervical">Displasia cervical</li></a><br>
								<a href=" "><li style="color: #333; " value=">Distensión del músculo de la pantorrilla">Distensión del músculo de la pantorrilla</li></a><br>
								<a href=" "><li style="color: #333; " value=">Distonía focal">Distonía focal</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor articular">Dolor articular</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor crónico de cuello">Dolor crónico de cuello</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor de cabeza">Dolor de cabeza</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor de cabeza por contracción muscular">Dolor de cabeza por contracción muscular</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor de cabeza por migraña">Dolor de cabeza por migraña</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor de espalda">Dolor de espalda</li></a><br>
								<a href=" "><li style="color: #333; " value=">Dolor de garganta">Dolor de garganta</li></a><br>
								<a href=" "><li style="color: #333; " value=">Duelo">Duelo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Eccema (Dermatitis Atópica)">Eccema (Dermatitis Atópica)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Embarazo ectópico">Embarazo ectópico</li></a><br>
								<a href=" "><li style="color: #333; " value=">Endometriosis">Endometriosis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad común agravada por el trabajo">Enfermedad común agravada por el trabajo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad del reflujo gastroesofágico - Bebé">Enfermedad del reflujo gastroesofágico - Bebé</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad del reflujo gastroesofágico - Niño">Enfermedad del reflujo gastroesofágico - Niño</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad del reflujo gastroesofágico (GERD)">Enfermedad del reflujo gastroesofágico (GERD)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad laboral">Enfermedad laboral</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enfermedad pélvica inflamatoria">Enfermedad pélvica inflamatoria</li></a><br>
								<a href=" "><li style="color: #333; " value=">Enuresis">Enuresis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Envejecimiento facial">Envejecimiento facial</li></a><br>
								<a href=" "><li style="color: #333; " value=">Epicondilitis lateral">Epicondilitis lateral</li></a><br>
								<a href=" "><li style="color: #333; " value=">Escoliosis">Escoliosis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Esguince del tobillo">Esguince del tobillo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Esquizofrenia">Esquizofrenia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Estreñimiento">Estreñimiento</li></a><br>
								<a href=" "><li style="color: #333; " value=">Estrés">Estrés</li></a><br>
								<a href=" "><li style="color: #333; " value=">Eyaculación precoz">Eyaculación precoz</li></a><br>
								<a href=" "><li style="color: #333; " value=">Eyaculación retardada">Eyaculación retardada</li></a><br>
								<a href=" "><li style="color: #333; " value=">Falta de crecimiento">Falta de crecimiento</li></a><br>
								<a href=" "><li style="color: #333; " value=">Farmacodependencia">Farmacodependencia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Fibromialgia">Fibromialgia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Flacidez de labios mayores">Flacidez de labios mayores</li></a><br>
								<a href=" "><li style="color: #333; " value=">Fobia específica o simple">Fobia específica o simple</li></a><br>
								<a href=" "><li style="color: #333; " value=">Fractura de codo">Fractura de codo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Fractura de pie">Fractura de pie</li></a><br>
								<a href=" "><li style="color: #333; " value=">Gastritis">Gastritis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Gastroenteritis viral">Gastroenteritis viral</li></a><br>
								<a href=" "><li style="color: #333; " value=">Glaucoma">Glaucoma</li></a><br>
								<a href=" "><li style="color: #333; " value=">Gripe">Gripe</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hemorragia uterina anormal">Hemorragia uterina anormal</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hepatitis B">Hepatitis B</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hepatitis C">Hepatitis C</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hernia de disco">Hernia de disco</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hernia diafragmática">Hernia diafragmática</li></a><br>
								<a href=" "><li style="color: #333; " value=">Herpes zóster (Neuralgia Posherpética)">Herpes zóster (Neuralgia Posherpética)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hipercolesterolemia (colesterol alto)">Hipercolesterolemia (colesterol alto)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hiperemesis gravídica">Hiperemesis gravídica</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hiperhidrosis">Hiperhidrosis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hipertensión arterial">Hipertensión arterial</li></a><br>
								<a href=" "><li style="color: #333; " value=">Hipertrofia de labios menores">Hipertrofia de labios menores</li></a><br>
								<a href=" "><li style="color: #333; " value=">Impotencia">Impotencia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Infecciones del tracto urinario en la infancia">Infecciones del tracto urinario en la infancia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Infertilidad">Infertilidad</li></a><br>
								<a href=" "><li style="color: #333; " value=">Infertilidad femenina">Infertilidad femenina</li></a><br>
								<a href=" "><li style="color: #333; " value=">Intolerancia a la lactosa">Intolerancia a la lactosa</li></a><br>
								<a href=" "><li style="color: #333; " value=">Laringomalacia">Laringomalacia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Lesiones deportivas">Lesiones deportivas</li></a><br>
								<a href=" "><li style="color: #333; " value=">Lunares">Lunares</li></a><br>
								<a href=" "><li style="color: #333; " value=">Lupus eritomatoso sistémico (Lupus)">Lupus eritomatoso sistémico (Lupus)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Menopausia">Menopausia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Migraña">Migraña</li></a><br>
								<a href=" "><li style="color: #333; " value=">Miomas">Miomas</li></a><br>
								<a href=" "><li style="color: #333; " value=">Músculo de la ingle tensionado">Músculo de la ingle tensionado</li></a><br>
								<a href=" "><li style="color: #333; " value=">Neumonía">Neumonía</li></a><br>
								<a href=" "><li style="color: #333; " value=">Obesidad">Obesidad</li></a><br>
								<a href=" "><li style="color: #333; " value=">Obesidad en niños y adolescentes">Obesidad en niños y adolescentes</li></a><br>
								<a href=" "><li style="color: #333; " value=">Odontalgia">Odontalgia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Ojo seco">Ojo seco</li></a><br>
								<a href=" "><li style="color: #333; " value=">Onicomicosis">Onicomicosis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Parálisis cerebral">Parálisis cerebral</li></a><br>
								<a href=" "><li style="color: #333; " value=">Parálisis facial">Parálisis facial</li></a><br>
								<a href=" "><li style="color: #333; " value=">Piel de cristal">Piel de cristal</li></a><br>
								<a href=" "><li style="color: #333; " value=">Problemas gástricos">Problemas gástricos</li></a><br>
								<a href=" "><li style="color: #333; " value=">Psoriasis">Psoriasis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Queratosis seborreica">Queratosis seborreica</li></a><br>
								<a href=" "><li style="color: #333; " value=">Quiste epidérmico">Quiste epidérmico</li></a><br>
								<a href=" "><li style="color: #333; " value=">Quiste ovárico">Quiste ovárico</li></a><br>
								<a href=" "><li style="color: #333; " value=">Reflujo vesicoureteral: niño">Reflujo vesicoureteral: niño</li></a><br>
								<a href=" "><li style="color: #333; " value=">Resfriado">Resfriado</li></a><br>
								<a href=" "><li style="color: #333; " value=">Retraso en el crecimiento">Retraso en el crecimiento</li></a><br>
								<a href=" "><li style="color: #333; " value=">Rinitis alérgica">Rinitis alérgica</li></a><br>
								<a href=" "><li style="color: #333; " value=">Salpingitis">Salpingitis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de Asperger">Síndrome de Asperger</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de disfunción por dolor miofacial">Síndrome de disfunción por dolor miofacial</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de dolor miofascial">Síndrome de dolor miofascial</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de dolor regional complejo">Síndrome de dolor regional complejo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de las piernas inquietas">Síndrome de las piernas inquietas</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome de ovarios poliquísticos (SOP)">Síndrome de ovarios poliquísticos (SOP)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndrome piriforme">Síndrome piriforme</li></a><br>
								<a href=" "><li style="color: #333; " value=">Síndromes de dolor por cáncer">Síndromes de dolor por cáncer</li></a><br>
								<a href=" "><li style="color: #333; " value=">Sonambulismo">Sonambulismo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Tendinitis">Tendinitis</li></a><br>
								<a href=" "><li style="color: #333; " value=">Torcedura, músculo">Torcedura, músculo</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno bipolar">Trastorno bipolar</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de adaptación">Trastorno de adaptación</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de ansiedad (fobia social)">Trastorno de ansiedad (fobia social)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de conducta">Trastorno de conducta</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de estrés postraumático">Trastorno de estrés postraumático</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de la conducta alimentaria">Trastorno de la conducta alimentaria</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de pánico">Trastorno de pánico</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno de personalidad dependiente">Trastorno de personalidad dependiente</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno del espectro autista (TEA)">Trastorno del espectro autista (TEA)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno disfórico premenstrual (TDPM)">Trastorno disfórico premenstrual (TDPM)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno evitativo de la personalidad">Trastorno evitativo de la personalidad</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno obsesivo compulsivo (TOC)">Trastorno obsesivo compulsivo (TOC)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastorno por déficit de atención (ADD)">Trastorno por déficit de atención (ADD)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastornos de la lactancia">Trastornos de la lactancia</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastornos del aprendizaje">Trastornos del aprendizaje</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastornos por déficit de atención e hiperactividad (TDAH)">Trastornos por déficit de atención e hiperactividad (TDAH)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Trastornos sexuales">Trastornos sexuales</li></a><br>
								<a href=" "><li style="color: #333; " value=">Úlcera">Úlcera</li></a><br>
								<a href=" "><li style="color: #333; " value=">Urticaria">Urticaria</li></a><br>
								<a href=" "><li style="color: #333; " value=">Vaginitis atrófica">Vaginitis atrófica</li></a><br>
								<a href=" "><li style="color: #333; " value=">Vaginosis bacteriana">Vaginosis bacteriana</li></a><br>
								<a href=" "><li style="color: #333; " value=">Venas várices">Venas várices</li></a><br>
								<a href=" "><li style="color: #333; " value=">Verrugas">Verrugas</li></a><br>
								<a href=" "><li style="color: #333; " value=">Virus del papiloma humano (HPV)">Virus del papiloma humano (HPV)</li></a><br>
								<a href=" "><li style="color: #333; " value=">Vómitos">Vómitos</li></a><br>
                                <div> &nbsp;</div>
                                <div> &nbsp;</div>
                                <div> &nbsp;</div>
							</div>
				</div>


            

            <div class="blanco">

            </div>

        </div>

	</div>
	
	<?php
			}
		?>
		<?php

			if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
		?>
		<?php
			echo $_SESSION['userlog'];
		?>
		<?php
			}
		?>
				          
		
	<div align="right">
		<img style="width:84%; margin-top:142px " src="img/categorias/barracomo.png" alt="estres">
	</div>
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_medicos2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_medicos3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	
	
		  <!--Product Grid-->
		<div >
		<br>
<!--
			<div align="right">
				<img  src="img/agenda.png" alt="kalita" style=" width:25%; margin-right:25px"  >
			</div> -->
			<section class="section-grid">
				<div class="grid-med">
					<div style="width: 45%;">
					<h2 class="preguntas" style="margin-left:0px">Historia Clínica</h2>
				</div>
			<div class="bloquepreguntas_int">
				<br>
				<p style="font-size:14px; text-align: justify;">
				Ingresa para acceder a tu Historia Clínica
				<br><br>
				<img src="img/ha1.png" style="width:10%" alt="">
				<a style="color: #452167; margin-left:10px">Recibe y organiza tu historia clínica </a>
				<br><br>
				<img src="img/ha2.png" style="width:10%" alt="">
				<a style="color: #452167; margin-left:10px">Monitorea tu salud </a>
				<br><br>
				<img src="img/ha3.png" style="width:10%" alt="">
				<a style="color: #452167; margin-left:10px">Información segura y a salvo </a>


				<br><br>
			</div>
				</div>

			
				<div align="left" style="margin-right: 40px; ">
					
					<div class="menuright" align="center" >

						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesión</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gurús inicia sesión con tu usuario y contraseña</P>
							<br>
							</div>
							<div >				
								<div class="form-group" >
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div>
								<br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
								
							</div>
							<div >
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
								<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>
								<br>
						  </div>
							<input href="usuarios.php"type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
				</div>
				
				</section>
			</div>
			<br>
		</div>
	</div>

	<div class="footeralternativa2" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/aalternativa.png" alt="kalita">
        </div>
            
                <div align="center">
                    
                    <img  style="width:15%; border-radius:20px;" src="img/preffo1.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px;" src="img/preffo2.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px;" src="img/preffo3.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px; margin-right:25px " src="img/preffo4.png" alt="kalita">
                </div> 


			<div class="row" >		

			</div>
		</div>
	</div>
	<footer>
		<div class="container" style="margin-left:20%">
			<div class="row">
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                	<ul class="contact">
						<span style="color: #C93782">SOBRE NOSOTROS </span>    
						
                           
						<li>
							<a href="politicas.pdf" download="politicas.pdf">Política de Privacidad</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">Términos y Condiciones</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">Términos de Uso </a>
						</li>
					</ul>
            	</div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span style="color: #C93782">ERES GURÚ?</span>    
                     <li>
                        <a href="https://www.guruxy.com" >Únete hoy a nosotros y conéctate a esta gran red de expertos.</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span style="color: #C93782">SÍGUENOS</span>    
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
						   </li>
						   <li>
                                <a href="#"><i style="color: #FFFFFF" class="fa fa-linkedin fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-youtube fa-2x"></i></a>
                           </li>
				  <a href="https://guruxy.com/home/index.php" ><img  src="images/logo.png" width="220" height="auto" style="margin-left: -30px"  alt=""/></a
>
              </ul>
            </div>
       
       
	<?php
	require("modal/registro.php");
	require("modal/inicio_sesion.php");
	require("modal/olvido_password.php");
	?>
	 
  </div>
 </footer>

		<!-- SLIDER -->

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			showSlides(slideIndex = n);
			}

			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			}
		</script>
<script>
    (function($){
        $(window).on("load",function(){
            $(".barraizquierdaalterna").mCustomScrollbar({
    theme:"rounded"
});
        });
    })(jQuery);
</script>

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 15000); 
}
</script>
</body>
</html>
