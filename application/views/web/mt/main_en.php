  <style>
      .popuptext {
          visibility: hidden;
      }

      .show {
          visibility: visible;
      }
  </style>


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
                              <input class="form-control form-control-lg" name="nama" required type="text" title="Name required" placeholder="Fill in your full name">
                              <label for="name"></label>
                              <?php
                                echo form_error('name');
                                ?>
                          </div>
                          <!-- Email address input-->
                          <div class="form-group mb-3">
                              <input class="form-control form-control-lg" name="email" required type="email" title="Email required" placeholder="Email address">
                              <label for="email"></label>
                              <?php
                                echo form_error('email');
                                ?>
                          </div>
                          <!-- Phone number input-->
                          <div class="form-group mb-3">
                              <input class="form-control form-control-lg" name="phone" required minlength="10" min="0" title="Mobile/Whatsapp number required" type="number" placeholder="Mobile/Whatsapp number">
                              <label for="phone"></label>
                              <?php
                                echo form_error('phone');
                                ?>
                          </div>
                      </div>
                  </div>
                  <div id="top"></div>
                  <h6 style="font-size: 18px;" class="pt-5 mt-5 text-center">To choose, click on the box next to each word that describes your tendencies relative to money.</h6>
                  <h6 style="font-size: 18px;" class="mb-5 text-center">(Click on each of the word if you need Bahasa Indonesia translation)</h6>

                  <div id="target1">
                      <div class="row justify-content-center mt-5">
                          <div class="col-md-3"></div>
                          <div class="col-md-4">
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="anxious" id="Anxious">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Cemas">
                                          &nbsp;Anxious
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_in_past" id="Lives in past">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Hidup di masa lalu">
                                          &nbsp;Lives in past
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="trusting" id="Trusting">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Percaya orang">
                                          &nbsp;Trusting
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="addictive" id="Addictive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bersifat adiktif/ketagihan">
                                          &nbsp;Addictive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="naive" id="Naive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Naif/lugu">
                                          &nbsp;Naive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="feels_betrayed" id="Feels betrayed">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Merasa dikhianati">
                                          &nbsp;Feels betrayed
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_critical" id="Highly critical">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Sangat kritis">
                                          &nbsp;Highly critical
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="rescuer" id="Rescuer">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Penyelamat">
                                          &nbsp;Rescuer
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resourceful" id="Resourceful">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Banyak akal/pandai">
                                          &nbsp;Resourceful
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="manipulative" id="Manipulative">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Manipulatif">
                                          &nbsp;Manipulative
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="controlling" id="Controlling">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mengendalikan">
                                          &nbsp;Controlling
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_sacrificing" id="Self-sacrificing">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mengorbankan diri">
                                          &nbsp;Self-sacrificing
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="compassionate" id="Compassionate">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Penuh kasih/welas asih">
                                          &nbsp;Compassionate
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="undisciplined" id="Undisciplined">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak disiplin">
                                          &nbsp;Undisciplined
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="impulsive" id="Impulsive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Impulsif/menurut kata hati">
                                          &nbsp;Impulsive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="adventurous" id="Adventurous">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Berjiwa petualang">
                                          &nbsp;Adventurous
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="detached" value="1" id="Detached">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Memisahkan diri/tidak terikat">
                                          &nbsp;Detached
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="internally_motivated" id="Internally Motivated">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Motivasi dari dalam/internal">
                                          &nbsp;Internally Motivated
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="balanced" id="Balanced">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Seimbang">
                                          &nbsp;Balanced
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="passive" id="Passive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Pasif">
                                          &nbsp;Passive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_confrontational" id="non_confrontational">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak konfrontasional">
                                          &nbsp;Non-confrontational
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="creative" id="Creative">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Kreatif">
                                          &nbsp;Creative
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="transforms_reality" id="transforms_reality">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mengubah realita">
                                          &nbsp;Transforms Reality
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="spiritual" id="Spiritual">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Rohaniah">
                                          &nbsp;Spiritual
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="oppressive" id="Oppressive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bersifat menindas">
                                          &nbsp;Oppressive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="perfectionist" id="Perfectionist">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Perfeksionis/ingin semua sempurna">
                                          &nbsp;Perfectionist
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="prone_to_blame" id="Prone to blame">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Cenderung menyalahkan">
                                          &nbsp;Prone to blame
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="financially_irresponsible" id="financially_irresponsible">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak bertanggung jawab secara finansial">
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
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Merasa tidak berdaya">
                                          &nbsp;Feels Powerless
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="self_fulfilling_prophecy" id="Self-fulfilling prophecy">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Ramalan yang terpenuhi dengan sendirinya">
                                          &nbsp;Self-fulfilling prophecy
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="disciplined" value="1" id="Disciplined">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Disiplin">
                                          &nbsp;Disciplined
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="confident" value="1" id="Confident">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Percaya diri">
                                          &nbsp;Confident
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="judgmental" value="1" id="Judgmental">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mudah menghakimi">
                                          &nbsp;Judgmental
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="careless" value="1" id="Careless">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Ceroboh/sembrono">
                                          &nbsp;Careless
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="conscious" value="1" id="Conscious">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Sadar/menyadari">
                                          &nbsp;Conscious
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="happy_go_lucky" value="1" id="Happy-go-lucky">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak kenal susah">
                                          &nbsp;Happy-go-lucky
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="long_suffering" value="1" id="Long-suffering">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Panjang sabar/rela menderita">
                                          &nbsp;Long-suffering
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="passive_aggressive" value="1" id="Passive-aggressive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Pasif agresif">
                                          &nbsp;Passive-aggressive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="wise" value="1" id="Wise">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bijak">
                                          &nbsp;Wise
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_successful" value="1" id="Financially successful">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Sukses secara finansial">
                                          &nbsp;Financially successful
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="optimistic" value="1" id="Optimistic">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Optimistis">
                                          &nbsp;Optimistic
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="love_relationship" value="1" id="love_relationship">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Hubungan antara cinta/benci">
                                          &nbsp;Love/Hate Relationship
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="materialistic" id="Materialistic">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Materialistis">
                                          &nbsp;Materialistic
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="authentic" value="1" id="authentic">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Autentik/bersifat asli">
                                          &nbsp;Authentic
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="unattached" value="1" id="Unattached">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak terikat/lepas">
                                          &nbsp;Unattached
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" name="financially_dependant" value="1" id="financially_dependant">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bergantung secara finansial">
                                          &nbsp;Financially Dependant
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="represses_feelings_beliefs" id="represses_feelings_beliefs">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mengekang perasaan dan keyakinan diri">
                                          &nbsp;Represses feelings and beliefs
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="obsessive" id="obsessive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Obsesif Kompulsif">
                                          &nbsp;Obsessive/Compulsive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unsupported" id="Unsupported">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak didukung">
                                          &nbsp;Unsupported
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reckless" id="Reckless">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Nekat/gegabah">
                                          &nbsp;Reckless
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="angry" id="Angry">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Marah">
                                          &nbsp;Angry
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resistant" id="Resistant">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bersifat menentang">
                                          &nbsp;Resistant
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="highly_emotional" id="highly_emotional">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Sangat emosional">
                                          &nbsp;Highly emotional
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_rescue" id="seeks_rescue">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mencari pertolongan">
                                          &nbsp;Seeks rescue
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="unforgiving" id="Unforgiving">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Susah memaafkan/mengampuni">
                                          &nbsp;Unforgiving
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="powerful" id="Powerful">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Kuat/berdaya">
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
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Berorientasi tujuan/gol">
                                          &nbsp;Goal-oriented
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="calculating" id="calculating">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Perhitungan">
                                          &nbsp;Calculating
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="lives_for_today" id="lives_for_today">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Hidup untuk hari ini">
                                          &nbsp;Lives for today
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="generous" id="generous">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Murah hati/dermawan">
                                          &nbsp;Generous
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="guided_by_faith" id="guided_by_faith">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Dituntun oleh iman">
                                          &nbsp;Guided by faith
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="discerning" id="Discerning">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Cerdas/berpikiran tajam">
                                          &nbsp;Discerning
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="caretaker" id="caretaker">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Penjaga/Pemelihara">
                                          &nbsp;Caretaker
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="resentful" id="Resentful">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mudah tersinggung & pahit">
                                          &nbsp;Resentful
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="restless" id="Restless">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Gelisah/resah">
                                          &nbsp;Restless
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="fearful" id="Fearful">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Takut/kuatir">
                                          &nbsp;Fearful
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="overly_generous" id="overly_generous">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Terlalu murah hati">
                                          &nbsp;Overly Generous
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="enlightened" id="enlightened">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tercerahkan">
                                          &nbsp;Enlightened
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="reclusive" id="Reclusive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tertutup/penyendiri">
                                          &nbsp;Reclusive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="non_materialistic" id="non_materialistic">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Tidak materialistis">
                                          &nbsp;Non-materialistic
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="indecisive" id="Indecisive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Plin plan/bimbang">
                                          &nbsp;Indecisive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="seeks_security" id="seeks_security">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Mencari keamanan">
                                          &nbsp;Seeks security
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="secretive" id="Secretive">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Suka merahasiakan">
                                          &nbsp;Secretive
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="collaborative" id="Collaborative">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Kolaboratif">
                                          &nbsp;Collaborative
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="over_indulgent" id="over_indulgent">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Konsumtif berlebihan">
                                          &nbsp;Over-indulgent
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="loyal" id="Loyal">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Setia">
                                          &nbsp;Loyal
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="conflicted" id="Conflicted">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Bertentangan/konflik diri">
                                          &nbsp;Conflicted
                                      </label>
                                  </div>
                              </div>
                              <div class="form-group mb-2">
                                  <div class="form-check">
                                      <input style="width:23px; height:23px;" class="form-check-input" type="checkbox" value="1" name="cautious" id="Cautious">
                                      <label style="font-size: 22px;" data-toggle="tooltip" data-placement="right" class="form-check-label" title="Waspada/berhati-hati">
                                          &nbsp;Cautious
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="selanjutnya" class="row justify-content-center mt-5">
                      <div class="col-md-6 offset-md-3">
                          <a type="button" id="next1" class="next1 btn btn-outline-warning btn-xl">Next</a>
                          <a type="button" id="prev2" class="prev2 btn btn-outline-warning btn-xl" style="display: none;">Previous</a>
                          <a type="button" id="next2" class="next2 btn btn-outline-warning btn-xl" style="display: none;">Next</a>
                          <button class="btn btn-outline-warning btn-xl" id="submitButton" style="display: none;" type="submit">Send Me Money Type Quiz Results</button>
                      </div>
                  </div>
                  <div style="display: none;" id="submit-btn" class="row justify-content-center mt-5">
                      <div class="col-md-9 offset-md-3">
                          <a type="button" id="prev3" class="prev3 btn btn-outline-warning btn-xl" style="display: none;">Previous</a>
                          <button class="btn btn-outline-warning text-dark btn-xl" id="submitButton" type="submit">Send Me Money Type Quiz Results</button>
                      </div>
                  </div>

                  <h6 class="mt-5 px-5">The Eight Money Types and the Money Type Quiz are excerpted from the book Money Magic by Deborah L. Price © Copyright 2001 All rights reserved. Used with Permission.</h6>
                  </form>
      </div>
  </section>
  <script>
      $(function() {
          $('[data-toggle="tooltip"]').tooltip()
      })
      $(document).ready(function() {
          //next page 2
          $(document).on('click', '.next1', function() {
              $("#target1").hide();
              $("#target2").show();
              $("#next1").hide();
              $("#next2").show();
              $("#prev2").show();
          });
          //prev page 1
          $(document).on('click', '.prev2', function() {
              $("#target1").show();
              $("#target2").hide();
              $("#next1").show();
              $("#next2").hide();
              $("#prev2").hide();
          });
          //next page 3
          $(document).on('click', '.next2', function() {
              $("#target1").hide();
              $("#target2").hide();
              $("#target3").show();
              $("#selanjutnya").hide();
              $("#prev3").show();
              $("#submit-btn").show();
          });
          //prev page 2
          $(document).on('click', '.prev3', function() {
              $("#target1").hide();
              $("#target2").show();
              $("#target3").hide();
              $("#submit-btn").hide();
              $("#selanjutnya").show();
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
      $("#prev2").click(function() {
          $('html, body').animate({
              scrollTop: $("#top").offset().top
          }, 10);
      });
      $("#prev3").click(function() {
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