    <section class="page-section bg-white text-black mb-0">
        <div class="container">
            <?php if ($this->session->flashdata('error') != null) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <h3 class="pt-5 mt-5 mb-5 text-center">Money Type Quiz</h3>
            <form method="post" id="money" action="<?= base_url() ?>result">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="name" required type="text" title="Kami membutuhkan nama anda" placeholder="Siapa nama anda?">
                            <label for="name"></label>
                            <?php
                            echo form_error('name');
                            ?>
                        </div>
                        <!-- Email address input-->
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="email" required type="email" title="Kami membutuhkan email anda" placeholder="Alamat email">
                            <label for="email"></label>
                            <?php
                            echo form_error('email');
                            ?>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" name="phone" required minlength="10" min="0" title="Kami membutuhkan nomer telepon/whatsapp anda" type="number" placeholder="Nomer Telepon/Whatsapp">
                            <label for="phone"></label>
                            <?php
                            echo form_error('phone');
                            ?>
                        </div>
                    </div>
                </div>
                <h6 style="font-size: 18px;" class="pt-5 mt-5 mb-5 text-center">Pilihlah kata yang mana saja yang sesuai dengan diri Anda mengenai kecenderungan Anda saat ini seputar uang</h6>
                <div id="target1">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="anxious" id="Anxious">
                                    <label style="font-size: 22px;" class="form-check-label" for="Anxious">
                                        &nbsp;Cemas
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_in_past" id="Lives in past">
                                    <label style="font-size: 22px;" class="form-check-label" for="Lives in past">
                                        &nbsp;Hidup di masa lalu
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="trusting" id="Trusting">
                                    <label style="font-size: 22px;" class="form-check-label" for="Trusting">
                                        &nbsp;Cenderung percaya

                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="addictive" id="Addictive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Addictive">
                                        &nbsp;Bersifat adiktif/ketagihan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="naive" id="Naive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Naive">
                                        &nbsp;Naif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_betrayed" id="Feels betrayed">
                                    <label style="font-size: 22px;" class="form-check-label" for="Feels betrayed">
                                        &nbsp;Merasa dikhianati
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_critical" id="Highly critical">
                                    <label style="font-size: 22px;" class="form-check-label" for="Highly critical">
                                        &nbsp;Sangat kritis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="rescuer" id="Rescuer">
                                    <label style="font-size: 22px;" class="form-check-label" for="Rescuer">
                                        &nbsp;Penyelamat
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resourceful" id="Resourceful">
                                    <label style="font-size: 22px;" class="form-check-label" for="Resourceful">
                                        &nbsp;Banyak akal/pandai
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="manipulative" id="Manipulative">
                                    <label style="font-size: 22px;" class="form-check-label" for="Manipulative">
                                        &nbsp;Manipulatif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="controlling" id="Controlling">
                                    <label style="font-size: 22px;" class="form-check-label" for="Controlling">
                                        &nbsp;Berkuasa/Mengendalikan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_sacrificing" id="Self-sacrificing">
                                    <label style="font-size: 22px;" class="form-check-label" for="Self-sacrificing">
                                        &nbsp;Berkorban diri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="compassionate" id="Compassionate">
                                    <label style="font-size: 22px;" class="form-check-label" for="Compassionate">
                                        &nbsp;Penyayang
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="undisciplined" id="Undisciplined">
                                    <label style="font-size: 22px;" class="form-check-label" for="Undisciplined">
                                        &nbsp;Tidak disiplin
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="impulsive" id="Impulsive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Impulsive">
                                        &nbsp;Impulsif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="adventurous" id="Adventurous">
                                    <label style="font-size: 22px;" class="form-check-label" for="Adventurous">
                                        &nbsp;Berjiwa petualang
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="detached" value="1" id="Detached">
                                    <label style="font-size: 22px;" class="form-check-label" for="Detached">
                                        &nbsp;Tidak terikat
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="internally_motivated" id="Internally Motivated">
                                    <label style="font-size: 22px;" class="form-check-label" for="Internally Motivated">
                                        &nbsp;Termotivasi secara internal
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="balanced" id="Balanced">
                                    <label style="font-size: 22px;" class="form-check-label" for="Balanced">
                                        &nbsp;Seimbang
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="passive" id="Passive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Passive">
                                        &nbsp;Pasif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_confrontational" id="non_confrontational">
                                    <label style="font-size: 22px;" class="form-check-label" for="non_confrontational">
                                        &nbsp;Tidak senang konfrontasi
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="creative" id="Creative">
                                    <label style="font-size: 22px;" class="form-check-label" for="Creative">
                                        &nbsp;Kreatif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="transforms_reality" id="transforms_reality">
                                    <label style="font-size: 22px;" class="form-check-label" for="transforms_reality">
                                        &nbsp;Mengubah realita
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="spiritual" id="Spiritual">
                                    <label style="font-size: 22px;" class="form-check-label" for="Spiritual">
                                        &nbsp;Rohani
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="oppressive" id="Oppressive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Oppressive">
                                        &nbsp;Bersifat menindas
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="perfectionist" id="Perfectionist">
                                    <label style="font-size: 22px;" class="form-check-label" for="Perfectionist">
                                        &nbsp;Perfesionis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="prone_to_blame" id="Prone to blame">
                                    <label style="font-size: 22px;" class="form-check-label" for="Prone to blame">
                                        &nbsp;Cenderung menyalahkan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="financially_irresponsible" id="financially_irresponsible">
                                    <label style="font-size: 22px;" class="form-check-label" for="financially_irresponsible">
                                        &nbsp;Tidak bertanggung jawab secara finansial
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div id="target2" style="display: none;">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_powerless" id="feels_powerless">
                                    <label style="font-size: 22px;" class="form-check-label" for="feels_powerless">
                                        &nbsp;Merasa tidak berdaya
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_fulfilling_prophecy" id="Self-fulfilling prophecy">
                                    <label style="font-size: 22px;" class="form-check-label" for="Self-fulfilling prophecy">
                                        &nbsp;Ramalan yang digenapi sendiri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="disciplined" value="1" id="Disciplined">
                                    <label style="font-size: 22px;" class="form-check-label" for="Disciplined">
                                        &nbsp;Disiplin
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="confident" value="1" id="Confident">
                                    <label style="font-size: 22px;" class="form-check-label" for="Confident">
                                        &nbsp;Percaya diri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="judgmental" value="1" id="Judgmental">
                                    <label style="font-size: 22px;" class="form-check-label" for="Judgmental">
                                        &nbsp;Mudah menghakimi
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="careless" value="1" id="Careless">
                                    <label style="font-size: 22px;" class="form-check-label" for="Careless">
                                        &nbsp;Ceroboh/Cuek
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="conscious" value="1" id="Conscious">
                                    <label style="font-size: 22px;" class="form-check-label" for="Conscious">
                                        &nbsp;Sadar
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="happy_go_lucky" value="1" id="Happy-go-lucky">
                                    <label style="font-size: 22px;" class="form-check-label" for="Happy-go-lucky">
                                        &nbsp;Santai & tak pedulian
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="long_suffering" value="1" id="Long-suffering">
                                    <label style="font-size: 22px;" class="form-check-label" for="Long-suffering">
                                        &nbsp;Panjang sabar/rela menderita
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="passive_aggressive" value="1" id="Passive-aggressive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Passive-aggressive">
                                        &nbsp;Pasif agresif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="wise" value="1" id="Wise">
                                    <label style="font-size: 22px;" class="form-check-label" for="Wise">
                                        &nbsp;Bijaksana
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_successful" value="1" id="Financially successful">
                                    <label style="font-size: 22px;" class="form-check-label" for="Financially successful">
                                        &nbsp;Sukses secara finansial
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="optimistic" value="1" id="Optimistic">
                                    <label style="font-size: 22px;" class="form-check-label" for="Optimistic">
                                        &nbsp;Optimis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="love_relationship" value="1" id="love_relationship">
                                    <label style="font-size: 22px;" class="form-check-label" for="love_relationship">
                                        &nbsp;Antara cinta dan benci
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="materialistic" id="Materialistic">
                                    <label style="font-size: 22px;" class="form-check-label" for="Materialistic">
                                        &nbsp;Materialistis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="authentic" value="1" id="authentic">
                                    <label style="font-size: 22px;" class="form-check-label" for="authentic">
                                        &nbsp;Otentik
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="unattached" value="1" id="Unattached">
                                    <label style="font-size: 22px;" class="form-check-label" for="Unattached">
                                        &nbsp;Tidak terikat
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_dependant" value="1" id="financially_dependant">
                                    <label style="font-size: 22px;" class="form-check-label" for="financially_dependant">
                                        &nbsp;Bergantung secara finansial
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="represses_feelings_beliefs" id="represses_feelings_beliefs">
                                    <label style="font-size: 22px;" class="form-check-label" for="represses_feelings_beliefs">
                                        &nbsp;Menekan perasaan dan keyakinan sendiri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="obsessive" id="obsessive">
                                    <label style="font-size: 22px;" class="form-check-label" for="obsessive">
                                        &nbsp;Obsesif Kompulsif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unsupported" id="Unsupported">
                                    <label style="font-size: 22px;" class="form-check-label" for="Unsupported">
                                        &nbsp;Merasa tidak didukung
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reckless" id="Reckless">
                                    <label style="font-size: 22px;" class="form-check-label" for="Reckless">
                                        &nbsp;Sembrono
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="angry" id="Angry">
                                    <label style="font-size: 22px;" class="form-check-label" for="Angry">
                                        &nbsp;Marah
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resistant" id="Resistant">
                                    <label style="font-size: 22px;" class="form-check-label" for="Resistant">
                                        &nbsp;Cenderung menentang/melawan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_emotional" id="highly_emotional">
                                    <label style="font-size: 22px;" class="form-check-label" for="highly_emotional">
                                        &nbsp;Sangat emosional
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_rescue" id="seeks_rescue">
                                    <label style="font-size: 22px;" class="form-check-label" for="seeks_rescue">
                                        &nbsp;Menunggu diselamatkan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unforgiving" id="Unforgiving">
                                    <label style="font-size: 22px;" class="form-check-label" for="Unforgiving">
                                        &nbsp;Susah memaafkan/mengampuni
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="powerful" id="Powerful">
                                    <label style="font-size: 22px;" class="form-check-label" for="Powerful">
                                        &nbsp;Berdaya
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div id="target3" style="display: none;">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="goal_oriented" id="goal_oriented">
                                    <label style="font-size: 22px;" class="form-check-label" for="goal_oriented">
                                        &nbsp;Berorientasi tujuan/gol
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="calculating" id="calculating">
                                    <label style="font-size: 22px;" class="form-check-label" for="calculating">
                                        &nbsp;Berhitung
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_for_today" id="lives_for_today">
                                    <label style="font-size: 22px;" class="form-check-label" for="lives_for_today">
                                        &nbsp;Hidup hanya untuk hari ini
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="generous" id="generous">
                                    <label style="font-size: 22px;" class="form-check-label" for="generous">
                                        &nbsp;Murah hati
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="guided_by_faith" id="guided_by_faith">
                                    <label style="font-size: 22px;" class="form-check-label" for="guided_by_faith">
                                        &nbsp;Dituntun oleh iman
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="discerning" id="Discerning">
                                    <label style="font-size: 22px;" class="form-check-label" for="Discerning">
                                        &nbsp;Cerdas/berpikiran tajam
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="caretaker" id="caretaker">
                                    <label style="font-size: 22px;" class="form-check-label" for="caretaker">
                                        &nbsp;Penjaga/Pemelihara
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resentful" id="Resentful">
                                    <label style="font-size: 22px;" class="form-check-label" for="Resentful">
                                        &nbsp;Mudah tersinggung & membenci
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="restless" id="Restless">
                                    <label style="font-size: 22px;" class="form-check-label" for="Restless">
                                        &nbsp;Gelisah
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="fearful" id="Fearful">
                                    <label style="font-size: 22px;" class="form-check-label" for="Fearful">
                                        &nbsp;Penuh ketakutan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="overly_generous" id="overly_generous">
                                    <label style="font-size: 22px;" class="form-check-label" for="overly_generous">
                                        &nbsp;Terlalu murah hati
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="enlightened" id="enlightened">
                                    <label style="font-size: 22px;" class="form-check-label" for="enlightened">
                                        &nbsp; Tercerahkan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reclusive" id="Reclusive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Reclusive">
                                        &nbsp;Tertutup
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_materialistic" id="non_materialistic">
                                    <label style="font-size: 22px;" class="form-check-label" for="non_materialistic">
                                        &nbsp;Tidak materialistis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="indecisive" id="Indecisive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Indecisive">
                                        &nbsp;Bimbang
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_security" id="seeks_security">
                                    <label style="font-size: 22px;" class="form-check-label" for="seeks_security">
                                        &nbsp;Mencari aman
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="secretive" id="Secretive">
                                    <label style="font-size: 22px;" class="form-check-label" for="Secretive">
                                        &nbsp;Suka berahasia
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="collaborative" id="Collaborative">
                                    <label style="font-size: 22px;" class="form-check-label" for="Collaborative">
                                        &nbsp;Kolaboratif
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="over_indulgent" id="over_indulgent">
                                    <label style="font-size: 22px;" class="form-check-label" for="over_indulgent">
                                        &nbsp;Terlalu manja/Konsumtif berlebihan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="loyal" id="Loyal">
                                    <label style="font-size: 22px;" class="form-check-label" for="Loyal">
                                        &nbsp;Setia
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="conflicted" id="Conflicted">
                                    <label style="font-size: 22px;" class="form-check-label" for="Conflicted">
                                        &nbsp;Berkonflik diri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="cautious" id="Cautious">
                                    <label style="font-size: 22px;" class="form-check-label" for="Cautious">
                                        &nbsp;Berhati-hati
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div id="selanjutnya" class="row justify-content-center mt-5">
                    <div class="col-md-5 offset-md-3">
                        <a type="button" id="next1" class="next1 btn btn-warning btn-xl">Selanjutnya</a>
                        <a type="button" id="next2" class="next2 btn btn-warning btn-xl" style="display: none;">Selanjutnya</a>
                        <button class="btn btn-warning btn-xl" id="submitButton" style="display: none;" type="submit">Kirimkan Saya Hasil Money Type Quiz</button>
                    </div>
                </div>
                <div style="display: none;" id="submit-btn" class="row justify-content-center mt-5">
                    <div class="col-md-7 offset-md-3">
                        <button class="btn btn-warning btn-xl" id="submitButton" type="submit">Kirimkan Saya Hasil Money Type Quiz</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.next1', function() {
                $("#target1").hide();
                $("#target2").show();
                $("#next1").hide();
                $("#next2").show();
            });
            $(document).on('click', '.next2', function() {
                $("#target1").hide();
                $("#target2").hide();
                $("#target3").show();
                $("#selanjutnya").hide();
                $("#submit-btn").show();
            });
        });

        $(document).ready(function() {
            $('#money').validate({ // initialize the plugin
                rules: {
                    messages: {
                        name: {
                            required: "Kami membutuhkan nama Anda"
                        }
                    },
                    messages: {
                        email: {
                            required: "Kami membutuhkan email Anda"
                        }
                    },
                    messages: {
                        phone: {
                            required: "Kami membutuhkan nomer telepon / Whatsapp Anda"
                        }
                    },
                }
            });

        });
    </script>