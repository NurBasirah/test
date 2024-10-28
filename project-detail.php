<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

// Check if 'servid' is set in the URL and fetch service data based on 'servid'
if (isset($_GET['servid'])) {
    $SERVICEDATA = selectdatabyid('projectcat', $_GET['servid']);
} else {
    die("Service ID not provided.");
}

// SQL query to fetch projects based on category
$projectDataQuery = mysqli_query($conn, "
    SELECT projects.id, projects.name AS project_name, projectcat.name AS category_name, 
           projects.description, projects.location, 
           projects.title, projects.type, projects.property_size, projects.bedrooms, 
           projects.bathrooms, projects.starting_price, projects.facilities, projects.amenities,
           projects.phase, projects.facebook, projects.instagram,
           projects.media, projects.media_type

    FROM projects
    JOIN projectcat ON projects.cat_id = projectcat.id
    WHERE projectcat.id = ".$_GET['servid']."
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
    <title>Project - <?php echo $SERVICEDATA['name']; ?></title>
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
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url('img/project.png'); background-size: cover; background-position: center;">
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
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Project</p>
                <h1 class="display-5 mb-5">Antara project yang disediakan</h1>
            </div>

            <!-- Display the category name -->
            <div class="col-xl-12">
            <h2><?php echo $SERVICEDATA['name']; ?></h2>
                <p><?php echo $SERVICEDATA['description']; ?></p>
            </div>

            <div class="row g-4">
                <!-- Loop through the project data and display in cards -->
                <?php while ($data = mysqli_fetch_array($projectDataQuery)) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                            <?php if ($data['media_type'] == 'image'): ?>
                    <!-- Display Image -->
                    <img class="img-fluid" src="admin/uploads/projects/<?php echo htmlspecialchars($data['media']); ?>" alt="<?php echo htmlspecialchars($data['project_name']); ?>">
                <?php elseif ($data['media_type'] == 'video'): ?>
                    <!-- Display Video -->
                    <video class="img-fluid" controls>
                        <source src="admin/uploads/projects/<?php echo htmlspecialchars($data['media']); ?>" type="video/mp4" alt="<?php echo htmlspecialchars($data['project_name']); ?>">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>         
                



            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['project_name']; ?></h5>
                                <p class="card-text"><strong>Location:</strong> <?php echo $data['location']; ?></p>
                                <p class="card-text"><strong>Type of House:</strong> <?php echo $data['type']; ?></p>
                                <p class="card-text"><strong>Size:</strong> <?php echo $data['property_size']; ?></p>
                                <p class="card-text"><strong>Bedrooms:</strong> <?php echo $data['bedrooms']; ?></p>
                                <p class="card-text"><strong>Bathrooms:</strong> <?php echo $data['bathrooms']; ?></p>
                                <p class="card-text"><strong>Starting Price:</strong> RM <?php echo $data['starting_price']; ?></p>
                                <p class="card-text"><strong>Title:</strong> <?php echo $data['title']; ?></p>
                                <p class="card-text"><strong>Facilities:</strong> <br> <?php echo $data['facilities']; ?></p>
                                <p class="card-text"><strong>Amenities:</strong> <br> <?php echo $data['amenities']; ?></p>
                                <p class="card-text"><strong>Phase:</strong> <?php echo $data['phase']; ?></p>
                                <p class="card-text"><strong>Note:</strong> <?php echo $data['description']; ?></p>


                                <?php if (!empty($data['facebook'])) { ?>
                                    <a href="<?php echo $data['facebook']; ?>" target="_blank" class="btn btn-primary">Facebook</a>
                                <?php } ?>
                                <?php if (!empty($data['instagram'])) { ?>
                                    <a href="<?php echo $data['instagram']; ?>" target="_blank" class="btn btn-warning">Instagram</a>
                                <?php } ?>
                            </div>
                        </div><br>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php include_once('includes/footer.php'); ?>
</body>

</html>
