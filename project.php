<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gplex SUPREME - Project</title>
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
        color: white  !important;
    }
    </style>
   
</head>

<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url('img/project.png'); background-size: cover; background-position: center;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Project</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Project</p>
                <h1 class="display-5 mb-5">Antara project yang dijalankan</h1>
            </div>
            <div class="row g-4">
                
                
            <?php 
			
			$servicedata=fetchalldata('projectcat');
			
			while($SERVICES=mysqli_fetch_array($servicedata))
			{?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="admin/uploads/projectcat/<?php echo $SERVICES['image'];?>" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="admin/uploads/projectcat/<?php echo $SERVICES['icon'];?>" alt="Icon">
                            </div>
                            <h4 class="mb-3"><?php echo $SERVICES['name'];?></h4>
                            <a class="btn btn-sm" href="project-detail.php?servid=<?php echo $SERVICES['id'];?>"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                
			<?php } ?>  
            
            
                
                
                
            </div>
        </div>
    </div>
    <!-- Service End -->


   <?php include_once('includes/footer.php'); ?>
</body>

</html>