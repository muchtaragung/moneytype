<!-- Footer-->
<footer class="footer pt-5 mt-5 bg-white text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase  mb-4"><img width="200px" src="<?php base_url() ?>assets/assets/icon/vidira-logo.jpg" alt=""></a></h4>
                <!-- <h4 class="text-uppercase text-dark mb-4">Around the Web</h4> -->
                <a class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-instagram"></i></a>
            </div>

            <!-- Footer About Text-->
            <div class="col-lg-6">
                <h4 class="text-uppercase text-dark mb-4">Services</h4>
                <a class="text-dark" style="text-decoration:none" href="http://startbootstrap.com">One-on-one Coaching</a><br>
                <a class="text-dark" style="text-decoration:none" href="http://startbootstrap.com">Group Coaching</a><br>
                <a class="text-dark" style="text-decoration:none" href="http://startbootstrap.com">Workshop Facilitation</a><br>
                <a class="text-dark" style="text-decoration:none" href="http://startbootstrap.com">Keynotes & Seminars</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;

        // 20 is an arbitrary number here, just to make you think if you need the prevScrollpos variable:
        if (currentScrollPos > 20) {
            // I am using 'display' instead of 'top':
            document.getElementById("nav-scroll").style.display = "none";
        } else {
            document.getElementById("nav-scroll").style.display = "initial";
        }
    }
</script>
<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>