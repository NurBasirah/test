<?php 
$SITESETTING = selectdatabyid('sitesettings', '1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head elements, such as meta tags, title, and links to CSS files -->
    <link rel="stylesheet" href="path/to/your/css/file.css"> <!-- Example of linking an external CSS file -->
    
    <!-- Add CSS for Logo Size and Theme -->
    <style>
        /* Navbar Logo Size */
        .navbar-brand img {
            max-width: 150px; /* Adjust the width as necessary */
            max-height: 50px; /* Adjust the height as necessary */
            width: auto; /* Maintains aspect ratio */
            height: auto; /* Maintains aspect ratio */
            object-fit: contain; /* Ensures the image fits within the given size */
        }

        /* Topbar Styles */
        .topbar {
            background-color: #A52A2A; /* Dark Red background */
            color: #FFD700; /* Gold text color */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #FFD700; /* Gold background */
        }

        .navbar .nav-link {
            color: #A52A2A; /* Dark Red text for links */
        }

        .navbar .nav-link.active {
            font-weight: bold; /* Bold for active link */
        }

        .navbar .btn-primary {
            background-color: #000000; /* Dark Red button */
            border: none; /* Remove border */
        }

        .navbar .btn-primary:hover {
            background-color: #8B0000; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span><?php echo $SITESETTING['phone1'];?></span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span><?php echo $SITESETTING['email'];?></span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['fb'];?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['tw'];?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['linkedin'];?>"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['insta'];?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-link text-light" href="https://wa.me/60193875158"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0">
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            
            <img src="admin/uploads/logo/<?php echo $SITESETTING['logo'];?>" alt="Logo">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="project.php" class="nav-item nav-link">Project</a>
                <a href="activity.php" class="nav-item nav-link">Activity</a>
                 <a href="team.php" class="nav-item nav-link">Our Team</a>
                 <a href="contact.php" class="nav-item nav-link">Contact <i class="fa fa-phone"></i></i></a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</body>
</html>
