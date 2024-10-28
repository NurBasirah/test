<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gplex Supreme - Team</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include_once('includes/css.php'); ?>

    <style>
    /* Make all text inside the page header black */
    .page-header, 
    .page-header h1, 
    .page-header a, 
    .breadcrumb, 
    .breadcrumb a, 
    .breadcrumb-item.active {
        color: #A52A2A  !important;
    }
    </style>
</head>

<body>
   <?php include_once('includes/header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url('img/team.png'); background-size: cover; background-position: center;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Gplex Supreme Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- Team Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">JBMO Fighters Team</p>
                <h1 class="display-5 mb-5">TEAM MANAGER</h1>
            </div>
            <div class="row g-4 d-flex justify-content-center">
        
                <?php 
                $teamdata=fetchalldata('team_tm');

                while($TEAM=mysqli_fetch_array($teamdata))
                {?>	
                                
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item rounded">
                                        <img class="img-fluid" src="admin/uploads/agent/tm/<?php echo $TEAM['image'];?>" alt="">
                                        <div class="team-text">
                                            <h4 class="mb-0"><?php echo $TEAM['name'];?></h4>
                                            <p class="text-primary"><?php echo $TEAM['desgination'];?></p>
                                            <div class="team-social d-flex">
                                                <!-- Facebook URL -->
                                                <?php if(!empty($TEAM['facebook_url'])): ?>
                                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['facebook_url']; ?>" target="_blank">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                <?php endif; ?>

                                                <!-- Instagram URL -->
                                                <?php if(!empty($TEAM['instagram_url'])): ?>
                                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['instagram_url']; ?>" target="_blank">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                <?php endif; ?>

                                                <!-- Twitter (optional) -->
                                                <!-- Add this section if you want to include Twitter as well -->
                                                <?php if(!empty($TEAM['twitter_url'])): ?>
                                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['twitter_url']; ?>" target="_blank">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php } ?>		
				
				
				
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">JBMO Fighters Team</p>
                <h1 class="display-5 mb-5">ASSISTANT TEAM MANAGER</h1>
            </div>
            <div class="row g-4 d-flex justify-content-center">

                <?php 
                $teamdata=fetchalldata('team_atm');

                while($TEAM=mysqli_fetch_array($teamdata))
                {?>	
                                
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item rounded">
                                        <img class="img-fluid" src="admin/uploads/agent/atm/<?php echo $TEAM['image'];?>" alt="">
                                        <div class="team-text">
                                            <h4 class="mb-0"><?php echo $TEAM['name'];?></h4>
                                            <p class="text-primary"><?php echo $TEAM['desgination'];?></p>
                                            <div class="team-social d-flex">
                                            <!-- Facebook URL -->
                                            <?php if(!empty($TEAM['facebook_url'])): ?>
                                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['facebook_url']; ?>" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            <?php endif; ?>

                                            <!-- Instagram URL -->
                                            <?php if(!empty($TEAM['instagram_url'])): ?>
                                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['instagram_url']; ?>" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            <?php endif; ?>

                                            <!-- Twitter (optional) -->
                                            <!-- Add this section if you want to include Twitter as well -->
                                            <?php if(!empty($TEAM['twitter_url'])): ?>
                                                <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['twitter_url']; ?>" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                <?php } ?>		
				
				
				
            </div>
        </div>
    </div>
    <!-- Team End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">JBMO Fighters Team</p>
            <h1 class="display-5 mb-5">FULL-TIMER</h1>
        </div>
        <div class="row g-4 d-flex justify-content-center">

            <?php 
            $teamdata=fetchalldata('team_ftimer');

            while($TEAM=mysqli_fetch_array($teamdata))
            {?>	
                            
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="admin/uploads/agent/fulltimer/<?php echo $TEAM['image'];?>" alt="">
                        <div class="team-text">
                            <h4 class="mb-0"><?php echo $TEAM['name'];?></h4>
                            <p class="text-primary"><?php echo $TEAM['desgination'];?></p>
                            <div class="team-social d-flex">
                                <!-- Facebook URL -->
                                <?php if(!empty($TEAM['facebook_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['facebook_url']; ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?>

                                <!-- Instagram URL -->
                                <?php if(!empty($TEAM['instagram_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['instagram_url']; ?>" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                <?php endif; ?>

                                <!-- Twitter (optional) -->
                                <!-- Add this section if you want to include Twitter as well -->
                                <?php if(!empty($TEAM['twitter_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['twitter_url']; ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>		
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">JBMO Fighters Team</p>
            <h1 class="display-5 mb-5">PART-TIMER</h1>
        </div>
        <div class="row g-4 d-flex justify-content-center">

            <?php 
            $teamdata=fetchalldata('team_ptimer');

            while($TEAM=mysqli_fetch_array($teamdata))
            {?>	
                            
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="admin/uploads/agent/parttimer/<?php echo $TEAM['image'];?>" alt="">
                        <div class="team-text">
                            <h4 class="mb-0"><?php echo $TEAM['name'];?></h4>
                            <p class="text-primary"><?php echo $TEAM['desgination'];?></p>
                            <div class="team-social d-flex">
                                <!-- Facebook URL -->
                                <?php if(!empty($TEAM['facebook_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['facebook_url']; ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?>

                                <!-- Instagram URL -->
                                <?php if(!empty($TEAM['instagram_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['instagram_url']; ?>" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                <?php endif; ?>

                                <!-- Twitter (optional) -->
                                <!-- Add this section if you want to include Twitter as well -->
                                <?php if(!empty($TEAM['twitter_url'])): ?>
                                    <a class="btn btn-square rounded-circle me-2" href="<?php echo $TEAM['twitter_url']; ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>		
        </div>
    </div>
</div>
<!-- Team End -->


  <?php include_once('includes/footer.php'); ?>
</body>

</html>