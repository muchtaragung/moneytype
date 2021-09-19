<style>
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        color: inherit;
    }
</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Social Icons-->
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h4 class="text-uppercase  mb-4"><img width="200px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" alt=""></a></h4>
                <div class="row">
                    <div class="col-1 text-center">
                        <i class="fas fa-map-marker-alt mt-3"></i>
                    </div>
                    <div class="col-10">
                        <p style="font-size: medium;">
                            <?= $contact->alamat ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-center">
                        <i class="fas fa-phone mt-3"></i>
                    </div>
                    <div class="col-10">
                        <p style="font-size: medium;">
                            <?php $data = $contact->phone ?>
                            <?php
                            $output = substr($data, -10, -7) . "-" . substr($data, -7, -4) . "-" . substr($data, -4);
                            echo $output;
                            ?>
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-1">
                        <i class="fas fa-envelope mt-3"></i>
                    </div>
                    <div class="col-10">
                        <p style="font-size: medium;">
                            <a class="" href="mailto:<?= $contact->email ?>">
                                <?= $contact->email ?>
                            </a>
                        </p>
                    </div>
                </div>
                <?php foreach ($sosmed as $key) { ?>
                    <a title="<?= $key->nama_sosmed ?>" target="_blank" href="<?= $key->link ?>" class="btn btn-sm btn-outline-light btn-social mx-1"><i class="fa-fw <?= $key->icon ?>"></i></a>
                <?php  } ?>
            </div>
            <!-- Footer Location-->
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">LATEST NEWS</h4>
                <a style="background-color:transparent" href="">
                    <p class="lead mb-0">
                        Sit amet consetetur sadipscing tempor invidunt dolore.
                    </p>
                </a>
                <p style="color:orange">25 Desember 2021</p>
                <a style="background-color:transparent" href="">
                    <p class="lead mb-0">
                        Sit amet consetetur sadipscing tempor invidunt dolore.
                    </p>
                </a>
                <p style="color:orange">19 Desember 2021</p>
            </div>

            <!-- Footer About Text-->
            <div class="col-lg-3">
                <h4 class="text-uppercase mb-4">NEWSLETTER</h4>
                <p class="lead mb-0">
                    Subscribe to our latest news to be updated, we promise not to spam!
                </p>
                <div class="row mt-3">
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="sub">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-sm btn-warning">Sub</button>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <h4 class="text-uppercase mb-4">GALERY</h4>
                <p class="lead mb-0">
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 bg-warning text-center text-dark">
    <div class="container"><small>Copyright &copy; vidiracoaching 2021</small></div>
</div>

<!-- <script src="js/jquery.validate.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- <script>
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;

        // 20 is an arbitrary number here, just to make you think if you need the prevScrollpos variable:
        if (currentScrollPos > 100) {
            // I am using 'display' instead of 'top':
            document.getElementById("nav-scroll").style.display = "none";
        } else {
            document.getElementById("nav-scroll").style.display = "initial";
        }
    }
</script> -->
<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>