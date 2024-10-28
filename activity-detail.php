<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

// Check if 'servid' is set in the URL and fetch service data based on 'servid'
if (isset($_GET['servid'])) {
    $SERVICEDATA = selectdatabyid('activitycat', $_GET['servid']);
} else {
    die("Service ID not provided.");
}

// SQL query to fetch projects based on category
$projectDataQuery = mysqli_query($conn, "
    SELECT activities.id, activities.name AS project_name, activitycat.name AS category_name, 
           activities.media, activities.media_type
    FROM activities
    JOIN activitycat ON activities.cat_id = activitycat.id
    WHERE activitycat.id = ".$_GET['servid']."
");


// Check if the query was successful
if (!$projectDataQuery) {
    die("Query failed: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Activity - <?php echo $SERVICEDATA['name']; ?></title>
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
        color: #A52A2A !important;
    }
    </style>
</head>

<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url('img/activity.png'); background-size: cover; background-position: center;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: auto;">
            <p class="fs-5 fw-bold text-primary">Activiti</p>
            <h1 class="display-5 mb-5">Antara activiti kami sebagai egent team Gplex Supreme</h1>

            </div>

            <!-- Display the category name -->
            <div class="col-xl-12">
            <h2><?php echo $SERVICEDATA['name']; ?></h2>
            <p><?php echo $SERVICEDATA['description']; ?></p>
            </div>

            <div class="row g-4">
    <!-- Loop through the project data and display in cards -->
    <?php while ($data = mysqli_fetch_array($projectDataQuery)) { ?>
        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
                
                <?php if ($data['media_type'] == 'image'): ?>
                    <!-- Display Image -->
                    <img class="img-fluid" src="admin/uploads/activities/<?php echo htmlspecialchars($data['media']); ?>" alt="<?php echo htmlspecialchars($data['project_name']); ?>">
                <?php elseif ($data['media_type'] == 'video'): ?>
                    <!-- Display Video -->
                    <video class="img-fluid" controls>
                        <source src="admin/uploads/activities/<?php echo htmlspecialchars($data['media']); ?>" type="video/mp4" alt="<?php echo htmlspecialchars($data['project_name']); ?>">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
                

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
