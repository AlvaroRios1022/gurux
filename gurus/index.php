<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Gurús Center</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body class="cabecera">
        <form action="guru.php" method="post">
            <div align="center" >
                <br><br>

                <a ><img style="width:20%" src="images/logo.png"/>  </a>
                <a style="color:#FFC808; font-size:37px; font-weight: bold; margin-left:8%; "> Tu plataforma GRATUITA!!! </a>
                <a ><img style="width: 20%; margin-left:10%" src="img/headert12.png"/> </a>
                <br>    
                <div  align="right" style="margin-right:8%"  >
				    <span style=" color: #fff">IDIOMA   &nbsp;&nbsp;  <a style="color:#FFC808"> ES </a>  | <a href="index-en.php" style="text-decoration: none; color: #fff" >  EN</a></span>          
                </div>  
                <br>
                <div style="background-color: #fff;" align="center">
                <img src="img/textos21.png"  width="100%" height="auto" alt="" />
           
            
                <img src="img/fotos8-es.png"  width="100%" height="auto" alt="" />
                </div>
            <div >
            <div class="flex-container" style="background-color: #fff;" align="center">
                    <div class="flex-item-left">
                        <div  style="text-align: justify; margin-top:-100px" class="textoprincipal"><br>
                            <p style="display: contents; color:#452167"><strong>
                                Buscamos Gurús (Gurús Médicos, Gurús Medicina Alternativa, Gurús Yoga, Gurús Psíquicos, Gurús Religiosos, Gurús Coaching, Gurús Profesores Idiomas, Gurús Tutores Colegios y Universidades, Gurús otras Profesiones) con las más altas calidades profesionales, éticas y personales. 
                            </p></strong> <br><br> 
                            <p style="display: contents;">
                                Si te identificas con nuestra propuesta, no dudes en aplicar para esta única oportunidad. Te ofrecemos una plataforma tecnológica diseñada para potencializar tus habilidades, talentos y tu formación profesional desde el lugar del mundo donde te encuentres.
                            </p><br><br>        
                            <p style="display: contents; ">
                                ¡El futuro ha llegado para quedarse! recibe <strong>TUS HONORARIOS</strong> trabajando desde la comodidad de tu hogar, consultorio, oficina (desde donde lo desees), administrando <strong>TU TIEMPO Y TUS CLIENTES</strong> a tu conveniencia.
                            </p><br><br> 
                            <p style="display: contents; "> 
                                La experiencia del trabajo en línea te permitirá en tiempo real realizar todas las consultas, reuniones, asesorías, clases, charlas, todos los medios y metodologías que requieras para atender a tus usuarios. 
                                Entra <strong>YA MISMO</strong> a nuestra inscripción y prueba que eres uno de <strong>nuestros GURÚS calificados</strong>.
                            </p><br><br><br><br>
                            <ul class="lista" >
                                <li >
                                    <p style="display: contents;">
                                        Nuestra plataforma amigable te permitirá trabajar desde tu PC, Laptop, Tablet o Smartphone.
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                        Puedes construir tu cartera de clientes y generar ingresos cuándo y dónde lo desees.
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                        Puedes ganar cuanto dinero te propongas.
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    Pagamos inmediatamente puesto que el método de pago con el que contamos te transfiere automáticamente cuando prestas tus servicios de consulta.
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    Disponemos de una amplia gama de oportunidades promocionales.
                                    </p>
                                </li>
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    Ofrecemos soporte 24/7
                                    </p>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="flex-item-right" style="background-color: #E3DAEC; " align="left"><br><br>
                        <label for="fname" ><img src="img/texto5.png"  width="100%" height="auto" alt=""  />
                        </label>
                        <div  class="margin_tope" >
                        <img style="margin-top:-80px" src="img/textosup1.png"  width="100%" height="auto" alt="" />

                            <input type="checkbox" class="check3"  id="check_medicina" onchange="seleccionar_guru(this)">
                            <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Médico
                            </label>
                            <select  id="medicina" name="medicina" class="cajas"  > 
                                <option value="">Por favor selecciona</option>
                                <option value="Alergólogo">Alergólogo</option>
                                <option value="Angiólogo">Angiólogo</option>
                                <option value="Cardiólogo">Cardiólogo</option>
                                <option value="Deportólogo">Deportólogo</option>
                                <option value="Dermatólogo">Dermatólogo</option>
                                <option value="Endocrinólogo">Endocrinólogo</option>
                                <option value="Enfermero">Enfermero</option>
                                <option value="Epidemiólogo">Epidemiólogo</option>
                                <option value="Estomatólogo">Estomatólogo</option>
                                <option value="Farmacólogo">Farmacólogo</option>
                                <option value="Fisiólogo">Fisiólogo</option>
                                <option value="Fonoaudiólogo">Fonoaudiólogo</option>
                                <option value="Forense">Forense</option>
                                <option value="General">General</option>
                                <option value="Geriatra">Geriatra</option>
                                <option value="Ginecólogo">Ginecólogo</option>
                                <option value="Hematólogo">Hematólogo</option>
                                <option value="Histólogo">Histólogo</option>
                                <option value="Inmunólogo">Inmunólogo</option>
                                <option value="Microbiólogo">Microbiólogo</option>
                                <option value="Nefrólogo">Nefrólogo</option>
                                <option value="Neumólogo">Neumólogo</option>
                                <option value="Neurólogo">Neurólogo</option>

                                <option value="Odontólogo Endodoncista.">Odontólogo Endodoncista.</option>
                                <option value="Odontólogo general">Odontólogo general</option>
                                <option value="Odontólogo Odontopediatra">Odontólogo Odontopediatra</option>
                                <option value="Odontólogo Ortodoncista">Odontólogo Ortodoncista</option>
                                <option value="Odontólogo Patólogo oral o Cirujano oral">Odontólogo Patólogo oral o Cirujano oral</option>
                                <option value="Odontólogo Periodoncista">Odontólogo Periodoncista</option>
                                <option value="Odontólogo Prostodoncista">Odontólogo Prostodoncista</option>
                                
                                <option value="Oncólogo">Oncólogo</option>
                                <option value="Ortopedista">Ortopedista</option>
                                <option value="Patólogo">Patólogo</option>
                                <option value="Pediatra">Pediatra</option>
                                <option value="Podólogo">Podólogo</option>
                                <option value="Proctólogo">Proctólogo</option>
                                <option value="Psicoanalista">Psicoanalista</option>
                                <option value="Psicólogo">Psicólogo</option>
                                <option value="Psicoterapeuta">Psicoterapeuta</option>
                                <option value="Psiquiatra">Psiquiatra</option>
                                <option value="Quiropráctico">Quiropráctico</option>
                                <option value="Radiólogo">Radiólogo</option>
                                <option value="Radioterapeuta">Radioterapeuta</option>
                                <option value="Reumatólogo">Reumatólogo</option>
                                <option value="Sexólogo">Sexólogo</option>
                                <option value="Sofrólogo">Sofrólogo</option>
                                <option value="Terapeuta">Terapeuta</option>
                                <option value="Toxicólogo">Toxicólogo</option>
                                <option value="Traumatólogo y Ortopedista">Traumatólogo y Ortopedista</option>
                                <option value="Urólogo">Urólogo</option>
                                <option value="Virólogo">Virólogo</option>
                            </select><br>
                        
                        <input type="checkbox" class="check3" id="check_alternativa"  onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Medicina Alternativa
                        </label>
                        <select  id="alternativa" name="alternativa" class="cajas"> 
                            <option value="">Por favor selecciona</option>    
                            <option value="Acidez">Acidez</option>
                            <option value="Acné">Acné</option>
                            <option value="Acoso escolar">Acoso escolar</option>
                            <option value="Adicción a medicamentos">Adicción a medicamentos</option>
                            <option value="Agorafobia">Agorafobia</option>
                            <option value="Alcoholismo y abuso de alcohol">Alcoholismo y abuso de alcohol</option>
                            <option value="Alergia a insectos">Alergia a insectos</option>
                            <option value="Alergia ocular">Alergia ocular</option>
                            <option value="Ambliopía">Ambliopía</option>
                            <option value="Amenaza de aborto">Amenaza de aborto</option>
                            <option value="Anorexia nerviosa">Anorexia nerviosa</option>
                            <option value="Anorgasmia">Anorgasmia</option>
                            <option value="Ansiedad">Ansiedad</option>
                            <option value="Artritis">Artritis</option>
                            <option value="Artrosis">Artrosis</option>
                            <option value="Asma en niños">Asma en niños</option>
                            <option value="Astigmatismo">Astigmatismo</option>
                            <option value="Aversión al sexo">Aversión al sexo</option>
                            <option value="Bronquiolitis">Bronquiolitis</option>
                            <option value="Bruxismo">Bruxismo</option>
                            <option value="Bulimia nerviosa">Bulimia nerviosa</option>
                            <option value="Cambios hormonales">Cambios hormonales</option>
                            <option value="Cáncer cervical">Cáncer cervical</option>
                            <option value="Cáncer cutáneo">Cáncer cutáneo</option>
                            <option value="Capsulitis adhesiva">Capsulitis adhesiva</option>
                            <option value="Cataratas">Cataratas</option>
                            <option value="Cefaleas tensionales">Cefaleas tensionales</option>
                            <option value="Celopatía">Celopatía</option>
                            <option value="Cicatriz">Cicatriz</option>
                            <option value="Colitis ulcerativa">Colitis ulcerativa</option>
                            <option value="Colon espástico">Colon espástico</option>
                            <option value="Coronavirus COVID-19">Coronavirus COVID-19</option>
                            <option value="Croup (Laringotraqueobronquitis)">Croup (Laringotraqueobronquitis)</option>
                            <option value="Demencia">Demencia</option>
                            <option value="Demencia senil, tipo de Binswanger">Demencia senil, tipo de Binswanger</option>
                            <option value="Dentición">Dentición</option>
                            <option value="Dependencia emocional">Dependencia emocional</option>
                            <option value="Depresión">Depresión</option>
                            <option value="Dermatitis">Dermatitis</option>
                            <option value="Dermatitis atópica">Dermatitis atópica</option>
                            <option value="Dermatomiositis juvenil">Dermatomiositis juvenil</option>
                            <option value="Desarrollo motor">Desarrollo motor</option>
                            <option value="Deseo sexual hipoactivo">Deseo sexual hipoactivo</option>
                            <option value="Desnutrición">Desnutrición</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Diabetes gestacional">Diabetes gestacional</option>
                            <option value="Diarrea">Diarrea</option>
                            <option value="Dificultades del aprendizaje">Dificultades del aprendizaje</option>
                            <option value="Disfunción eréctil">Disfunción eréctil</option>
                            <option value="Disfunción sexual femenina">Disfunción sexual femenina</option>
                            <option value="Dispareunia">Dispareunia</option>
                            <option value="Displasia cervical">Displasia cervical</option>
                            <option value="Distensión del músculo de la pantorrilla">Distensión del músculo de la pantorrilla</option>
                            <option value="Distonía focal">Distonía focal</option>
                            <option value="Dolor articular">Dolor articular</option>
                            <option value="Dolor crónico de cuello">Dolor crónico de cuello</option>
                            <option value="Dolor de cabeza">Dolor de cabeza</option>
                            <option value="Dolor de cabeza por contracción muscular">Dolor de cabeza por contracción muscular</option>
                            <option value="Dolor de cabeza por migraña">Dolor de cabeza por migraña</option>
                            <option value="Dolor de espalda">Dolor de espalda</option>
                            <option value="Dolor de garganta">Dolor de garganta</option>
                            <option value="Duelo">Duelo</option>
                            <option value="Eccema (Dermatitis Atópica)">Eccema (Dermatitis Atópica)</option>
                            <option value="Embarazo ectópico">Embarazo ectópico</option>
                            <option value="Endometriosis">Endometriosis</option>
                            <option value="Enfermedad común agravada por el trabajo">Enfermedad común agravada por el trabajo</option>
                            <option value="Enfermedad del reflujo gastroesofágico - Bebé">Enfermedad del reflujo gastroesofágico - Bebé</option>
                            <option value="Enfermedad del reflujo gastroesofágico - Niño">Enfermedad del reflujo gastroesofágico - Niño</option>
                            <option value="Enfermedad del reflujo gastroesofágico (GERD)">Enfermedad del reflujo gastroesofágico (GERD)</option>
                            <option value="Enfermedad laboral">Enfermedad laboral</option>
                            <option value="Enfermedad pélvica inflamatoria">Enfermedad pélvica inflamatoria</option>
                            <option value="Enuresis">Enuresis</option>
                            <option value="Envejecimiento facial">Envejecimiento facial</option>
                            <option value="Epicondilitis lateral">Epicondilitis lateral</option>
                            <option value="Escoliosis">Escoliosis</option>
                            <option value="Esguince del tobillo">Esguince del tobillo</option>
                            <option value="Esquizofrenia">Esquizofrenia</option>
                            <option value="Estreñimiento">Estreñimiento</option>
                            <option value="Estrés">Estrés</option>
                            <option value="Eyaculación precoz">Eyaculación precoz</option>
                            <option value="Eyaculación retardada">Eyaculación retardada</option>
                            <option value="Falta de crecimiento">Falta de crecimiento</option>
                            <option value="Farmacodependencia">Farmacodependencia</option>
                            <option value="Fibromialgia">Fibromialgia</option>
                            <option value="Flacidez de labios mayores">Flacidez de labios mayores</option>
                            <option value="Fobia específica o simple">Fobia específica o simple</option>
                            <option value="Fractura de codo">Fractura de codo</option>
                            <option value="Fractura de pie">Fractura de pie</option>
                            <option value="Gastritis">Gastritis</option>
                            <option value="Gastroenteritis viral">Gastroenteritis viral</option>
                            <option value="Glaucoma">Glaucoma</option>
                            <option value="Gripe">Gripe</option>
                            <option value="Hemorragia uterina anormal">Hemorragia uterina anormal</option>
                            <option value="Hepatitis B">Hepatitis B</option>
                            <option value="Hepatitis C">Hepatitis C</option>
                            <option value="Hernia de disco">Hernia de disco</option>
                            <option value="Hernia diafragmática">Hernia diafragmática</option>
                            <option value="Herpes zóster (Neuralgia Posherpética)">Herpes zóster (Neuralgia Posherpética)</option>
                            <option value="Hipercolesterolemia (colesterol alto)">Hipercolesterolemia (colesterol alto)</option>
                            <option value="Hiperemesis gravídica">Hiperemesis gravídica</option>
                            <option value="Hiperhidrosis">Hiperhidrosis</option>
                            <option value="Hipertensión arterial">Hipertensión arterial</option>
                            <option value="Hipertrofia de labios menores">Hipertrofia de labios menores</option>
                            <option value="Impotencia">Impotencia</option>
                            <option value="Infecciones del tracto urinario en la infancia">Infecciones del tracto urinario en la infancia</option>
                            <option value="Infertilidad">Infertilidad</option>
                            <option value="Infertilidad femenina">Infertilidad femenina</option>
                            <option value="Intolerancia a la lactosa">Intolerancia a la lactosa</option>
                            <option value="Laringomalacia">Laringomalacia</option>
                            <option value="Lesiones deportivas">Lesiones deportivas</option>
                            <option value="Lunares">Lunares</option>
                            <option value="Lupus eritomatoso sistémico (Lupus)">Lupus eritomatoso sistémico (Lupus)</option>
                            <option value="Menopausia">Menopausia</option>
                            <option value="Migraña">Migraña</option>
                            <option value="Miomas">Miomas</option>
                            <option value="Músculo de la ingle tensionado">Músculo de la ingle tensionado</option>
                            <option value="Neumonía">Neumonía</option>
                            <option value="Obesidad">Obesidad</option>
                            <option value="Obesidad en niños y adolescentes">Obesidad en niños y adolescentes</option>
                            <option value="Odontalgia">Odontalgia</option>
                            <option value="Ojo seco">Ojo seco</option>
                            <option value="Onicomicosis">Onicomicosis</option>
                            <option value="Parálisis cerebral">Parálisis cerebral</option>
                            <option value="Parálisis facial">Parálisis facial</option>
                            <option value="Piel de cristal">Piel de cristal</option>
                            <option value="Problemas gástricos">Problemas gástricos</option>
                            <option value="Psoriasis">Psoriasis</option>
                            <option value="Queratosis seborreica">Queratosis seborreica</option>
                            <option value="Quiste epidérmico">Quiste epidérmico</option>
                            <option value="Quiste ovárico">Quiste ovárico</option>
                            <option value="Reflujo vesicoureteral: niño">Reflujo vesicoureteral: niño</option>
                            <option value="Resfriado">Resfriado</option>
                            <option value="Retraso en el crecimiento">Retraso en el crecimiento</option>
                            <option value="Rinitis alérgica">Rinitis alérgica</option>
                            <option value="Salpingitis">Salpingitis</option>
                            <option value="Síndrome de Asperger">Síndrome de Asperger</option>
                            <option value="Síndrome de disfunción por dolor miofacial">Síndrome de disfunción por dolor miofacial</option>
                            <option value="Síndrome de dolor miofascial">Síndrome de dolor miofascial</option>
                            <option value="Síndrome de dolor regional complejo">Síndrome de dolor regional complejo</option>
                            <option value="Síndrome de las piernas inquietas">Síndrome de las piernas inquietas</option>
                            <option value="Síndrome de ovarios poliquísticos (SOP)">Síndrome de ovarios poliquísticos (SOP)</option>
                            <option value="Síndrome piriforme">Síndrome piriforme</option>
                            <option value="Síndromes de dolor por cáncer">Síndromes de dolor por cáncer</option>
                            <option value="Sinusitis (Infección en los senos paranasales)">Sinusitis (Infección en los senos paranasales)</option>
                            <option value="Sonambulismo">Sonambulismo</option>
                            <option value="Tendinitis">Tendinitis</option>
                            <option value="Torcedura, músculo">Torcedura, músculo</option>
                            <option value="Trastorno bipolar">Trastorno bipolar</option>
                            <option value="Trastorno de adaptación">Trastorno de adaptación</option>
                            <option value="Trastorno de ansiedad (fobia social)">Trastorno de ansiedad (fobia social)</option>
                            <option value="Trastorno de conducta">Trastorno de conducta</option>
                            <option value="Trastorno de estrés postraumático">Trastorno de estrés postraumático</option>
                            <option value="Trastorno de la conducta alimentaria">Trastorno de la conducta alimentaria</option>
                            <option value="Trastorno de pánico">Trastorno de pánico</option>
                            <option value="Trastorno de personalidad dependiente">Trastorno de personalidad dependiente</option>
                            <option value="Trastorno del espectro autista (TEA)">Trastorno del espectro autista (TEA)</option>
                            <option value="Trastorno disfórico premenstrual (TDPM)">Trastorno disfórico premenstrual (TDPM)</option>
                            <option value="Trastorno evitativo de la personalidad">Trastorno evitativo de la personalidad</option>
                            <option value="Trastorno obsesivo compulsivo (TOC)">Trastorno obsesivo compulsivo (TOC)</option>
                            <option value="Trastorno por déficit de atención (ADD)">Trastorno por déficit de atención (ADD)</option>
                            <option value="Trastornos de la lactancia">Trastornos de la lactancia</option>
                            <option value="Trastornos del aprendizaje">Trastornos del aprendizaje</option>
                            <option value="Trastornos por déficit de atención e hiperactividad (TDAH)">Trastornos por déficit de atención e hiperactividad (TDAH)</option>
                            <option value="Trastornos sexuales">Trastornos sexuales</option>
                            <option value="Úlcera">Úlcera</option>
                            <option value="Urticaria">Urticaria</option>
                            <option value="Vaginitis atrófica">Vaginitis atrófica</option>
                            <option value="Vaginosis bacteriana">Vaginosis bacteriana</option>
                            <option value="Venas várices">Venas várices</option>
                            <option value="Verrugas">Verrugas</option>
                            <option value="Virus del papiloma humano (HPV)">Virus del papiloma humano (HPV)</option>
                            <option value="Vómitos">Vómitos</option>
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_yoga" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Preparación Fisica
                        </label>
                        <select  id="yoga" name="yoga" class="cajas"> 
                            <option value="">Por favor selecciona</option>
                            
                            <option value="AcroYoga">AcroYoga</option>
                            <option value="Aerobicos">Aerobicos</option>
                            <option value="Barre">Barre</option>
                            <option value="Bikram Yoga">Bikram Yoga</option>
                            <option value="Body Combat">Body Combat</option>
                            <option value="Crosstech">Crosstech</option>
                            <option value="Danzika">Danzika</option>
                            <option value="Esoterismo Integral">Esoterismo Integral</option>
                            <option value="Gluteo Xp">Gluteo Xp</option>
                            <option value="Hatha Yoga">Hatha Yoga</option>
                            <option value="Spinning">Spinning</option>
                            <option value="Pilates">Pilates</option>
                            <option value="Rumba">Rumba</option>
                            <option value="Step">Step</option>
                            <option value="Tabata">Tabata</option>
                            <option value="Tantra Yoga">Tantra Yoga</option>
                            <option value="Tono">Tono</option>
                            <option value="Vinyasa Yoga">Vinyasa Yoga</option>
                            <option value="Yoga Aereo">Yoga Aereo</option>
                            <option value="Yoga Meditacion">Yoga Meditacion</option>
                            <option value="Yoga Prenatal">Yoga Prenatal</option>
                            <option value="Yoga Restaurativo">Yoga Restaurativo</option>
                            <option value="Zumba">Zumba</option>

                            
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_psiquico" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Psíquico
                        </label>
                        <select  id="psiquico" name="psiquico" class="cajas"> 
                            <option value="">Por favor selecciona</option>
                            <option value="Adivinación">Adivinación</option>
                            <option value="Amor y relaciones">Amor y relaciones</option>
                            <option value="Análisis de sueños">Análisis de sueños</option>
                            <option value="Astrología">Astrología</option>
                            <option value="Astrología china">Astrología china</option>
                            <option value="Cabalá">Cabalá</option>
                            <option value="Casa y familia">Casa y familia</option>
                            <option value="Clarividencia">Clarividencia</option>
                            <option value="Espiritualidad new age">Espiritualidad new age</option>
                            <option value="Exorcismos">Exorcismos</option>
                            <option value="Filosofía oriental">Filosofía oriental</option>
                            <option value="Grafología">Grafología</option>
                            <option value="Guías espirituales">Guías espirituales</option>
                            <option value="Interpretación de sueños">Interpretación de sueños</option>
                            <option value="Karma">Karma</option>
                            <option value="Lectura de manos">Lectura de manos</option>
                            <option value="Lecturas de imagen">Lecturas de imagen</option>
                            <option value="Lecturas pasadas de la vida">Lecturas pasadas de la vida</option>
                            <option value="Lecturas psíquicas">Lecturas psíquicas</option>
                            <option value="Leyes universales">Leyes universales</option>
                            <option value="Numerología oriental">Numerología oriental</option>
                            <option value="Ocultismo">Ocultismo</option>
                            <option value="Paranormal">Paranormal</option>
                            <option value="Perspectivas financieras">Perspectivas financieras</option>
                            <option value="Pronósticos de carrera">Pronósticos de carrera</option>
                            <option value="Reencarnación">Reencarnación</option>
                            <option value="Regresiones a vidas pasadas">Regresiones a vidas pasadas</option>
                            <option value="Religión">Religión</option>
                            <option value="Rituales y energía">Rituales y energía</option>
                            <option value="Sexo e intimidad">Sexo e intimidad</option>
                            <option value="Sonoterapia">Sonoterapia</option>
                            <option value="Tarot y cartas">Tarot y cartas</option>
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_religioso" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Religioso
                        </label>
                        <select  id="religioso" name="religioso" class="cajas"> 
                            <option value="">Por favor selecciona</option>
                            <option value="Iman Islamismo">Iman Islamismo</option>
                            <option value="Maestro Taoísmo">Maestro Taoísmo</option>
                            <option value="Maestros Budismo">Maestros Budismo</option>
                            <option value="Monjes Confucionismo">Monjes Confucionismo</option>
                            <option value="Pastor Cristiano">Pastor Cristiano</option>
                            <option value="Pastor Iglesias Adventistas">Pastor Iglesias Adventistas</option>
                            <option value="Pastor Pentecostalismo">Pastor Pentecostalismo</option>
                            <option value="Pastro Baptista Metodismo">Pastro Baptista Metodismo</option>
                            <option value="Rabinos Judaísmo">Rabinos Judaísmo</option>
                            <option value="Sacerdote Católico">Sacerdote Católico</option>
                            <option value="Sacerdote Hinduísmo">Sacerdote Hinduísmo</option>
                            <option value="Sacerdote Iglesia Anglicana">Sacerdote Iglesia Anglicana</option>
                            <option value="Sacerdote Iglesia Ortodoxa">Sacerdote Iglesia Ortodoxa</option>
                            <option value="Sacerdote Luteranismo">Sacerdote Luteranismo</option>
                            <option value="Sacerdote Mormonismo">Sacerdote Mormonismo</option>
                            <option value="Sacerdote Protentanismo">Sacerdote Protentanismo</option>
                        </select><br>

                        <input type="checkbox" class="check3" id="check_coaching" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Coaching
                        </label>
                        <select  id="coaching" name="coaching" class="cajas"> 
                            <option value="">Por favor selecciona</option>Neurocoaching
                            <option value="Coaching adicciones">Coaching adicciones</option>
                            <option value="Coaching coercitivo">Coaching coercitivo</option>
                            <option value="Coaching de atracción ">Coaching de atracción </option>
                            <option value="Coaching de sombra">Coaching de sombra</option>
                            <option value="Coaching deportivo">Coaching deportivo</option>
                            <option value="Coaching familiar">Coaching familiar</option>
                            <option value="Coaching inteligencia emocional">Coaching inteligencia emocional</option>
                            <option value="Coaching ontológico">Coaching ontológico</option>
                            <option value="Coaching organizacional">Coaching organizacional</option>
                            <option value="Coaching personal">Coaching personal</option>
                            <option value="Coaching PLN">Coaching PLN</option>
                            <option value="Coaching sistémico">Coaching sistémico</option>
                            <option value="Coaching transformacional">Coaching transformacional</option>
                            <option value="Neurocoaching">Neurocoaching</option>
                        </select><br>

                        <input type="checkbox" class="check3" id="check_idiomas" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Profesor de Idiomas
                        </label>
                        <select  id="idiomas" name="idiomas" class="cajas"> 
                        <option value="">Selecciona idioma</option>
                                <option value="Alemán">Alemán</option>
                                <option value="Árabe">Árabe</option>
                                <option value="Bengalí">Bengalí</option>
                                <option value="Chino cantonés">Chino cantonés</option>
                                <option value="Chino mandarín">Chino mandarín</option>
                                <option value="Chino Mǐn Nán">Chino Mǐn Nán</option>
                                <option value="Chino Wu">Chino Wu</option>
                                <option value="Coreano">Coreano</option>
                                <option value="Español">Español</option>
                                <option value="Francés">Francés</option>
                                <option value="Hausa">Hausa</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Indonesio">Indonesio</option>
                                <option value="Ingles">Ingles</option>
                                <option value="Italiano">Italiano</option>
                                <option value="Japonés">Japonés</option>
                                <option value="Javanés">Javanés</option>
                                <option value="Maratí">Maratí</option>
                                <option value="Panyabí occidental">Panyabí occidental</option>
                                <option value="Persa iraní">Persa iraní</option>
                                <option value="Portugués">Portugués</option>
                                <option value="Ruso">Ruso</option>
                                <option value="Tailandés">Tailandés</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Telugú">Telugú</option>
                                <option value="Turco">Turco</option>
                                <option value="Urdu">Urdu</option>
                                <option value="Vietnamita">Vietnamita</option>
                            
                        </select><br>

                        <input type="checkbox" class="check3" id="check_tutor" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Tutor 
                        </label>
                        <select  id="tutor" name="tutor" class="cajas">
                            <option value="">Por favor selecciona</option>
                            <optgroup label="Asignaturas Colegio">
                                <option value="Biología">Biología</option>
                                <option value="Ciencias sociales">Ciencias sociales</option>
                                <option value="Contabilidad">Contabilidad</option>
                                <option value="Economía">Economía</option>
                                <option value="Español">Español</option>
                                <option value="Ética">Ética</option>
                                <option value="Filosofía">Filosofía</option>
                                <option value="Física">Física</option>
                                <option value="Geometría">Geometría</option>
                                <option value="Humanidades">Humanidades</option>
                                <option value="Matemáticas">Matemáticas</option>
                                <option value="Química">Química</option>
                                <option value="Sistemas y Tecnología">Sistemas y Tecnología</option>
                            </optgroup><br>

                            <optgroup label="Ciencias">
                                <option value="Balance de materia y energía">Balance de materia y energía</option>
                                <option value="Biofísica">Biofísica</option>
                                <option value="Biología">Biología</option>
                                <option value="Biología celular">Biología celular</option>
                                <option value="Biología computacional">Biología computacional</option>
                                <option value="Biología molecular">Biología molecular</option>
                                <option value="Bioquímica">Bioquímica</option>
                                <option value="Bioquímica metabólica">Bioquímica metabólica</option>
                                <option value="Catálisis">Catálisis</option>
                                <option value="Ciencias agrícolas">Ciencias agrícolas</option>
                                <option value="Circuitos eléctricos">Circuitos eléctricos</option>
                                <option value="Diseño de máquinas">Diseño de máquinas</option>
                                <option value="Ecología">Ecología</option>
                                <option value="Electromagnetismo">Electromagnetismo</option>
                                <option value="Electrónica análoga">Electrónica análoga</option>
                                <option value="Estática">Estática</option>
                                <option value="Física 1">Física 1</option>
                                <option value="Física 2">Física 2</option>
                                <option value="Física biomecánica">Física biomecánica</option>
                                <option value="Fisicoquímica">Fisicoquímica</option>
                                <option value="Genética">Genética</option>
                                <option value="Geociencia">Geociencia</option>
                                <option value="Geología">Geología</option>
                                <option value="Hidrología">Hidrología</option>
                                <option value="Mecánica de fluidos y sólidos">Mecánica de fluidos y sólidos</option>
                                <option value="Mecatrónica">Mecatrónica</option>
                                <option value="Metrología">Metrología</option>
                                <option value="Microbiología">Microbiología</option>
                                <option value="Química analítica">Química analítica</option>
                                <option value="Química general">Química general</option>
                                <option value="Química inorgánica">Química inorgánica</option>
                                <option value="Química orgánica">Química orgánica</option>
                                <option value="Resistencia de materiales">Resistencia de materiales</option>
                                <option value="Termodinámica">Termodinámica</option>
                            </optgroup><br>

                            <optgroup label="Ciencias Politicas y Sociales">
                                <option value="Antropología">Antropología</option>
                                <option value="Ciencias políticas">Ciencias políticas</option>
                                <option value="Common law">Common law</option>
                                <option value="Criminología">Criminología</option>
                                <option value="Derecho civil">Derecho civil</option>
                                <option value="Derecho comercial y mercantil">Derecho comercial y mercantil</option>
                                <option value="Derecho constitucional">Derecho constitucional</option>
                                <option value="Derecho internacional">Derecho internacional</option>
                                <option value="Derecho laboral">Derecho laboral</option>
                                <option value="Derecho penal">Derecho penal</option>
                                <option value="Derecho privado">Derecho privado</option>
                                <option value="Derecho procesal">Derecho procesal</option>
                                <option value="Derecho público">Derecho público</option>
                                <option value="Derecho romano">Derecho romano</option>
                                <option value="Derechos humanos">Derechos humanos</option>
                                <option value="Filosofía">Filosofía</option>
                                <option value="Hermenéutica">Hermenéutica</option>
                                <option value="Historia y geografía">Historia y geografía</option>
                                <option value="Recursos humanos">Recursos humanos</option>
                                <option value="Redacción y gramática">Redacción y gramática</option>
                                <option value="Relaciones internacionales">Relaciones internacionales</option>
                                <option value="Sociología">Sociología</option>
                                <option value="Teología">Teología</option>
                            </optgroup><br>

                            <optgroup label="Economía, Finanzas y Contabilidad">
                                <option value="Análisis financiero">Análisis financiero</option>
                                <option value="Comercio">Comercio</option>
                                <option value="Contabilidad">Contabilidad</option>
                                <option value="Costos">Costos</option>
                                <option value="Econometría">Econometría</option>
                                <option value="Economía internacional">Economía internacional</option>
                                <option value="Economía matemática">Economía matemática</option>
                                <option value="Finanzas">Finanzas</option>
                                <option value="Fundamentos macroeconómicos">Fundamentos macroeconómicos</option>
                                <option value="Fundamentos microeconómicos">Fundamentos microeconómicos</option>
                                <option value="Impuestos">Impuestos</option>
                                <option value="Macroeconomía 1">Macroeconomía 1</option>
                                <option value="Macroeconomía 2">Macroeconomía 2</option>
                                <option value="Matemática financiera">Matemática financiera</option>
                                <option value="Mercadeo">Mercadeo</option>
                                <option value="Mercado de valores">Mercado de valores</option>
                                <option value="Mercadotecnia y ventas">Mercadotecnia y ventas</option>
                                <option value="Microeconomía 1">Microeconomía 1</option>
                                <option value="Microeconomía 2">Microeconomía 2</option>
                                <option value="Niif">Niif</option>
                                <option value="Presupuesto">Presupuesto</option>
                                <option value="Simulación financiera">Simulación financiera</option>
                                <option value="Teoría de juegos">Teoría de juegos</option>
                                <option value="Teoría del consumidor">Teoría del consumidor</option>
                                <option value="Trading">Trading</option>
                                </optgroup><br>

                            <optgroup label="Deportes">
                                <option value="Ajedrez">Ajedrez</option>
                                <option value="Artes marciales">Artes marciales</option>
                                <option value="Baloncesto">Baloncesto</option>
                                <option value="Box/kick boxing">Box/kick boxing</option>
                                <option value="Entrenador personal">Entrenador personal</option>
                                <option value="Fútbol">Fútbol</option>
                                <option value="Manejo de dron">Manejo de dron</option>
                                <option value="Mma (artes marciales mixtas)">Mma (artes marciales mixtas)</option>
                                <option value="Natación">Natación</option>
                                <option value="Patinaje">Patinaje</option>
                                <option value="Pilates">Pilates</option>
                                <option value="Slackline">Slackline</option>
                                <option value="Squash">Squash</option>
                                <option value="Tenis">Tenis</option>
                                <option value="Zumba">Zumba</option>
                            </optgroup><br>

                            <optgroup label="Ingeniería">
                                <option value="Anadec">Anadec</option>
                                <option value="Base de datos">Base de datos</option>
                                <option value="Base de datos linux">Base de datos linux</option>
                                <option value="Calidad">Calidad</option>
                                <option value="Comunicaciones analógicas">Comunicaciones analógicas</option>
                                <option value="Control de producción">Control de producción</option>
                                <option value="Fundamentos de producción">Fundamentos de producción</option>
                                <option value="Ingeniería civil">Ingeniería civil</option>
                                <option value="Inteligencia artificial">Inteligencia artificial</option>
                                <option value="Logística de producción">Logística de producción</option>
                                <option value="Machine learning">Machine learning</option>
                                <option value="Modelos de ingeniería 1 y 2">Modelos de ingeniería 1 y 2</option>
                                <option value="Simulación">Simulación</option>
                                <option value="Sistema de apoyo a la decisión">Sistema de apoyo a la decisión</option>
                                <option value="Sistema de control gerencial">Sistema de control gerencial</option>
                                <option value="Sistemas de control analógico">Sistemas de control analógico</option>
                                <option value="Sistemas de control discreto">Sistemas de control discreto</option>
                            </optgroup><br>

                            <optgroup label="Instrumentos Musicales">
                                <option value="Acordeón">Acordeón</option>
                                <option value="Bajo">Bajo</option>
                                <option value="Batería">Batería</option>
                                <option value="Composición musical">Composición musical</option>
                                <option value="Flauta">Flauta</option>
                                <option value="Grabación y producción musical">Grabación y producción musical</option>
                                <option value="Guitarra">Guitarra</option>
                                <option value="Guitarra eléctrica">Guitarra eléctrica</option>
                                <option value="Ingeniería de sonido">Ingeniería de sonido</option>
                                <option value="Piano">Piano</option>
                                <option value="Técnica vocal">Técnica vocal</option>
                                <option value="Teoría musical">Teoría musical</option>
                                <option value="Trompeta">Trompeta</option>
                                <option value="Ukelele">Ukelele</option>
                                <option value="Violín">Violín</option>
                            </optgroup><br>

                            <optgroup label="Matemáticas y probabilidad universitaria">
                                <option value="Álgebra lineal">Álgebra lineal</option>
                                <option value="Análisis matemático">Análisis matemático</option>
                                <option value="Cálculo diferencial">Cálculo diferencial</option>
                                <option value="Cálculo integral">Cálculo integral</option>
                                <option value="Cálculo multivariado">Cálculo multivariado</option>
                                <option value="Cálculo vectorial">Cálculo vectorial</option>
                                <option value="Ecuaciones diferenciales">Ecuaciones diferenciales</option>
                                <option value="Estadística aplicada">Estadística aplicada</option>
                                <option value="Estadística descriptiva">Estadística descriptiva</option>
                                <option value="Estadística inferencial">Estadística inferencial</option>
                                <option value="Geometría">Geometría</option>
                                <option value="Matemática estructural">Matemática estructural</option>
                                <option value="Modelos probabilísticos">Modelos probabilísticos</option>
                                <option value="Precálculo">Precálculo</option>
                                <option value="Probabilidad 1">Probabilidad 1</option>
                                <option value="Probabilidad 2">Probabilidad 2</option>
                                <option value="Probabilidad y estadística 1">Probabilidad y estadística 1</option>
                                <option value="Probabilidad y estadística 2">Probabilidad y estadística 2</option>
                                <option value="Trigonometría">Trigonometría</option>
                                <option value="Variable compleja">Variable compleja</option>
                            </optgroup>
                            
                        </select>
                        <br>

                        <input type="checkbox" class="check3" id="check_otros" onchange="seleccionar_guru(this)">
                        <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Otras Profesiones
                        </label>
                        <select  id="otros" name="otros" class="cajas"> 
                            <option value="">Por favor selecciona</option>
                            <option value="Abogado “Contratación Estatal">Abogado “Contratación Estatal</option>
                            <option value="Abogado “Contratación  Comercial ">Abogado “Contratación  Comercial </option>
                            <option value="Abogado “Contratación  Civil ">Abogado “Contratación  Civil </option>
                            <option value="Abogado “Contratación  Penal">Abogado “Contratación  Penal</option>
                            <option value="Abogado “Contratación Propiedad Intelectual ">Abogado “Contratación Propiedad Intelectual </option>
                            <option value="Abogado “Contratación Estatal Tributaritarista">Abogado “Contratación Estatal Tributaritarista</option>
                            <option value="Acompañante">Acompañante</option>
                            <option value="Actor">Actor</option>
                            <option value="Actuario">Actuario</option>
                            <option value="Administrador Aeropuerto">Administrador Aeropuerto</option>
                            <option value="Administrador de Empresas">Administrador de Empresas</option>
                            <option value="Agente de Aduana">Agente de Aduana</option>
                            <option value="Agente de Bolsa">Agente de Bolsa</option>
                            <option value="Agente de Policía">Agente de Policía</option>
                            <option value="Agente de Embarque">Agente de Embarque</option>
                            <option value="Agente de Inmigracion">Agente de Inmigración</option>
                            <option value="Agente de Marcas y Patentes">Agente de Marcas y Patentes</option>
                            <option value="Agente Maritimo">Agente Marítimo</option>
                            <option value="Agente Portuario">Agente Portuario</option>
                            <option value="Agente Comerciales, Corredores y Afines">Agente Comerciales, Corredores y Afines</option>
                            <option value="Agente de Aduanas e Inspectores de Fronteras">Agente de Aduanas e Inspectores de Fronteras</option>
                            <option value="Agente de Compras, Intermediacion y consignatarios">Agente de Compras, Intermediación y Consignatarios</option>
                            <option value="Agente de Impuestos">Agente de Impuestos</option>
                            <option value="Agente de Seguros">Agente de Seguros</option>
                            <option value="Agente de Viajes">Agentes de Viajes</option>
                            <option value="Agente Inmobiliarios">Agente Inmobiliarios</option>
                            <option value="Agente y Policía de Transito">Agente y Policía de Transito</option>
                            <option value="Agregado Diplomático">Agregado Diplomático</option>
                            <option value="Agricultor">Agricultor</option>
                            <option value="Agrónomo">Agrónomo</option>
                            <option value="Analista Económico">Analista Económico</option>
                            <option value="Analista Gestión Humana">Analista Gestión Humana</option>
                            <option value="Analista Mercados">Analista Mercados</option>
                            <option value="Analista Siniestros">Analista Siniestros</option>
                            <option value="Analista de Sistemas Informaticos">Analista de Sistemas Informaticos</option>
                            <option value="Analista y Agentes Financieros">Analista y Agentes Financieros</option>
                            <option value="Antropologos">Antropólogo</option>
                            <option value="Arqueologos">Arqueólogo</option>
                            <option value="Arquitecto">Arquitecto</option>
                            <option value="Artesano de la Madera y Materiales Similares">Artesano de la Madera y Materiales Similares</option>
                            <option value="Artesano de los Tejidos, El cuero y Materiales similares">Artesano de los Tejidos, El cuero y Materiales similares</option>
                            <option value="Asesor Financiero">Asesor Financiero</option>
                            <option value="Asesor Legal">Asesor Legal</option>
                            <option value="Asistente de Cine, Teatro, Televisión y Afines">Asistente de Cine, Teatro, Televisión y Afines</option>
                            <option value="Asistente Contable">Asistente Contable</option>
                            <option value="Asistente de Bibliotecas y Archivos">Asistente de Bibliotecas y Archivos</option>
                            <option value="Asistente Jurídico">Asistente Jurídico</option>
                            <option value="Asistente de Comercio Exterior">Asistente de Comercio Exterior</option>
                            <option value="Asistente de Trabajo Social y Comunitario">Asistente de Trabajo Social y Comunitario</option>
                            <option value="Astrofísico">Astrofísico</option>
                            <option value="Astrólogo">Astrólogo</option>
                            <option value="Astrónomo">Astrónomo</option>
                            <option value="Atletas, Deportistas y Afines">Atletas, Deportistas y Afines</option>
                            <option value="Auditor Contable">Auditor Contable</option>
                            <option value="Auditor Financiero">Auditor Financiero</option>
                            <option value="Auditor Interno">Auditor Interno</option>
                            <option value="Auditor Sistemas">Auditor Sistemas</option>
                            <option value="Auxiliar de Cartera y Afines">Auxiliar de Cartera y Afines</option>
                            <option value="Auxiliar de Servicios de Correo">Auxiliar de Servicios de Correo</option>
                            <option value="Auxiliar de Droguería">Auxiliar de Droguería</option>
                            <option value="Auxiliar Licencias">Auxiliar Licencias</option>
                            <option value="Auxiliar Mecánica">Auxiliar Mecánica</option>
                            <option value="Auxiliar de Vuelo">Auxiliar de Vuelo</option>
                            <option value="Auxiliar de Administración y Afines">Auxiliar de Administración y Afines</option>
                            <option value="Auxiliar de Enfermería">Auxiliar de Enfermería</option>
                            <option value="Auxiliar de Odontología">Auxiliar de Odontología</option>
                            <option value="Avaluador Bienes">Avaluador Bienes</option>
                            <option value="Avicultores">Avicultores</option>
                            <option value="Azafata">Azafata</option>
                            <option value="Bacteriólogo">Bacteriólogo</option>
                            <option value="Bailarín">Bailarín</option>
                            <option value="Banderillero">Banderillero</option>
                            <option value="Barquero">Barquero</option>
                            <option value="Beisbolista">Beisbolista</option>
                            <option value="Bibliotecarios, Documentalistas y Afines">Bibliotecarios, Documentalistas y Afines</option>
                            <option value="Biofísico">Biofísico</option>
                            <option value="Biógrafo">Biógrafo</option>
                            <option value="Biólogo">Biólogo</option>
                            <option value="Bioquímico">Bioquímico</option>
                            <option value="Bomberos y Rescatistas">Bomberos y Rescatistas</option>
                            <option value="Bordadores y Afines">Bordadores y Afines</option>
                            <option value="Botánico">Botánico</option>
                            <option value="Boxeador">Boxeador</option>
                            <option value="Caficultor">Caficultor</option>
                            <option value="Cajero">Cajero</option>
                            <option value="Cajistas, Tipógrafos y Afines">Cajistas, Tipografos y Afines</option>
                            <option value="Camarógrafo">Camarógrafo</option>
                            <option value="Cantante">Cantante</option>
                            <option value="Capitán de Aviación">Capitán de Aviación</option>
                            <option value="Capitanes, Oficiales de Cubierta y Prácticos">Capitanes, Oficiales de Cubierta y Prácticos</option>
                            <option value="Caricaturista">Caricaturista</option>
                            <option value="Carnicero, Pescadores y Afines">Carnicero, Pescadores y Afines</option>
                            <option value="Carpintero">Carpintero</option>
                            <option value="Cartógrafo">Cartógrafo</option>
                            <option value="Catadores y Clasificadores de Alimentos y Bebidas">Catadores y Clasificadores de Alimentos y Bebidas</option>
                            <option value="Cazadores y Tramperos">Cazadores y Tramperos</option>
                            <option value="Cesteros, Bruceros y Afines">Cesteros, Bruceros y Afines</option>
                            <option value="Catalogadores de Piezas de Museos, Archivos y Afines">Catalogadores de Piezas de Museos, Archivos y Afines</option>
                            <option value="Catedrático">Catedrático</option>
                            <option value="Ciclista">Ciclista</option>
                            <option value="Cienfífico">Cienfífico</option>
                            <option value="Cocineros">Cocineros</option>
                            <option value="Codificador de Datos, Corrector Pruebas Imprenta y Afines">Codificador de Datos, Corrector Pruebas Imprenta y Afines</option>
                            <option value="Columnista">Columnista</option>
                            <option value="Comandante Estación Bomberos">Comandante Estación Bomberos</option>
                            <option value="Comediante">Comediante</option>
                            <option value="Comerciante">Comerciante</option>
                            <option value="Comisario de Familia">Comisario de Familia</option>
                            <option value="Compositor">Compositor</option>
                            <option value="Comunicador Social">Comunicador Social</option>
                            <option value="Concejal">Concejal</option>
                            <option value="Consejero de Estado">Consejero de Estado</option>
                            <option value="Consejero Jurídico">Consejero Jurídico</option>
                            <option value="Consejero Matrimonial">Consejero Matrimonial</option>
                            <option value="Consejero Ocupacional">Consejero Ocupacional</option>
                            <option value="Consejero Educativo">Consejero Educativo</option>
                            <option value="Consul">Consul</option>
                            <option value="Consultor Ambiental">Consultor Ambiental</option>
                            <option value="Consultor Financiero">Consultor Financiero</option>
                            <option value="Consultor Organizacional">Consultor Organizacional</option>
                            <option value="Consultor Política Social">Consultor Política Social</option>
                            <option value="Consultor Recursos Humanos">Consultor Recursos Humanos</option>
                            <option value="Contadores">Contadores</option>
                            <option value="Contralores">Contralores</option>
                            <option value="Coordinador Servicios Generales">Coordinador Servicios Generales</option>
                            <option value="Copiloto Aeronave">Copiloto Aeronave</option>
                            <option value="Coreógrafo y Afines">Coreógrafo y Afines</option>
                            <option value="Corredor Autos">Corredor Autos</option>
                            <option value="Corredor Bolsa">Corredor Bolsa</option>
                            <option value="Corresponsal de Prensa">Corresponsal de Prensa</option>
                            <option value="Criador de Ganado y Animales Domésticos">Criador de Ganado y Animales Domésticos</option>
                            <option value="Criador de Especies Acuáticas">Criador de Especies Acuáticas</option>
                            <option value="Criador de Insectors, Sericultures y Afines">Criador de Insectors, Sericultures y Afines</option>
                            <option value="Cristalero">Cristalero</option>
                            <option value="Crítico Artes y Medios">Crítico Artes y Medios</option>
                            <option value="Cuentero">Cuentero</option>
                            <option value="Curador Arte">Curador Arte</option>
                            <option value="Curador Urbanístico">Curador Urbanístico</option>
                            <option value="Dactiloscopista">Dactiloscopista</option>
                            <option value="Decanos">Decanos</option>
                            <option value="Declamador">Declamador</option>
                            <option value="Director Artístico">Director Artístico</option>
                            <option value="Director Cine">Director Cine</option>
                            <option value="Director Departamento de Mantenimiento">Director Departamento de Mantenimiento</option>
                            <option value="Director Departamento de Seguridad">Director Departamento de Seguridad</option>
                            <option value="Director Escuela de Aviación">Director Escuela de Aviación</option>
                            <option value="Director General Industria Manufacturera">Director General Industria Manufacturera</option>
                            <option value="Director Grupo Musical">Director Grupo Musical</option>
                            <option value="Director Departamento Financiero y Administrativo">Director Departamento Financiero y Administrativo</option>
                            <option value="Director Departamento Investigacion y Desarrollo">Director Departamento Investigacion y Desarrollo</option>
                            <option value="Director Departamento Personal">Director Departamento Personal</option>
                            <option value="Director Departamento Publicidad y Mercadeo">Director Departamento Publicidad y Mercadeo</option>
                            <option value="Dibujantes">Dibujantes</option>
                            <option value="Diseñador Grafico e Industrial">Diseñador Grafico e Industrial</option>
                            <option value="DiskJockey">DiskJockey</option>
                            <option value="Dramaturgo">Dramaturgo</option>
                            <option value="Ecologista">Ecologista</option>
                            <option value="Ecólogo">Ecólogo</option>
                            <option value="Economistas">Economistas</option>
                            <option value="Edil">Edil</option>
                            <option value="Educadores">Educadores</option>
                            <option value="Electricista">Electricista</option>
                            <option value="Electrotécnico">Electrotécnico</option>
                            <option value="Empresario">Empresario</option>
                            <option value="Entrenador">Entrenador</option>
                            <option value="Escritor y Afines">Escritor y Afines</option>
                            <option value="Estadístico">Estadístico</option>
                            <option value="Etimologista">Etimologista</option>
                            <option value="Etnografo">Etnografo</option>
                            <option value="Etnólogo">Etnólogo</option>
                            <option value="Farmacéutico">Farmacéutico</option>
                            <option value="Farmacólogo">Farmacólogo</option>
                            <option value="Filólogo">Filólogo</option>
                            <option value="Filósofo">Filósofo</option>
                            <option value="Fiscal">Fiscal</option>
                            <option value="Fisiatra">Fisiatra</option>
                            <option value="Físico">Físico</option>
                            <option value="Fisiólogo">Fisiólogo</option>
                            <option value="Floricultor">Floricultor</option>
                            <option value="Fontanero e Instaladores de Tuberias">Fontanero e Instaladores de Tuberias</option>
                            <option value="Fotógrafo">Fotógrafo</option>
                            <option value="Fruticultor">Fruticultor</option>
                            <option value="Fisioterapeuta">Fisioterapeuta</option>
                            <option value="Fonólogo">Fonólogo</option>
                            <option value="Forenses">Forenses</option>
                            <option value="Fotógrafo">Fotógrafo</option>
                            <option value="Futbolista">Futbolista</option>
                            <option value="Ganadero">Ganadero</option>
                            <option value="Geólogo">Geólogo</option>
                            <option value="Geotecnista">Geotecnista</option>
                            <option value="Gemólogo">Gemólogo</option>
                            <option value="Genetista">Genetista</option>
                            <option value="Geofísico">Geofísico</option>
                            <option value="Geógrafo">Geógrafo</option>
                            <option value="Geriatra">Geriatra</option>
                            <option value="Gobernador Comunidad Indígena">Gobernador Comunidad Indígena</option>
                            <option value="Grabadores de Imprenta y Fotograbadores">Grabadores de Imprenta y Fotograbadores</option>
                            <option value="Grabadores de Vidrio">Grabadores de Vidrio</option>
                            <option value="Grafólogo">Grafólogo</option>
                            <option value="Herramentistas y Afines">Herramentistas y Afines</option>
                            <option value="Herreros y Forjadores">Herreros y Forjadores</option>
                            <option value="Histólogo">Histólogo</option>
                            <option value="Histopatólogo">Histopatólogo</option>
                            <option value="Humorista">Humorista</option>
                            <option value="Higienetistas">Higienetistas</option>
                            <option value="Historiador">Historiador</option>
                            <option value="Ictólogo">Ictólogo</option>
                            <option value="Impresor Artes Gráficas">Impresor Artes Gráficas</option>
                            <option value="Ingeniero Agrícola">Ingeniero Agrícola</option>
                            <option value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</option>
                            <option value="Ingeniero Agrónomo">Ingeniero Agrónomo</option>
                            <option value="Ingeniero Alimentos">Ingeniero Alimentos</option>
                            <option value="Ingeniero Ambiental">Ingeniero Ambiental</option>
                            <option value="Ingeniero Biomédico">Ingeniero Biomédico</option>
                            <option value="Ingeniero Civil">Ingeniero Civil</option>
                            <option value="Ingeniero Electricista">Ingeniero Electricista</option>
                            <option value="Ingeniero Eléctrico">Ingeniero Eléctrico</option>
                            <option value="Ingeniero Electromécanico">Ingeniero Electromécanico</option>
                            <option value="Ingeniero Electronico">Ingeniero Electronico</option>
                            <option value="Ingeniero Industrial">Ingeniero Industrial</option>
                            <option value="Ingeniero Forestal">Ingeniero Forestal</option>
                            <option value="Ingeniero Genética">Ingeniero Genética</option>
                            <option value="Ingeniero Geologo">Ingeniero Geólogo</option>
                            <option value="Ingeniero Hidráulico">Ingeniero Hidráulico</option>
                            <option value="Ingeniero Mecánico">Ingeniero Mecánico</option>
                            <option value="Ingeniero Mecatrónico">Ingeniero Mecatrónico</option>
                            <option value="Ingeniero Naval">Ingeniero Naval</option>
                            <option value="Ingeniero Pesquero">Ingeniero Pesquero</option>
                            <option value="Ingeniero Petróleos">Ingeniero Petróleos</option>
                            <option value="Ingeniero Producción">Ingeniero Producción</option>
                            <option value="Ingeniero Químico">Ingeniero Químico</option>
                            <option value="Ingeniero Sanitario">Ingeniero Sanitario</option>
                            <option value="Ingeniero Seguridad Industrial">Ingeniero Seguridad Industrial</option>
                            <option value="Ingeniero Sistemas">Ingeniero Sistemas</option>
                            <option value="Ingeniero Sonido">Ingeniero Sonido</option>
                            <option value="Ingeniero Telecomunicaciones">Ingeniero Telecomunicaciones</option>
                            <option value="Ingeniero Textil">Ingeniero Textil</option>
                            <option value="Ingeniero Transportes">Ingeniero Transportes</option>
                            <option value="Ingeniero Vuelo">Ingeniero Vuelo</option>
                            <option value="Ingeniero Minas, Metalúrgicos ">Ingeniero Minas, Metalúrgicos </option>
                            <option value="Instrumentador Quirúrgico">Instrumentador Quirúrgico</option>
                            <option value="Interprete">Interprete</option>
                            <option value="Interventor">Interventor</option>
                            <option value="Investigador">Investigador</option>
                            <option value="Jardinero">Jardinero</option>
                            <option value="Juez">Juez</option>
                            <option value="Lexicógrafo">Lexicógrafo</option>
                            <option value="Lexicólogo">Lexicólogo</option>
                            <option value="Libretista">Libretista</option>
                            <option value="Licenciado">Licenciado</option>
                            <option value="Locutor de Radio, Televisión y Afines">Locutor de Radio, Televisión y Afines</option>
                            <option value="Luminotécnico">Luminotécnico</option>
                            <option value="Maestro">Maestro</option>
                            <option value="Magistrado">Magistrado</option>
                            <option value="Maquinista de Vehiculos por riel">Maquinista de Vehiculos por riel</option>
                            <option value="Marineros de Cubierta y Afines">Marineros de Cubierta y Afines</option>
                            <option value="Maquetero">Maquetero</option>
                            <option value="Marroquinero">Marroquinero</option>
                            <option value="Matemático">Matemático</option>
                            <option value="Mecánico Industrial">Mecánico Industrial</option>
                            <option value="Mesero, Taberneros y Afines">Mesero, Taberneros y Afines</option>
                            <option value="Meteorologos">Meteorologos</option>
                            <option value="Mimo Teatro y Callejero">Mimo Teatro y Callejero</option>
                            <option value="Mineros y Canteros">Mineros y Canteros</option>
                            <option value="Ministro">Ministro</option>
                            <option value="Músico">Músico</option>
                            <option value="Notario">Notario</option>
                            <option value="Novillero">Novillero</option>
                            <option value="Oceanógrafo">Oceanógrafo</option>
                            <option value="Odontólogo">Odontólogo</option>
                            <option value="Oficial Ejército">Oficial Ejército</option>
                            <option value="Oficial Polícia">Oficial Polícia</option>
                            <option value="Oficial Naval">Oficial Naval</option>
                            <option value="Oficial Fuerza Aérea">Oficial Fuerza Aérea</option>
                            <option value="Oftalmólogo">Oftalmólogo</option>
                            <option value="Operador Máquinas ">Operador Máquinas </option>
                            <option value="Optómetra">Optómetra</option>
                            <option value="Ortodoncista">Ortodoncista</option>
                            <option value="Ortopedista">Ortopedista</option>
                            <option value="Paleobiólogo">Paleobiólogo</option>
                            <option value="Paleógrafo">Paleógrafo</option>
                            <option value="Paleólogo">Paleólogo</option>
                            <option value="Paleontólogo">Paleontólogo</option>
                            <option value="Panadero, Pastelero y Confitero">Panadero, Pastelero y Confitero</option>
                            <option value="Patinador">Patinador</option>
                            <option value="Patólogo">Patólogo</option>
                            <option value="Pedagogo">Pedagogo</option>
                            <option value="Periodista">Periodista</option>
                            <option value="Perito">Perito</option>
                            <option value="Periodoncista">Periodoncista</option>
                            <option value="Personero">Personero</option>
                            <option value="Pescador">Pescador</option>
                            <option value="Piloto Avión, Carros Carreras, Afines">Piloto Avión, Carros Carreras, Afines</option>
                            <option value="Pintor Arte">Pintor Arte</option>
                            <option value="Piscicultor">Piscicultor</option>
                            <option value="Planificador Medio Ambiente">Planificador Medio Ambiente</option>
                            <option value="Planificador Tránsito">Planificador Tránsito</option>
                            <option value="Plomero">Plomero</option>
                            <option value="Poeta">Poeta</option>
                            <option value="Politólogo">Politólogo</option>
                            <option value="Polvorero">Polvorero</option>
                            <option value="Porcicultor">Porcicultor</option>
                            <option value="Publicista">Publicista</option>
                            <option value="Procurador">Procurador</option>
                            <option value="Químico y Afines">Químico y Afines</option>
                            <option value="Radiotécnico">Radiotécnico</option>
                            <option value="Rector Institución Educativa">Rector Institución Educativa</option>
                            <option value="Registrador">Registrador</option>
                            <option value="Rejoneador">Rejoneador</option>
                            <option value="Relojero">Relojero</option>
                            <option value="Reportero Gráfico">Reportero Gráfico</option>
                            <option value="Representante a la Cámara">Representante a la Cámara</option>
                            <option value="Revisor Fiscal">Revisor Fiscal</option>
                            <option value="Salvavidas">Salvavidas</option>
                            <option value="Sastres, Modistos">Sastres, Modistos</option>
                            <option value="Sismólogo">Sismólogo</option>
                            <option value="Sub Oficial Ejercito">Sub Oficial Ejercito</option>
                            <option value="Sub Oficial Policia">Sub Oficial Policia</option>
                            <option value="Sub Oficial Naval">Sub Oficial Naval</option>
                            <option value="Sub Oficial Fuerza Aerea">Sub Oficial Fuerza Aerea</option>
                            <option value="Taxonomista">Taxonomista</option>
                            <option value="Técnicos en general">Técnicos en general</option>
                            <option value="Terapeuta">Terapeuta</option>
                            <option value="Tesorero">Tesorero</option>
                            <option value="Topógrafo">Topógrafo</option>
                            <option value="Torero">Torero</option>
                            <option value="Toxicólogo">Toxicólogo</option>
                            <option value="Traductor">Traductor</option>
                            <option value="Tutor">Tutor</option>
                            <option value="Veterinario">Veterinario</option>
                            <option value="Virólogo">Virólogo</option>
                            <option value="Vulcanólogo">Vulcanólogo</option>
                            <option value="Xilógrafo">Xilógrafo</option>
                            <option value="Zoólogo ">Zoólogo </option>
                            <option value="Zootécnico">Zootécnico</option>
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_constructor" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 18px">
                        &nbsp;&nbsp; Gurú Especialista en Construcción
                        </label>
                        <select  id="constructor" name="constructor" class="cajas"> 
                            <option value="">Por favor selecciona</option>
                            <option value="Baños ">Baños</option>
                            <option value="Casa inteligente y Seguridad">Casa inteligente y Seguridad</option>
                            <option value="Cerraduras y Herrajes">Cerraduras y Herrajes</option>
                            <option value="Climatizacion ">Climatizacion </option>
                            <option value="Cocina">Cocina</option>
                            <option value="Complementos de Baños">Complementos de Baños</option>
                            <option value="Construccion y Ferreteria">Construccion y Ferreteria</option>
                            <option value="Cortinas y Persianas">Cortinas y Persianas</option>
                            <option value="Electricidad">Electricidad</option>
                            <option value="Electrodomésticos de Cocina">Electrodomésticos de Cocina</option>
                            <option value="Electrodomésticos del Hogar">Electrodomésticos del Hogar</option>
                            <option value="Escaleras y Mudanzas">Escaleras y Mudanzas</option>
                            <option value="Estufas, Hornos & Campanas">Estufas, Hornos & Campanas</option>
                            <option value="Herramientas Electricas">Herramientas Electricas</option>
                            <option value="Lavandería y Lavadero">Lavandería y Lavadero</option>
                            <option value="Linea Blanca">Linea Blanca</option>
                            <option value="Maderas, Tableros y Herrajes">Maderas, Tableros y Herrajes</option>
                            <option value="Pinturas">Pinturas</option>
                            <option value="Pisos y Paredes">Pisos y Paredes</option>
                            <option value="Pisos y Pinturas para tus Espacios">Pisos y Pinturas para tus Espacios</option>
                            <option value="Plomería">Plomería</option>
                            <option value="Puertas">Puertas</option>
                            <option value="Tecnologia y Television">Tecnologia y Television</option>
                            <option value="Tejas y Drywall">Tejas y Drywall</option>
                        </select>
                        <br><br><br>
                        <div align="center">
                        <input type="image" src="img/continuar3.png" alt="Submit" style="width: 35%" value="Registrarte"  name="registro" class="botones"/>
                        
                        <br><br><br> <br> 
                        <div style="background-color: #452167;">
                            <br><br><br>
                            <img src="images/logo.png" alt="" width="40%" height="auto" style="margin-bottom:0px;"/>
                            <br><br><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
        <?php
        require("modal/registro.php");
        require("modal/inicio_sesion.php");
        require("modal/olvido_password.php");
        ?>
        </div>
        <div align="right">
        </div>
        </footer>

        <!-- Grid -->
        <script>

        </script>
        <!-- fin Grid -->


        <!-- Ramdom imagen -->
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>

        <!-- Fin Ramdom imagen -->


        <!-- Menu Responsive -->	
        <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
            }
            
        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/registro.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    </body>
</html>