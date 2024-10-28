<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gplex SUPREME - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

  <?php include_once('includes/css.php'); ?>
   
</head>

<style>
/* CSS to make carousel images uniform */
.carousel-item img {
    width: 100%;            /* Full width */
    height: 400px;         /* Fixed height, adjust as necessary */
    object-fit: cover;     /* Maintain aspect ratio and cover the area */
}



.carousel-caption {
    background-color: transparent; /* Remove any background color */
    color: white; /* Optional: Change text color for better visibility */
    position: absolute;
    bottom: 20px; /* Adjust to position the caption */
    left: 50%;
    transform: translateX(-50%); /* Center the caption */
    text-align: center; /* Center the text */
}


.carousel-caption h1 {
    font-size: 2.5rem;     /* Adjust font size as needed */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow for better readability */
}


    /* Make all text inside the page header black */
    .page-header, 
    .page-header h1, 
    .page-header a, 
    .breadcrumb, 
    .breadcrumb a, 
    .breadcrumb-item.active {
        color: #A52A2A  !important;

</style>


<body>
   
<?php include_once('includes/header.php'); ?>


<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $sliderdata = fetchalldata('slider');			 
            $i = 0;
            while($SLIDER = mysqli_fetch_array($sliderdata)) {
                $activeClass = $i === 0 ? 'active' : ''; // Set the active class for the first item
            ?>
                <div class="carousel-item <?php echo $activeClass; ?>">
                    <img class="w-100" src="admin/uploads/slider/<?php echo $SLIDER['image'];?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown"><?php echo $SLIDER['heading'];?></h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                $i++;
            } 
            ?>		
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/nur.jpg">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-1 text-primary mb-0">25</h1>
                    <p class="text-primary mb-4">Year of Experience</p>
                    <h1 class="display-5 mb-4">PERUNDING HARTANAH PILIHAN RAMAI</h1>
                    <p class="mb-4">Puan Nur Syatilla atau nama panggilan Puan Nur ialah seorang ejen hartanah yang berpengalaman. Penting untuk memilih ejen hartanah yang berlisensi dan memiliki reputasi yang baik dalam industri untuk memastikan bahwa Anda mendapatkan pelayanan yang profesional dan dapat diandalkan dalam segala urusan properti Anda.</p>
                    <a class="btn btn-primary py-3 px-4" href="https://wa.me/60193875158" target="_blank">WhatsApp Sekarang</a>

                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Pasukan Berdedikasi</h4>
                                <span>Pasukan kami sentiasa sedia membantu di setiap langkah, mengikut keperluan anda.</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Ketua Kumpulan Berpengalaman</h4>
                                <span>Ketua kumpulan berpengalaman mengurus pasukan dengan profesional, memastikan perkhidmatan terbaik dan transaksi lancar.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Mengapa Memilih Kami!</p>
                    <h1 class="display-5 mb-4">Beberapa Sebab Mengapa Orang Memilih Kami!</h1>
                    <p class="mb-4">Kami berkomitmen untuk memberikan perkhidmatan terbaik kepada pelanggan kami, memastikan setiap transaksi berjalan lancar dan memenuhi kepuasan anda.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>


                                
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-dollar-sign fa-3x text-primary"></i>

                                </div>
                                <h4 class="mb-0">Tiada kos tersembunyi</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->    

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Testimoni</p>
                    <h1 class="display-5 mb-5">Apa Kata Pelanggan Tentang Kami!</h1>
                    <p class="mb-4">Jangan Lepaskan Peluang! Lihat Bukti Kepuasan Pelanggan Kami!</p>
                    <a class="btn btn-primary py-3 px-4" href="">See More</a>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
					
					<?php 
					
					$testimonialdata=fetchalldata('testimonials');
					
					while($TESTI=mysqli_fetch_array($testimonialdata))
					{?>
					
                        <div class="testimonial-item">
                            <img class="img-fluid rounded mb-3" src="admin/uploads/testimonials/<?php echo $TESTI['image'];?>" alt="">
                            <h4><?php echo $TESTI['name'];?></h4>
                            <span><?php echo $TESTI['profession'];?></span>                            
                            <p class="fs-5"><?php echo $TESTI['description'];?></p>
                        </div>
                    
					<?php } ?>
					
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<?php include('includes/footer.php'); ?>

</body>

</html>