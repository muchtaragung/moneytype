<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Money Type Quiz Calculation</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?= base_url() ?>assets/assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Money Type Quiz</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
        </div>

    </header>

    <!-- About Section-->
    <section class="page-section bg-white text-black mb-0">
        <div class="container">
            <!-- About Section Content-->
            <center class="mt-1">
                <p style="font-size: 20px;">Please enter details below to see your results, which are completely confidential: <br>
                    (Harap masukkan detail di bawah ini untuk melihat hasil Anda, yang sepenuhnya rahasia)</p>
            </center>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form method="post" action="<?= base_url() ?>result">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">What is your name?</label>
                            <?php
                            echo form_error('name');
                            ?>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <?php
                            echo form_error('email');
                            ?>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone" type="tel" placeholder="(62) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number / WhatsApp</label>
                            <?php
                            echo form_error('phone');
                            ?>
                        </div>
                </div>
            </div>
            <center class="mt-5">
                <p style="font-size: 20px;">Choose any words that apply to you regarding your current tendencies around money: <br>
                    (Pilihlah kata yang mana saja yang sesuai dengan Anda mengenai kecenderungan Anda saat ini seputar uang)</>
            </center>

            <div class="row justify-content-center mt-5">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="anxious" id="Anxious">
                            <label style="font-size: 22px;" class="form-check-label" for="Anxious">
                                &nbsp;Anxious (Cemas)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_in_past" id="Lives in past">
                            <label style="font-size: 22px;" class="form-check-label" for="Lives in past">
                                &nbsp;Lives in past (Hidup di masa lalu)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="trusting" id="Trusting">
                            <label style="font-size: 22px;" class="form-check-label" for="Trusting">
                                &nbsp;Trusting (Cenderung percaya)

                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="addictive" id="Addictive">
                            <label style="font-size: 22px;" class="form-check-label" for="Addictive">
                                &nbsp;Addictive (Bersifat adiktif/ketagihan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="naive" id="Naive">
                            <label style="font-size: 22px;" class="form-check-label" for="Naive">
                                &nbsp;Naive (naif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_betrayed" id="Feels betrayed">
                            <label style="font-size: 22px;" class="form-check-label" for="Feels betrayed">
                                &nbsp;Feels betrayed (Merasa dikhianati)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_critical" id="Highly critical">
                            <label style="font-size: 22px;" class="form-check-label" for="Highly critical">
                                &nbsp;Highly critical (Sangat kritis)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="rescuer" id="Rescuer">
                            <label style="font-size: 22px;" class="form-check-label" for="Rescuer">
                                &nbsp;Rescuer (Penyelamat)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resourceful" id="Resourceful">
                            <label style="font-size: 22px;" class="form-check-label" for="Resourceful">
                                &nbsp;Resourceful (Banyak akal/pandai)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="manipulative" id="Manipulative">
                            <label style="font-size: 22px;" class="form-check-label" for="Manipulative">
                                &nbsp;Manipulative (Manipulatif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="controlling" id="Controlling">
                            <label style="font-size: 22px;" class="form-check-label" for="Controlling">
                                &nbsp;Controlling (Berkuasa/Mengendalikan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_sacrificing" id="Self-sacrificing">
                            <label style="font-size: 22px;" class="form-check-label" for="Self-sacrificing">
                                &nbsp;Self-sacrificing (Berkorban diri)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="compassionate" id="Compassionate">
                            <label style="font-size: 22px;" class="form-check-label" for="Compassionate">
                                &nbsp;Compassionate (Penyayang)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="undisciplined" id="Undisciplined">
                            <label style="font-size: 22px;" class="form-check-label" for="Undisciplined">
                                &nbsp;Undisciplined (Tidak disiplin)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="impulsive" id="Impulsive">
                            <label style="font-size: 22px;" class="form-check-label" for="Impulsive">
                                &nbsp;Impulsive (impulsif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="adventurous" id="Adventurous">
                            <label style="font-size: 22px;" class="form-check-label" for="Adventurous">
                                &nbsp;Adventurous (Berjiwa petualang)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="detached" value="1" id="Detached">
                            <label style="font-size: 22px;" class="form-check-label" for="Detached">
                                &nbsp;Detached (Tidak terikat)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="internally_motivated" id="Internally Motivated">
                            <label style="font-size: 22px;" class="form-check-label" for="Internally Motivated">
                                &nbsp;Internally Motivated (Termotivasi secara internal)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="balanced" id="Balanced">
                            <label style="font-size: 22px;" class="form-check-label" for="Balanced">
                                &nbsp;Balanced (Seimbang)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="passive" id="Passive">
                            <label style="font-size: 22px;" class="form-check-label" for="Passive">
                                &nbsp;Passive (Pasif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_confrontational" id="Non-confrontational	">
                            <label style="font-size: 22px;" class="form-check-label" for=" Non-confrontational	">
                                &nbsp;Non-confrontational (Tidak senang konfrontasi)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="creative" id="Creative">
                            <label style="font-size: 22px;" class="form-check-label" for="Creative">
                                &nbsp;Creative (Kreatif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="transforms_reality" id="Transforms reality	">
                            <label style="font-size: 22px;" class="form-check-label" for=" Transforms reality	">
                                &nbsp;Transforms reality (Mengubah realita)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="spiritual" id="Spiritual">
                            <label style="font-size: 22px;" class="form-check-label" for="Spiritual">
                                &nbsp;Spiritual (Rohani)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="oppressive" id="Oppressive">
                            <label style="font-size: 22px;" class="form-check-label" for="Oppressive">
                                &nbsp;Oppressive (Bersifat menindas)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="perfectionist" id="Perfectionist">
                            <label style="font-size: 22px;" class="form-check-label" for="Perfectionist">
                                &nbsp;Perfectionist (Perfesionis)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="prone_to_blame" id="Prone to blame">
                            <label style="font-size: 22px;" class="form-check-label" for="Prone to blame">
                                &nbsp;Prone to blame (Cenderung menyalahkan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="financially_irresponsible" id="Financially irresponsible">
                            <label style="font-size: 22px;" class="form-check-label" for="Financially irresponsible">
                                &nbsp;Financially irresponsible (Tidak bertanggung jawab secara finansial)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_powerless" id="Feels powerless">
                            <label style="font-size: 22px;" class="form-check-label" for="Feels powerless">
                                &nbsp;Feels powerless (Merasa tidak berdaya)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_fulfilling_prophecy" id="Self-fulfilling prophecy">
                            <label style="font-size: 22px;" class="form-check-label" for="Self-fulfilling prophecy">
                                &nbsp;Self-fulfilling prophecy (Ramalan yang digenapi sendiri)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="disciplined" value="1" id="Disciplined">
                            <label style="font-size: 22px;" class="form-check-label" for="Disciplined">
                                &nbsp;Disciplined (Disiplin)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="confident" value="1" id="Confident">
                            <label style="font-size: 22px;" class="form-check-label" for="Confident">
                                &nbsp;Confident (Percaya diri)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="judgmental" value="1" id="Judgmental">
                            <label style="font-size: 22px;" class="form-check-label" for="Judgmental">
                                &nbsp;Judgmental (Mudah menghakimi)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="careless" value="1" id="Careless">
                            <label style="font-size: 22px;" class="form-check-label" for="Careless">
                                &nbsp;Careless (Ceroboh/Cuek)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="conscious" value="1" id="Conscious">
                            <label style="font-size: 22px;" class="form-check-label" for="Conscious">
                                &nbsp;Conscious (Sadar)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="happy_go_lucky" value="1" id="Happy-go-lucky">
                            <label style="font-size: 22px;" class="form-check-label" for="Happy-go-lucky">
                                &nbsp;Happy-go-lucky (Santai & tak pedulian)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="long_suffering" value="1" id="Long-suffering">
                            <label style="font-size: 22px;" class="form-check-label" for="Long-suffering">
                                &nbsp;Long-suffering (Panjang sabar/rela menderita)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="passive_aggressive" value="1" id="Passive-aggressive">
                            <label style="font-size: 22px;" class="form-check-label" for="Passive-aggressive">
                                &nbsp;Passive-aggressive (Pasif agresif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="wise" value="1" id="Wise">
                            <label style="font-size: 22px;" class="form-check-label" for="Wise">
                                &nbsp;Wise (Bijaksana)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_successful" value="1" id="Financially successful">
                            <label style="font-size: 22px;" class="form-check-label" for="Financially successful">
                                &nbsp;Financially successful (Sukses secara finansial)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="optimistic" value="1" id="Optimistic">
                            <label style="font-size: 22px;" class="form-check-label" for="Optimistic">
                                &nbsp;Optimistic (Optimis)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="love_relationship" value="1" id="Love/Hate Relationship">
                            <label style="font-size: 22px;" class="form-check-label" for="Love/Hate Relationship">
                                &nbsp;Love/Hate Relationship (Antara cinta dan benci)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="materialistic" id="Materialistic">
                            <label style="font-size: 22px;" class="form-check-label" for="Materialistic">
                                &nbsp;Materialistic (Materialistis)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="authentic" value="1" id="Authentic">
                            <label style="font-size: 22px;" class="form-check-label" for="Authentic">
                                &nbsp;Authentic (otentik)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="unattached" value="1" id="Unattached">
                            <label style="font-size: 22px;" class="form-check-label" for="Unattached">
                                &nbsp;Unattached (Tidak terikat)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_dependant" value="1" id="Financially dependant">
                            <label style="font-size: 22px;" class="form-check-label" for="Financially dependant">
                                &nbsp;Financially dependant (Bergantung secara finansial)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="represses_feelings_beliefs" id="Represses feelings & beliefs">
                            <label style="font-size: 22px;" class="form-check-label" for="Represses feelings & beliefs">
                                &nbsp;Represses feelings & beliefs (Menekan perasaan dan keyakinan sendiri)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="obsessive" id="Obsessive/compulsive">
                            <label style="font-size: 22px;" class="form-check-label" for="Obsessive/compulsive">
                                &nbsp;Obsessive/compulsive (Obsesif Kompulsif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unsupported" id="Unsupported">
                            <label style="font-size: 22px;" class="form-check-label" for="Unsupported">
                                &nbsp;Unsupported (Merasa tidak didukung)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reckless" id="Reckless">
                            <label style="font-size: 22px;" class="form-check-label" for="Reckless">
                                &nbsp;Reckless (Sembrono)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="angry" id="Angry">
                            <label style="font-size: 22px;" class="form-check-label" for="Angry">
                                &nbsp;Angry (Marah)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resistant" id="Resistant">
                            <label style="font-size: 22px;" class="form-check-label" for="Resistant">
                                &nbsp;Resistant (Cenderung menentang/melawan)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_emotional" id="Highly emotional">
                            <label style="font-size: 22px;" class="form-check-label" for="Highly emotional">
                                &nbsp;Highly emotional (Sangat emosional)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_rescue" id="Seeks rescue">
                            <label style="font-size: 22px;" class="form-check-label" for="Seeks rescue">
                                &nbsp;Seeks rescue (Menunggu diselamatkan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unforgiving" id="Unforgiving">
                            <label style="font-size: 22px;" class="form-check-label" for="Unforgiving">
                                &nbsp;Unforgiving (Susah memaafkan/mengampuni)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="powerful" id="Powerful">
                            <label style="font-size: 22px;" class="form-check-label" for="Powerful">
                                &nbsp;Powerful (Berdaya)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="goal_oriented" id="Goal-oriented">
                            <label style="font-size: 22px;" class="form-check-label" for="Goal-oriented">
                                &nbsp;Goal-oriented (Berorientasi tujuan/gol)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="calculating" id="Calculating">
                            <label style="font-size: 22px;" class="form-check-label" for="Calculating">
                                &nbsp;Calculating (Berhitung)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_for_today" id="Lives for today">
                            <label style="font-size: 22px;" class="form-check-label" for="Lives for today">
                                &nbsp;Lives for today (Hidup hanya untuk hari ini)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="generous" id="Generous">
                            <label style="font-size: 22px;" class="form-check-label" for="Generous">
                                &nbsp;Generous (Murah hati)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="guided_by_faith" id="Guided by Faith">
                            <label style="font-size: 22px;" class="form-check-label" for="Guided by Faith">
                                &nbsp;Guided by Faith (Dituntun oleh iman)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="discerning" id="Discerning">
                            <label style="font-size: 22px;" class="form-check-label" for="Discerning">
                                &nbsp;Discerning (Cerdas/berpikiran tajam)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="caretaker" id="Caretaker">
                            <label style="font-size: 22px;" class="form-check-label" for="Caretaker">
                                &nbsp;Caretaker (Penjaga/Pemelihara)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resentful" id="Resentful">
                            <label style="font-size: 22px;" class="form-check-label" for="Resentful">
                                &nbsp;Resentful (Mudah tersinggung & membenci)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="restless" id="Restless">
                            <label style="font-size: 22px;" class="form-check-label" for="Restless">
                                &nbsp;Restless (Gelisah)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="fearful" id="Fearful">
                            <label style="font-size: 22px;" class="form-check-label" for="Fearful">
                                &nbsp;Fearful (Penuh ketakutan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="overly_generous" id="Overly generous">
                            <label style="font-size: 22px;" class="form-check-label" for="Overly generous">
                                &nbsp;Overly generous (Terlalu murah hati)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="enlightened" id="Enlightened">
                            <label style="font-size: 22px;" class="form-check-label" for=" Enlightened">
                                &nbsp; Enlightened (Tercerahkan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reclusive" id="Reclusive">
                            <label style="font-size: 22px;" class="form-check-label" for="Reclusive">
                                &nbsp;Reclusive (Tertutup)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_materialistic" id="Non-materialistic">
                            <label style="font-size: 22px;" class="form-check-label" for="Non-materialistic">
                                &nbsp;Non-materialistic (Tidak materialistis)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="indecisive" id="Indecisive">
                            <label style="font-size: 22px;" class="form-check-label" for="Indecisive">
                                &nbsp;Indecisive (Bimbang)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_security" id="Seeks security">
                            <label style="font-size: 22px;" class="form-check-label" for="Seeks security">
                                &nbsp;Seeks security (Mencari aman)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="secretive" id="Secretive">
                            <label style="font-size: 22px;" class="form-check-label" for="Secretive">
                                &nbsp;Secretive (Suka berahasia)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="collaborative" id="Collaborative">
                            <label style="font-size: 22px;" class="form-check-label" for="Collaborative">
                                &nbsp;Collaborative (Kolaboratif)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="over_indulgent" id="Over-Indulgent">
                            <label style="font-size: 22px;" class="form-check-label" for="Over-Indulgent">
                                &nbsp;Over-Indulgent (Terlalu manja/Konsumtif berlebihan)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="loyal" id="Loyal">
                            <label style="font-size: 22px;" class="form-check-label" for="Loyal">
                                &nbsp;Loyal (Setia)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="conflicted" id="Conflicted">
                            <label style="font-size: 22px;" class="form-check-label" for="Conflicted">
                                &nbsp;Conflicted (Berkonflik diri)
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="form-check">
                            <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="cautious" id="Cautious">
                            <label style="font-size: 22px;" class="form-check-label" for="Cautious">
                                &nbsp;Cautious (Berhati-hati)
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mt-5">
                <div class="col-md-7 offset-md-3">
                    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send Me My Money Type Report</button>
                </div>
            </div>

            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/cabin.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/cake.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/circus.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/game.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/safe.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="<?= base_url() ?>assets/assets/img/portfolio/submarine.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>