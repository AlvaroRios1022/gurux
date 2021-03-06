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
	<link href="css/filtros_generales.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
	
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<title>Gurus Center</title>
	<style type="text/css">
	.custom-combobox {
    position: relative;
    display: inline-block;
	
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
	border: 0;

  }
  .custom-combobox-input {
    margin: 0;
	border: 0;

  }
  .ui-menu-item .ui-menu-item-wrapper:hover
{
    background-color: #CCC;
    border: none;    

}
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
			background-color: #9AD3AE;
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
.caja_inline {
    display: inline-block;
    width: 100px;
}


		
	</style>
<script>
	$( function() {
		$.widget( "custom.combobox", {
			_create: function() {
				this.wrapper = $( "<span>" )
					.addClass( "custom-combobox" )
					.insertAfter( this.element );

				this.element.hide();
				this._createAutocomplete();
				this._createShowAllButton();
			},

			_createAutocomplete: function() {
				var selected = this.element.children( ":selected" ),
					value = selected.val() ? selected.text() : "";

				this.input = $( "<input>" )
					.appendTo( this.wrapper )
					.val( value )
					.attr( "title", "" )
					.addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
					.autocomplete({
						delay: 0,
						minLength: 0,
						source: this._source.bind( this )
					})
					.tooltip({
						classes: {
							"ui-tooltip": "ui-state-highlight"
						}
					});

				this._on( this.input, {
					autocompleteselect: function( event, ui ) {
						ui.item.option.selected = true;
						change_ciudad(ui.item.option.value)
						this._trigger( "select", event, {
							item: ui.item.option
						});
					},

					autocompletechange: "_removeIfInvalid"
				});
			},

			_createShowAllButton: function() {
				var input = this.input,
					wasOpen = false;

				$( "<a>" )
					.attr( "tabIndex", -1 )
					.attr( "title", "Mostrar Ciudades" )
					.tooltip()
					.appendTo( this.wrapper )
					.button({
						icons: {
							primary: "ui-icon-triangle-1-s"
						},
						text: false
					})
					.removeClass( "ui-corner-all" )
					.addClass( "custom-combobox-toggle ui-corner-right" )
					.on( "mousedown", function() {
						wasOpen = input.autocomplete( "widget" ).is( ":visible" );
					})
					.on( "click", function() {
						input.trigger( "focus" );
						// Close if already visible
						if ( wasOpen ) {
							return;
						}

						// Pass empty string as value to search for, displaying all results
						input.autocomplete( "search", "" );
					});
			},

			_source: function( request, response ) {
				
				var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
				response( this.element.children( "option" ).map(function() {
					var text = $( this ).text();
					
					if ( this.value && ( !request.term || matcher.test(text) ) )
						return {
							label: text,
							value: text,
							option: this
						};
				}) );
			},

			_removeIfInvalid: function( event, ui ) {

				// Selected an item, nothing to do
				if ( ui.item ) {
					return;
				}

				// Search for a match (case-insensitive)
				var value = this.input.val(),
					valueLowerCase = value.toLowerCase(),
					valid = false;
				this.element.children( "option" ).each(function() {
					if ( $( this ).text().toLowerCase() === valueLowerCase ) {
						this.selected = valid = true;
						return false;
					}
				});

				// Found a match, nothing to do
				if ( valid ) {
					return;
				}

				// Remove invalid value
				this.input
					.val( "" )
					.attr( "title", value + " didn't match any item" )
					.tooltip( "open" );
				this.element.val( "" );
				this._delay(function() {
					this.input.tooltip( "close" ).attr( "title", "" );
				}, 2500 );
				this.input.autocomplete( "instance" ).term = "";
			},

			_destroy: function() {
				this.wrapper.remove();
				this.element.show();
			
			}
		});

		$( "#filtro_ciudad" ).combobox();
		$( "#toggle" ).on( "click", function() {
			$( "#filtro_ciudad" ).toggle();
		});
	} );
	</script>
	</script>
</head>

<body class="cabecera">
		
<?php
		if(empty($_SESSION['userlog'])) {
	?>
	<div id="container2" >
		<div class="logo">
		<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
		<!--	<nav style=" margin-left:-20px; ">
					<ul>
						<li class="menuamarillo" style=" margin-top:-3px; margin-left:10px; width:120px; height:30px; background-color:transparent; ">
							<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>

							<ul style="margin-left:-35px; height:auto; max-width:130px;">

								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/guruxy.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/falabella.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/larebaja.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/lopido.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="turismo_medico.php" style="font-size:14px; text-decoration:none; color:#1ebdde;">TURISMO MEDICO</a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/betplay.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/synlab.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="cobru.php" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/cobru.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="servicios_pasalapagina.php" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/pasalapagina.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/smartfit.svg"></a> </li>
							</ul>
						</li>
				</nav> -->
			</div>
		<div class="menu">
			
			<div class="menusuperiorizquierdo" align="right" style="margin-left: 70px" >
			<nav  >
				<ul  >
					<li class="menuamarillo" style=" width:150px; height:30px; background-color:transparent; ">
					<a class="menuamarillo" href="#" style="font-size: 15px;  text-decoration:none;">SOBRE NOSOTROS</a>
					<ul style="margin-left:-35px; height:auto; max-width:130px;">
							
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000;" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="politicas.pdf" download="politicas.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POL??TICAS DE PRIVACIDAD</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="terminos.pdf" download="terminos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >T??RMINOS Y CONDICIONES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="datos.pdf" download="datos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POL??TICAS DE DATOS</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000; " href="contacto.php">CONT??CTENOS</a></li>
						</ul>
					</li>
					<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style="margin-left:-20px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="https://www.guruxy.com" style="font-size: 15px; text-decoration:none;">TRABAJA CON NOSOTROS</a>
					</li>
					<li style="font-size: 15px; color: #FFF;margin-left:-20px;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style=" margin-left:-40px;height:30px;width:250px;background-color:transparent">
						<a href="como.php" class="menuamarillo" href="#" style="font-size: 15px; text-decoration:none;">??C??MO FUNCIONA?</a>
					</li>
				</ul> 
			</nav>
				<!--<ul id="lista">
					<li class="itemlista">SOBRE NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">TRABAJA CON NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">??C??MO FUNCIONA?</li>
				</ul>-->   
			</div>
			
			<?php 
				if(!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)){
			?>
				<div class="menusuperiocentro"  style="margin-left: -30px">
					<a href="usuarios.php"> <img src="img/registros_.png" width="176px" height="30px" alt="registro" /></a>
					<a href="login.php"><img src="img/sesiones_.png" width="176px" height="30px" alt="sesion" /></a>
				</div>
			<?php 
				}else{ 
			?>
				<div class="menusuperiocentro logout"  style="">
				<a style=" color:#FFC808;  "><?php echo $_SESSION['nombre']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<a class="logout_btn" href="logout.php" style=" "> Cerrar Sesi??n</a>
				</div>
			<?php 
				} 
			?>
			<a href="cobru.php" ><img src="img/logoheader.png" width="7%"  alt="sesion" style="margin-top:10px" /></a>


			<div class="menusuperiorderecho" align="left"  style="margin-left: -20px">
				<span class="itemlista">IDIOMA  <a style="color:#FFC808"> ES </a>  |  EN</span>
			</div>
			
			<div class="menuinferior" >
				<br>
				<nav>
					<ul align="right">
					<a href="servicios.php">
								<li class="rojoservicios" style="">	SERVICIOS</li>
							</a>

							<a href="medicos.php"><li class="azulmedicos" style="">M??DICOS</li></a>
						<a href="medicina_alternativa.php"><li class="verdemedicos">M??DICINA ALTERNATIVA</li></a>
						<a href="preparacion.php"><li class="amarilloyoga" >PREPARACI??N F??SICA</li></a>
						<a href="psiquicos.php"><li class="moradosiquico">PS??QUICOS</li></a>
						<a href="religiosos.php"><li class="azulreligioso">RELIGIOSOS</li></a>
						<a href="coaching.php"><li class="naranjacoaching">COACHING</li></a>
						<a href="idiomas.php"><li class="azulidioma">IDIOMAS</li></a>
						<a href="tutores.php"><li class="rosadotutores">TUTORES</li></a>
						<a href="otros.php"><li class="verdeotros">OTROS PROFESIONALES</li></a>
						<a href="construccion.php"><li class="amarillocontruccion">ESPECIALISTAS CONSTRUCCI??N</li></a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="barraotros" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="otros.php" > HOME OTROS PROFESIONALES </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">WEBINAR</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="presencial_otros.php" style="color:#fff; text-shadow: 1px 1px 1px black;">CITA PRESENCIAL</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_cursos.php">CURSOS EN L??NEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_otros.php" >LIBRER??A</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">MI CUENTA</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdaotros">
			
						<div class="input-group">
							<br><br>
							<input  id="buscador" style="margin-left:10px" class="buscadorotros" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchotros" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>

							<div  >
              <table style="border: transparent !important;border-top: 0px !important ;color:transparent !important;border-radius: transparten;">
							<tbody id="myTable" class="especialotros">
              <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n Estatal')" value="Abogado ???Contrataci??n Estatal">Abogado ???Contrataci??n Estatal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n  Comercial')" value="Abogado ???Contrataci??n  Comercial ">Abogado ???Contrataci??n  Comercial </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n  Civil')" value="Abogado ???Contrataci??n  Civil ">Abogado ???Contrataci??n  Civil </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n  Penal')" value="Abogado ???Contrataci??n  Penal">Abogado ???Contrataci??n  Penal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n Propiedad Intelectual')" value="Abogado ???Contrataci??n Propiedad Intelectual ">Abogado ???Contrataci??n Propiedad Intelectual </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Abogado ???Contrataci??n Estatal Tributaritarista')" value="Abogado ???Contrataci??n Estatal Tributaritarista">Abogado ???Contrataci??n Estatal Tributaritarista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Acompanante')" value="Acompanante">Acompanante</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Actor')" value="Actor">Actor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Actuario')" value="Actuario">Actuario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Administrador Aeropuerto')" value="Administrador Aeropuerto">Administrador Aeropuerto</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Administrador de Empresas')" value="Administrador de Empresas">Administrador de Empresas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Aduana')" value="Agente de Aduana">Agente de Aduana</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Bolsa')" value="Agente de Bolsa">Agente de Bolsa</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Polic??a')" value="Agente de Polic??a">Agente de Polic??a</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Embarque')" value="Agente de Embarque">Agente de Embarque</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Inmigracion')" value="Agente de Inmigracion">Agente de Inmigraci??n</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Marcas y Patentes')" value="Agente de Marcas y Patentes">Agente de Marcas y Patentes</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente Maritimo')" value="Agente Maritimo">Agente Mar??timo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente Portuario')" value="Agente Portuario">Agente Portuario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente Comerciales, Corredores y Afines')" value="Agente Comerciales, Corredores y Afines">Agente Comerciales, Corredores y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Aduanas e Inspectores de Fronteras')" value="Agente de Aduanas e Inspectores de Fronteras">Agente de Aduanas e Inspectores de Fronteras</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Compras, Intermediacion y consignatarios')" value="Agente de Compras, Intermediacion y consignatarios">Agente de Compras, Intermediaci??n y Consignatarios</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Impuestos')" value="Agente de Impuestos">Agente de Impuestos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Seguros')" value="Agente de Seguros">Agente de Seguros</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente de Viajes')" value="Agente de Viajes">Agentes de Viajes</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente Inmobiliarios')" value="Agente Inmobiliarios">Agente Inmobiliarios</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agente y Polic??a de Transito')" value="Agente y Polic??a de Transito">Agente y Polic??a de Transito</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agregado Diplom??tico')" value="Agregado Diplom??tico">Agregado Diplom??tico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agricultor')" value="Agricultor">Agricultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Agr??nomo')" value="Agr??nomo">Agr??nomo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista Econ??mico')" value="Analista Econ??mico">Analista Econ??mico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista Gesti??n Humana')" value="Analista Gesti??n Humana">Analista Gesti??n Humana</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista Mercados')" value="Analista Mercados">Analista Mercados</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista Siniestros')" value="Analista Siniestros">Analista Siniestros</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista de Sistemas Informaticos')" value="Analista de Sistemas Informaticos">Analista de Sistemas Informaticos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Analista y Agentes Financieros')" value="Analista y Agentes Financieros">Analista y Agentes Financieros</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Antropologos')" value="Antropologos">Antrop??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Arqueologos')" value="Arqueologos">Arque??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Arquitecto')" value="Arquitecto">Arquitecto</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Artesano de la Madera y Materiales Similares')" value="Artesano de la Madera y Materiales Similares">Artesano de la Madera y Materiales Similares</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Artesano de los Tejidos, El cuero y Materiales similares')" value="Artesano de los Tejidos, El cuero y Materiales similares">Artesano de los Tejidos, El cuero y Materiales similares</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asesor Financiero')" value="Asesor Financiero">Asesor Financiero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asesor Legal')" value="Asesor Legal">Asesor Legal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente de Cine, Teatro, Televisi??n y Afines')" value="Asistente de Cine, Teatro, Televisi??n y Afines">Asistente de Cine, Teatro, Televisi??n y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente Contable')" value="Asistente Contable">Asistente Contable</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente de Bibliotecas y Archivos')" value="Asistente de Bibliotecas y Archivos">Asistente de Bibliotecas y Archivos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente Jur??dico')" value="Asistente Jur??dico">Asistente Jur??dico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente de Comercio Exterior')" value="Asistente de Comercio Exterior">Asistente de Comercio Exterior</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Asistente de Trabajo Social y Comunitario')" value="Asistente de Trabajo Social y Comunitario">Asistente de Trabajo Social y Comunitario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Astrof??sico')" value="Astrof??sico">Astrof??sico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Astr??logo')" value="Astr??logo">Astr??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Astr??nomo')" value="Astr??nomo">Astr??nomo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Atletas, Deportistas y Afines')" value="Atletas, Deportistas y Afines">Atletas, Deportistas y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auditor Contable')" value="Auditor Contable">Auditor Contable</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auditor Financiero')" value="Auditor Financiero">Auditor Financiero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auditor Interno')" value="Auditor Interno">Auditor Interno</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auditor Sistemas')" value="Auditor Sistemas">Auditor Sistemas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Cartera y Afines')" value="Auxiliar de Cartera y Afines">Auxiliar de Cartera y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Servicios de Correo')" value="Auxiliar de Servicios de Correo">Auxiliar de Servicios de Correo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Droguer??a')" value="Auxiliar de Droguer??a">Auxiliar de Droguer??a</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar Licencias')" value="Auxiliar Licencias">Auxiliar Licencias</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar Mec??nica')" value="Auxiliar Mec??nica">Auxiliar Mec??nica</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Vuelo')" value="Auxiliar de Vuelo">Auxiliar de Vuelo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Administraci??n y Afines')" value="Auxiliar de Administraci??n y Afines">Auxiliar de Administraci??n y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Enfermer??a')" value="Auxiliar de Enfermer??a">Auxiliar de Enfermer??a</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Auxiliar de Odontolog??a')" value="Auxiliar de Odontolog??a">Auxiliar de Odontolog??a</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Avaluador Bienes')" value="Avaluador Bienes">Avaluador Bienes</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Avicultores')" value="Avicultores">Avicultores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Azafata')" value="Azafata">Azafata</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bacteri??logo')" value="Bacteri??logo">Bacteri??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bailar??n')" value="Bailar??n">Bailar??n</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Banderillero')" value="Banderillero">Banderillero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Barquero')" value="Barquero">Barquero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Beisbolista')" value="Beisbolista">Beisbolista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bibliotecarios, Documentalistas y Afines')" value="Bibliotecarios, Documentalistas y Afines">Bibliotecarios, Documentalistas y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Biof??sico')" value="Biof??sico">Biof??sico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bi??grafo')" value="Bi??grafo">Bi??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bi??logo')" value="Bi??logo">Bi??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bioqu??mico')" value="Bioqu??mico">Bioqu??mico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bomberos y Rescatistas')" value="Bomberos y Rescatistas">Bomberos y Rescatistas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bordadores y Afines')" value="Bordadores y Afines">Bordadores y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Bot??nico')" value="Bot??nico">Bot??nico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Boxeador')" value="Boxeador">Boxeador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Caficultor')" value="Caficultor">Caficultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cajero')" value="Cajero">Cajero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cajistas, Tip??grafos y Afines')" value="Cajistas, Tip??grafos y Afines">Cajistas, Tipografos y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Camar??grafo')" value="Camar??grafo">Camar??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cantante')" value="Cantante">Cantante</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Capit??n de Aviaci??n')" value="Capit??n de Aviaci??n">Capit??n de Aviaci??n</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Capitanes, Oficiales de Cubierta y Pr??cticos')" value="Capitanes, Oficiales de Cubierta y Pr??cticos">Capitanes, Oficiales de Cubierta y Pr??cticos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Caricaturista')" value="Caricaturista">Caricaturista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Carnicero, Pescadores y Afines')" value="Carnicero, Pescadores y Afines">Carnicero, Pescadores y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Carpintero')" value="Carpintero">Carpintero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cart??grafo')" value="Cart??grafo">Cart??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Catadores y Clasificadores de Alimentos y Bebidas')" value="Catadores y Clasificadores de Alimentos y Bebidas">Catadores y Clasificadores de Alimentos y Bebidas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cazadores y Tramperos')" value="Cazadores y Tramperos">Cazadores y Tramperos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cesteros, Bruceros y Afines')" value="Cesteros, Bruceros y Afines">Cesteros, Bruceros y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Catalogadores de Piezas de Museos, Archivos y Afines')" value="Catalogadores de Piezas de Museos, Archivos y Afines">Catalogadores de Piezas de Museos, Archivos y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Catedr??tico')" value="Catedr??tico">Catedr??tico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ciclista')" value="Ciclista">Ciclista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cienf??fico')" value="Cienf??fico">Cienf??fico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cocineros')" value="Cocineros">Cocineros</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Codificador de Datos, Corrector Pruebas Imprenta y Afines')" value="Codificador de Datos, Corrector Pruebas Imprenta y Afines">Codificador de Datos, Corrector Pruebas Imprenta y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Columnista')" value="Columnista">Columnista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Comandante Estaci??n Bomberos')" value="Comandante Estaci??n Bomberos">Comandante Estaci??n Bomberos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Comediante')" value="Comediante">Comediante</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Comerciante')" value="Comerciante">Comerciante</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Comisario de Familia')" value="Comisario de Familia">Comisario de Familia</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Compositor')" value="Compositor">Compositor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Comunicador Social')" value="Comunicador Social">Comunicador Social</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Concejal')" value="Concejal">Concejal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consejero de Estado')" value="Consejero de Estado">Consejero de Estado</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consejero Jur??dico')" value="Consejero Jur??dico">Consejero Jur??dico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consejero Matrimonial')" value="Consejero Matrimonial">Consejero Matrimonial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consejero Ocupacional')" value="Consejero Ocupacional">Consejero Ocupacional</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consejero Educativo')" value="Consejero Educativo">Consejero Educativo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consul')" value="Consul">Consul</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consultor Ambiental')" value="Consultor Ambiental">Consultor Ambiental</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consultor Financiero')" value="Consultor Financiero">Consultor Financiero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consultor Organizacional')" value="Consultor Organizacional">Consultor Organizacional</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consultor Pol??tica Social')" value="Consultor Pol??tica Social">Consultor Pol??tica Social</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Consultor Recursos Humanos')" value="Consultor Recursos Humanos">Consultor Recursos Humanos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Contadores')" value="Contadores">Contadores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Contralores')" value="Contralores">Contralores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Coordinador Servicios Generales')" value="Coordinador Servicios Generales">Coordinador Servicios Generales</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Copiloto Aeronave')" value="Copiloto Aeronave">Copiloto Aeronave</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Core??grafo y Afines')" value="Core??grafo y Afines">Core??grafo y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Corredor Autos')" value="Corredor Autos">Corredor Autos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Corredor Bolsa')" value="Corredor Bolsa">Corredor Bolsa</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Corresponsal de Prensa')" value="Corresponsal de Prensa">Corresponsal de Prensa</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Criador de Ganado y Animales Dom??sticos')" value="Criador de Ganado y Animales Dom??sticos">Criador de Ganado y Animales Dom??sticos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Criador de Especies Acu??ticas')" value="Criador de Especies Acu??ticas">Criador de Especies Acu??ticas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Criador de Insectors, Sericultures y Afines')" value="Criador de Insectors, Sericultures y Afines">Criador de Insectors, Sericultures y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cristalero')" value="Cristalero">Cristalero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cr??tico Artes y Medios')" value="Cr??tico Artes y Medios">Cr??tico Artes y Medios</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Cuentero')" value="Cuentero">Cuentero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Curador Arte')" value="Curador Arte">Curador Arte</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Curador Urban??stico')" value="Curador Urban??stico">Curador Urban??stico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Dactiloscopista')" value="Dactiloscopista">Dactiloscopista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Decanos')" value="Decanos">Decanos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Declamador')" value="Declamador">Declamador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Art??stico')" value="Director Art??stico">Director Art??stico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Cine')" value="Director Cine">Director Cine</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento de Mantenimiento')" value="Director Departamento de Mantenimiento">Director Departamento de Mantenimiento</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento de Seguridad')" value="Director Departamento de Seguridad">Director Departamento de Seguridad</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Escuela de Aviaci??n')" value="Director Escuela de Aviaci??n">Director Escuela de Aviaci??n</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director General Industria Manufacturera')" value="Director General Industria Manufacturera">Director General Industria Manufacturera</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Grupo Musical')" value="Director Grupo Musical">Director Grupo Musical</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento Financiero y Administrativo')" value="Director Departamento Financiero y Administrativo">Director Departamento Financiero y Administrativo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento Investigacion y Desarrollo')" value="Director Departamento Investigacion y Desarrollo">Director Departamento Investigacion y Desarrollo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento Personal')" value="Director Departamento Personal">Director Departamento Personal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Director Departamento Publicidad y Mercadeo')" value="Director Departamento Publicidad y Mercadeo">Director Departamento Publicidad y Mercadeo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Dibujantes')" value="Dibujantes">Dibujantes</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Dise??ador Grafico e Industrial')" value="Dise??ador Grafico e Industrial">Dise??ador Grafico e Industrial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('DiskJockey')" value="DiskJockey">DiskJockey</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Dramaturgo')" value="Dramaturgo">Dramaturgo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ecologista')" value="Ecologista">Ecologista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ec??logo')" value="Ec??logo">Ec??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Economistas')" value="Economistas">Economistas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Edil')" value="Edil">Edil</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Educadores')" value="Educadores">Educadores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Electricista')" value="Electricista">Electricista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Electrot??cnico')" value="Electrot??cnico">Electrot??cnico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Empresario')" value="Empresario">Empresario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Entrenador')" value="Entrenador">Entrenador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Escritor y Afines')" value="Escritor y Afines">Escritor y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Estad??stico')" value="Estad??stico">Estad??stico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Etimologista')" value="Etimologista">Etimologista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Etnografo')" value="Etnografo">Etnografo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Etn??logo')" value="Etn??logo">Etn??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Farmac??utico')" value="Farmac??utico">Farmac??utico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Farmac??logo')" value="Farmac??logo">Farmac??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fil??logo')" value="Fil??logo">Fil??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fil??sofo')" value="Fil??sofo">Fil??sofo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fiscal')" value="Fiscal">Fiscal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fisiatra')" value="Fisiatra">Fisiatra</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('F??sico')" value="F??sico">F??sico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fisi??logo')" value="Fisi??logo">Fisi??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Floricultor')" value="Floricultor">Floricultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fontanero e Instaladores de Tuberias')" value="Fontanero e Instaladores de Tuberias">Fontanero e Instaladores de Tuberias</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fot??grafo')" value="Fot??grafo">Fot??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fruticultor')" value="Fruticultor">Fruticultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fisioterapeuta')" value="Fisioterapeuta">Fisioterapeuta</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fon??logo')" value="Fon??logo">Fon??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Forenses')" value="Forenses">Forenses</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Fot??grafo')" value="Fot??grafo">Fot??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Futbolista')" value="Futbolista">Futbolista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ganadero')" value="Ganadero">Ganadero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ge??logo')" value="Ge??logo">Ge??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Geotecnista')" value="Geotecnista">Geotecnista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Gem??logo')" value="Gem??logo">Gem??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Genetista')" value="Genetista">Genetista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Geof??sico')" value="Geof??sico">Geof??sico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ge??grafo')" value="Ge??grafo">Ge??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Geriatra')" value="Geriatra">Geriatra</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Gobernador Comunidad Ind??gena')" value="Gobernador Comunidad Ind??gena">Gobernador Comunidad Ind??gena</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Grabadores de Imprenta y Fotograbadores')" value="Grabadores de Imprenta y Fotograbadores">Grabadores de Imprenta y Fotograbadores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Grabadores de Vidrio')" value="Grabadores de Vidrio">Grabadores de Vidrio</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Graf??logo')" value="Graf??logo">Graf??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Herramentistas y Afines')" value="Herramentistas y Afines">Herramentistas y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Herreros y Forjadores')" value="Herreros y Forjadores">Herreros y Forjadores</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Hist??logo')" value="Hist??logo">Hist??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Histopat??logo')" value="Histopat??logo">Histopat??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Humorista')" value="Humorista">Humorista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Higienetistas')" value="Higienetistas">Higienetistas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Historiador')" value="Historiador">Historiador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ict??logo')" value="Ict??logo">Ict??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Impresor Artes Gr??ficas')" value="Impresor Artes Gr??ficas">Impresor Artes Gr??ficas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Agr??cola')" value="Ingeniero Agr??cola">Ingeniero Agr??cola</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Agroindustrial')" value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Agr??nomo')" value="Ingeniero Agr??nomo">Ingeniero Agr??nomo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Alimentos')" value="Ingeniero Alimentos">Ingeniero Alimentos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Ambiental')" value="Ingeniero Ambiental">Ingeniero Ambiental</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Biom??dico')" value="Ingeniero Biom??dico">Ingeniero Biom??dico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Civil')" value="Ingeniero Civil">Ingeniero Civil</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Electricista')" value="Ingeniero Electricista">Ingeniero Electricista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero El??ctrico')" value="Ingeniero El??ctrico">Ingeniero El??ctrico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Electrom??canico')" value="Ingeniero Electrom??canico">Ingeniero Electrom??canico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Electronico')" value="Ingeniero Electronico">Ingeniero Electronico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Industrial')" value="Ingeniero Industrial">Ingeniero Industrial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Forestal')" value="Ingeniero Forestal">Ingeniero Forestal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Gen??tica')" value="Ingeniero Gen??tica">Ingeniero Gen??tica</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Geologo')" value="Ingeniero Geologo">Ingeniero Ge??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Hidr??ulico')" value="Ingeniero Hidr??ulico">Ingeniero Hidr??ulico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Mec??nico')" value="Ingeniero Mec??nico">Ingeniero Mec??nico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Mecatr??nico')" value="Ingeniero Mecatr??nico">Ingeniero Mecatr??nico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Naval')" value="Ingeniero Naval">Ingeniero Naval</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Pesquero')" value="Ingeniero Pesquero">Ingeniero Pesquero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Petr??leos')" value="Ingeniero Petr??leos">Ingeniero Petr??leos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Producci??n')" value="Ingeniero Producci??n">Ingeniero Producci??n</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Qu??mico')" value="Ingeniero Qu??mico">Ingeniero Qu??mico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Sanitario')" value="Ingeniero Sanitario">Ingeniero Sanitario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Seguridad Industrial')" value="Ingeniero Seguridad Industrial">Ingeniero Seguridad Industrial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Sistemas')" value="Ingeniero Sistemas">Ingeniero Sistemas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Sonido')" value="Ingeniero Sonido">Ingeniero Sonido</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Telecomunicaciones')" value="Ingeniero Telecomunicaciones">Ingeniero Telecomunicaciones</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Textil')" value="Ingeniero Textil">Ingeniero Textil</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Transportes')" value="Ingeniero Transportes">Ingeniero Transportes</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Vuelo')" value="Ingeniero Vuelo">Ingeniero Vuelo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ingeniero Minas, Metal??rgicos')" value="Ingeniero Minas, Metal??rgicos ">Ingeniero Minas, Metal??rgicos </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Instrumentador Quir??rgico')" value="Instrumentador Quir??rgico">Instrumentador Quir??rgico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Interprete')" value="Interprete">Interprete</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Interventor')" value="Interventor">Interventor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Investigador')" value="Investigador">Investigador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Jardinero')" value="Jardinero">Jardinero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Juez')" value="Juez">Juez</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Lexic??grafo')" value="Lexic??grafo">Lexic??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Lexic??logo')" value="Lexic??logo">Lexic??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Libretista')" value="Libretista">Libretista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Licenciado')" value="Licenciado">Licenciado</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Locutor de Radio, Televisi??n y Afines')" value="Locutor de Radio, Televisi??n y Afines">Locutor de Radio, Televisi??n y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Luminot??cnico')" value="Luminot??cnico">Luminot??cnico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Maestro')" value="Maestro">Maestro</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Magistrado')" value="Magistrado">Magistrado</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Maquinista de Vehiculos por riel')" value="Maquinista de Vehiculos por riel">Maquinista de Vehiculos por riel</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Marineros de Cubierta y Afines')" value="Marineros de Cubierta y Afines">Marineros de Cubierta y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Maquetero')" value="Maquetero">Maquetero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Marroquinero')" value="Marroquinero">Marroquinero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Matem??tico')" value="Matem??tico">Matem??tico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Mec??nico Industrial')" value="Mec??nico Industrial">Mec??nico Industrial</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Mesero, Taberneros y Afines')" value="Mesero, Taberneros y Afines">Mesero, Taberneros y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Meteorologos')" value="Meteorologos">Meteorologos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Mimo Teatro y Callejero')" value="Mimo Teatro y Callejero">Mimo Teatro y Callejero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Mineros y Canteros')" value="Mineros y Canteros">Mineros y Canteros</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ministro')" value="Ministro">Ministro</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('M??sico')" value="M??sico">M??sico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Notario')" value="Notario">Notario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Novillero')" value="Novillero">Novillero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ocean??grafo')" value="Ocean??grafo">Ocean??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Odont??logo')" value="Odont??logo">Odont??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Oficial Ej??rcito')" value="Oficial Ej??rcito">Oficial Ej??rcito</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Oficial Pol??cia')" value="Oficial Pol??cia">Oficial Pol??cia</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Oficial Naval')" value="Oficial Naval">Oficial Naval</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Oficial Fuerza A??rea')" value="Oficial Fuerza A??rea">Oficial Fuerza A??rea</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Oftalm??logo')" value="Oftalm??logo">Oftalm??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Operador M??quinas')" value="Operador M??quinas ">Operador M??quinas </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Opt??metra')" value="Opt??metra">Opt??metra</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ortodoncista')" value="Ortodoncista">Ortodoncista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Ortopedista')" value="Ortopedista">Ortopedista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Paleobi??logo')" value="Paleobi??logo">Paleobi??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pale??grafo')" value="Pale??grafo">Pale??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pale??logo')" value="Pale??logo">Pale??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Paleont??logo')" value="Paleont??logo">Paleont??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Panadero, Pastelero y Confitero')" value="Panadero, Pastelero y Confitero">Panadero, Pastelero y Confitero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Patinador')" value="Patinador">Patinador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pat??logo')" value="Pat??logo">Pat??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pedagogo')" value="Pedagogo">Pedagogo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Periodista')" value="Periodista">Periodista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Perito')" value="Perito">Perito</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Periodoncista')" value="Periodoncista">Periodoncista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Personero')" value="Personero">Personero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pescador')" value="Pescador">Pescador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Piloto Avi??n, Carros Carreras, Afines')" value="Piloto Avi??n, Carros Carreras, Afines">Piloto Avi??n, Carros Carreras, Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Pintor Arte')" value="Pintor Arte">Pintor Arte</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Piscicultor')" value="Piscicultor">Piscicultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Planificador Medio Ambiente')" value="Planificador Medio Ambiente">Planificador Medio Ambiente</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Planificador Tr??nsito')" value="Planificador Tr??nsito">Planificador Tr??nsito</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Plomero')" value="Plomero">Plomero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Poeta')" value="Poeta">Poeta</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Polit??logo')" value="Polit??logo">Polit??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Polvorero')" value="Polvorero">Polvorero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Porcicultor')" value="Porcicultor">Porcicultor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Publicista')" value="Publicista">Publicista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Procurador')" value="Procurador">Procurador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Qu??mico y Afines')" value="Qu??mico y Afines">Qu??mico y Afines</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Radiot??cnico')" value="Radiot??cnico">Radiot??cnico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Rector Instituci??n Educativa')" value="Rector Instituci??n Educativa">Rector Instituci??n Educativa</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Registrador')" value="Registrador">Registrador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Rejoneador')" value="Rejoneador">Rejoneador</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Relojero')" value="Relojero">Relojero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Reportero Gr??fico')" value="Reportero Gr??fico">Reportero Gr??fico</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Representante a la C??mara')" value="Representante a la C??mara">Representante a la C??mara</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Revisor Fiscal')" value="Revisor Fiscal">Revisor Fiscal</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Salvavidas')" value="Salvavidas">Salvavidas</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sastres, Modistos')" value="Sastres, Modistos">Sastres, Modistos</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sism??logo')" value="Sism??logo">Sism??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sub Oficial Ejercito')" value="Sub Oficial Ejercito">Sub Oficial Ejercito</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sub Oficial Policia')" value="Sub Oficial Policia">Sub Oficial Policia</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sub Oficial Naval')" value="Sub Oficial Naval">Sub Oficial Naval</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Sub Oficial Fuerza Aerea')" value="Sub Oficial Fuerza Aerea">Sub Oficial Fuerza Aerea</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Taxonomista')" value="Taxonomista">Taxonomista</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('T??cnicos en general')" value="T??cnicos en general">T??cnicos en general</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Terapeuta')" value="Terapeuta">Terapeuta</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Tesorero')" value="Tesorero">Tesorero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Top??grafo')" value="Top??grafo">Top??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Torero')" value="Torero">Torero</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Toxic??logo')" value="Toxic??logo">Toxic??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Traductor')" value="Traductor">Traductor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Tutor')" value="Tutor">Tutor</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Veterinario')" value="Veterinario">Veterinario</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Vir??logo')" value="Vir??logo">Vir??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Vulcan??logo')" value="Vulcan??logo">Vulcan??logo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Xil??grafo')" value="Xil??grafo">Xil??grafo</li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Zo??logo')" value="Zo??logo ">Zo??logo </li></a></td></tr>
                            <tr><td><a href="#"><li style="color: #333; " onclick="filtroTipo('Zoot??cnico')" value="Zoot??cnico">Zoot??cnico</li></a></td></tr>
                            </tbody>
							</table>
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
				    
					<div align="center" style="background-color:#E3F2E6">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
		<br>
		<br>
		<form style=" margin-left:15%; width:80%" >
		<br>
		
		<span>  Profesional:</span>
		<select class="camposgenerales"
  
    style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"

  name="profesional" id="profesional" onchange="SeleccionaProfesional(this)">        
  <option value="">-----</option>
  <option('Abogado ???Contrataci??n Estatal')" value="Abogado ???Contrataci??n Estatal">Abogado ???Contrataci??n Estatal</option>
                            <option value="Abogado ???Contrataci??n  Comercial ">Abogado ???Contrataci??n  Comercial </option>
                            <option value="Abogado ???Contrataci??n  Civil ">Abogado ???Contrataci??n  Civil </option>
                            <option value="Abogado ???Contrataci??n  Penal">Abogado ???Contrataci??n  Penal</option>
                            <option value="Abogado ???Contrataci??n Propiedad Intelectual ">Abogado ???Contrataci??n Propiedad Intelectual </option>
                            <option value="Abogado ???Contrataci??n Estatal Tributaritarista">Abogado ???Contrataci??n Estatal Tributaritarista</option>
                            <option value="Acompanante">Acompanante</option>
                            <option value="Actor">Actor</option>
                            <option value="Actuario">Actuario</option>
                            <option value="Administrador Aeropuerto">Administrador Aeropuerto</option>
                            <option value="Administrador de Empresas">Administrador de Empresas</option>
                            <option value="Agente de Aduana">Agente de Aduana</option>
                            <option value="Agente de Bolsa">Agente de Bolsa</option>
                            <option value="Agente de Polic??a">Agente de Polic??a</option>
                            <option value="Agente de Embarque">Agente de Embarque</option>
                            <option value="Agente de Inmigracion">Agente de Inmigraci??n</option>
                            <option value="Agente de Marcas y Patentes">Agente de Marcas y Patentes</option>
                            <option value="Agente Maritimo">Agente Mar??timo</option>
                            <option value="Agente Portuario">Agente Portuario</option>
                            <option value="Agente Comerciales, Corredores y Afines">Agente Comerciales, Corredores y Afines</option>
                            <option value="Agente de Aduanas e Inspectores de Fronteras">Agente de Aduanas e Inspectores de Fronteras</option>
                            <option value="Agente de Compras, Intermediacion y consignatarios">Agente de Compras, Intermediaci??n y Consignatarios</option>
                            <option value="Agente de Impuestos">Agente de Impuestos</option>
                            <option value="Agente de Seguros">Agente de Seguros</option>
                            <option value="Agente de Viajes">Agentes de Viajes</option>
                            <option value="Agente Inmobiliarios">Agente Inmobiliarios</option>
                            <option value="Agente y Polic??a de Transito">Agente y Polic??a de Transito</option>
                            <option value="Agregado Diplom??tico">Agregado Diplom??tico</option>
                            <option value="Agricultor">Agricultor</option>
                            <option value="Agr??nomo">Agr??nomo</option>
                            <option value="Analista Econ??mico">Analista Econ??mico</option>
                            <option value="Analista Gesti??n Humana">Analista Gesti??n Humana</option>
                            <option value="Analista Mercados">Analista Mercados</option>
                            <option value="Analista Siniestros">Analista Siniestros</option>
                            <option value="Analista de Sistemas Informaticos">Analista de Sistemas Informaticos</option>
                            <option value="Analista y Agentes Financieros">Analista y Agentes Financieros</option>
                            <option value="Antropologos">Antrop??logo</option>
                            <option value="Arqueologos">Arque??logo</option>
                            <option value="Arquitecto">Arquitecto</option>
                            <option value="Artesano de la Madera y Materiales Similares">Artesano de la Madera y Materiales Similares</option>
                            <option value="Artesano de los Tejidos, El cuero y Materiales similares">Artesano de los Tejidos, El cuero y Materiales similares</option>
                            <option value="Asesor Financiero">Asesor Financiero</option>
                            <option value="Asesor Legal">Asesor Legal</option>
                            <option value="Asistente de Cine, Teatro, Televisi??n y Afines">Asistente de Cine, Teatro, Televisi??n y Afines</option>
                            <option value="Asistente Contable">Asistente Contable</option>
                            <option value="Asistente de Bibliotecas y Archivos">Asistente de Bibliotecas y Archivos</option>
                            <option value="Asistente Jur??dico">Asistente Jur??dico</option>
                            <option value="Asistente de Comercio Exterior">Asistente de Comercio Exterior</option>
                            <option value="Asistente de Trabajo Social y Comunitario">Asistente de Trabajo Social y Comunitario</option>
                            <option value="Astrof??sico">Astrof??sico</option>
                            <option value="Astr??logo">Astr??logo</option>
                            <option value="Astr??nomo">Astr??nomo</option>
                            <option value="Atletas, Deportistas y Afines">Atletas, Deportistas y Afines</option>
                            <option value="Auditor Contable">Auditor Contable</option>
                            <option value="Auditor Financiero">Auditor Financiero</option>
                            <option value="Auditor Interno">Auditor Interno</option>
                            <option value="Auditor Sistemas">Auditor Sistemas</option>
                            <option value="Auxiliar de Cartera y Afines">Auxiliar de Cartera y Afines</option>
                            <option value="Auxiliar de Servicios de Correo">Auxiliar de Servicios de Correo</option>
                            <option value="Auxiliar de Droguer??a">Auxiliar de Droguer??a</option>
                            <option value="Auxiliar Licencias">Auxiliar Licencias</option>
                            <option value="Auxiliar Mec??nica">Auxiliar Mec??nica</option>
                            <option value="Auxiliar de Vuelo">Auxiliar de Vuelo</option>
                            <option value="Auxiliar de Administraci??n y Afines">Auxiliar de Administraci??n y Afines</option>
                            <option value="Auxiliar de Enfermer??a">Auxiliar de Enfermer??a</option>
                            <option value="Auxiliar de Odontolog??a">Auxiliar de Odontolog??a</option>
                            <option value="Avaluador Bienes">Avaluador Bienes</option>
                            <option value="Avicultores">Avicultores</option>
                            <option value="Azafata">Azafata</option>
                            <option value="Bacteri??logo">Bacteri??logo</option>
                            <option value="Bailar??n">Bailar??n</option>
                            <option value="Banderillero">Banderillero</option>
                            <option value="Barquero">Barquero</option>
                            <option value="Beisbolista">Beisbolista</option>
                            <option value="Bibliotecarios, Documentalistas y Afines">Bibliotecarios, Documentalistas y Afines</option>
                            <option value="Biof??sico">Biof??sico</option>
                            <option value="Bi??grafo">Bi??grafo</option>
                            <option value="Bi??logo">Bi??logo</option>
                            <option value="Bioqu??mico">Bioqu??mico</option>
                            <option value="Bomberos y Rescatistas">Bomberos y Rescatistas</option>
                            <option value="Bordadores y Afines">Bordadores y Afines</option>
                            <option value="Bot??nico">Bot??nico</option>
                            <option value="Boxeador">Boxeador</option>
                            <option value="Caficultor">Caficultor</option>
                            <option value="Cajero">Cajero</option>
                            <option value="Cajistas, Tip??grafos y Afines">Cajistas, Tipografos y Afines</option>
                            <option value="Camar??grafo">Camar??grafo</option>
                            <option value="Cantante">Cantante</option>
                            <option value="Capit??n de Aviaci??n">Capit??n de Aviaci??n</option>
                            <option value="Capitanes, Oficiales de Cubierta y Pr??cticos">Capitanes, Oficiales de Cubierta y Pr??cticos</option>
                            <option value="Caricaturista">Caricaturista</option>
                            <option value="Carnicero, Pescadores y Afines">Carnicero, Pescadores y Afines</option>
                            <option value="Carpintero">Carpintero</option>
                            <option value="Cart??grafo">Cart??grafo</option>
                            <option value="Catadores y Clasificadores de Alimentos y Bebidas">Catadores y Clasificadores de Alimentos y Bebidas</option>
                            <option value="Cazadores y Tramperos">Cazadores y Tramperos</option>
                            <option value="Cesteros, Bruceros y Afines">Cesteros, Bruceros y Afines</option>
                            <option value="Catalogadores de Piezas de Museos, Archivos y Afines">Catalogadores de Piezas de Museos, Archivos y Afines</option>
                            <option value="Catedr??tico">Catedr??tico</option>
                            <option value="Ciclista">Ciclista</option>
                            <option value="Cienf??fico">Cienf??fico</option>
                            <option value="Cocineros">Cocineros</option>
                            <option value="Codificador de Datos, Corrector Pruebas Imprenta y Afines">Codificador de Datos, Corrector Pruebas Imprenta y Afines</option>
                            <option value="Columnista">Columnista</option>
                            <option value="Comandante Estaci??n Bomberos">Comandante Estaci??n Bomberos</option>
                            <option value="Comediante">Comediante</option>
                            <option value="Comerciante">Comerciante</option>
                            <option value="Comisario de Familia">Comisario de Familia</option>
                            <option value="Compositor">Compositor</option>
                            <option value="Comunicador Social">Comunicador Social</option>
                            <option value="Concejal">Concejal</option>
                            <option value="Consejero de Estado">Consejero de Estado</option>
                            <option value="Consejero Jur??dico">Consejero Jur??dico</option>
                            <option value="Consejero Matrimonial">Consejero Matrimonial</option>
                            <option value="Consejero Ocupacional">Consejero Ocupacional</option>
                            <option value="Consejero Educativo">Consejero Educativo</option>
                            <option value="Consul">Consul</option>
                            <option value="Consultor Ambiental">Consultor Ambiental</option>
                            <option value="Consultor Financiero">Consultor Financiero</option>
                            <option value="Consultor Organizacional">Consultor Organizacional</option>
                            <option value="Consultor Pol??tica Social">Consultor Pol??tica Social</option>
                            <option value="Consultor Recursos Humanos">Consultor Recursos Humanos</option>
                            <option value="Contadores">Contadores</option>
                            <option value="Contralores">Contralores</option>
                            <option value="Coordinador Servicios Generales">Coordinador Servicios Generales</option>
                            <option value="Copiloto Aeronave">Copiloto Aeronave</option>
                            <option value="Core??grafo y Afines">Core??grafo y Afines</option>
                            <option value="Corredor Autos">Corredor Autos</option>
                            <option value="Corredor Bolsa">Corredor Bolsa</option>
                            <option value="Corresponsal de Prensa">Corresponsal de Prensa</option>
                            <option value="Criador de Ganado y Animales Dom??sticos">Criador de Ganado y Animales Dom??sticos</option>
                            <option value="Criador de Especies Acu??ticas">Criador de Especies Acu??ticas</option>
                            <option value="Criador de Insectors, Sericultures y Afines">Criador de Insectors, Sericultures y Afines</option>
                            <option value="Cristalero">Cristalero</option>
                            <option value="Cr??tico Artes y Medios">Cr??tico Artes y Medios</option>
                            <option value="Cuentero">Cuentero</option>
                            <option value="Curador Arte">Curador Arte</option>
                            <option value="Curador Urban??stico">Curador Urban??stico</option>
                            <option value="Dactiloscopista">Dactiloscopista</option>
                            <option value="Decanos">Decanos</option>
                            <option value="Declamador">Declamador</option>
                            <option value="Director Art??stico">Director Art??stico</option>
                            <option value="Director Cine">Director Cine</option>
                            <option value="Director Departamento de Mantenimiento">Director Departamento de Mantenimiento</option>
                            <option value="Director Departamento de Seguridad">Director Departamento de Seguridad</option>
                            <option value="Director Escuela de Aviaci??n">Director Escuela de Aviaci??n</option>
                            <option value="Director General Industria Manufacturera">Director General Industria Manufacturera</option>
                            <option value="Director Grupo Musical">Director Grupo Musical</option>
                            <option value="Director Departamento Financiero y Administrativo">Director Departamento Financiero y Administrativo</option>
                            <option value="Director Departamento Investigacion y Desarrollo">Director Departamento Investigacion y Desarrollo</option>
                            <option value="Director Departamento Personal">Director Departamento Personal</option>
                            <option value="Director Departamento Publicidad y Mercadeo">Director Departamento Publicidad y Mercadeo</option>
                            <option value="Dibujantes">Dibujantes</option>
                            <option value="Dise??ador Grafico e Industrial">Dise??ador Grafico e Industrial</option>
                            <option value="DiskJockey">DiskJockey</option>
                            <option value="Dramaturgo">Dramaturgo</option>
                            <option value="Ecologista">Ecologista</option>
                            <option value="Ec??logo">Ec??logo</option>
                            <option value="Economistas">Economistas</option>
                            <option value="Edil">Edil</option>
                            <option value="Educadores">Educadores</option>
                            <option value="Electricista">Electricista</option>
                            <option value="Electrot??cnico">Electrot??cnico</option>
                            <option value="Empresario">Empresario</option>
                            <option value="Entrenador">Entrenador</option>
                            <option value="Escritor y Afines">Escritor y Afines</option>
                            <option value="Estad??stico">Estad??stico</option>
                            <option value="Etimologista">Etimologista</option>
                            <option value="Etnografo">Etnografo</option>
                            <option value="Etn??logo">Etn??logo</option>
                            <option value="Farmac??utico">Farmac??utico</option>
                            <option value="Farmac??logo">Farmac??logo</option>
                            <option value="Fil??logo">Fil??logo</option>
                            <option value="Fil??sofo">Fil??sofo</option>
                            <option value="Fiscal">Fiscal</option>
                            <option value="Fisiatra">Fisiatra</option>
                            <option value="F??sico">F??sico</option>
                            <option value="Fisi??logo">Fisi??logo</option>
                            <option value="Floricultor">Floricultor</option>
                            <option value="Fontanero e Instaladores de Tuberias">Fontanero e Instaladores de Tuberias</option>
                            <option value="Fot??grafo">Fot??grafo</option>
                            <option value="Fruticultor">Fruticultor</option>
                            <option value="Fisioterapeuta">Fisioterapeuta</option>
                            <option value="Fon??logo">Fon??logo</option>
                            <option value="Forenses">Forenses</option>
                            <option value="Fot??grafo">Fot??grafo</option>
                            <option value="Futbolista">Futbolista</option>
                            <option value="Ganadero">Ganadero</option>
                            <option value="Ge??logo">Ge??logo</option>
                            <option value="Geotecnista">Geotecnista</option>
                            <option value="Gem??logo">Gem??logo</option>
                            <option value="Genetista">Genetista</option>
                            <option value="Geof??sico">Geof??sico</option>
                            <option value="Ge??grafo">Ge??grafo</option>
                            <option value="Geriatra">Geriatra</option>
                            <option value="Gobernador Comunidad Ind??gena">Gobernador Comunidad Ind??gena</option>
                            <option value="Grabadores de Imprenta y Fotograbadores">Grabadores de Imprenta y Fotograbadores</option>
                            <option value="Grabadores de Vidrio">Grabadores de Vidrio</option>
                            <option value="Graf??logo">Graf??logo</option>
                            <option value="Herramentistas y Afines">Herramentistas y Afines</option>
                            <option value="Herreros y Forjadores">Herreros y Forjadores</option>
                            <option value="Hist??logo">Hist??logo</option>
                            <option value="Histopat??logo">Histopat??logo</option>
                            <option value="Humorista">Humorista</option>
                            <option value="Higienetistas">Higienetistas</option>
                            <option value="Historiador">Historiador</option>
                            <option value="Ict??logo">Ict??logo</option>
                            <option value="Impresor Artes Gr??ficas">Impresor Artes Gr??ficas</option>
                            <option value="Ingeniero Agr??cola">Ingeniero Agr??cola</option>
                            <option value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</option>
                            <option value="Ingeniero Agr??nomo">Ingeniero Agr??nomo</option>
                            <option value="Ingeniero Alimentos">Ingeniero Alimentos</option>
                            <option value="Ingeniero Ambiental">Ingeniero Ambiental</option>
                            <option value="Ingeniero Biom??dico">Ingeniero Biom??dico</option>
                            <option value="Ingeniero Civil">Ingeniero Civil</option>
                            <option value="Ingeniero Electricista">Ingeniero Electricista</option>
                            <option value="Ingeniero El??ctrico">Ingeniero El??ctrico</option>
                            <option value="Ingeniero Electrom??canico">Ingeniero Electrom??canico</option>
                            <option value="Ingeniero Electronico">Ingeniero Electronico</option>
                            <option value="Ingeniero Industrial">Ingeniero Industrial</option>
                            <option value="Ingeniero Forestal">Ingeniero Forestal</option>
                            <option value="Ingeniero Gen??tica">Ingeniero Gen??tica</option>
                            <option value="Ingeniero Geologo">Ingeniero Ge??logo</option>
                            <option value="Ingeniero Hidr??ulico">Ingeniero Hidr??ulico</option>
                            <option value="Ingeniero Mec??nico">Ingeniero Mec??nico</option>
                            <option value="Ingeniero Mecatr??nico">Ingeniero Mecatr??nico</option>
                            <option value="Ingeniero Naval">Ingeniero Naval</option>
                            <option value="Ingeniero Pesquero">Ingeniero Pesquero</option>
                            <option value="Ingeniero Petr??leos">Ingeniero Petr??leos</option>
                            <option value="Ingeniero Producci??n">Ingeniero Producci??n</option>
                            <option value="Ingeniero Qu??mico">Ingeniero Qu??mico</option>
                            <option value="Ingeniero Sanitario">Ingeniero Sanitario</option>
                            <option value="Ingeniero Seguridad Industrial">Ingeniero Seguridad Industrial</option>
                            <option value="Ingeniero Sistemas">Ingeniero Sistemas</option>
                            <option value="Ingeniero Sonido">Ingeniero Sonido</option>
                            <option value="Ingeniero Telecomunicaciones">Ingeniero Telecomunicaciones</option>
                            <option value="Ingeniero Textil">Ingeniero Textil</option>
                            <option value="Ingeniero Transportes">Ingeniero Transportes</option>
                            <option value="Ingeniero Vuelo">Ingeniero Vuelo</option>
                            <option value="Ingeniero Minas, Metal??rgicos ">Ingeniero Minas, Metal??rgicos </option>
                            <option value="Instrumentador Quir??rgico">Instrumentador Quir??rgico</option>
                            <option value="Interprete">Interprete</option>
                            <option value="Interventor">Interventor</option>
                            <option value="Investigador">Investigador</option>
                            <option value="Jardinero">Jardinero</option>
                            <option value="Juez">Juez</option>
                            <option value="Lexic??grafo">Lexic??grafo</option>
                            <option value="Lexic??logo">Lexic??logo</option>
                            <option value="Libretista">Libretista</option>
                            <option value="Licenciado">Licenciado</option>
                            <option value="Locutor de Radio, Televisi??n y Afines">Locutor de Radio, Televisi??n y Afines</option>
                            <option value="Luminot??cnico">Luminot??cnico</option>
                            <option value="Maestro">Maestro</option>
                            <option value="Magistrado">Magistrado</option>
                            <option value="Maquinista de Vehiculos por riel">Maquinista de Vehiculos por riel</option>
                            <option value="Marineros de Cubierta y Afines">Marineros de Cubierta y Afines</option>
                            <option value="Maquetero">Maquetero</option>
                            <option value="Marroquinero">Marroquinero</option>
                            <option value="Matem??tico">Matem??tico</option>
                            <option value="Mec??nico Industrial">Mec??nico Industrial</option>
                            <option value="Mesero, Taberneros y Afines">Mesero, Taberneros y Afines</option>
                            <option value="Meteorologos">Meteorologos</option>
                            <option value="Mimo Teatro y Callejero">Mimo Teatro y Callejero</option>
                            <option value="Mineros y Canteros">Mineros y Canteros</option>
                            <option value="Ministro">Ministro</option>
                            <option value="M??sico">M??sico</option>
                            <option value="Notario">Notario</option>
                            <option value="Novillero">Novillero</option>
                            <option value="Ocean??grafo">Ocean??grafo</option>
                            <option value="Odont??logo">Odont??logo</option>
                            <option value="Oficial Ej??rcito">Oficial Ej??rcito</option>
                            <option value="Oficial Pol??cia">Oficial Pol??cia</option>
                            <option value="Oficial Naval">Oficial Naval</option>
                            <option value="Oficial Fuerza A??rea">Oficial Fuerza A??rea</option>
                            <option value="Oftalm??logo">Oftalm??logo</option>
                            <option value="Operador M??quinas ">Operador M??quinas </option>
                            <option value="Opt??metra">Opt??metra</option>
                            <option value="Ortodoncista">Ortodoncista</option>
                            <option value="Ortopedista">Ortopedista</option>
                            <option value="Paleobi??logo">Paleobi??logo</option>
                            <option value="Pale??grafo">Pale??grafo</option>
                            <option value="Pale??logo">Pale??logo</option>
                            <option value="Paleont??logo">Paleont??logo</option>
                            <option value="Panadero, Pastelero y Confitero">Panadero, Pastelero y Confitero</option>
                            <option value="Patinador">Patinador</option>
                            <option value="Pat??logo">Pat??logo</option>
                            <option value="Pedagogo">Pedagogo</option>
                            <option value="Periodista">Periodista</option>
                            <option value="Perito">Perito</option>
                            <option value="Periodoncista">Periodoncista</option>
                            <option value="Personero">Personero</option>
                            <option value="Pescador">Pescador</option>
                            <option value="Piloto Avi??n, Carros Carreras, Afines">Piloto Avi??n, Carros Carreras, Afines</option>
                            <option value="Pintor Arte">Pintor Arte</option>
                            <option value="Piscicultor">Piscicultor</option>
                            <option value="Planificador Medio Ambiente">Planificador Medio Ambiente</option>
                            <option value="Planificador Tr??nsito">Planificador Tr??nsito</option>
                            <option value="Plomero">Plomero</option>
                            <option value="Poeta">Poeta</option>
                            <option value="Polit??logo">Polit??logo</option>
                            <option value="Polvorero">Polvorero</option>
                            <option value="Porcicultor">Porcicultor</option>
                            <option value="Publicista">Publicista</option>
                            <option value="Procurador">Procurador</option>
                            <option value="Qu??mico y Afines">Qu??mico y Afines</option>
                            <option value="Radiot??cnico">Radiot??cnico</option>
                            <option value="Rector Instituci??n Educativa">Rector Instituci??n Educativa</option>
                            <option value="Registrador">Registrador</option>
                            <option value="Rejoneador">Rejoneador</option>
                            <option value="Relojero">Relojero</option>
                            <option value="Reportero Gr??fico">Reportero Gr??fico</option>
                            <option value="Representante a la C??mara">Representante a la C??mara</option>
                            <option value="Revisor Fiscal">Revisor Fiscal</option>
                            <option value="Salvavidas">Salvavidas</option>
                            <option value="Sastres, Modistos">Sastres, Modistos</option>
                            <option value="Sism??logo">Sism??logo</option>
                            <option value="Sub Oficial Ejercito">Sub Oficial Ejercito</option>
                            <option value="Sub Oficial Policia">Sub Oficial Policia</option>
                            <option value="Sub Oficial Naval">Sub Oficial Naval</option>
                            <option value="Sub Oficial Fuerza Aerea">Sub Oficial Fuerza Aerea</option>
                            <option value="Taxonomista">Taxonomista</option>
                            <option value="T??cnicos en general">T??cnicos en general</option>
                            <option value="Terapeuta">Terapeuta</option>
                            <option value="Tesorero">Tesorero</option>
                            <option value="Top??grafo">Top??grafo</option>
                            <option value="Torero">Torero</option>
                            <option value="Toxic??logo">Toxic??logo</option>
                            <option value="Traductor">Traductor</option>
                            <option value="Tutor">Tutor</option>
                            <option value="Veterinario">Veterinario</option>
                            <option value="Vir??logo">Vir??logo</option>
                            <option value="Vulcan??logo">Vulcan??logo</option>
                            <option value="Xil??grafo">Xil??grafo</option>
                            <option value="Zo??logo ">Zo??logo </option>
                            <option value="Zoot??cnico">Zoot??cnico</option>
								
</select>
  <span style="margin-left:3%"> Rango de Precio:</span>
  <input type="hidden" id="filtro" value="Idioma">
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"

    name="rango_precios" id="rango_precios" onchange="change_rango_precios(this)">
    <option value="">-----</option>       
	<option value="0-50000">$0 - $50.000</option>
        <option value="50000-100000">$50.000 - $100.000</option>
        <option value="100000-150000">$100.000 - $150.000</option>
        <option value="150000-200000">$150.000 - $200.000</option>
        <option value="200000-250000">$200.000 - $250.000</option>
        <option value="250000-300000">$250.000 - $300.000</option>
        <option value="300000-350000">$300.000 - $350.000</option>
        <option value="350000-9999999999">Mayor a $350.000 </option>
  </select>


  <span style="margin-left:3%">  Ciudad:</span>
  <select class="camposgenerales"	 
	name="filtro_ciudad" id="filtro_ciudad" onchange="change_ciudad(this)">  
	<option value="">-----</option>     
<option value="Amazonas">Amazonas</option>     
<option value="Leticia">Leticia</option>
<option value="PuertoNari??o">PuertoNari??o</option>
<option value="Antioquia">Antioquia</option>
<option value="Abejorral">Abejorral</option>
<option value="Abriaqu??">Abriaqu??</option>
<option value="Alejandr??a">Alejandr??a</option>
<option value="Amaga">Amaga</option>
<option value="Amalfi">Amalfi</option>
<option value="Andes">Andes</option>
<option value="Angel??polis">Angel??polis</option>
<option value="Angostura">Angostura</option>
<option value="Anor??">Anor??</option>
<option value="Anz??">Anz??</option>
<option value="Apartad??">Apartad??</option>
<option value="Arboletes">Arboletes</option>
<option value="Argelia">Argelia</option>
<option value="Armenia">Armenia</option>
<option value="Barbosa">Barbosa</option>
<option value="Bello">Bello</option>
<option value="Belmira">Belmira</option>
<option value="Betania">Betania</option>
<option value="Betulia">Betulia</option>
<option value="Brice??o">Brice??o</option>
<option value="Buritic??">Buritic??</option>
<option value="C??ceres">C??ceres</option>
<option value="Caicedo">Caicedo</option>
<option value="Caldas">Caldas</option>
<option value="Campamento">Campamento</option>
<option value="Ca??asgordas">Ca??asgordas</option>
<option value="Caracol??">Caracol??</option>
<option value="Caramanta">Caramanta</option>
<option value="Carepa">Carepa</option>
<option value="CarolinaDelPrincipe">CarolinaDelPrincipe</option>
<option value="Caucasia">Caucasia</option>
<option value="Chigorod??">Chigorod??</option>
<option value="Cisneros">Cisneros</option>
<option value="CiudadBol??var">CiudadBol??var</option>
<option value="Cocorn??">Cocorn??</option>
<option value="Concepci??n">Concepci??n</option>
<option value="Concordia">Concordia</option>
<option value="Copacabana">Copacabana</option>
<option value="Dabeiba">Dabeiba</option>
<option value="DonMat??as">DonMat??as</option>
<option value="Eb??jico">Eb??jico</option>
<option value="ElBagre">ElBagre</option>
<option value="ElCarmenDeViboral">ElCarmenDeViboral</option>
<option value="ElPe??ol">ElPe??ol</option>
<option value="ElRetiro">ElRetiro</option>
<option value="Entrerr??os">Entrerr??os</option>
<option value="Envigado">Envigado</option>
<option value="Fredonia">Fredonia</option>
<option value="Frontino">Frontino</option>
<option value="Giraldo">Giraldo</option>
<option value="Girardota">Girardota</option>
<option value="G??mezPlata">G??mezPlata</option>
<option value="Granada">Granada</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Guarne">Guarne</option>
<option value="Guatap??">Guatap??</option>
<option value="Heliconia">Heliconia</option>
<option value="Hispania">Hispania</option>
<option value="Itag????">Itag????</option>
<option value="Ituango">Ituango</option>
<option value="Jard??n">Jard??n</option>
<option value="Jeric??">Jeric??</option>
<option value="LaCejaDelTambo">LaCejaDelTambo</option>
<option value="LaEstrella">LaEstrella</option>
<option value="LaPintada">LaPintada</option>
<option value="LaUni??n">LaUni??n</option>
<option value="Liborina">Liborina</option>
<option value="Maceo">Maceo</option>
<option value="Marinilla">Marinilla</option>
<option value="Medell??n">Medell??n</option>
<option value="Montebello">Montebello</option>
<option value="Murind??">Murind??</option>
<option value="Mutat??">Mutat??</option>
<option value="Nari??o">Nari??o</option>
<option value="Nech??">Nech??</option>
<option value="Necocl??">Necocl??</option>
<option value="Olaya">Olaya</option>
<option value="Peque">Peque</option>
<option value="Pueblorrico">Pueblorrico</option>
<option value="PuertoBerrio">PuertoBerrio</option>
<option value="PuertoNare">PuertoNare</option>
<option value="PuertoTriunfo">PuertoTriunfo</option>
<option value="Remedios">Remedios</option>
<option value="Rionegro">Rionegro</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="Sabaneta">Sabaneta</option>
<option value="Salgar">Salgar</option>
<option value="SanAndr??sDeCuerquia">SanAndr??sDeCuerquia</option>
<option value="SanCarlos">SanCarlos</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanJer??nimo">SanJer??nimo</option>
<option value="SanJos??DeLaMonta??a">SanJos??DeLaMonta??a</option>
<option value="SanJuanDeUrab??">SanJuanDeUrab??</option>
<option value="SanLuis">SanLuis</option>
<option value="SanPedroDeLosMilagros">SanPedroDeLosMilagros</option>
<option value="SanPedroDeUrab??">SanPedroDeUrab??</option>
<option value="SanRafael">SanRafael</option>
<option value="SanRoque">SanRoque</option>
<option value="SanVicente">SanVicente</option>
<option value="SantaB??rbara">SantaB??rbara</option>
<option value="SantaRosaDeOsos">SantaRosaDeOsos</option>
<option value="SantafeDeAntioquia">SantafeDeAntioquia</option>
<option value="SantoDomingo">SantoDomingo</option>
<option value="Santuario">Santuario</option>
<option value="Segovia">Segovia</option>
<option value="Sons??n">Sons??n</option>
<option value="Sopetr??n">Sopetr??n</option>
<option value="T??mesis">T??mesis</option>
<option value="Taraz??">Taraz??</option>
<option value="Tarso">Tarso</option>
<option value="Titirib??">Titirib??</option>
<option value="Toledo">Toledo</option>
<option value="Turbo">Turbo</option>
<option value="Uramita">Uramita</option>
<option value="Urrao">Urrao</option>
<option value="Valdivia">Valdivia</option>
<option value="Valpara??so">Valpara??so</option>
<option value="Vegach??">Vegach??</option>
<option value="Venecia">Venecia</option>
<option value="Vig??aDelFuerte">Vig??aDelFuerte</option>
<option value="Yal??">Yal??</option>
<option value="Yarumal">Yarumal</option>
<option value="Yolomb??">Yolomb??</option>
<option value="Yondo">Yondo</option>
<option value="Zaragoza">Zaragoza</option>
<option value="Arauca">Arauca</option>
<option value="Arauquita">Arauquita</option>
<option value="CravoNorte">CravoNorte</option>
<option value="Fortul">Fortul</option>
<option value="PuertoRond??n">PuertoRond??n</option>
<option value="Saravena">Saravena</option>
<option value="Tame">Tame</option>
<option value="Atl??ntico">Atl??ntico</option>
<option value="Baranoa">Baranoa</option>
<option value="Barranquilla">Barranquilla</option>
<option value="CampoDeLaCruz">CampoDeLaCruz</option>
<option value="Candelaria">Candelaria</option>
<option value="Galapa">Galapa</option>
<option value="JuanDeAcosta">JuanDeAcosta</option>
<option value="Luruaco">Luruaco</option>
<option value="Malambo">Malambo</option>
<option value="Manat??">Manat??</option>
<option value="PalmarDeVarela">PalmarDeVarela</option>
<option value="Piojo">Piojo</option>
<option value="Polonuevo">Polonuevo</option>
<option value="Ponedera">Ponedera</option>
<option value="PuertoColombia">PuertoColombia</option>
<option value="Repel??n">Repel??n</option>
<option value="Sabanagrande">Sabanagrande</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="SantaLuc??a">SantaLuc??a</option>
<option value="SantoTomas">SantoTomas</option>
<option value="Soledad">Soledad</option>
<option value="Suan">Suan</option>
<option value="Tubar??">Tubar??</option>
<option value="Usiacur??">Usiacur??</option>
<option value="Bolivar">Bolivar</option>
<option value="Ach??">Ach??</option>
<option value="AltosDelRosario">AltosDelRosario</option>
<option value="Arenal">Arenal</option>
<option value="Arjona">Arjona</option>
<option value="Arroyohondo">Arroyohondo</option>
<option value="BarrancoDeLoba">BarrancoDeLoba</option>
<option value="Calamar">Calamar</option>
<option value="Cantagallo">Cantagallo</option>
<option value="CartagenadeIndias">CartagenadeIndias</option>
<option value="Cicuco">Cicuco</option>
<option value="Clemencia">Clemencia</option>
<option value="C??rdoba">C??rdoba</option>
<option value="ElCarmenDeBol??var">ElCarmenDeBol??var</option>
<option value="ElGuamo">ElGuamo</option>
<option value="ElPe??on">ElPe??on</option>
<option value="HatilloDeLoba">HatilloDeLoba</option>
<option value="Magangu??">Magangu??</option>
<option value="Mahates">Mahates</option>
<option value="Margarita">Margarita</option>
<option value="Mar??aLaBaja">Mar??aLaBaja</option>
<option value="Montecristo">Montecristo</option>
<option value="Morales">Morales</option>
<option value="Noros??">Noros??</option>
<option value="Pinillos">Pinillos</option>
<option value="Regidor">Regidor</option>
<option value="Rioviejo">Rioviejo</option>
<option value="SanCrist??bal">SanCrist??bal</option>
<option value="SanEstanislao">SanEstanislao</option>
<option value="SanFernando">SanFernando</option>
<option value="SanJacinto">SanJacinto</option>
<option value="SanJacintoDelCauca">SanJacintoDelCauca</option>
<option value="SanJuanNepomuceno">SanJuanNepomuceno</option>
<option value="SanMart??nDeLoba">SanMart??nDeLoba</option>
<option value="SanPablo">SanPablo</option>
<option value="SantaCatalina">SantaCatalina</option>
<option value="SantaCruzDeMomp??s">SantaCruzDeMomp??s</option>
<option value="SantaRosaDelNorte">SantaRosaDelNorte</option>
<option value="SantaRosaDelSur">SantaRosaDelSur</option>
<option value="Simit??">Simit??</option>
<option value="Soplaviento">Soplaviento</option>
<option value="TalaiguaNuevo">TalaiguaNuevo</option>
<option value="Tiquisio">Tiquisio</option>
<option value="Turbaco">Turbaco</option>
<option value="Turbana">Turbana</option>
<option value="Villanueva">Villanueva</option>
<option value="Zambrano">Zambrano</option>
<option value="Boyac??">Boyac??</option>
<option value="Almeida">Almeida</option>
<option value="Aquitania">Aquitania</option>
<option value="Arcabuco">Arcabuco</option>
<option value="Bel??n">Bel??n</option>
<option value="Berbeo">Berbeo</option>
<option value="Bet??itiva">Bet??itiva</option>
<option value="Boavita">Boavita</option>
<option value="Boyac??">Boyac??</option>
<option value="Brice??o">Brice??o</option>
<option value="Buenavista">Buenavista</option>
<option value="Busbanz??">Busbanz??</option>
<option value="Caldas">Caldas</option>
<option value="Campohermoso">Campohermoso</option>
<option value="Cerinza">Cerinza</option>
<option value="Chinavita">Chinavita</option>
<option value="Chiquinquir??">Chiquinquir??</option>
<option value="Ch??quiza">Ch??quiza</option>
<option value="Chiscas">Chiscas</option>
<option value="Chita">Chita</option>
<option value="Chitaraque">Chitaraque</option>
<option value="Chivata">Chivata</option>
<option value="Chivor">Chivor</option>
<option value="Ci??nega">Ci??nega</option>
<option value="Combita">Combita</option>
<option value="Coper">Coper</option>
<option value="Corrales">Corrales</option>
<option value="Covarach??a">Covarach??a</option>
<option value="Cubar??">Cubar??</option>
<option value="Cucaita">Cucaita</option>
<option value="Cu??tiva">Cu??tiva</option>
<option value="Duitama">Duitama</option>
<option value="ElCocuy">ElCocuy</option>
<option value="ElEspino">ElEspino</option>
<option value="Firavitoba">Firavitoba</option>
<option value="Floresta">Floresta</option>
<option value="Gachantiv??">Gachantiv??</option>
<option value="G??meza">G??meza</option>
<option value="Garagoa">Garagoa</option>
<option value="Guacamayas">Guacamayas</option>
<option value="Guateque">Guateque</option>
<option value="Guayat??">Guayat??</option>
<option value="G??ic??n">G??ic??n</option>
<option value="Iza">Iza</option>
<option value="Jenesano">Jenesano</option>
<option value="Jeric??">Jeric??</option>
<option value="LaCapilla">LaCapilla</option>
<option value="LaUvita">LaUvita</option>
<option value="LaVictoria">LaVictoria</option>
<option value="Labranzagrande">Labranzagrande</option>
<option value="Macanal">Macanal</option>
<option value="Maripi">Maripi</option>
<option value="Miraflores">Miraflores</option>
<option value="Mongua">Mongua</option>
<option value="Mongu??">Mongu??</option>
<option value="Moniquir??">Moniquir??</option>
<option value="Motavita">Motavita</option>
<option value="Muzo">Muzo</option>
<option value="Nobsa">Nobsa</option>
<option value="NuevoCol??n">NuevoCol??n</option>
<option value="Oicat??">Oicat??</option>
<option value="Otanche">Otanche</option>
<option value="Pachavita">Pachavita</option>
<option value="P??ez">P??ez</option>
<option value="Paipa">Paipa</option>
<option value="Pajarito">Pajarito</option>
<option value="Panqueba">Panqueba</option>
<option value="Pauna">Pauna</option>
<option value="Paya">Paya</option>
<option value="PazDeR??o">PazDeR??o</option>
<option value="Pesca">Pesca</option>
<option value="Pisba">Pisba</option>
<option value="PuertoBoyac??">PuertoBoyac??</option>
<option value="Qu??pama">Qu??pama</option>
<option value="Ramiriqu??">Ramiriqu??</option>
<option value="R??quira">R??quira</option>
<option value="Rond??n">Rond??n</option>
<option value="Saboya">Saboya</option>
<option value="S??chica">S??chica</option>
<option value="Samac??">Samac??</option>
<option value="SanEduardo">SanEduardo</option>
<option value="SanJos??DePare">SanJos??DePare</option>
<option value="SanLuisDeGaceno">SanLuisDeGaceno</option>
<option value="SanMateo">SanMateo</option>
<option value="SanMiguelDeSema">SanMiguelDeSema</option>
<option value="SanPabloDeBorbur">SanPabloDeBorbur</option>
<option value="SantaMar??a">SantaMar??a</option>
<option value="SantaRosaDeViterbo">SantaRosaDeViterbo</option>
<option value="SantaSof??a">SantaSof??a</option>
<option value="Santana">Santana</option>
<option value="Sativanorte">Sativanorte</option>
<option value="Sativasur">Sativasur</option>
<option value="Siachoque">Siachoque</option>
<option value="Soat??">Soat??</option>
<option value="Socha">Socha</option>
<option value="Socot??">Socot??</option>
<option value="Sogamoso">Sogamoso</option>
<option value="Somondoco">Somondoco</option>
<option value="Sora">Sora</option>
<option value="Sorac??">Sorac??</option>
<option value="Sotaquir??">Sotaquir??</option>
<option value="Susac??n">Susac??n</option>
<option value="Sutamarchan">Sutamarchan</option>
<option value="Sutatenza">Sutatenza</option>
<option value="Tasco">Tasco</option>
<option value="Tenza">Tenza</option>
<option value="Tiban??">Tiban??</option>
<option value="Tibasosa">Tibasosa</option>
<option value="Tinjac??">Tinjac??</option>
<option value="Tipacoque">Tipacoque</option>
<option value="Toca">Toca</option>
<option value="Tog????">Tog????</option>
<option value="T??paga">T??paga</option>
<option value="Tota">Tota</option>
<option value="Tunja">Tunja</option>
<option value="Tunungua">Tunungua</option>
<option value="Turmequ??">Turmequ??</option>
<option value="Tuta">Tuta</option>
<option value="Tutaz??">Tutaz??</option>
<option value="??mbita">??mbita</option>
<option value="Ventaquemada">Ventaquemada</option>
<option value="VillaDeLeyva">VillaDeLeyva</option>
<option value="Viracach??">Viracach??</option>
<option value="Zetaquir??">Zetaquir??</option>
<option value="Caldas">Caldas</option>
<option value="Aguadas">Aguadas</option>
<option value="Anserma">Anserma</option>
<option value="Aranzazu">Aranzazu</option>
<option value="Belalcazar">Belalcazar</option>
<option value="Chinchin??">Chinchin??</option>
<option value="Filadelfia">Filadelfia</option>
<option value="LaDorada">LaDorada</option>
<option value="LaMerced">LaMerced</option>
<option value="Manizales">Manizales</option>
<option value="Manzanares">Manzanares</option>
<option value="Marmato">Marmato</option>
<option value="Marquetalia">Marquetalia</option>
<option value="Marulanda">Marulanda</option>
<option value="Neira">Neira</option>
<option value="Norcasia">Norcasia</option>
<option value="Pacora">Pacora</option>
<option value="Palestina">Palestina</option>
<option value="Pensilvania">Pensilvania</option>
<option value="Riosucio">Riosucio</option>
<option value="Risaralda">Risaralda</option>
<option value="Salamina">Salamina</option>
<option value="Saman??">Saman??</option>
<option value="SanJos??">SanJos??</option>
<option value="Sup??a">Sup??a</option>
<option value="Victoria">Victoria</option>
<option value="Villamar??a">Villamar??a</option>
<option value="Viterbo">Viterbo</option>
<option value="Caquet??">Caquet??</option>
<option value="Albania">Albania</option>
<option value="Bel??nDeLosAndaquies">Bel??nDeLosAndaquies</option>
<option value="CartagenaDelChair??">CartagenaDelChair??</option>
<option value="Curillo">Curillo</option>
<option value="ElDoncello">ElDoncello</option>
<option value="ElPaujil">ElPaujil</option>
<option value="Florencia">Florencia</option>
<option value="LaMonta??ita">LaMonta??ita</option>
<option value="Mil??n">Mil??n</option>
<option value="Morelia">Morelia</option>
<option value="PuertoRico">PuertoRico</option>
<option value="SanJos??DelFragua">SanJos??DelFragua</option>
<option value="SanVicenteDelCagu??n">SanVicenteDelCagu??n</option>
<option value="Solano">Solano</option>
<option value="Solita">Solita</option>
<option value="Valpara??so">Valpara??so</option>
<option value="Casanare">Casanare</option>
<option value="Aguazul">Aguazul</option>
<option value="Chameza">Chameza</option>
<option value="HatoCorozal">HatoCorozal</option>
<option value="LaSalina">LaSalina</option>
<option value="Man??">Man??</option>
<option value="Monterrey">Monterrey</option>
<option value="Nunch??a">Nunch??a</option>
<option value="Orocu??">Orocu??</option>
<option value="PazDeAriporo">PazDeAriporo</option>
<option value="Pore">Pore</option>
<option value="Recetor">Recetor</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="S??cama">S??cama</option>
<option value="SanLuisDePalenque">SanLuisDePalenque</option>
<option value="T??mara">T??mara</option>
<option value="Tauramena">Tauramena</option>
<option value="Trinidad">Trinidad</option>
<option value="Villanueva">Villanueva</option>
<option value="Yopal">Yopal</option>
<option value="Cauca">Cauca</option>
<option value="Almaguer">Almaguer</option>
<option value="Argelia">Argelia</option>
<option value="Balboa">Balboa</option>
<option value="Bol??var">Bol??var</option>
<option value="BuenosAires">BuenosAires</option>
<option value="Cajibio">Cajibio</option>
<option value="Caldono">Caldono</option>
<option value="Caloto">Caloto</option>
<option value="Corinto">Corinto</option>
<option value="ElTambo">ElTambo</option>
<option value="Florencia">Florencia</option>
<option value="Guachen??">Guachen??</option>
<option value="Guapi">Guapi</option>
<option value="Inz??">Inz??</option>
<option value="Jambal??">Jambal??</option>
<option value="LaSierra">LaSierra</option>
<option value="LaVega">LaVega</option>
<option value="L??pezDeMicay">L??pezDeMicay</option>
<option value="Mercaderes">Mercaderes</option>
<option value="Miranda">Miranda</option>
<option value="Morales">Morales</option>
<option value="Padilla">Padilla</option>
<option value="P??ez">P??ez</option>
<option value="Pat??a">Pat??a</option>
<option value="Piamonte">Piamonte</option>
<option value="Piendam??">Piendam??</option>
<option value="Popay??n">Popay??n</option>
<option value="PuertoTejada">PuertoTejada</option>
<option value="Purac??">Purac??</option>
<option value="Rosas">Rosas</option>
<option value="SanSebasti??n">SanSebasti??n</option>
<option value="SantaRosa">SantaRosa</option>
<option value="SantanderDeQuilichao">SantanderDeQuilichao</option>
<option value="Silvia">Silvia</option>
<option value="Sotar??">Sotar??</option>
<option value="Su??rez">Su??rez</option>
<option value="Sucre">Sucre</option>
<option value="Timb??o">Timb??o</option>
<option value="Timbiqu??">Timbiqu??</option>
<option value="Toribio">Toribio</option>
<option value="Totoro">Totoro</option>
<option value="VillaRica">VillaRica</option>
<option value="Cesar">Cesar</option>
<option value="Aguachica">Aguachica</option>
<option value="Agust??nCodazzi">Agust??nCodazzi</option>
<option value="Astrea">Astrea</option>
<option value="Becerril">Becerril</option>
<option value="Bosconia">Bosconia</option>
<option value="Chimichagua">Chimichagua</option>
<option value="Chiriguan??">Chiriguan??</option>
<option value="Curuman??">Curuman??</option>
<option value="ElCopey">ElCopey</option>
<option value="ElPaso">ElPaso</option>
<option value="Gamarra">Gamarra</option>
<option value="Gonz??lez">Gonz??lez</option>
<option value="LaGloria">LaGloria</option>
<option value="LaJaguaDeIbirico">LaJaguaDeIbirico</option>
<option value="LaPaz">LaPaz</option>
<option value="ManaureBalc??nDelC??sar">ManaureBalc??nDelC??sar</option>
<option value="Pailitas">Pailitas</option>
<option value="Pelaya">Pelaya</option>
<option value="PuebloBello">PuebloBello</option>
<option value="RioDeOro">RioDeOro</option>
<option value="SanAlberto">SanAlberto</option>
<option value="SanDiego">SanDiego</option>
<option value="SanMart??n">SanMart??n</option>
<option value="Tamalameque">Tamalameque</option>
<option value="Valledupar">Valledupar</option>
<option value="Choc??">Choc??</option>
<option value="Acand??">Acand??</option>
<option value="AltoBaud??">AltoBaud??</option>
<option value="Atrato">Atrato</option>
<option value="Bagad??">Bagad??</option>
<option value="Bah??aSolano">Bah??aSolano</option>
<option value="BajoBaud??">BajoBaud??</option>
<option value="Bojay??">Bojay??</option>
<option value="CarmenDelDari??n">CarmenDelDari??n</option>
<option value="C??rtegui">C??rtegui</option>
<option value="Condoto">Condoto</option>
<option value="ElCant??ndeSanPablo">ElCant??ndeSanPablo</option>
<option value="ElCarmenDeAtrato">ElCarmenDeAtrato</option>
<option value="ElLitoralDeSanJuan">ElLitoralDeSanJuan</option>
<option value="Istmina">Istmina</option>
<option value="Jurad??">Jurad??</option>
<option value="Llor??">Llor??</option>
<option value="MedioAtrato">MedioAtrato</option>
<option value="MedioBaud??">MedioBaud??</option>
<option value="MedioSanJuan">MedioSanJuan</option>
<option value="N??vita">N??vita</option>
<option value="Nuqu??">Nuqu??</option>
<option value="Quibd??">Quibd??</option>
<option value="R??oIr??">R??oIr??</option>
<option value="R??oQuito">R??oQuito</option>
<option value="Riosucio">Riosucio</option>
<option value="SanJos??deTad??">SanJos??deTad??</option>
<option value="SanJos??DelPalmar">SanJos??DelPalmar</option>
<option value="Sip??">Sip??</option>
<option value="Ung????a">Ung????a</option>
<option value="Uni??nPanamericana">Uni??nPanamericana</option>
<option value="C??rdoba">C??rdoba</option>
<option value="Ayapel">Ayapel</option>
<option value="Buenavista">Buenavista</option>
<option value="Canalete">Canalete</option>
<option value="Ceret??">Ceret??</option>
<option value="Chim??">Chim??</option>
<option value="Chin??">Chin??</option>
<option value="Ci??nagaDeOro">Ci??nagaDeOro</option>
<option value="Cotorra">Cotorra</option>
<option value="LaApartada">LaApartada</option>
<option value="LosC??rdobas">LosC??rdobas</option>
<option value="Momil">Momil</option>
<option value="Montelibano">Montelibano</option>
<option value="Monter??a">Monter??a</option>
<option value="Mo??itos">Mo??itos</option>
<option value="PlanetaRica">PlanetaRica</option>
<option value="PuebloNuevo">PuebloNuevo</option>
<option value="PuertoEscondido">PuertoEscondido</option>
<option value="PuertoLibertador">PuertoLibertador</option>
<option value="Pur??sima">Pur??sima</option>
<option value="Sahag??n">Sahag??n</option>
<option value="SanAndr??sDeSotavento">SanAndr??sDeSotavento</option>
<option value="SanAntero">SanAntero</option>
<option value="SanBernardoDelViento">SanBernardoDelViento</option>
<option value="SanCarlos">SanCarlos</option>
<option value="SanJos??DeUr??">SanJos??DeUr??</option>
<option value="SanPelayo">SanPelayo</option>
<option value="SantaCruzDeLorica">SantaCruzDeLorica</option>
<option value="Tierralta">Tierralta</option>
<option value="Tuch??n">Tuch??n</option>
<option value="Valencia">Valencia</option>
<option value="Cundinamarca">Cundinamarca</option>
<option value="AguaDeDios">AguaDeDios</option>
<option value="Alb??n">Alb??n</option>
<option value="Anapoima">Anapoima</option>
<option value="Anolaima">Anolaima</option>
<option value="Apulo">Apulo</option>
<option value="Arbel??ez">Arbel??ez</option>
<option value="Beltr??n">Beltr??n</option>
<option value="Bituima">Bituima</option>
<option value="Bogot??D.C.">Bogot??D.C.</option>
<option value="Bojac??">Bojac??</option>
<option value="Cabrera">Cabrera</option>
<option value="Cachipay">Cachipay</option>
<option value="Cajic??">Cajic??</option>
<option value="Caparrap??">Caparrap??</option>
<option value="C??queza">C??queza</option>
<option value="CarmenDeCarupa">CarmenDeCarupa</option>
<option value="Chaguan??">Chaguan??</option>
<option value="Ch??a">Ch??a</option>
<option value="Chipaque">Chipaque</option>
<option value="Choach??">Choach??</option>
<option value="Chocont??">Chocont??</option>
<option value="Cogua">Cogua</option>
<option value="Cota">Cota</option>
<option value="Cucunub??">Cucunub??</option>
<option value="ElColegio">ElColegio</option>
<option value="ElPe????n">ElPe????n</option>
<option value="ElRosal">ElRosal</option>
<option value="Facatativ??">Facatativ??</option>
<option value="F??meque">F??meque</option>
<option value="Fosca">Fosca</option>
<option value="Funza">Funza</option>
<option value="F??quene">F??quene</option>
<option value="Fusagasug??">Fusagasug??</option>
<option value="Gachal??">Gachal??</option>
<option value="Gachancip??">Gachancip??</option>
<option value="Gachet??">Gachet??</option>
<option value="Gama">Gama</option>
<option value="Girardot">Girardot</option>
<option value="Granada">Granada</option>
<option value="Guachet??">Guachet??</option>
<option value="Guaduas">Guaduas</option>
<option value="Guasca">Guasca</option>
<option value="Guataqu??">Guataqu??</option>
<option value="Guatavita">Guatavita</option>
<option value="GuayabalDeSiquima">GuayabalDeSiquima</option>
<option value="Guayabetal">Guayabetal</option>
<option value="Gutierrez">Gutierrez</option>
<option value="Jerusalen">Jerusalen</option>
<option value="Jun??n">Jun??n</option>
<option value="LaCalera">LaCalera</option>
<option value="LaMesa">LaMesa</option>
<option value="LaPalma">LaPalma</option>
<option value="LaPe??a">LaPe??a</option>
<option value="LaVega">LaVega</option>
<option value="Lenguazaque">Lenguazaque</option>
<option value="Machet??">Machet??</option>
<option value="Madrid">Madrid</option>
<option value="Manta">Manta</option>
<option value="Medina">Medina</option>
<option value="Mosquera">Mosquera</option>
<option value="Nari??o">Nari??o</option>
<option value="Nemoc??n">Nemoc??n</option>
<option value="Nilo">Nilo</option>
<option value="Nimaima">Nimaima</option>
<option value="Nocaima">Nocaima</option>
<option value="Pacho">Pacho</option>
<option value="Paime">Paime</option>
<option value="Pandi">Pandi</option>
<option value="Paratebueno">Paratebueno</option>
<option value="Pasca">Pasca</option>
<option value="PuertoSalgar">PuertoSalgar</option>
<option value="Pul??">Pul??</option>
<option value="Quebradanegra">Quebradanegra</option>
<option value="Quetame">Quetame</option>
<option value="Quipile">Quipile</option>
<option value="Ricaurte">Ricaurte</option>
<option value="SanAntonioDelTequendama">SanAntonioDelTequendama</option>
<option value="SanBernardo">SanBernardo</option>
<option value="SanCayetano">SanCayetano</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanJuanDeRioseco">SanJuanDeRioseco</option>
<option value="Sasaima">Sasaima</option>
<option value="Sesquil??">Sesquil??</option>
<option value="Sibat??">Sibat??</option>
<option value="Silvania">Silvania</option>
<option value="Simijaca">Simijaca</option>
<option value="Soacha">Soacha</option>
<option value="Sop??">Sop??</option>
<option value="Subachoque">Subachoque</option>
<option value="Suesca">Suesca</option>
<option value="Supat??">Supat??</option>
<option value="Susa">Susa</option>
<option value="Sutatausa">Sutatausa</option>
<option value="Tabio">Tabio</option>
<option value="Tausa">Tausa</option>
<option value="Tena">Tena</option>
<option value="Tenjo">Tenjo</option>
<option value="Tibacuy">Tibacuy</option>
<option value="Tibirita">Tibirita</option>
<option value="Tocaima">Tocaima</option>
<option value="Tocancip??">Tocancip??</option>
<option value="Topaipi">Topaipi</option>
<option value="Ubal??">Ubal??</option>
<option value="Ubaque">Ubaque</option>
<option value="Ubate">Ubate</option>
<option value="Une">Une</option>
<option value="??tica">??tica</option>
<option value="Venecia">Venecia</option>
<option value="Vergara">Vergara</option>
<option value="Vian??">Vian??</option>
<option value="Villagomez">Villagomez</option>
<option value="Villapinz??n">Villapinz??n</option>
<option value="Villeta">Villeta</option>
<option value="Viot??">Viot??</option>
<option value="Yacop??">Yacop??</option>
<option value="Zipac??n">Zipac??n</option>
<option value="Zipaquir??">Zipaquir??</option>
<option value="Guain??a">Guain??a</option>
<option value="Barrancominas">Barrancominas</option>
<option value="Inirida">Inirida</option>
<option value="Guaviare">Guaviare</option>
<option value="Calamar">Calamar</option>
<option value="ElRetorno">ElRetorno</option>
<option value="Miraflores">Miraflores</option>
<option value="SanJos??DelGuaviare">SanJos??DelGuaviare</option>
<option value="Huila">Huila</option>
<option value="Acevedo">Acevedo</option>
<option value="Agrado">Agrado</option>
<option value="Aipe">Aipe</option>
<option value="Algeciras">Algeciras</option>
<option value="Altamira">Altamira</option>
<option value="Baraya">Baraya</option>
<option value="Campoalegre">Campoalegre</option>
<option value="Colombia">Colombia</option>
<option value="El??as">El??as</option>
<option value="Garz??n">Garz??n</option>
<option value="Gigante">Gigante</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Hobo">Hobo</option>
<option value="Iquira">Iquira</option>
<option value="Isnos">Isnos</option>
<option value="LaArgentina">LaArgentina</option>
<option value="LaPlata">LaPlata</option>
<option value="N??taga">N??taga</option>
<option value="Neiva">Neiva</option>
<option value="Oporapa">Oporapa</option>
<option value="Paicol">Paicol</option>
<option value="Palermo">Palermo</option>
<option value="Palestina">Palestina</option>
<option value="Pital">Pital</option>
<option value="Pitalito">Pitalito</option>
<option value="Rivera">Rivera</option>
<option value="Saladoblanco">Saladoblanco</option>
<option value="SanAgust??n">SanAgust??n</option>
<option value="SantaMar??a">SantaMar??a</option>
<option value="Suaza">Suaza</option>
<option value="Tarqui">Tarqui</option>
<option value="Tello">Tello</option>
<option value="Teruel">Teruel</option>
<option value="Tesalia">Tesalia</option>
<option value="Timan??">Timan??</option>
<option value="Villavieja">Villavieja</option>
<option value="Yaguar??">Yaguar??</option>
<option value="La Guajira">La Guajira</option>
<option value="Albania">Albania</option>
<option value="Barrancas">Barrancas</option>
<option value="Dibulla">Dibulla</option>
<option value="Distracci??n">Distracci??n</option>
<option value="ElMolino">ElMolino</option>
<option value="Fonseca">Fonseca</option>
<option value="Hatonuevo">Hatonuevo</option>
<option value="LaJaguaDelPilar">LaJaguaDelPilar</option>
<option value="Maicao">Maicao</option>
<option value="Manaure">Manaure</option>
<option value="Riohacha">Riohacha</option>
<option value="SanJuanDelCesar">SanJuanDelCesar</option>
<option value="Uribia">Uribia</option>
<option value="Urumita">Urumita</option>
<option value="Villanueva">Villanueva</option>
<option value="Magdalena">Magdalena</option>
<option value="Algarrobo">Algarrobo</option>
<option value="Aracataca">Aracataca</option>
<option value="Ariguan??">Ariguan??</option>
<option value="CerroDeSanAntonio">CerroDeSanAntonio</option>
<option value="Chivolo">Chivolo</option>
<option value="Ci??naga">Ci??naga</option>
<option value="Concordia">Concordia</option>
<option value="ElBanco">ElBanco</option>
<option value="ElPi????n">ElPi????n</option>
<option value="ElRet??n">ElRet??n</option>
<option value="Fundaci??n">Fundaci??n</option>
<option value="Guamal">Guamal</option>
<option value="NuevaGranada">NuevaGranada</option>
<option value="Pedraza">Pedraza</option>
<option value="Piji??oDelCarmen">Piji??oDelCarmen</option>
<option value="Pivijay">Pivijay</option>
<option value="Plato">Plato</option>
<option value="Puebloviejo">Puebloviejo</option>
<option value="Remolino">Remolino</option>
<option value="SabanasDeSan??ngel">SabanasDeSan??ngel</option>
<option value="Salamina">Salamina</option>
<option value="SanSebasti??nDeBuenavista">SanSebasti??nDeBuenavista</option>
<option value="SanZen??n">SanZen??n</option>
<option value="SantaAna">SantaAna</option>
<option value="SantaB??rbaraDePinto">SantaB??rbaraDePinto</option>
<option value="SantaMarta">SantaMarta</option>
<option value="Sitionuevo">Sitionuevo</option>
<option value="Tenerife">Tenerife</option>
<option value="Zapay??n">Zapay??n</option>
<option value="ZonaBananera">ZonaBananera</option>
<option value="Meta">Meta</option>
<option value="Acac??as">Acac??as</option>
<option value="BarrancaDeUp??a">BarrancaDeUp??a</option>
<option value="Cabuyaro">Cabuyaro</option>
<option value="CastillaLaNueva">CastillaLaNueva</option>
<option value="Cubarral">Cubarral</option>
<option value="Cumaral">Cumaral</option>
<option value="ElCalvario">ElCalvario</option>
<option value="ElCastillo">ElCastillo</option>
<option value="ElDorado">ElDorado</option>
<option value="FuenteDeOro">FuenteDeOro</option>
<option value="Granada">Granada</option>
<option value="Guamal">Guamal</option>
<option value="LaMacarena">LaMacarena</option>
<option value="Lejanias">Lejanias</option>
<option value="Mapirip??n">Mapirip??n</option>
<option value="Mesetas">Mesetas</option>
<option value="PuertoConcordia">PuertoConcordia</option>
<option value="PuertoGait??n">PuertoGait??n</option>
<option value="PuertoLleras">PuertoLleras</option>
<option value="PuertoL??pez">PuertoL??pez</option>
<option value="PuertoRico">PuertoRico</option>
<option value="Restrepo">Restrepo</option>
<option value="SanCarlosDeGuaroa">SanCarlosDeGuaroa</option>
<option value="SanJuanDeArama">SanJuanDeArama</option>
<option value="SanJuanito">SanJuanito</option>
<option value="SanMart??nDeLosLlanos">SanMart??nDeLosLlanos</option>
<option value="Uribe">Uribe</option>
<option value="Villavicencio">Villavicencio</option>
<option value="VistaHermosa">VistaHermosa</option>
<option value="Nari??o">Nari??o</option>
<option value="Alban">Alban</option>
<option value="Aldana">Aldana</option>
<option value="Ancuy??">Ancuy??</option>
<option value="Arboleda">Arboleda</option>
<option value="Barbacoas">Barbacoas</option>
<option value="Bel??n">Bel??n</option>
<option value="Buesaco">Buesaco</option>
<option value="Chachag????">Chachag????</option>
<option value="Col??n">Col??n</option>
<option value="Consac??">Consac??</option>
<option value="Contadero">Contadero</option>
<option value="C??rdoba">C??rdoba</option>
<option value="Cuaspud">Cuaspud</option>
<option value="Cumbal">Cumbal</option>
<option value="Cumbitara">Cumbitara</option>
<option value="ElCharco">ElCharco</option>
<option value="ElPe??ol">ElPe??ol</option>
<option value="ElRosario">ElRosario</option>
<option value="ElTabl??nDeG??mez">ElTabl??nDeG??mez</option>
<option value="ElTambo">ElTambo</option>
<option value="FranciscoPizarro">FranciscoPizarro</option>
<option value="Funes">Funes</option>
<option value="Guachucal">Guachucal</option>
<option value="Guaitarilla">Guaitarilla</option>
<option value="Gualmat??n">Gualmat??n</option>
<option value="Iles">Iles</option>
<option value="Imu??s">Imu??s</option>
<option value="Ipiales">Ipiales</option>
<option value="LaCruz">LaCruz</option>
<option value="LaFlorida">LaFlorida</option>
<option value="LaLlanada">LaLlanada</option>
<option value="LaTola">LaTola</option>
<option value="LaUni??n">LaUni??n</option>
<option value="Leiva">Leiva</option>
<option value="Linares">Linares</option>
<option value="LosAndes">LosAndes</option>
<option value="Mag??iPay??n">Mag??iPay??n</option>
<option value="Mallama">Mallama</option>
<option value="Mosquera">Mosquera</option>
<option value="Nari??o">Nari??o</option>
<option value="OlayaHerrera">OlayaHerrera</option>
<option value="Ospina">Ospina</option>
<option value="Policarpa">Policarpa</option>
<option value="Potos??">Potos??</option>
<option value="Providencia">Providencia</option>
<option value="Puerres">Puerres</option>
<option value="Pupiales">Pupiales</option>
<option value="Ricaurte">Ricaurte</option>
<option value="RobertoPay??n">RobertoPay??n</option>
<option value="Samaniego">Samaniego</option>
<option value="SanBernardo">SanBernardo</option>
<option value="SanJuanDePasto">SanJuanDePasto</option>
<option value="SanLorenzo">SanLorenzo</option>
<option value="SanPablo">SanPablo</option>
<option value="SanPedroDeCartago">SanPedroDeCartago</option>
<option value="Sandon??">Sandon??</option>
<option value="SantaB??rbara">SantaB??rbara</option>
<option value="Santacruz">Santacruz</option>
<option value="Sapuyes">Sapuyes</option>
<option value="Taminango">Taminango</option>
<option value="Tangua">Tangua</option>
<option value="Tumaco">Tumaco</option>
<option value="T??querres">T??querres</option>
<option value="Yacuanquer">Yacuanquer</option>
<option value="Norte de Santander">Norte de Santander</option>
<option value="Abrego">Abrego</option>
<option value="Arboledas">Arboledas</option>
<option value="Bochalema">Bochalema</option>
<option value="Bucarasica">Bucarasica</option>
<option value="C??chira">C??chira</option>
<option value="C??cota">C??cota</option>
<option value="Chin??cota">Chin??cota</option>
<option value="Chitag??">Chitag??</option>
<option value="Convenci??n">Convenci??n</option>
<option value="Cucutilla">Cucutilla</option>
<option value="Durania">Durania</option>
<option value="ElCarmen">ElCarmen</option>
<option value="ElTarra">ElTarra</option>
<option value="ElZulia">ElZulia</option>
<option value="Gramalote">Gramalote</option>
<option value="Hacar??">Hacar??</option>
<option value="Herr??n">Herr??n</option>
<option value="LaEsperanza">LaEsperanza</option>
<option value="LaPlayaDeBel??n">LaPlayaDeBel??n</option>
<option value="Labateca">Labateca</option>
<option value="LosPatios">LosPatios</option>
<option value="Lourdes">Lourdes</option>
<option value="Mutiscua">Mutiscua</option>
<option value="Oca??a">Oca??a</option>
<option value="Pamplona">Pamplona</option>
<option value="Pamplonita">Pamplonita</option>
<option value="PuertoSantander">PuertoSantander</option>
<option value="Ragonvalia">Ragonvalia</option>
<option value="SalazarDeLasPalmas">SalazarDeLasPalmas</option>
<option value="SanCalixto">SanCalixto</option>
<option value="SanCayetano">SanCayetano</option>
<option value="SanJos??DeC??cuta">SanJos??DeC??cuta</option>
<option value="Santiago">Santiago</option>
<option value="Sardinata">Sardinata</option>
<option value="Silos">Silos</option>
<option value="Teorama">Teorama</option>
<option value="Tib??">Tib??</option>
<option value="Toledo">Toledo</option>
<option value="VillaCaro">VillaCaro</option>
<option value="VillaDelRosario">VillaDelRosario</option>
<option value="Putumayo">Putumayo</option>
<option value="Col??n">Col??n</option>
<option value="Mocoa">Mocoa</option>
<option value="Orito">Orito</option>
<option value="PuertoAs??s">PuertoAs??s</option>
<option value="PuertoCaicedo">PuertoCaicedo</option>
<option value="PuertoGuzm??n">PuertoGuzm??n</option>
<option value="PuertoLeguizamo">PuertoLeguizamo</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanMiguel">SanMiguel</option>
<option value="Santiago">Santiago</option>
<option value="Sibundoy">Sibundoy</option>
<option value="ValleDelGuamuez">ValleDelGuamuez</option>
<option value="Villagarz??n">Villagarz??n</option>
<option value="Qund??o">Qund??o</option>
<option value="Armenia">Armenia</option>
<option value="Buenavista">Buenavista</option>
<option value="Calarc??">Calarc??</option>
<option value="Circasia">Circasia</option>
<option value="C??rdoba">C??rdoba</option>
<option value="Filandia">Filandia</option>
<option value="G??nova">G??nova</option>
<option value="LaTebaida">LaTebaida</option>
<option value="Montenegro">Montenegro</option>
<option value="Pijao">Pijao</option>
<option value="Quimbaya">Quimbaya</option>
<option value="Salento">Salento</option>
<option value="Risaralda">Risaralda</option>
<option value="Ap??a">Ap??a</option>
<option value="Balboa">Balboa</option>
<option value="Bel??nDeUmbr??a">Bel??nDeUmbr??a</option>
<option value="Dosquebradas">Dosquebradas</option>
<option value="Gu??tica">Gu??tica</option>
<option value="LaCelia">LaCelia</option>
<option value="LaVirginia">LaVirginia</option>
<option value="Marsella">Marsella</option>
<option value="Mistrato">Mistrato</option>
<option value="Pereira">Pereira</option>
<option value="PuebloRico">PuebloRico</option>
<option value="Quinch??a">Quinch??a</option>
<option value="SantaRosaDeCabal">SantaRosaDeCabal</option>
<option value="Santuario">Santuario</option>
<option value="San Andr??s">San Andr??s</option>
<option value="Providencia">Providencia</option>
<option value="Santander">Santander</option>
<option value="Aguada">Aguada</option>
<option value="Albania">Albania</option>
<option value="Aratoca">Aratoca</option>
<option value="Barbosa">Barbosa</option>
<option value="Barichara">Barichara</option>
<option value="Barrancabermeja">Barrancabermeja</option>
<option value="Betulia">Betulia</option>
<option value="Bol??var">Bol??var</option>
<option value="Bucaramanga">Bucaramanga</option>
<option value="Cabrera">Cabrera</option>
<option value="California">California</option>
<option value="Capitanejo">Capitanejo</option>
<option value="Carcas??">Carcas??</option>
<option value="Cepita">Cepita</option>
<option value="Cerrito">Cerrito</option>
<option value="Charal??">Charal??</option>
<option value="Charta">Charta</option>
<option value="Chim??">Chim??</option>
<option value="Chipat??">Chipat??</option>
<option value="Cimitarra">Cimitarra</option>
<option value="Concepci??n">Concepci??n</option>
<option value="Confines">Confines</option>
<option value="Contrataci??n">Contrataci??n</option>
<option value="Coromoro">Coromoro</option>
<option value="Curit??">Curit??</option>
<option value="ElCarmenDeChucur??">ElCarmenDeChucur??</option>
<option value="ElGuacamayo">ElGuacamayo</option>
<option value="ElPe????n">ElPe????n</option>
<option value="ElPlay??n">ElPlay??n</option>
<option value="Encino">Encino</option>
<option value="Enciso">Enciso</option>
<option value="Flori??n">Flori??n</option>
<option value="Floridablanca">Floridablanca</option>
<option value="Gal??n">Gal??n</option>
<option value="Gambita">Gambita</option>
<option value="Gir??n">Gir??n</option>
<option value="Guaca">Guaca</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Guapota">Guapota</option>
<option value="Guavat??">Guavat??</option>
<option value="G??epsa">G??epsa</option>
<option value="Hato">Hato</option>
<option value="Jes??sMar??a">Jes??sMar??a</option>
<option value="Jord??n">Jord??n</option>
<option value="LaBelleza">LaBelleza</option>
<option value="LaPaz">LaPaz</option>
<option value="Land??zuri">Land??zuri</option>
<option value="Lebrija">Lebrija</option>
<option value="LosSantos">LosSantos</option>
<option value="Macaravita">Macaravita</option>
<option value="M??laga">M??laga</option>
<option value="Matanza">Matanza</option>
<option value="Mogotes">Mogotes</option>
<option value="Molagavita">Molagavita</option>
<option value="Ocamonte">Ocamonte</option>
<option value="Oiba">Oiba</option>
<option value="Onzaga">Onzaga</option>
<option value="Palmar">Palmar</option>
<option value="PalmasDelSocorro">PalmasDelSocorro</option>
<option value="Paramo">Paramo</option>
<option value="Piedecuesta">Piedecuesta</option>
<option value="Pinchote">Pinchote</option>
<option value="PuenteNacional">PuenteNacional</option>
<option value="PuertoParra">PuertoParra</option>
<option value="PuertoWilches">PuertoWilches</option>
<option value="Rionegro">Rionegro</option>
<option value="SabanaDeTorres">SabanaDeTorres</option>
<option value="SanAndr??s">SanAndr??s</option>
<option value="SanBenito">SanBenito</option>
<option value="SanGil">SanGil</option>
<option value="SanJoaquin">SanJoaquin</option>
<option value="SanJos??DeMiranda">SanJos??DeMiranda</option>
<option value="SanMiguel">SanMiguel</option>
<option value="SanVicenteDelChucur??">SanVicenteDelChucur??</option>
<option value="SantaB??rbara">SantaB??rbara</option>
<option value="SantaHelenaDeOpon">SantaHelenaDeOpon</option>
<option value="Simacota">Simacota</option>
<option value="Socorro">Socorro</option>
<option value="Suaita">Suaita</option>
<option value="Sucre">Sucre</option>
<option value="Surata">Surata</option>
<option value="Tona">Tona</option>
<option value="ValleDeSanJos??">ValleDeSanJos??</option>
<option value="V??lez">V??lez</option>
<option value="Vetas">Vetas</option>
<option value="Villanueva">Villanueva</option>
<option value="Zapatoca">Zapatoca</option>
<option value="Sucre">Sucre</option>
<option value="Buenavista">Buenavista</option>
<option value="Caimito">Caimito</option>
<option value="Chalan">Chalan</option>
<option value="Coloso">Coloso</option>
<option value="Corozal">Corozal</option>
<option value="Cove??as">Cove??as</option>
<option value="ElRoble">ElRoble</option>
<option value="Galeras">Galeras</option>
<option value="Guaranda">Guaranda</option>
<option value="LaUni??n">LaUni??n</option>
<option value="LosPalmitos">LosPalmitos</option>
<option value="Majagual">Majagual</option>
<option value="Morroa">Morroa</option>
<option value="Ovejas">Ovejas</option>
<option value="SanAntonioDePalmito">SanAntonioDePalmito</option>
<option value="Sampues">Sampues</option>
<option value="SanBenitoAbad">SanBenitoAbad</option>
<option value="SanJuanDeBetulia">SanJuanDeBetulia</option>
<option value="SanMarcos">SanMarcos</option>
<option value="SanOnofre">SanOnofre</option>
<option value="SanPedro">SanPedro</option>
<option value="Sinc??">Sinc??</option>
<option value="Sincelejo">Sincelejo</option>
<option value="Sucre">Sucre</option>
<option value="SantiagoDeTol??">SantiagoDeTol??</option>
<option value="Toluviejo">Toluviejo</option>
<option value="Tolima">Tolima</option>
<option value="Alpujarra">Alpujarra</option>
<option value="Alvarado">Alvarado</option>
<option value="Ambalema">Ambalema</option>
<option value="Anzo??tegui">Anzo??tegui</option>
<option value="Armero">Armero</option>
<option value="Ataco">Ataco</option>
<option value="Cajamarca">Cajamarca</option>
<option value="CarmenDeApical??">CarmenDeApical??</option>
<option value="Casabianca">Casabianca</option>
<option value="Chaparral">Chaparral</option>
<option value="Coello">Coello</option>
<option value="Coyaima">Coyaima</option>
<option value="Cunday">Cunday</option>
<option value="Dolores">Dolores</option>
<option value="ElEspinal">ElEspinal</option>
<option value="Falan">Falan</option>
<option value="Flandes">Flandes</option>
<option value="Fresno">Fresno</option>
<option value="ElGuamo">ElGuamo</option>
<option value="Herveo">Herveo</option>
<option value="Honda">Honda</option>
<option value="Ibagu??">Ibagu??</option>
<option value="Icononzo">Icononzo</option>
<option value="L??rida">L??rida</option>
<option value="Libano">Libano</option>
<option value="Mariquita">Mariquita</option>
<option value="Melgar">Melgar</option>
<option value="Murillo">Murillo</option>
<option value="Natagaima">Natagaima</option>
<option value="Ortega">Ortega</option>
<option value="Palocabildo">Palocabildo</option>
<option value="Piedras">Piedras</option>
<option value="Planadas">Planadas</option>
<option value="Prado">Prado</option>
<option value="Purificaci??n">Purificaci??n</option>
<option value="Rioblanco">Rioblanco</option>
<option value="Roncesvalles">Roncesvalles</option>
<option value="Rovira">Rovira</option>
<option value="Salda??a">Salda??a</option>
<option value="SanAntonio">SanAntonio</option>
<option value="SanLuis">SanLuis</option>
<option value="SantaIsabel">SantaIsabel</option>
<option value="Suarez">Suarez</option>
<option value="ValleDeSanJuan">ValleDeSanJuan</option>
<option value="Venadillo">Venadillo</option>
<option value="Villahermosa">Villahermosa</option>
<option value="Villarrica">Villarrica</option>
<option value="Valle del Cauca">Valle del Cauca</option>
<option value="Alcal??">Alcal??</option>
<option value="Andaluc??a">Andaluc??a</option>
<option value="Ansermanuevo">Ansermanuevo</option>
<option value="Argelia">Argelia</option>
<option value="Bol??var">Bol??var</option>
<option value="Buenaventura">Buenaventura</option>
<option value="GuadalajaraDeBuga">GuadalajaraDeBuga</option>
<option value="Bugalagrande">Bugalagrande</option>
<option value="Caicedonia">Caicedonia</option>
<option value="CalimaDelDari??n">CalimaDelDari??n</option>
<option value="Candelaria">Candelaria</option>
<option value="Cartago">Cartago</option>
<option value="Dagua">Dagua</option>
<option value="El??guila">El??guila</option>
<option value="ElCairo">ElCairo</option>
<option value="ElCerrito">ElCerrito</option>
<option value="ElDovio">ElDovio</option>
<option value="Florida">Florida</option>
<option value="Ginebra">Ginebra</option>
<option value="Guacar??">Guacar??</option>
<option value="Jamund??">Jamund??</option>
<option value="LaCumbre">LaCumbre</option>
<option value="LaUni??n">LaUni??n</option>
<option value="LaVictoria">LaVictoria</option>
<option value="Obando">Obando</option>
<option value="Palmira">Palmira</option>
<option value="Pradera">Pradera</option>
<option value="Restrepo">Restrepo</option>
<option value="Riofrio">Riofrio</option>
<option value="Roldanillo">Roldanillo</option>
<option value="SanPedro">SanPedro</option>
<option value="SantiagoDeCali">SantiagoDeCali</option>
<option value="Sevilla">Sevilla</option>
<option value="Toro">Toro</option>
<option value="Trujillo">Trujillo</option>
<option value="Tulu??">Tulu??</option>
<option value="Ulloa">Ulloa</option>
<option value="Versalles">Versalles</option>
<option value="Vijes">Vijes</option>
<option value="Yotoco">Yotoco</option>
<option value="Yumbo">Yumbo</option>
<option value="Zarzal">Zarzal</option>
<option value="Vaup??s">Vaup??s</option>
<option value="Caruru">Caruru</option>
<option value="Mit??">Mit??</option>
<option value="Taraira">Taraira</option>
<option value="Vichada">Vichada</option>
<option value="Cumaribo">Cumaribo</option>
<option value="LaPrimavera">LaPrimavera</option>
<option value="PuertoCarre??o">PuertoCarre??o</option>
<option value="SantaRosal??a">SantaRosal??a</option>

  </select>

  
	<span style="margin-left:3%"> Disponibilidad:</span>
  <select class="camposgenerales"
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"
  
	name="cars" id="cars">
	<option value="">-----</option>       
	<option value="">En Linea</option>       
	<option value="">En Consulta</option>       
	<option value="">OffLine</option>        

  </select>
  <br>
  <br>
		</form>
<br>

<div class="content" align="center" style="margin-left: 17%">
    <div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
	
		<span style="margin-left:3%;">  El gur?? Habla:</span>
		<select class="camposgenerales" 
  
    style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: cen"
	
	name="idioma" id="idioma" onchange="change_idioma(this)">
        <option value="">-----</option>
		
                                    <option value="Alem??n">Alem??n</option>
                                    <option value="??rabe">??rabe</option>
                                    <option value="Bengal??">Bengal??</option>
                                    <option value="Chino canton??s">Chino canton??s</option>
                                    <option value="Chino mandar??n">Chino mandar??n</option>
                                    <option value="Chino M??n N??n">Chino M??n N??n</option>
                                    <option value="Chino Wu">Chino Wu</option>
                                    <option value="Coreano">Coreano</option>
                                    <option value="Espa??ol">Espa??ol</option>
                                    <option value="Franc??s">Franc??s</option>
                                    <option value="Hausa">Hausa</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Indonesio">Indonesio</option>
                                    <option value="Ingles">Ingles</option>
                                    <option value="Italiano">Italiano</option>
                                    <option value="Japon??s">Japon??s</option>
                                    <option value="Javan??s">Javan??s</option>
                                    <option value="Marat??">Marat??</option>
                                    <option value="Panyab?? occidental">Panyab?? occidental</option>
                                    <option value="Persa iran??">Persa iran??</option>
                                    <option value="Portugu??s">Portugu??s</option>
                                    <option value="Ruso">Ruso</option>
                                    <option value="Tailand??s">Tailand??s</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Telug??">Telug??</option>
                                    <option value="Turco">Turco</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Vietnamita">Vietnamita</option>
	</select>

	</div>

	<div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
		<span style="margin-left:3%">  Ordenar Por:</span>
  		<select class="camposgenerales"
		  
		style=" border: none;
		background-color: #0000;
    	font-size: 15px;
    	width: 100px;
    	text-decoration: none;
    	margin-bottom: auto;
    	text-align: center" 

    	name="cars" id="cars">        
   		 <option value="">-----</option>  
   		 <option value="">Nuestros Destacados</option>       

  		</select>
	</div>

	<div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
		<span style="margin-left:3%">  Buscar por Nombre:</span>
  		<select class="camposgenerales"
		  
		style=" border: none;
		background-color: #0000;
    	font-size: 15px;
    	width: 100px;
    	text-decoration: none;
    	margin-bottom: auto;
    	text-align: center" 

    	name="cars" id="cars">        
   		 <option value="">-----</option>       

  		</select>
	</div>

   
</div>

	<br>
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_otros_profesionales2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_otros_profesionales3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	

	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2" id="div_gurus">
				
					
				</div>
				<div align="left" style="padding-left: 0px;margin-right: 20px; ">
					
					<div class="menuright" align="center" >

						<form  action="" method="post" id="form_login">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesi??n</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gur??s inicia sesi??n con tu usuario y contrase??a</P>
							<br>
							</div>
							<div >				
								<div class="form-group" >
								<input type="hidden" value="login" name="tipo">
								<input type="hidden" value="1" name="tipo_user">
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div>
								<br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contrase??a">
								</div>
								
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvid?? mi usuario / contrase??a</p> </a>
																<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ??GRATIS!</h4> </a>

								<br>
						  </div>
							<input type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					<div class="menuright3" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705; ">Eres G??ru?</h4>
								<P style="font-size: 18px; color: #ffffff">Ingresa a tu perfil</P>
							</div>
							<div >				
								<div class="form-group" >
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div><br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contrase??a">
								</div>
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvid?? mi usuario / contrase??a</p> </a>
																<a href="https://www.guruxy.com" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ??GRATIS!</h4> </a>

								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					
					<div class="menuright2" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<h4 style="color:#5C3293; padding-top: 20px; margin-bottom: 20px; font-size:16"> GUR??S DESTACADOS </h4>
						</form>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
							<br>
							<form>
								<p class="clasificacion2" >
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">???</label>
								</p>
							</form>
							<br>
							<img  style="margin-bottom:10;" src="img/categorias/en linea/1.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br><br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/2.jpg" alt="kalita">
		</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
						<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/3.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/4.jpg" alt="kalita">
					</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">???</label>
								</p>
								<br>
							</form>
					  		<img  style="margin-bottom:10;" src="img/categorias/en linea/5.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>

				<br><br>
				</div>
				</section>
			</div>
		</div>
	</div>

	<div class="footerotros" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/aotros.png" alt="kalita">
        </div>
            
                <div align="center">
                    
				<img  style="width:15%; border-radius:20px" src="img/preffo1.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo2.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo3.png" alt="kalita">
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
							<a href="politicas.pdf" download="politicas.pdf">Pol??tica de Privacidad</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">T??rminos y Condiciones</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">T??rminos de Uso </a>
						</li>
					</ul>
            	</div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span style="color: #C93782">ERES GUR???</span>    
                     <li>
                        <a href="https://www.guruxy.com" >??nete hoy a nosotros y con??ctate a esta gran red de expertos.</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span style="color: #C93782">S??GUENOS</span>    
                           <li>
                                <a href="https://www.facebook.com/Guruxy-104884922225645"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="https://www.instagram.com/guxury.co/"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
						   </li>
						   <li>
							<a href="https://www.linkedin.com/company/guruxylatam"><i style="color: #FFFFFF" class="fa fa-linkedin fa-2x"></i></a>
						</li>
                          
                            <!--<li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-youtube fa-2x"></i></a>
                           </li> -->
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
            $(".barraizquierdaotros").mCustomScrollbar({
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/consulta_gurus_especiales.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="js/login.js"></script>
</body>
</html>
