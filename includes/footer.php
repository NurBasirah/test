<?php 
$SITESETTING= selectdatabyid('sitesettings','1');
?>


<style>
    .btn-link {
    color: #000000 !important; /* Black color */
    .btn-black {
    background-color: #000000;
    color: #FFFFFF;
    border: none; /* Optional: if you want to remove the border */
}

    
}

</style>

<!-- Copyright Start -->
<div class="container-fluid copyright py-4" style="background-color: #000000;">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <a class="border-bottom" href="#" style="color: #FFD700;">Gplex SUPREME</a>, All Right Reserved.
        </div>
        <br><br>
        <div class="row">
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $SITESETTING['address'];?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $SITESETTING['phone1'];?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $SITESETTING['email'];?></p>
                    <div class="d-flex pt-2">
                <a class="btn btn-square rounded-circle me-2" style="background-color: #967117 ; color: #FFFFFF;" href="<?php echo $SITESETTING['tw'];?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle me-2" style="background-color: #967117 ; color: #FFFFFF;" href="<?php echo $SITESETTING['fb'];?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle me-2" style="background-color: #967117 ; color: #FFFFFF;" href="<?php echo $SITESETTING['youtube'];?>"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square rounded-circle me-2" style="background-color: #967117  ; color: #FFFFFF;" href="<?php echo $SITESETTING['linkedin'];?>"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle me-2" style="background-color: #967117  ; color: #FFFFFF;" href="https://wa.me/60193875158"><i class="fab fa-whatsapp"></i></a>

            </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="background-color: #FFD700; color: #000000;"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>