<?php 

include('admin/includes/connection.php');
include('admin/includes/allfunction.php');

if (isset($_POST['submit'])) {
    date_default_timezone_set("Asia/Calcutta"); 

    // Validate and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobile = htmlspecialchars(trim($_POST['mobile'])); // Change made here
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Ensure all fields are filled
    if ($name && $email && $mobile && $subject && $message) {
        $data = array(
            "name" => '"' . $name . '"',
            "email" => '"' . $email . '"',
            "mobile" => '"' . $mobile . '"', // Consistent field name
            "subject" => '"' . $subject . '"',
            "message" => '"' . $message . '"',
            "added_date" => '"' . date('Y-m-d H:i:s') . '"'
        );

        // Insert data into the database
        insert('enquiry', $data);

        // Optional: Redirect or display a success message
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hubungi Saya</title>
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
            <h1 class="display-3 text-white mb-4 animated slideInDown">Hubungi Saya</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <a href="https://wa.me/601170211130" class="btn btn-primary py-3 px-5">WhatsApp Now</a>
            </div>

            <br><br><br><br>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Hubungi saya</p>
                    <h1 class="display-5 mb-5">Jika Anda Ada Sebarang Pertanyaan, Sila Hubungi Kami</h1>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    <label for="name">Nama<span style="color: red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    <label for="email">Email<span style="color: red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your phone number" required>
                                    <label for="mobile">Phone Number<span style="color: red;">*</span></label>
                                </div>
                            </div>                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                    <label for="subject">Perkara<span style="color: red;">*</span> </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 100px" required></textarea>
                                    <label for="message">Message<span style="color: red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.bing.com/maps?osid=973f2f81-03a4-4cb1-8f5e-26a2e949fdd8&cp=1.51949~103.789926&lvl=16.64&pi=0&v=2&sV=2&form=S00027"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include_once('includes/footer.php'); ?>
</body>

</html>
