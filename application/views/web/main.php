    <section class="page-section bg-white text-black mb-0">
        <div class="container">
            <h3 class="pt-5 mt-5 mb-5 text-center">Money Type Quiz</h3>
            <?php if ($this->session->flashdata('error') != null) { ?>
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: "<?php echo $this->session->flashdata('error'); ?>",
                        timer: 2500,
                        showConfirmButton: false,
                        type: 'error'
                    });
                </script>
            <?php } ?>
            <?php if ($this->uri->segment(1) != "id") { ?>
                <form method="post" id="money" action="<?= base_url() ?>result">
                <?php } else { ?>
                    <form method="post" id="money" action="<?= base_url() . $this->uri->segment(1) ?>/result">
                    <?php } ?>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <div class="form-group mb-3">
                                <input class="form-control form-control-lg" name="nama" required type="text" title="Kami membutuhkan nama anda" placeholder="Siapa nama anda?">
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
                    <div id="top"></div>
                    <h6 style="font-size: 18px;" class="pt-5 mt-5 mb-5 text-center">Pilihlah kata yang mana saja yang sesuai dengan diri Anda mengenai kecenderungan Anda saat ini seputar uang</h6>

                    <div id="target1">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="anxious" id="Anxious">
                                        <label style="font-size: 22px;" class="form-check-label" title="Cemas" for="Anxious">
                                            &nbsp;Anxious
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_in_past" id="Lives in past">
                                        <label style="font-size: 22px;" class="form-check-label" title="Hidup di masa lalu" for="Lives in past">
                                            &nbsp;Lives in past
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="trusting" id="Trusting">
                                        <label style="font-size: 22px;" class="form-check-label" title="Cenderung percaya" for="Trusting">
                                            &nbsp;Trusting
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="addictive" id="Addictive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Bersifat adiktif/ketagihan" for="Addictive">
                                            &nbsp;Addictive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="naive" id="Naive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Naif" for="Naive">
                                            &nbsp;Naive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_betrayed" id="Feels betrayed">
                                        <label style="font-size: 22px;" class="form-check-label" title="Merasa dikhianati" for="Feels betrayed">
                                            &nbsp;Feels betrayed
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_critical" id="Highly critical">
                                        <label style="font-size: 22px;" class="form-check-label" title="Sangat kritis" for="Highly critical">
                                            &nbsp;Highly critical
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="rescuer" id="Rescuer">
                                        <label style="font-size: 22px;" class="form-check-label" title="Penyelamat" for="Rescuer">
                                            &nbsp;Rescuer
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resourceful" id="Resourceful">
                                        <label style="font-size: 22px;" class="form-check-label" title="Banyak akal/pandai" for="Resourceful">
                                            &nbsp;Resourceful
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="manipulative" id="Manipulative">
                                        <label style="font-size: 22px;" class="form-check-label" title="Manipulatif" for="Manipulative">
                                            &nbsp;Manipulative
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="controlling" id="Controlling">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berkuasa/Mengendalikan" for="Controlling">
                                            &nbsp;Controlling
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_sacrificing" id="Self-sacrificing">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berkorban diri" for="Self-sacrificing">
                                            &nbsp;Self sacrificing
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="compassionate" id="Compassionate">
                                        <label style="font-size: 22px;" class="form-check-label" title="Penyayang" for="Compassionate">
                                            &nbsp;Compassionate
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="undisciplined" id="Undisciplined">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak disiplin" for="Undisciplined">
                                            &nbsp;Undisciplined
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="impulsive" id="Impulsive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Impulsif" for="Impulsive">
                                            &nbsp;Impulsive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="adventurous" id="Adventurous">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berjiwa petualang" for="Adventurous">
                                            &nbsp;Adventurous
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="detached" value="1" id="Detached">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak terikat" for="Detached">
                                            &nbsp;Detached
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="internally_motivated" id="Internally Motivated">
                                        <label style="font-size: 22px;" class="form-check-label" title="Termotivasi secara internal" for="Internally Motivated">
                                            &nbsp;Internally Motivated
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="balanced" id="Balanced">
                                        <label style="font-size: 22px;" class="form-check-label" title="Seimbang" for="Balanced">
                                            &nbsp;Balanced
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="passive" id="Passive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Pasif" for="Passive">
                                            &nbsp;Passive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_confrontational" id="non_confrontational">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak senang konfrontasi" for="non_confrontational">
                                            &nbsp;Non confrontational
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="creative" id="Creative">
                                        <label style="font-size: 22px;" class="form-check-label" title="Kreatif" for="Creative">
                                            &nbsp;Creative
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="transforms_reality" id="transforms_reality">
                                        <label style="font-size: 22px;" class="form-check-label" title="Mengubah realita" for="transforms_reality">
                                            &nbsp;Transforms Reality
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="spiritual" id="Spiritual">
                                        <label style="font-size: 22px;" class="form-check-label" title="Rohani" for="Spiritual">
                                            &nbsp;Spiritual
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="oppressive" id="Oppressive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Bersifat menindas" for="Oppressive">
                                            &nbsp;Oppressive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="perfectionist" id="Perfectionist">
                                        <label style="font-size: 22px;" class="form-check-label" title="Perfesionis" for="Perfectionist">
                                            &nbsp;Perfectionist
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="prone_to_blame" id="Prone to blame">
                                        <label style="font-size: 22px;" class="form-check-label" title="Cenderung menyalahkan" for="Prone to blame">
                                            &nbsp;Prone to blame
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="financially_irresponsible" id="financially_irresponsible">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak bertanggung jawab secara finansial" for="financially_irresponsible">
                                            &nbsp;Financially Irresponsible
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="target2" style="display: none;">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_powerless" id="feels_powerless">
                                        <label style="font-size: 22px;" class="form-check-label" title="Merasa tidak berdaya" for="feels_powerless">
                                            &nbsp;Feels Powerless
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_fulfilling_prophecy" id="Self-fulfilling prophecy">
                                        <label style="font-size: 22px;" class="form-check-label" title="Ramalan yang digenapi sendiri" for="Self-fulfilling prophecy">
                                            &nbsp;Self fulfilling prophecy
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="disciplined" value="1" id="Disciplined">
                                        <label style="font-size: 22px;" class="form-check-label" title="Disiplin" for="Disciplined">
                                            &nbsp;Disciplined
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="confident" value="1" id="Confident">
                                        <label style="font-size: 22px;" class="form-check-label" title="Percaya diri" for="Confident">
                                            &nbsp;Confident
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="judgmental" value="1" id="Judgmental">
                                        <label style="font-size: 22px;" class="form-check-label" title="Mudah menghakimi" for="Judgmental">
                                            &nbsp;Judgmental
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="careless" value="1" id="Careless">
                                        <label style="font-size: 22px;" class="form-check-label" title="Ceroboh/Cuek" for="Careless">
                                            &nbsp;Careless
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="conscious" value="1" id="Conscious">
                                        <label style="font-size: 22px;" class="form-check-label" title="Sadar" for="Conscious">
                                            &nbsp;Conscious
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="happy_go_lucky" value="1" id="Happy-go-lucky">
                                        <label style="font-size: 22px;" class="form-check-label" title="Santai & tak pedulian" for="Happy-go-lucky">
                                            &nbsp;Happy go lucky
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="long_suffering" value="1" id="Long-suffering">
                                        <label style="font-size: 22px;" class="form-check-label" title="Panjang sabar/rela menderita" for="Long-suffering">
                                            &nbsp;Long suffering
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="passive_aggressive" value="1" id="Passive-aggressive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Pasif agresif" for="Passive-aggressive">
                                            &nbsp;Passive aggressive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="wise" value="1" id="Wise">
                                        <label style="font-size: 22px;" class="form-check-label" title="Bijaksana" for="Wise">
                                            &nbsp;Wise
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_successful" value="1" id="Financially successful">
                                        <label style="font-size: 22px;" class="form-check-label" title="Sukses secara finansial" for="Financially successful">
                                            &nbsp;Financially successful
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="optimistic" value="1" id="Optimistic">
                                        <label style="font-size: 22px;" class="form-check-label" title="Optimis" for="Optimistic">
                                            &nbsp;Optimistic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="love_relationship" value="1" id="love_relationship">
                                        <label style="font-size: 22px;" class="form-check-label" title="Antara cinta dan benci" for="love_relationship">
                                            &nbsp;Love/Hate Relationship
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="materialistic" id="Materialistic">
                                        <label style="font-size: 22px;" class="form-check-label" title="Materialistis" for="Materialistic">
                                            &nbsp;Materialistic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="authentic" value="1" id="authentic">
                                        <label style="font-size: 22px;" class="form-check-label" title="Otentik" for="authentic">
                                            &nbsp;Authentic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="unattached" value="1" id="Unattached">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak terikat" for="Unattached">
                                            &nbsp;Unattached
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_dependant" value="1" id="financially_dependant">
                                        <label style="font-size: 22px;" class="form-check-label" title="Bergantung secara finansial" for="financially_dependant">
                                            &nbsp;Financially Dependant
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="represses_feelings_beliefs" id="represses_feelings_beliefs">
                                        <label style="font-size: 22px;" class="form-check-label" title="Menekan perasaan dan keyakinan sendiri" for="represses_feelings_beliefs">
                                            &nbsp;Represses feelings beliefs
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="obsessive" id="obsessive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Obsesif Kompulsif" for="obsessive">
                                            &nbsp;Obsessive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unsupported" id="Unsupported">
                                        <label style="font-size: 22px;" class="form-check-label" title="Merasa tidak didukung" for="Unsupported">
                                            &nbsp;Unsupported
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reckless" id="Reckless">
                                        <label style="font-size: 22px;" class="form-check-label" title="Sembrono" for="Reckless">
                                            &nbsp;Reckless
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="angry" id="Angry">
                                        <label style="font-size: 22px;" class="form-check-label" title="Marah" for="Angry">
                                            &nbsp;Angry
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resistant" id="Resistant">
                                        <label style="font-size: 22px;" class="form-check-label" title="Cenderung menentang/melawan" for="Resistant">
                                            &nbsp;Resistant
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_emotional" id="highly_emotional">
                                        <label style="font-size: 22px;" class="form-check-label" title="Sangat emosional" for="highly_emotional">
                                            &nbsp;Highly emotional
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_rescue" id="seeks_rescue">
                                        <label style="font-size: 22px;" class="form-check-label" title="Menunggu diselamatkan" for="seeks_rescue">
                                            &nbsp;Seeks rescue
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unforgiving" id="Unforgiving">
                                        <label style="font-size: 22px;" class="form-check-label" title="Susah memaafkan/mengampuni" for="Unforgiving">
                                            &nbsp;Unforgiving
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="powerful" id="Powerful">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berdaya" for="Powerful">
                                            &nbsp;Powerful
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="target3" style="display: none;">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="goal_oriented" id="goal_oriented">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berorientasi tujuan/gol" for="goal_oriented">
                                            &nbsp;Goal oriented
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="calculating" id="calculating">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berhitung" for="calculating">
                                            &nbsp;Calculating
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_for_today" id="lives_for_today">
                                        <label style="font-size: 22px;" class="form-check-label" title="Hidup hanya untuk hari ini" for="lives_for_today">
                                            &nbsp;Lives for today
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="generous" id="generous">
                                        <label style="font-size: 22px;" class="form-check-label" title="Murah hati" for="generous">
                                            &nbsp;Generous
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="guided_by_faith" id="guided_by_faith">
                                        <label style="font-size: 22px;" class="form-check-label" title="Dituntun oleh iman" for="guided_by_faith">
                                            &nbsp;Guided by faith
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="discerning" id="Discerning">
                                        <label style="font-size: 22px;" class="form-check-label" title="Cerdas/berpikiran tajam" for="Discerning">
                                            &nbsp;Discerning
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="caretaker" id="caretaker">
                                        <label style="font-size: 22px;" class="form-check-label" title="Penjaga/Pemelihara" for="caretaker">
                                            &nbsp;Caretaker
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resentful" id="Resentful">
                                        <label style="font-size: 22px;" class="form-check-label" title="Mudah tersinggung & membenci" for="Resentful">
                                            &nbsp;Resentful
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="restless" id="Restless">
                                        <label style="font-size: 22px;" class="form-check-label" title="Gelisah" for="Restless">
                                            &nbsp;Restless
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="fearful" id="Fearful">
                                        <label style="font-size: 22px;" class="form-check-label" title="Penuh ketakutan" for="Fearful">
                                            &nbsp;Fearful
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="overly_generous" id="overly_generous">
                                        <label style="font-size: 22px;" class="form-check-label" title="Terlalu murah hati" for="overly_generous">
                                            &nbsp;Overly Generous
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="enlightened" id="enlightened">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tercerahkan" for="enlightened">
                                            &nbsp;Enlightened
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reclusive" id="Reclusive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tertutup" for="Reclusive">
                                            &nbsp;Reclusive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_materialistic" id="non_materialistic">
                                        <label style="font-size: 22px;" class="form-check-label" title="Tidak materialistis" for="non_materialistic">
                                            &nbsp;Non materialistic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="indecisive" id="Indecisive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Bimbang" for="Indecisive">
                                            &nbsp;Indecisive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_security" id="seeks_security">
                                        <label style="font-size: 22px;" class="form-check-label" title="Mencari aman" for="seeks_security">
                                            &nbsp;Seeks security
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="secretive" id="Secretive">
                                        <label style="font-size: 22px;" class="form-check-label" title="Suka berahasia" for="Secretive">
                                            &nbsp;Secretive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="collaborative" id="Collaborative">
                                        <label style="font-size: 22px;" class="form-check-label" title="Kolaboratif" for="Collaborative">
                                            &nbsp;Collaborative
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="over_indulgent" id="over_indulgent">
                                        <label style="font-size: 22px;" class="form-check-label" title="Terlalu manja/Konsumtif berlebihan" for="over_indulgent">
                                            &nbsp;Over indulgent
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="loyal" id="Loyal">
                                        <label style="font-size: 22px;" class="form-check-label" title="Setia" for="Loyal">
                                            &nbsp;Loyal
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="conflicted" id="Conflicted">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berkonflik diri" for="Conflicted">
                                            &nbsp;Conflicted
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="form-check">
                                        <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="cautious" id="Cautious">
                                        <label style="font-size: 22px;" class="form-check-label" title="Berhati-hati" for="Cautious">
                                            &nbsp;Cautious
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="selanjutnya" class="row justify-content-center mt-5">
                        <div class="col-md-5 offset-md-3">
                            <a type="button" id="next1" class="next1 btn btn-outline-warning btn-xl">Selanjutnya</a>
                            <a type="button" id="next2" class="next2 btn btn-outline-warning btn-xl" style="display: none;">Selanjutnya</a>
                            <button class="btn btn-outline-warning btn-xl" id="submitButton" style="display: none;" type="submit">Kirimkan Saya Hasil Money Type Quiz</button>
                        </div>
                    </div>
                    <div style="display: none;" id="submit-btn" class="row justify-content-center mt-5">
                        <div class="col-md-7 offset-md-3">
                            <button class="btn btn-outline-warning btn-xl" id="submitButton" type="submit">Kirimkan Saya Hasil Money Type Quiz</button>
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
        $("#next1").click(function() {
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 10);
        });
        $("#next2").click(function() {
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 10);
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
        // $('#money').submit(function() {
        //     $(this).find("button[type='submit']").prop('disabled', true);
        // });
    </script>