<!-- Footer-->
<footer class="footer pt-5 mt-5 bg-white text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase  mb-4"><img width="200px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" alt=""></a></h4>
                <!-- <h4 class="text-uppercase text-dark mb-4">Around the Web</h4> -->
                <a target="_blank" href="<?= $sosmed->facebook ?>" class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-facebook-f"></i></a>
                <a target="_blank" href="<?= $sosmed->twitter ?>" class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-twitter"></i></a>
                <a target="_blank" href="<?= $sosmed->instagram ?>" class="btn btn-outline-light btn-social mx-1 text-dark" href="#!"><i class="fab text-dark fa-fw fa-instagram"></i></a>
            </div>

            <!-- Footer About Text-->
            <div class="col-lg-6">
                <h4 class="text-uppercase text-dark mb-4">Services</h4>
                <a class="text-dark" href="#">Financial Planning</a><br>
                <a class="text-dark" href="#">Money Coaching</a><br>
                <a class="text-dark" href="#">Resources</a><br>
                <a class="text-dark" href="#">Contact</a>
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

<script>
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
</script>
<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>

</html>