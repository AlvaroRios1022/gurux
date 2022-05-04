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
                <a style="color:#FFC808; font-size:37px; font-weight: bold; margin-left:13%; "> Your FREE platform!!! </a>
                <a ><img style="width: 20%; margin-left:12%" src="img/headert12en.png"/> </a>
                <br>    
                <div  align="right" style="margin-right:10%"  >
				<span style="color: #fff; text-decoration: none;">LANGUAGE   &nbsp;&nbsp; <a href="index.php" style="color:#fff"> ES </a>  | <a style=" color: #FFC808">  EN</a></span>
                </div>  
                <br>
                <div style="background-color: #fff;" align="center">           
            
            <img src="img/guruses-en.png"  width="100%" height="auto" alt="" />
           
            
            <img src="img/fotos8.png"  width="100%" height="auto" alt="" />
            </div>
            <div >
                <div class="flex-container" style="background-color: #fff;" align="center">
                    <div class="flex-item-left">
                        <div  style="text-align: justify; margin-top:-100px" class="textoprincipal"><br>
                            <p style="display: contents; color:#452167"><strong>
                            We are looking for Gurus (Medical Gurus, Alternative Medicine Gurus, Yoga Gurus, Psychic Gurus, Religious Gurus, Coaching Gurus, Language Teacher Gurus, School and University Tutors Gurus, other Professions Gurus) with the highest professional, ethical and personal qualities.                            
                            </p></strong> <br><br> 
                            <p style="display: contents;">
                            If you identify with our proposal, do not hesitate to apply for this unique opportunity. We offer you a technological platform designed to enhance your skills, talents and your professional training from wherever you are in the world.                            
                            </p><br><br>        
                            <p style="display: contents; ">
                            The future is here to stay! receive <strong>YOUR FEES</strong> working from the comfort of your home, consulting room, office (from wherever you want), managing <strong>YOUR TIME AND YOUR CLIENTS </strong>at your convenience.                           
                            </p><br><br> 
                            <p style="display: contents; "> 
                            The online work experience will allow you in real time to carry out all the consultations, meetings, consultancies, classes, talks, all the means and methodologies that you require to serve your users. Enter <strong>RIGHT NOW </strong>to our registration and prove that you are one of our qualified <strong>GURUS</strong> .
                            </p><br><br><br><br>
                            <ul class="lista" >
                                <li >
                                    <p style="display: contents;">
                                    Our friendly platform will allow you to work from your PC, Laptop, Tablet or Smartphone.                                    
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    You can build your client portfolio and generate income when and where you want it.                                    
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    You can earn as much money as you propose.                                    
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    We pay immediately since the payment method we have automatically transfers you when you provide your consultation services.                                    
                                    </p>
                                </li> 
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    We have a wide range of promotional opportunities.
                                    </p>
                                </li>
                                <br>
                                <li>
                                    <p style="display: contents;">
                                    We offer 24/7 support
                                    </p>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="flex-item-right" style="background-color: #E3DAEC;" align="left"><br><br>
                        <label for="fname"><img src="img/texto5.png"  width="100%" height="auto" alt="" />
                        </label>
                        <div class="margin_tope" >
                        <div align="center">
                        <img style="margin-top:-40px" src="img/ifyou.png"  width="95%" height="auto" alt="" />
                        </div>
                            <input type="checkbox" class="check3"  id="check_medicina" onchange="seleccionar_guru(this)">
                             <label for="nombre" class="titulosb" style="font-size: 20px" style="font-size: 20px">
                            &nbsp;&nbsp; Medical Guru
                            </label>
                            <select required id="medicina" name="medicina" class="cajas"  > 
                                <option value="">please select</option>
                                <option value = "Allergologist"> Allergist </option>
                                <option value = "Angiologist"> Angiologist </option>
                                <option value = "Cardiologist"> Cardiologist </option>
                                <option value = "Athlete"> Athlete </option>
                                <option value = "Dermatologist"> Dermatologist </option>
                                <option value = "Endocrinologist"> Endocrinologist </option>
                                <option value = "Nurse"> Nurse </option>
                                <option value = "Epidemiologist"> Epidemiologist </option>
                                <option value = "Stomatologist"> Stomatologist </option>
                                <option value = "Pharmacologist"> Pharmacologist </option>
                                <option value = "Physiologist"> Physiologist </option>
                                <option value = "Speech Therapist"> Speech Therapist </option>
                                <option value = "Forensic"> Forensic </option>
                                <option value = "General"> General </option>
                                <option value = "Geriatrician"> Geriatrician </option>
                                <option value = "Gynecologist"> Gynecologist </option>
                                <option value = "Hematologist"> Hematologist </option>
                                <option value = "Histologist"> Histologist </option>
                                <option value = "Immunologist"> Immunologist </option>
                                <option value = "Microbiologist"> Microbiologist </option>
                                <option value = "Nephrologist"> Nephrologist </option>
                                <option value = "Pulmonologist"> Pulmonologist </option>
                                <option value = "Neurologist"> Neurologist </option>
                                <option value="Dentist Endodontist.">Dentist Endodontist.</option>
                                 <option value="General Dentist">General Dentist</option>
                                 <option value="Dentist Pediatric Dentist">Dentist Pediatric Dentist</option>
                                 <option value="Orthodontist Dentist">Orthodontist Dentist</option>
                                 <option value="Oral Pathologist Dentist or Oral Surgeon">Oral Pathologist Dentist or Oral Surgeon</option>
                                 <option value="Periodontist Dentist">Periodontist Dentist</option>
                                 <option value="Prosthodontist Dentist">Prosthodontist Dentist</option>
                                <option value = "Oncologist"> Oncologist </option>
                                <option value = "Orthopedist"> Orthopedist </option>
                                <option value = "Pathologist"> Pathologist </option>
                                <option value = "Pediatrician"> Pediatrician </option>
                                <option value = "Podiatrist"> Podiatrist </option>
                                <option value = "Proctologist"> Proctologist </option>
                                <option value = "Psychoanalyst"> Psychoanalyst </option>
                                <option value = "Psychologist"> Psychologist </option>
                                <option value = "Psychotherapist"> Psychotherapist </option>
                                <option value = "Psychiatrist"> Psychiatrist </option>
                                <option value = "Chiropractor"> Chiropractor </option>
                                <option value = "Radiologist"> Radiologist </option>
                                <option value = "Radiotherapist"> Radiotherapist </option>
                                <option value = "Rheumatologist"> Rheumatologist </option>
                                <option value = "Sexologist"> Sexologist </option>
                                <option value = "Sophrologist"> Sophrologist </option>
                                <option value = "Therapist"> Therapist </option>
                                <option value = "Toxicologist"> Toxicologist </option>
                                <option value = "Traumatologist and Orthopedist"> Traumatologist and Orthopedist </option>
                                <option value = "Urologist"> Urologist </option>
                                <option value = "Virologist"> Virologist </option>
                            </select><br>
                        
                        <input type="checkbox" class="check3" id="check_alternativa"  onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                            &nbsp;&nbsp; Alternative Medicine Guru
                        </label>
                        <select required id="alternativa" name="alternativa" class="cajas"> 
                            <option value="">please select</option>    
                            <option value = "Acidity"> Acidity </option>
                            <option value = "Acne"> Acne </option>
                            <option value = "Bullying"> Bullying </option>
                            <option value = "Drug addiction"> Drug addiction </option>
                            <option value = "Agoraphobia"> Agoraphobia </option>
                            <option value = "Alcoholism and alcohol abuse"> Alcoholism and alcohol abuse </option>
                            <option value = "Allergy to insects"> Allergy to insects </option>
                            <option value = "Eye allergy"> Eye allergy </option>
                            <option value = "Amblyopia"> Amblyopia </option>
                            <option value = "Threat of abortion"> Threat of abortion </option>
                            <option value = "Anorexia nervosa"> Anorexia nervosa </option>
                            <option value = "Anorgasmia"> Anorgasmia </option>
                            <option value = "Anxiety"> Anxiety </option>
                            <option value = "Arthritis"> Arthritis </option>
                            <option value = "Arthrosis"> Arthrosis </option>
                            <option value = "Asthma in children"> Asthma in children </option>
                            <option value = "Astigmatism"> Astigmatism </option>
                            <option value = "Aversion to sex"> Aversion to sex </option>
                            <option value = "Bronchiolitis"> Bronchiolitis </option>
                            <option value = "Bruxism"> Bruxism </option>
                            <option value = "Bulimia nervosa"> Bulimia nervosa </option>
                            <option value = "Hormonal changes"> Hormonal changes </option>
                            <option value = "Cervical cancer"> Cervical cancer </option>
                            <option value = "Skin cancer"> Skin cancer </option>
                            <option value = "Adhesive capsulitis"> Adhesive capsulitis </option>
                            <option value = "Cataracts"> Cataracts </option>
                            <option value = "Tension headaches"> Tension headaches </option>
                            <option value = "Cellopathy"> Cellopathy </option>
                            <option value = "Scar"> Scar </option>
                            <option value = "Ulcerative colitis"> Ulcerative colitis </option>
                            <option value = "Spastic colon"> Spastic colon </option>
                            <option value = "Coronavirus COVID-19"> Coronavirus COVID-19 </option>
                            <option value = "Croup (Laryngotracheobronchitis)"> Croup (Laryngotracheobronchitis) </option>
                            <option value = "Dementia"> Dementia </option>
                            <option value = "Senile dementia, Binswanger type"> Senile dementia, Binswanger type </option>
                            <option value = "Teething"> Teething </option>
                            <option value = "Emotional dependency"> Emotional dependency </option>
                            <option value = "Depression"> Depression </option>
                            <option value = "Dermatitis"> Dermatitis </option>
                            <option value = "Atopic dermatitis"> Atopic dermatitis </option>
                            <option value = "Juvenile dermatomyositis"> Juvenile dermatomyositis </option>
                            <option value = "Engine development"> Engine development </option>
                            <option value = "Hypoactive sexual desire"> Hypoactive sexual desire </option>
                            <option value = "Malnutrition"> Malnutrition </option>
                            <option value = "Diabetes"> Diabetes </option>
                            <option value = "Gestational diabetes"> Gestational diabetes </option>
                            <option value = "Diarrhea"> Diarrhea </option>
                            <option value = "Learning difficulties"> Learning difficulties </option>
                            <option value = "Erectile dysfunction"> Erectile dysfunction </option>
                            <option value = "Female sexual dysfunction"> Female sexual dysfunction </option>
                            <option value = "Dyspareunia"> Dyspareunia </option>
                            <option value = "Cervical dysplasia"> Cervical dysplasia </option>
                            <option value = "Calf muscle strain"> Calf muscle strain </option>
                            <option value = "Focal dystonia"> Focal dystonia </option>
                            <option value = "Joint pain"> Joint pain </option>
                            <option value = "Chronic neck pain"> Chronic neck pain </option>
                            <option value = "Headache"> Headache </option>
                            <option value = "Muscle contraction headache"> Muscle contraction headache </option>
                            <option value = "Migraine headache"> Migraine headache </option>
                            <option value = "Back pain"> Back pain </option>
                            <option value = "Sore throat"> Sore throat </option>
                            <option value = "Duel"> Duel </option>
                            <option value = "Eczema (Atopic Dermatitis)"> Eczema (Atopic Dermatitis) </option>
                            <option value = "Ectopic pregnancy"> Ectopic pregnancy </option>
                            <option value = "Endometriosis"> Endometriosis </option>
                            <option value = "Common illness aggravated by work"> Common illness aggravated by work </option>
                            <option value = "Gastroesophageal reflux disease - Baby"> Gastroesophageal reflux disease - Baby </option>
                            <option value = "Gastroesophageal reflux disease - Child"> Gastroesophageal reflux disease - Child </option>
                            <option value = "Gastroesophageal reflux disease (GERD)"> Gastroesophageal reflux disease (GERD) </option>
                            <option value = "Occupational illness"> Occupational illness </option>
                            <option value = "Pelvic inflammatory disease"> Pelvic inflammatory disease </option>
                            <option value = "Enuresis"> Enuresis </option>
                            <option value = "Facial aging"> Facial aging </option>
                            <option value = "Lateral epicondylitis"> Lateral epicondylitis </option>
                            <option value = "Scoliosis"> Scoliosis </option>
                            <option value = "Ankle sprain"> Ankle sprain </option>
                            <option value = "Schizophrenia"> Schizophrenia </option>
                            <option value = "Constipation"> Constipation </option>
                            <option value = "Stress"> Stress </option>
                            <option value = "Premature ejaculation"> Premature ejaculation </option>
                            <option value = "Delayed ejaculation"> Delayed ejaculation </option>
                            <option value = "Lack of growth"> Lack of growth </option>
                            <option value = "Drug dependency"> Drug dependency </option>
                            <option value = "Fibromyalgia"> Fibromyalgia </option>
                            <option value = "Labia majora flaccidity"> Labia majora flaccidity </option>
                            <option value = "Specific or simple phobia"> Specific or simple phobia </option>
                            <option value = "Elbow fracture"> Elbow fracture </option>
                            <option value = "Foot fracture"> Foot fracture </option>
                            <option value = "Gastritis"> Gastritis </option>
                            <option value = "Viral gastroenteritis"> Viral gastroenteritis </option>
                            <option value = "Glaucoma"> Glaucoma </option>
                            <option value = "Flu"> Flu </option>
                            <option value = "Abnormal uterine bleeding"> Abnormal uterine bleeding </option>
                            <option value = "Hepatitis B"> Hepatitis B </option>
                            <option value = "Hepatitis C"> Hepatitis C </option>
                            <option value = "Herniated disc"> Herniated disc </option>
                            <option value = "Diaphragmatic hernia"> Diaphragmatic hernia </option>
                            <option value = "Herpes zoster (Postherpetic Neuralgia)"> Herpes zoster (Postherpetic Neuralgia) </option>
                            <option value = "Hypercholesterolemia (high cholesterol)"> Hypercholesterolemia (high cholesterol) </option>
                            <option value = "Hyperemesis gravidarum"> Hyperemesis gravidarum </option>
                            <option value = "Hyperhidrosis"> Hyperhidrosis </option>
                            <option value = "Hypertension"> Hypertension </option>
                            <option value = "Hypertrophy of the labia minora"> Hypertrophy of the labia minora </option>
                            <option value = "Impotence"> Impotence </option>
                            <option value = "Urinary tract infections in childhood"> Urinary tract infections in childhood </option>
                            <option value = "Infertility"> Infertility </option>
                            <option value = "Female infertility"> Female infertility </option>
                            <option value = "Lactose intolerance"> Lactose intolerance </option>
                            <option value = "Laryngomalacia"> Laryngomalacia </option>
                            <option value = "Sports injuries"> Sports injuries </option>
                            <option value = "Polka dots"> Polka dots </option>
                            <option value = "Systemic lupus erythomatous (Lupus)"> Systemic lupus erythomatous (Lupus) </option>
                            <option value = "Menopause"> Menopause </option>
                            <option value = "Migraine"> Migraine </option>
                            <option value = "Fibroids"> Fibroids </option>
                            <option value = "Tightened groin muscle"> Tightened groin muscle </option>
                            <option value = "Pneumonia"> Pneumonia </option>
                            <option value = "Obesity"> Obesity </option>
                            <option value = "Obesity in children and adolescents"> Obesity in children and adolescents </option>
                            <option value = "Toothache"> Toothache </option>
                            <option value = "Dry eye"> Dry eye </option>
                            <option value = "Onychomycosis"> Onychomycosis </option>
                            <option value = "Cerebral palsy"> Cerebral palsy </option>
                            <option value = "Facial paralysis"> Facial paralysis </option>
                            <option value = "Crystal Skin"> Crystal Skin </option>
                            <option value = "Gastric problems"> Gastric problems </option>
                            <option value = "Psoriasis"> Psoriasis </option>
                            <option value = "Seborrheic keratosis"> Seborrheic keratosis </option>
                            <option value = "Epidermal cyst"> Epidermal cyst </option>
                            <option value = "Ovarian cyst"> Ovarian cyst </option>
                            <option value = "Vesicoureteral reflux: child"> Vesicoureteral reflux: child </option>
                            <option value = "Cold"> Cold </option>
                            <option value = "Stunted growth"> Stunted growth </option>
                            <option value = "Allergic rhinitis"> Allergic rhinitis </option>
                            <option value = "Salpingitis"> Salpingitis </option>
                            <option value = "Asperger syndrome"> Asperger syndrome </option>
                            <option value = "Myofacial pain dysfunction syndrome"> Myofacial pain dysfunction syndrome </option>
                            <option value = "Myofascial pain syndrome"> Myofascial pain syndrome </option>
                            <option value = "Complex regional pain syndrome"> Complex regional pain syndrome </option>
                            <option value = "Restless legs syndrome"> Restless legs syndrome </option>
                            <option value = "Polycystic ovarian syndrome (PCOS)"> Polycystic ovarian syndrome (PCOS) </option>
                            <option value = "Piriformis syndrome"> Piriformis syndrome </option>
                            <option value = "Cancer pain syndromes"> Cancer pain syndromes </option>
                            <option value = "Sinusitis (Infection in the paranasal sinuses)"> Sinusitis (Infection in the paranasal sinuses) </option>
                            <option value = "Sleepwalking"> Sleepwalking </option>
                            <option value = "Tendinitis"> Tendinitis </option>
                            <option value = "Strain, muscle"> Strain, muscle </option>
                            <option value = "Bipolar disorder"> Bipolar disorder </option>
                            <option value = "Adjustment disorder"> Adjustment disorder </option>
                            <option value = "Anxiety disorder (social phobia)"> Anxiety disorder (social phobia) </option>
                            <option value = "Conduct disorder"> Conduct disorder </option>
                            <option value = "Post-traumatic stress disorder"> Post-traumatic stress disorder </option>
                            <option value = "Eating Disorder"> Eating Disorder </option>
                            <option value = "Panic disorder"> Panic disorder </option>
                            <option value = "Dependent personality disorder"> Dependent personality disorder </option>
                            <option value = "Autism Spectrum Disorder (ASD)"> Autism Spectrum Disorder (ASD) </option>
                            <option value = "Premenstrual dysphoric disorder (PMDD)"> Premenstrual dysphoric disorder (PMDD) </option>
                            <option value = "Avoidant Personality Disorder"> Avoidant Personality Disorder </option>
                            <option value = "Obsessive compulsive disorder (OCD)"> Obsessive compulsive disorder (OCD) </option>
                            <option value = "Attention deficit disorder (ADD)"> Attention deficit disorder (ADD) </option>
                            <option value = "Lactation disorders"> Lactation disorders </option>
                            <option value = "Learning disorders"> Learning disorders </option>
                            <option value = "Attention deficit hyperactivity disorder (ADHD)"> Attention deficit hyperactivity disorder (ADHD) </option>
                            <option value = "Sexual disorders"> Sexual disorders </option>
                            <option value = "Ulcer"> Ulcer </option>
                            <option value = "Urticaria"> Urticaria </option>
                            <option value = "Atrophic vaginitis"> Atrophic vaginitis </option>
                            <option value = "Bacterial Vaginosis"> Bacterial Vaginosis </option>
                            <option value = "Varicose veins"> Varicose veins </option>
                            <option value = "Warts"> Warts </option>
                            <option value = "Human papillomavirus (HPV)"> Human papillomavirus (HPV) </option>
                            <option value = "Vomiting"> Vomiting </option>
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_yoga" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Guru Physical Preparation
                        </label>
                        <select required id="yoga" name="yoga" class="cajas"> 
                            <option value="">please select</option>
                            
                            <option value = "AcroYoga"> AcroYoga </option>
                            <option value = "Aerobics"> Aerobics </option>
                            <option value = "Sweep"> Sweep </option>
                            <option value = "Bikram Yoga"> Bikram Yoga </option>
                            <option value = "Body Combat"> Body Combat </option>
                            <option value = "Crosstech"> Crosstech </option>
                            <option value = "Danzika"> Danzika </option>
                            <option value = "Integral Esotericism"> Integral Esotericism </option>
                            <option value = "Gluteo Xp"> Gluteo Xp </option>
                            <option value = "Hatha Yoga"> Hatha Yoga </option>
                            <option value = "Spinning"> Spinning </option>
                            <option value = "Pilates"> Pilates </option>
                            <option value = "Rumba"> Rumba </option>
                            <option value = "Step"> Step </option>
                            <option value = "Tabata"> Tabata </option>
                            <option value = "Tantra Yoga"> Tantra Yoga </option>
                            <option value = "Tone"> Tone </option>
                            <option value = "Vinyasa Yoga"> Vinyasa Yoga </option>
                            <option value = "Aerial Yoga"> Aerial Yoga </option>
                            <option value = "Yoga Meditation"> Yoga Meditation </option>
                            <option value = "Prenatal Yoga"> Prenatal Yoga </option>
                            <option value = "Restorative Yoga"> Restorative Yoga </option>
                            <option value = "Zumba"> Zumba </option>

                            
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_psiquico" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Psychic Guru
                        </label>
                        <select required id="psiquico" name="psiquico" class="cajas"> 
                            <option value="">please select</option>
                            <option value = "Divination"> Divination </option>
                            <option value = "Love and relationships"> Love and relationships </option>
                            <option value = "Dream analysis"> Dream analysis </option>
                            <option value = "Astrology"> Astrology </option>
                            <option value = "Chinese astrology"> Chinese astrology </option>
                            <option value = "Kabbalah"> Kabbalah </option>
                            <option value = "House and family"> House and family </option>
                            <option value = "Clairvoyance"> Clairvoyance </option>
                            <option value = "New age spirituality"> New age spirituality </option>
                            <option value = "Exorcisms"> Exorcisms </option>
                            <option value = "Oriental Philosophy"> Oriental Philosophy </option>
                            <option value = "Graphology"> Graphology </option>
                            <option value = "Spirit Guides"> Spirit Guides </option>
                            <option value = "Dream Interpretation"> Dream Interpretation </option>
                            <option value = "Karma"> Karma </option>
                            <option value = "Hand reading"> Hand reading </option>
                            <option value = "Image reads"> Image reads </option>
                            <option value = "Past life readings"> Past life readings </option>
                            <option value = "Psychic readings"> Psychic readings </option>
                            <option value = "Universal laws"> Universal laws </option>
                            <option value = "Eastern Numerology"> Eastern Numerology </option>
                            <option value = "Occult"> Occult </option>
                            <option value = "Paranormal"> Paranormal </option>
                            <option value = "Financial outlook"> Financial outlook </option>
                            <option value = "Race predictions"> Race predictions </option>
                            <option value = "Reincarnation"> Reincarnation </option>
                            <option value = "Past life regressions"> Past life regressions </option>
                            <option value = "Religion"> Religion </option>
                            <option value = "Rituals and energy"> Rituals and energy </option>
                            <option value = "Sex and intimacy"> Sex and intimacy </option>
                            <option value = "Sound therapy"> Sound therapy </option>
                            <option value = "Tarot and cards"> Tarot and cards </option>
                        </select><br>
                        
                        <input type="checkbox" class="check3" id="check_religioso" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Religious Guru
                        </label>
                        <select required id="religioso" name="religioso" class="cajas"> 
                            <option value="">please select</option>
                            <option value = "Magnet Islamism"> Magnet Islamism </option>
                            <option value = "Master Taoism"> Master Taoism </option>
                            <option value = "Buddhism Teachers"> Buddhism Teachers </option>
                            <option value = "Confucian monks"> Confucian monks </option>
                            <option value = "Christian Pastor"> Christian Pastor </option>
                            <option value = "Pastor Adventist Churches"> Pastor Adventist Churches </option>
                            <option value = "Pastor Pentecostalismo"> Pastor Pentecostalismo </option>
                            <option value = "Pastro Baptista Metodismo"> Pastro Baptista Metodismo </option>
                            <option value = "Rabbis Judaism"> Rabbis Judaism </option>
                            <option value = "Catholic Priest"> Catholic Priest </option>
                            <option value = "Hindu Priest"> Hindu Priest </option>
                            <option value = "Priest Anglican Church"> Priest Anglican Church </option>
                            <option value = "Priest Orthodox Church"> Priest Orthodox Church </option>
                            <option value = "Priest Lutheranism"> Priest Lutheranism </option>
                            <option value = "Mormonism Priest"> Mormonism Priest </option>
                            <option value = "Protentanism Priest"> Protentanism Priest </option>
                        </select><br>

                        <input type="checkbox" class="check3" id="check_coaching" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Guru Coaching
                        </label>
                        <select required id="coaching" name="coaching" class="cajas"> 
                        <option value = ""> please select </option> Neurocoaching
                            <option value = "Coaching addictions"> Coaching addictions </option>
                            <option value = "Coercive Coaching"> Coercive Coaching </option>
                            <option value = "Attraction coaching"> Attraction coaching </option>
                            <option value = "Shadow Coaching"> Shadow Coaching </option>
                            <option value = "Sports coaching"> Sports coaching </option>
                            <option value = "Family Coaching"> Family Coaching </option>
                            <option value = "Coaching emotional intelligence"> Coaching emotional intelligence </option>
                            <option value = "Ontological Coaching"> Ontological Coaching </option>
                            <option value = "Organizational coaching"> Organizational coaching </option>
                            <option value = "Personal Coaching"> Personal Coaching </option>
                            <option value = "Coaching PLN"> Coaching PLN </option>
                            <option value = "Systemic Coaching"> Systemic Coaching </option>
                            <option value = "Transformational Coaching"> Transformational Coaching </option>
                            <option value = "Neurocoaching"> Neurocoaching </option>
                        </select><br>

                        <input type="checkbox" class="check3" id="check_idiomas" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Guru Language Teacher
                        </label>
                        <select required id="idiomas" name="idiomas" class="cajas"> 
                        <option value="">Selecciona idioma</option>
                        <option value = "German"> German </option>
                                <option value = "Arabic"> Arabic </option>
                                <option value = "Bengali"> Bengali </option>
                                <option value = "Cantonese Chinese"> Cantonese Chinese </option>
                                <option value = "Mandarin Chinese"> Mandarin Chinese </option>
                                <option value = "Chinese Mǐn Nán"> Chinese Mǐn Nán </option>
                                <option value = "Chinese Wu"> Chinese Wu </option>
                                <option value = "Korean"> Korean </option>
                                <option value = "Spanish"> Spanish </option>
                                <option value = "French"> French </option>
                                <option value = "Hausa"> Hausa </option>
                                <option value = "Hindi"> Hindi </option>
                                <option value = "Indonesian"> Indonesian </option>
                                <option value = "English"> English </option>
                                <option value = "Italian"> Italian </option>
                                <option value = "Japanese"> Japanese </option>
                                <option value = "Javanese"> Javanese </option>
                                <option value = "Marathi"> Marathi </option>
                                <option value = "Western Punjabi"> Western Punjabi </option>
                                <option value = "Iranian Persian"> Iranian Persian </option>
                                <option value = "Portuguese"> Portuguese </option>
                                <option value = "Russian"> Russian </option>
                                <option value = "Thai"> Thai </option>
                                <option value = "Tamil"> Tamil </option>
                                <option value = "Telugu"> Telugu </option>
                                <option value = "Turkish"> Turkish </option>
                                <option value = "Urdu"> Urdu </option>
                                <option value = "Vietnamese"> Vietnamese </option>
                            
                        </select><br>

                        <input type="checkbox" class="check3" id="check_tutor" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Guru Tutor Colleges
                        </label>
                        <select required id="tutor" name="tutor" class="cajas">
                            <option value="">please select</option>
                            <optgroup label = "School Subjects">
                                <option value = "Biology"> Biology </option>
                                <option value = "Social Sciences"> Social Sciences </option>
                                <option value = "Accounting"> Accounting </option>
                                <option value = "Economy"> Economy </option>
                                <option value = "Spanish"> Spanish </option>
                                <option value = "Ethics"> Ethics </option>
                                <option value = "Philosophy"> Philosophy </option>
                                <option value = "Physics"> Physics </option>
                                <option value = "Geometry"> Geometry </option>
                                <option value = "Humanities"> Humanities </option>
                                <option value = "Mathematics"> Mathematics </option>
                                <option value = "Chemistry"> Chemistry </option>
                                <option value = "Systems and Technology"> Systems and Technology </option>
                            </optgroup><br>

                            <optgroup label = "Sciences">
                                <option value = "Balance of matter and energy"> Balance of matter and energy </option>
                                <option value = "Biophysics"> Biophysics </option>
                                <option value = "Biology"> Biology </option>
                                <option value = "Cell biology"> Cell biology </option>
                                <option value = "Computational biology"> Computational biology </option>
                                <option value = "Molecular biology"> Molecular biology </option>
                                <option value = "Biochemistry"> Biochemistry </option>
                                <option value = "Metabolic biochemistry"> Metabolic biochemistry </option>
                                <option value = "Catalysis"> Catalysis </option>
                                <option value = "Agricultural Sciences"> Agricultural Sciences </option>
                                <option value = "Electric circuits"> Electric circuits </option>
                                <option value = "Machine design"> Machine design </option>
                                <option value = "Ecology"> Ecology </option>
                                <option value = "Electromagnetism"> Electromagnetism </option>
                                <option value = "Analog electronics"> Analog electronics </option>
                                <option value = "Static"> Static </option>
                                <option value = "Physics 1"> Physics 1 </option>
                                <option value = "Physics 2"> Physics 2 </option>
                                <option value = "Biomechanical physics"> Biomechanical physics </option>
                                <option value = "Physicochemistry"> Physicochemistry </option>
                                <option value = "Genetics"> Genetics </option>
                                <option value = "Geoscience"> Geoscience </option>
                                <option value = "Geology"> Geology </option>
                                <option value = "Hydrology"> Hydrology </option>
                                <option value = "Fluid and solid mechanics"> Fluid and solid mechanics </option>
                                <option value = "Mechatronics"> Mechatronics </option>
                                <option value = "Metrology"> Metrology </option>
                                <option value = "Microbiology"> Microbiology </option>
                                <option value = "Analytical chemistry"> Analytical chemistry </option>
                                <option value = "General chemistry"> General chemistry </option>
                                <option value = "Inorganic chemistry"> Inorganic chemistry </option>
                                <option value = "Organic chemistry"> Organic chemistry </option>
                                <option value = "Strength of materials"> Strength of materials </option>
                                <option value = "Thermodynamics"> Thermodynamics </option>
                            </optgroup> <br>

                            <optgroup label = "Political and Social Sciences">
                                <option value = "Anthropology"> Anthropology </option>
                                <option value = "Political science"> Political science </option>
                                <option value = "Common law"> Common law </option>
                                <option value = "Criminology"> Criminology </option>
                                <option value = "Civil law"> Civil law </option>
                                <option value = "Commercial and commercial law"> Commercial and commercial law </option>
                                <option value = "Constitutional law"> Constitutional law </option>
                                <option value = "International law"> International law </option>
                                <option value = "Labor law"> Labor law </option>
                                <option value = "Criminal law"> Criminal law </option>
                                <option value = "Private law"> Private law </option>
                                <option value = "Procedural law"> Procedural law </option>
                                <option value = "Public law"> Public law </option>
                                <option value = "Roman law"> Roman law </option>
                                <option value = "Human rights"> Human rights </option>
                                <option value = "Philosophy"> Philosophy </option>
                                <option value = "Hermeneutics"> Hermeneutics </option>
                                <option value = "History and geography"> History and geography </option>
                                <option value = "Human resources"> Human resources </option>
                                <option value = "Writing and grammar"> Writing and grammar </option>
                                <option value = "International relations"> International relations </option>
                                <option value = "Sociology"> Sociology </option>
                                <option value = "Theology"> Theology </option>
                            </optgroup><br>

                            <optgroup label = "Economics, Finance and Accounting">
                                <option value = "Financial analysis"> Financial analysis </option>
                                <option value = "Trade"> Trade </option>
                                <option value = "Accounting"> Accounting </option>
                                <option value = "Costs"> Costs </option>
                                <option value = "Econometrics"> Econometrics </option>
                                <option value = "International economy"> International economy </option>
                                <option value = "Mathematical economics"> Mathematical economics </option>
                                <option value = "Finance"> Finance </option>
                                <option value = "Macroeconomic fundamentals"> Macroeconomic fundamentals </option>
                                <option value = "Microeconomic fundamentals"> Microeconomic fundamentals </option>
                                <option value = "Tax"> Tax </option>
                                <option value = "Macroeconomics 1"> Macroeconomics 1 </option>
                                <option value = "Macroeconomics 2"> Macroeconomics 2 </option>
                                <option value = "Financial math"> Financial math </option>
                                <option value = "Marketing"> Marketing </option>
                                <option value = "Stock market"> Stock market </option>
                                <option value = "Marketing and sales"> Marketing and sales </option>
                                <option value = "Microeconomics 1"> Microeconomics 1 </option>
                                <option value = "Microeconomics 2"> Microeconomics 2 </option>
                                <option value = "Niif"> Niif </option>
                                <option value = "Budget"> Budget </option>
                                <option value = "Financial simulation"> Financial simulation </option>
                                <option value = "Game theory"> Game theory </option>
                                <option value = "Consumer theory"> Consumer theory </option>
                                <option value = "Trading"> Trading </option>
                                </optgroup><br>

                                <optgroup label = "Sports">
                                <option value = "Chess"> Chess </option>
                                <option value = "Martial arts"> Martial arts </option>
                                <option value = "Basketball"> Basketball </option>
                                <option value = "Box / kick boxing"> Box / kick boxing </option>
                                <option value = "Personal trainer"> Personal trainer </option>
                                <option value = "Soccer"> Soccer </option>
                                <option value = "Drone management"> Drone management </option>
                                <option value = "Mma (mixed martial arts)"> Mma (mixed martial arts) </option>
                                <option value = "Swimming"> Swimming </option>
                                <option value = "Skating"> Skating </option>
                                <option value = "Pilates"> Pilates </option>
                                <option value = "Slackline"> Slackline </option>
                                <option value = "Squash"> Squash </option>
                                <option value = "Tennis"> Tennis </option>
                                <option value = "Zumba"> Zumba </option>
                            </optgroup><br>

                            <optgroup label = "Engineering">
                                <option value = "Anadec"> Anadec </option>
                                <option value = "Database"> Database </option>
                                <option value = "linux database"> linux database </option>
                                <option value = "Quality"> Quality </option>
                                <option value = "Analog communications"> Analog communications </option>
                                <option value = "Production control"> Production control </option>
                                <option value = "Production fundamentals"> Production fundamentals </option>
                                <option value = "Civil engineering"> Civil engineering </option>
                                <option value = "Artificial intelligence"> Artificial intelligence </option>
                                <option value = "Production logistics"> Production logistics </option>
                                <option value = "Machine learning"> Machine learning </option>
                                <option value = "Engineering Models 1 and 2"> Engineering Models 1 and 2 </option>
                                <option value = "Simulation"> Simulation </option>
                                <option value = "Decision support system"> Decision support system </option>
                                <option value = "Management control system"> Management control system </option>
                                <option value = "Analog control systems"> Analog control systems </option>
                                <option value = "Discrete control systems"> Discrete control systems </option>
                            </optgroup> <br>

                            <optgroup label = "Musical Instruments">
                                <option value = "Accordion"> Accordion </option>
                                <option value = "Low"> Low </option>
                                <option value = "Battery"> Battery </option>
                                <option value = "Musical composition"> Musical composition </option>
                                <option value = "Flute"> Flute </option>
                                <option value = "Music recording and production"> Music recording and production </option>
                                <option value = "Guitar"> Guitar </option>
                                <option value = "Electric guitar"> Electric guitar </option>
                                <option value = "Sound engineering"> Sound engineering </option>
                                <option value = "Piano"> Piano </option>
                                <option value = "Vocal technique"> Vocal technique </option>
                                <option value = "Music theory"> Music theory </option>
                                <option value = "Trumpet"> Trumpet </option>
                                <option value = "Ukulele"> Ukulele </option>
                                <option value = "Violin"> Violin </option>
                            </optgroup><br>

                            <optgroup label = "Mathematics and college probability">
                                <option value = "Linear algebra"> Linear algebra </option>
                                <option value = "Mathematical analysis"> Mathematical analysis </option>
                                <option value = "Differential calculation"> Differential calculation </option>
                                <option value = "Integral calculation"> Integral calculation </option>
                                <option value = "Multivariate calculation"> Multivariate calculation </option>
                                <option value = "Vector calculation"> Vector calculation </option>
                                <option value = "Differential equations"> Differential equations </option>
                                <option value = "Applied Statistics"> Applied Statistics </option>
                                <option value = "Descriptive statistics"> Descriptive statistics </option>
                                <option value = "Inferential statistics"> Inferential statistics </option>
                                <option value = "Geometry"> Geometry </option>
                                <option value = "Structural math"> Structural math </option>
                                <option value = "Probabilistic models"> Probabilistic models </option>
                                <option value = "Pre-calculation"> Pre-calculation </option>
                                <option value = "Probability 1"> Probability 1 </option>
                                <option value = "Probability 2"> Probability 2 </option>
                                <option value = "Probability and statistic 1"> Probability and statistic 1 </option>
                                <option value = "Probability and statistics 2"> Probability and statistics 2 </option>
                                <option value = "Trigonometry"> Trigonometry </option>
                                <option value = "Complex variable"> Complex variable </option>
                            </optgroup>
                            
                        </select>
                        <br>

                        <input type="checkbox" class="check3" id="check_otros" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Guru Other Professions
                        </label>
                        <select required id="otros" name="otros" class="cajas"> 
                            <option value="">please select</option>
                            <option value = "Lawyer“ State Contracting "> Lawyer“ State Contracting </option>
                            <option value = "Lawyer“ Commercial Contracting "> Lawyer“ Commercial Contracting </option>
                            <option value = "Lawyer" Civil Contract "> Lawyer" Civil Contract </option>
                            <option value = "Lawyer“ Criminal Contracting "> Lawyer“ Criminal Contracting </option>
                            <option value = "Lawyer“ Contracting Intellectual Property "> Lawyer“ Contracting Intellectual Property </option>
                            <option value = "Lawyer“ State Tax Contracting "> Lawyer“ State Tax Contracting </option>
                            <option value = "Companion"> Companion </option>
                            <option value = "Actor"> Actor </option>
                            <option value = "Actuary"> Actuary </option>
                            <option value = "Airport Administrator"> Airport Administrator </option>
                            <option value = "Company Administrator"> Company Administrator </option>
                            <option value = "Customs Agent"> Customs Agent </option>
                            <option value = "Stockbroker"> Stockbroker </option>
                            <option value = "Police Officer"> Police Officer </option>
                            <option value = "Shipping Agent"> Shipping Agent </option>
                            <option value = "Immigration Agent"> Immigration Agent </option>
                            <option value = "Trademark and Patent Agent"> Trademark and Patent Agent </option>
                            <option value = "Shipping Agent"> Shipping Agent </option>
                            <option value = "Port Agent"> Port Agent </option>
                            <option value = "Commercial Agents, Brokers and the like"> Commercial Agent, Brokers and Like-minded </option>
                            <option value = "Customs Agent and Border Inspectors"> Customs Agent and Border Inspectors </option>
                            <option value = "Purchasing Agent, Brokerage and Consignees"> Purchasing Agent, Brokerage and Consignees </option>
                            <option value = "Tax Agent"> Tax Agent </option>
                            <option value = "Insurance Agent"> Insurance Agent </option>
                            <option value = "Travel Agent"> Travel Agents </option>
                            <option value = "Real Estate Agent"> Real Estate Agent </option>
                            <option value = "Agent and Traffic Police"> Agent and Traffic Police </option>
                            <option value = "Diplomatic Attaché"> Diplomatic Attaché </option>
                            <option value = "Farmer"> Farmer </option>
                            <option value = "Agronomist"> Agronomist </option>
                            <option value = "Economic Analyst"> Economic Analyst </option>
                            <option value = "Human Management Analyst"> Human Management Analyst </option>
                            <option value = "Market Analyst"> Market Analyst </option>
                            <option value = "Claims Analyst"> Claims Analyst </option>
                            <option value = "Computer Systems Analyst"> Computer Systems Analyst </option>
                            <option value = "Analyst and Financial Agents"> Analyst and Financial Agents </option>
                            <option value = "Anthropologists"> Anthropologist </option>
                            <option value = "Archaeologists"> Archaeologist </option>
                            <option value = "Architect"> Architect </option>
                            <option value = "Craftsman of Wood and Similar Materials"> Craftsman of Wood and Similar Materials </option>
                            <option value = "Craftsman of Fabrics, Leather and Similar Materials"> Craftsman of Fabrics, Leather and Similar Materials </option>
                            <option value = "Financial Advisor"> Financial Advisor </option>
                            <option value = "Legal Advisor"> Legal Advisor </option>
                            <option value = "Film, Theater, Television and Related Assistant"> Film, Theater, Television and Related Assistant </option>
                            <option value = "Accounting Assistant"> Accounting Assistant </option>
                            <option value = "Library and File Assistant"> Library and File Assistant </option>
                            <option value = "Legal Assistant"> Legal Assistant </option>
                            <option value = "Foreign Trade Assistant"> Foreign Trade Assistant </option>
                            <option value = "Social and Community Work Assistant"> Social and Community Work Assistant </option>
                            <option value = "Astrophysicist"> Astrophysicist </option>
                            <option value = "Astrologer"> Astrologer </option>
                            <option value = "Astronomer"> Astronomer </option>
                            <option value = "Athletes, Athletes and the Like"> Athletes, Athletes and the Like </option>
                            <option value = "Accounting Auditor"> Accounting Auditor </option>
                            <option value = "Financial Auditor"> Financial Auditor </option>
                            <option value = "Internal Auditor"> Internal Auditor </option>
                            <option value = "Systems Auditor"> Systems Auditor </option>
                            <option value = "Portfolio and Related Assistant"> Portfolio and Related Assistant </option>
                            <option value = "Mail Service Assistant"> Mail Service Assistant </option>
                            <option value = "Drugstore Assistant"> Drugstore Assistant </option>
                            <option value = "Licensing Assistant"> Licensing Assistant </option>
                            <option value = "Mechanical Auxiliary"> Mechanical Auxiliary </option>
                            <option value = "Flight Attendant"> Flight Attendant </option>
                            <option value = "Administrative and Related Assistant"> Administration and Related Assistant </option>
                            <option value = "Nursing Assistant"> Nursing Assistant </option>
                            <option value = "Dental Assistant"> Dental Assistant </option>
                            <option value = "Real Estate Appraiser"> Real Appraiser </option>
                            <option value = "Poultry farmers"> Poultry farmers </option>
                            <option value = "Stewardess"> Stewardess </option>
                            <option value = "Bacteriologist"> Bacteriologist </option>
                            <option value = "Dancer"> Dancer </option>
                            <option value = "Banderillero"> Banderillero </option>
                            <option value = "Boatman"> Boatman </option>
                            <option value = "Baseball Player"> Baseball Player </option>
                            <option value = "Librarians, Documentalists and Allied"> Librarians, Documentalists and Allied People </option>
                            <option value = "Biophysicist"> Biophysicist </option>
                            <option value = "Biographer"> Biographer </option>
                            <option value = "Biologist"> Biologist </option>
                            <option value = "Biochemist"> Biochemist </option>
                            <option value = "Firefighters and Rescuers"> Firefighters and Rescuers </option>
                            <option value = "Embroiderers and Allied"> Embroiderers and Allied </option>
                            <option value = "Botanical"> Botanical </option>
                            <option value = "Boxer"> Boxer </option>
                            <option value = "Coffee grower"> Coffee grower </option>
                            <option value = "Cashier"> Cashier </option>
                            <option value = "Typesetters, Typographers and Allied"> Typesetters, Typesetters and Allied </option>
                            <option value = "Cameraman"> Cameraman </option>
                            <option value = "Singer"> Singer </option>
                            <option value = "Aviation Captain"> Aviation Captain </option>
                            <option value = "Captains, Deck Officers and Pilots"> Captains, Deck Officers and Pilots </option>
                            <option value = "Cartoonist"> Cartoonist </option>
                            <option value = "Butcher, Fishermen and Allied"> Butcher, Fishermen and Allied </option>
                            <option value = "Carpenter"> Carpenter </option>
                            <option value = "Cartographer"> Cartographer </option>
                            <option value = "Food and Drink Tasters and Sorters"> Food and Drink Tasters and Sorters </option>
                            <option value = "Hunters and Trappers"> Hunters and Trappers </option>
                            <option value = "Basketmakers, Bruceros and Allied"> Basketmakers, Bruceros and Allied </option>
                            <option value = "Catalogs of Museum, Archives and Related Parts"> Catalogers of Museum, Archives and Related Parts </option>
                            <option value = "Professor"> Professor </option>
                            <option value = "Cyclist"> Cyclist </option>
                            <option value = "Scientific"> Scientific </option>
                            <option value = "Cooks"> Cooks </option>
                            <option value = "Data Encoder, Printing and Related Proof Corrector"> Data Encoder, Printing and Related Proof Corrector </option>
                            <option value = "Columnist"> Columnist </option>
                            <option value = "Fire Station Commander"> Fire Station Commander </option>
                            <option value = "Comedian"> Comedian </option>
                            <option value = "Merchant"> Merchant </option>
                            <option value = "Family Commissioner"> Family Commissioner </option>
                            <option value = "Composer"> Composer </option>
                            <option value = "Social Communicator"> Social Communicator </option>
                            <option value = "Councilor"> Councilor </option>
                            <option value = "State Councilor"> State Councilor </option>
                            <option value = "Legal Counsel"> Legal Counsel </option>
                            <option value = "Marriage Counselor"> Marriage Counselor </option>
                            <option value = "Occupational Advisor"> Occupational Advisor </option>
                            <option value = "Educational Counselor"> Educational Counselor </option>
                            <option value = "Consul"> Consul </option>
                            <option value = "Environmental Consultant"> Environmental Consultant </option>
                            <option value = "Financial Consultant"> Financial Consultant </option>
                            <option value = "Organizational Consultant"> Organizational Consultant </option>
                            <option value = "Social Policy Consultant"> Social Policy Consultant </option>
                            <option value = "Human Resources Consultant"> Human Resources Consultant </option>
                            <option value = "Counters"> Counters </option>
                            <option value = "Controllers"> Controllers </option>
                            <option value = "General Services Coordinator"> General Services Coordinator </option>
                            <option value = "Copilot Aircraft"> Copilot Aircraft </option>
                            <option value = "Choreographer and Related"> Choreographer and Related </option>
                            <option value = "Car Corridor"> Car Corridor </option>
                            <option value = "Stock Broker"> Stock Broker </option>
                            <option value = "Press Correspondent"> Press Correspondent </option>
                            <option value = "Livestock and Domestic Animals Breeder"> Livestock and Domestic Animals Breeder </option>
                            <option value = "Breeder of Aquatic Species"> Breeder of Aquatic Species </option>
                            <option value = "Breeder of Insectors, Sericultures and Related"> Breeder of Insectors, Sericultures and Related </option>
                            <option value = "Glazier"> Glazier </option>
                            <option value = "Arts and Media Critic"> Arts and Media Critic </option>
                            <option value = "Cuentero"> Cuentero </option>
                            <option value = "Art Curator"> Art Curator </option>
                            <option value = "Urban Curator"> Urban Curator </option>
                            <option value = "Fingerprint specialist"> Fingerprint specialist </option>
                            <option value = "Deans"> Deans </option>
                            <option value = "Declarer"> Declarer </option>
                            <option value = "Artistic Director"> Artistic Director </option>
                            <option value = "Director Cinema"> Director Cinema </option>
                            <option value = "Maintenance Department Director"> Maintenance Department Director </option>
                            <option value = "Director of Security Department"> Director of Security Department </option>
                            <option value = "Director of Aviation School"> Director of Aviation School </option>
                            <option value = "General Director of Manufacturing Industry"> General Director of Manufacturing Industry </option>
                            <option value = "Musical Group Director"> Musical Group Director </option>
                            <option value = "Director of the Financial and Administrative Department"> Director of the Financial and Administrative Department </option>
                            <option value = "Director of the Research and Development Department"> Director of the Research and Development Department </option>
                            <option value = "Personnel Department Director"> Personnel Department Director </option>
                            <option value = "Advertising and Marketing Department Director"> Advertising and Marketing Department Director </option>
                            <option value = "Illustrators"> Illustrators </option>
                            <option value = "Graphic and Industrial Designer"> Graphic and Industrial Designer </option>
                            <option value = "DiskJockey"> DiskJockey </option>
                            <option value = "Playwright"> Playwright </option>
                            <option value = "Ecologist"> Ecologist </option>
                            <option value = "Ecologist"> Ecologist </option>
                            <option value = "Economists"> Economists </option>
                            <option value = "Edil"> Edil </option>
                            <option value = "Educators"> Educators </option>
                            <option value = "Electrician"> Electrician </option>
                            <option value = "Electrotechnical"> Electrotechnical </option>
                            <option value = "Entrepreneur"> Entrepreneur </option>
                            <option value = "Trainer"> Trainer </option>
                            <option value = "Writer and Related"> Writer and Related </option>
                            <option value = "Statistic"> Statistic </option>
                            <option value = "Etymologist"> Etymologist </option>
                            <option value = "Ethnographer"> Ethnographer </option>
                            <option value = "Ethnologist"> Ethnologist </option>
                            <option value = "Pharmacist"> Pharmacist </option>
                            <option value = "Pharmacologist"> Pharmacologist </option>
                            <option value = "Philologist"> Philologist </option>
                            <option value = "Philosopher"> Philosopher </option>
                            <option value = "Fiscal"> Fiscal </option>
                            <option value = "Physiatrist"> Physiatrist </option>
                            <option value = "Physical"> Physical </option>
                            <option value = "Physiologist"> Physiologist </option>
                            <option value = "Floricultor"> Floricultor </option>
                            <option value = "Plumber and Pipe Fitters"> Plumber and Pipe Fitters </option>
                            <option value = "Photographer"> Photographer </option>
                            <option value = "Fruit grower"> Fruit grower </option>
                            <option value = "Physiotherapist"> Physiotherapist </option>
                            <option value = "Phonologue"> Phonologist </option>
                            <option value = "Forensics"> Forensics </option>
                            <option value = "Photographer"> Photographer </option>
                            <option value = "Footballer"> Footballer </option>
                            <option value = "Rancher"> Rancher </option>
                            <option value = "Geologist"> Geologist </option>
                            <option value = "Geotechnical"> Geotechnical </option>
                            <option value = "Gemologist"> Gemologist </option>
                            <option value = "Geneticist"> Geneticist </option>
                            <option value = "Geophysicist"> Geophysical </option>
                            <option value = "Geographer"> Geographer </option>
                            <option value = "Geriatrician"> Geriatrician </option>
                            <option value = "Indigenous Community Governor"> Indigenous Community Governor </option>
                            <option value = "Print Engravers and Photo Engravers"> Print Engravers and Photo Engravers </option>
                            <option value = "Glass Etchers"> Glass Etchers </option>
                            <option value = "Graphologist"> Graphologist </option>
                            <option value = "Tooling and related"> Tooling and related </option>
                            <option value = "Blacksmiths and Smiths"> Blacksmiths and Smiths </option>
                            <option value = "Histologist"> Histologist </option>
                            <option value = "Histopathologist"> Histopathologist </option>
                            <option value = "Comedian"> Comedian </option>
                            <option value = "Hygienists"> Hygienists </option>
                            <option value = "Historian"> Historian </option>
                            <option value = "Ichthologist"> Ichthologist </option>
                            <option value = "Graphic Arts Printer"> Graphic Arts Printer </option>
                            <option value = "Agricultural Engineer"> Agricultural Engineer </option>
                            <option value = "Agroindustrial Engineer"> Agroindustrial Engineer </option>
                            <option value = "Agronomist Engineer"> Agronomist Engineer </option>
                            <option value = "Food Engineer"> Food Engineer </option>
                            <option value = "Environmental Engineer"> Environmental Engineer </option>
                            <option value = "Biomedical Engineer"> Biomedical Engineer </option>
                            <option value = "Civil Engineer"> Civil Engineer </option>
                            <option value = "Electrical Engineer"> Electrical Engineer </option>
                            <option value = "Electrical Engineer"> Electrical Engineer </option>
                            <option value = "Electromechanical Engineer"> Electromechanical Engineer </option>
                            <option value = "Electronic Engineer"> Electronic Engineer </option>
                            <option value = "Industrial Engineer"> Industrial Engineer </option>
                            <option value = "Forest Engineer"> Forest Engineer </option>
                            <option value = "Genetic Engineer"> Genetic Engineer </option>
                            <option value = "Geological Engineer"> Geological Engineer </option>
                            <option value = "Hydraulic Engineer"> Hydraulic Engineer </option>
                            <option value = "Mechanical Engineer"> Mechanical Engineer </option>
                            <option value = "Mechatronic Engineer"> Mechatronic Engineer </option>
                            <option value = "Naval Engineer"> Naval Engineer </option>
                            <option value = "Fisheries Engineer"> Fisheries Engineer </option>
                            <option value = "Petroleum Engineer"> Petroleum Engineer </option>
                            <option value = "Production Engineer"> Production Engineer </option>
                            <option value = "Chemical Engineer"> Chemical Engineer </option>
                            <option value = "Sanitary Engineer"> Sanitary Engineer </option>
                            <option value = "Industrial Safety Engineer"> Industrial Safety Engineer </option>
                            <option value = "Systems Engineer"> Systems Engineer </option>
                            <option value = "Sound Engineer"> Sound Engineer </option>
                            <option value = "Telecommunications Engineer"> Telecommunications Engineer </option>
                            <option value = "Textile Engineer"> Textile Engineer </option>
                            <option value = "Transportation Engineer"> Transportation Engineer </option>
                            <option value = "Flight Engineer"> Flight Engineer </option>
                            <option value = "Mining, Metallurgical Engineer"> Mining, Metallurgical Engineer </option>
                            <option value = "Surgical Instrumentor"> Surgical Instrumentor </option>
                            <option value = "Interpreter"> Interpreter </option>
                            <option value = "Controller"> Controller </option>
                            <option value = "Researcher"> Researcher </option>
                            <option value = "Gardener"> Gardener </option>
                            <option value = "Judge"> Judge </option>
                            <option value = "Lexicographer"> Lexicographer </option>
                            <option value = "Lexicologist"> Lexicologist </option>
                            <option value = "Libretista"> Libretista </option>
                            <option value = "Licensed"> Licensed </option>
                            <option value = "Radio, Television and Related Announcer"> Radio, Television and Related Announcer </option>
                            <option value = "Lighting technician"> Lighting technology </option>
                            <option value = "Master"> Master </option>
                            <option value = "Magistrate"> Magistrate </option>
                            <option value = "Rail Vehicle Driver"> Rail Vehicle Driver </option>
                            <option value = "Deck and Allied Sailors"> Deck and Allied Sailors </option>
                            <option value = "Mockup"> Mockup </option>
                            <option value = "Tailor"> Tailor </option>
                            <option value = "Mathematician"> Mathematician </option>
                            <option value = "Industrial Mechanic"> Industrial Mechanic </option>
                            <option value = "Waiter, Innkeepers and Related"> Waiter, Innkeepers and Related </option>
                            <option value = "Meteorologists"> Meteorologists </option>
                            <option value = "Mime Theater and Street"> Mime Theater and Street </option>
                            <option value = "Miners and Stonemasons"> Miners and Stonemasons </option>
                            <option value = "Minister"> Minister </option>
                            <option value = "Musician"> Musician </option>
                            <option value = "Notary"> Notary </option>
                            <option value = "Novillero"> Novillero </option>
                            <option value = "Oceanographer"> Oceanographer </option>
                            <option value = "Dentist"> Dentist </option>
                            <option value = "Army Officer"> Army Officer </option>
                            <option value = "Police Officer"> Police Officer </option>
                            <option value = "Naval Officer"> Naval Officer </option>
                            <option value = "Air Force Officer"> Air Force Officer </option>
                            <option value = "Ophthalmologist"> Ophthalmologist </option>
                            <option value = "Machine Operator"> Machine Operator </option>
                            <option value = "Optometrist"> Optometrist </option>
                            <option value = "Orthodontist"> Orthodontist </option>
                            <option value = "Orthopedist"> Orthopedist </option>
                            <option value = "Paleobiologist"> Paleobiologist </option>
                            <option value = "Paleograph"> Paleograph </option>
                            <option value = "Palaiologos"> Palaiologos </option>
                            <option value = "Paleontologist"> Paleontologist </option>
                            <option value = "Baker, Confectioner and Confectioner"> Baker, Confectioner and Confectioner </option>
                            <option value = "Skater"> Skater </option>
                            <option value = "Pathologist"> Pathologist </option>
                            <option value = "Pedagogue"> Pedagogue </option>
                            <option value = "Journalist"> Journalist </option>
                            <option value = "Expert"> Expert </option>
                            <option value = "Periodontist"> Periodontist </option>
                            <option value = "Personero"> Personero </option>
                            <option value = "Fisherman"> Fisherman </option>
                            <option value = "Airplane Pilot, Racing Cars, Related"> Airplane Pilot, Racing Cars, Related </option>
                            <option value = "Art Painter"> Art Painter </option>
                            <option value = "Fish farmer"> Fish farmer </option>
                            <option value = "Environment Planner"> Environment Planner </option>
                            <option value = "Transit Planner"> Transit Planner </option>
                            <option value = "Plumber"> Plumber </option>
                            <option value = "Poet"> Poet </option>
                            <option value = "Political scientist"> Political scientist </option>
                            <option value = "Polvorero"> Polvorero </option>
                            <option value = "Pig farmer"> Pig farmer </option>
                            <option value = "Advertiser"> Advertiser </option>
                            <option value = "Attorney"> Attorney </option>
                            <option value = "Chemical and Related"> Chemical and Related </option>
                            <option value = "Radio technician"> Radio technician </option>
                            <option value = "Rector of Educational Institution"> Rector of Educational Institution </option>
                            <option value = "Registrar"> Registrar </option>
                            <option value = "Rejoneador"> Rejoneador </option>
                            <option value = "Watchmaker"> Watchmaker </option>
                            <option value = "Photo Reporter"> Photo Reporter </option>
                            <option value = "Representative to the House"> Representative to the House </option>
                            <option value = "Statutory Auditor"> Statutory Auditor </option>
                            <option value = "Lifeguard"> Lifeguard </option>
                            <option value = "Tailors, Couturiers"> Tailors, Couturiers </option>
                            <option value = "Seismologist"> Seismologist </option>
                            <option value = "Sub Officer Army"> Sub Officer Army </option>
                            <option value = "Sub Officer Police"> Sub Officer Police </option>
                            <option value = "Sub Naval Officer"> Sub Naval Officer </option>
                            <option value = "Deputy Air Force Officer"> Deputy Air Force Officer </option>
                            <option value = "Taxonomist"> Taxonomist </option>
                            <option value = "Technicians in general"> Technicians in general </option>
                            <option value = "Therapist"> Therapist </option>
                            <option value = "Treasurer"> Treasurer </option>
                            <option value = "Surveyor"> Surveyor </option>
                            <option value = "Torero"> Torero </option>
                            <option value = "Toxicologist"> Toxicologist </option>
                            <option value = "Translator"> Translator </option>
                            <option value = "Tutor"> Tutor </option>
                            <option value = "Veterinarian"> Veterinarian </option>
                            <option value = "Virologist"> Virologist </option>
                            <option value = "Volcanologist"> Vulcanologist </option>
                            <option value = "Xylograph"> Xylograph </option>
                            <option value = "Zoologist"> Zoologist </option>
                            <option value = "Zootechnician"> Zootechnician </option>
                        </select><br>

                         <input type="checkbox" class="check3" id="check_constructor" onchange="seleccionar_guru(this)">
                         <label for="nombre" class="titulosb" style="font-size: 20px">
                        &nbsp;&nbsp; Construction Specialist Guru
                        </label>
                        <select required id="constructor" name="constructor" class="cajas"> 
                            
                        ultados de traducción
<option value="">Please select</option>
                            <option value="Bathrooms">Bathrooms</option>
<option value="Water Heaters">Water Heaters</option>
<option value="Smart Home & Security">Smart Home & Security</option>
                                <option value="Locks and Hardware">Locks and Hardware</option>
<option value="Air conditioning">Air conditioning</option>
                                <option value="Kitchen">Kitchen</option>
<option value="Bathroom Complements">Bathroom Complements</option>
                                <option value="Construction and Hardware">Construction and Hardware</option>
<option value="Curtains and Blinds">Curtains and Blinds</option>
<option value="Decoration">Decoration</option>
                                <option value="Electricity">Electricity</option>
<option value="Kitchen Appliances">Kitchen Appliances</option>
                                <option value="Home Appliances">Home Appliances</option>
<option value="Stairs and Removals">Stairs and Removals</option>
                                <option value="Stoves, Ovens & Hoods">Stoves, Ovens & Hoods</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Tools">Tools</option>
<option value="Power Tools">Power Tools</option>
<option value="Lighting">Lighting</option>
<option value="Waterproofing">Waterproofing</option>
<option value="Garden">Garden</option>
                                <option value="Laundry and Laundry">Laundry and Laundry</option>
                                <option value="Cleaning">Cleaning</option>
                                <option value="White Line">White Line</option>
<option value="Woods, Boards and Hardware">Woods, Boards and Hardware</option>
<option value="Building Materials">Building Materials</option>
<option value="Patio Furniture">Patio Furniture</option>
<option value="Organizers">Organizers</option>
<option value="Paintings">Paintings</option>
<option value="Floors and Walls">Floors and Walls</option>
                                <option value="Floors and Paints for your Spaces">Floors and Paints for your Spaces</option>
<option value="Plumbing">Plumbing</option>
<option value="Doors and Windows">Doors and Windows</option>
<option value="Security">Security</option>
                                <option value="Technology and Television">Technology and Television</option>
<option value="Slates and Drywall">Slates and Drywall</option>
<option value="Ventilation">Ventilation</option>

<tr><td><li class="bottomless" style="color: #333; " value="title">Building Professional:</li></td></tr>

                                        <option value="Bricklayer">Bricklayer</option>
    <option value="Tileter">Tileter</option>
<option value="Architect">Architect</option>
<option value="Bioclimatic Architect">Bioclimatic Architect</option>
<option value="Landscape Architect">Landscape Architect</option>
<option value="Technical Architect">Technical Architect</option>
<option value="Home Energy Advisor">Home Energy Advisor</option>
<option value="Topography Wizard">Topography Wizard</option>
<option value="Works Technical Assistant">Works Technical Assistant</option>
<option value="Diver">Diver</option>
<option value="Building Construction Foreman">Building Construction Foreman</option>
<option value="Carpenter">Carpenter</option>
<option value="Forklift">Forklift</option>
<option value="Build Manager">Build Manager</option>
<option value="Glassman">Glassman</option>
<option value="Decorator">Decorator</option>
<option value="Draughtsman">Draughtsman</option>
<option value="Quarry Manager">Quarry Manager</option>
<option value="Works Manager">Works Manager</option>
<option value="Landscaping Director">Landscaping Director</option>
<option value="Build Manager">Build Manager</option>
<option value="Work Manager">Work Manager</option>
<option value="Service manager">Service manager</option>
<option value="Former">Former</option>
<option value="Energy Efficiency Expert">Energy Efficiency Expert</option>
<option value="Expert in Building Energy Simulation">Expert in Building Energy Simulation</option>
<option value="Ferrallista">Ferrallista</option>
<option value="Geologist">Geologist</option>
<option value="Hydrogeologist">Hydrogeologist</option>
<option value="Civil Engineer">Civil Engineer</option>
<option value="Construction Engineer">Construction Engineer</option>
<option value="Offshore Oil Rig Engineer">Offshore Oil Rig Engineer</option>
<option value="Transport Engineer">Transport Engineer</option>
<option value="Structural Engineer">Structural Engineer</option>
<option value="Geological Engineer">Geological Engineer</option>
<option value="Environmental Engineer">Environmental Engineer</option>
<option value="Petroleum Engineer">Petroleum Engineer</option>
<option value="Technical Construction Engineer">Technical Construction Engineer</option>
<option value="Works inspector">Works inspector</option>
<option value="Thermal insulation and soundproofing installer">Thermal insulation and soundproofing installer</option>
<option value="Fence Installer">Fence Installer</option>
<option value="Fence Installer">Fence Installer</option>
<option value="Installer of heating and air conditioning systems">Installer of heating and air conditioning systems</option>
<option value="Window Installer">Window Installer</option>
<option value="Electric Installer">Electric Installer</option>
<option value="ICT technology installer and repairer">ICT technology installer and repairer</option>
<option value="Construction Plan Interpreter">Construction Plan Interpreter</option>
<option value="Masoner">Masonler</option>
<option value="Building Maintainer">Building Maintainer</option>
<option value="Model Maker">Model Maker</option>
<option value="Construction machinery mechanic">Construction machinery mechanic</option>
<option value="Scaffolder">Scaffolder</option>
<option value="Metal Structures Erector">Metal Structures Erector</option>
<option value="Worker specializing in toolmaking">Worker specializing in toolmaking</option>
<option value="Crane operator">Crane operator</option>
<option value="Operator of construction machinery">Operator of construction machinery</option> <option Operator of woodworking machines')" value="Operator of woodworking machines">Operator of woodworking machines the wood</option>
<option value="Forklift Operator">Forklift Operator</option>
<option value="Demolition Operator">Demolition Operator</option>
<option value="Building Warehouse Operator">Building Warehouse Operator</option>
<option value="Construction pawn">Construction pawn</option>
<option value="Construction Expert">Construction Expert</option>
<option value="Urban development support staff">Urban development support staff</option>
<option value="Construction material supplier">Construction material supplier</option>
<option value="Furniture polish">Furniture polish</option>
<option value="Build Recaller">Build Recaller</option>
<option value="Welder / Boilermaker">Welder / Boilermaker</option>
<option value="Roofer">Roofer</option>
<option value="Wall insulation technician">Wall insulation technician</option>
<option value="Waterproofing Technician">Waterproofing Technician</option>
<option value="Civil or structural engineering technician">Civil or structural engineering technician</option>
<option value="Construction Technician">Construction Technician</option>
<option value="Ironing technician">Ironing technician</option>
<option value="Surface Coating Technician">Surface Coating Technician</option>
<option value="Building Design Technician">Building Design Technician</option>
<option value="Geologist Technician"> </option>
<option value="Survey Technician">Survey Technician</option>
<option value="Roadworker">Roadworker</option>
<option value="Urbanist">Urbanist</option>
<option value="Plasterer">Plasterer</option>
                            </select>
                            <br><br><br>
                        <div align="center">
                        <input type="image" src="img/continuar3en.png" alt="Submit" style="width: 35%" value="Registrarte"  name="registro" class="botones"/>
                        
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