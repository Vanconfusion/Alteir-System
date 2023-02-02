<?php 
require_once 'bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <?php
        require_once 'navbar.php'; 
        ?>
        <!--  -->

        <!-- Divide Section -->

        <div id="section1" class="d-flex justify-content-center bg-image hover-overlay ripple shadow-1-strong">
            <img src="images/image5.jpg" class="img-fluid w-100" alt="" />
                <a href="#!">
                    <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                        <h6>Home / Contact Us</h6>
                        <h1 class="m-0">Designing With the Experts</h1>
                    </div>
                </a>
        </div>

        <!-- Divide Section -->

        <div class="row mt-5 text-center">
            <div class="col-md-6">
                <img src="images/services.jpg" class="img-fluid rounded w-50" style="height:500px" alt="">
            </div>
            <div class="col-md-6 text-start">
                <h2 style="color:black; font-weight:bold; margin-top:15%">Get in Touch With Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Autem repudiandae tempora nulla libero deleniti exercitationem excepturi quam sint saepe hic veritatis quo, 
                    dolorum voluptas amet magni eligendi praesentium corporis tempore! Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Laboriosam suscipit molestias dolor necessitatibus neque sequi impedit rerum magni eaque vitae iure mollitia quibusdam doloribus corrupti maxime,
                     eius temporibus perspiciatis pariatur!</p>
                <button class="btn btn-black"> <i class="fa-brands fa-whatsapp"></i> Chat Whatsapp</button>
            </div>
        </div>

        <!-- Divide Section -->

        <div class="d-flex justify-content-center mt-5">
            <h3 style="color:black; font-weight:bold;">Our Location</h3> <br>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="images/map2.png" class="img-fluid" style="width:1000; height:500" alt="">
        </div>
            <p class="text-center" style="color:black">17th Sesame Street, Upper East High, New York, USA <br> Postal Code 127658</p>
        <div class="d-flex justify-content-center mt-2">
            <button class="btn btn-black" style="">Open Maps</button>
        </div>

        <!-- Divide Section -->

        <div class="d-flex justify-content-center mt-5">
            <h3 style="color:black; font-weight:bold;">Contact</h3> <br>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <form class="row g-3">
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Name" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" placeholder="Email" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Phone Number (Optional)">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Order Number (If Applicabble)">
                </div>
                <div class="col-md-12">
                    <textarea name="text" class="form-control" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-black">Send Message</button>
                </div>
            </form>
        </div>
            


    </div>

<?php 
require_once 'footer.php';
?>
</body>
</html>