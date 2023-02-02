<?php 
require_once 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            <img src="images/image2.jpg" class="img-fluid w-100" alt="" />
                <a href="#!">
                    <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                        <h6>Home / About Us</h6>
                        <h1 class="m-0">Designing for A Better Future</h1>
                    </div>
                </a>
        </div>

        <!-- Divide Section -->

        <div id="section2" class="row text-center mt-5">
            <div class="col-md-6">
                <img src="images/meeting.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6" style="color:black; margin-top:10%">
                <h2 style="font-weight:bold;">Building for The Next Generation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, 
                    molestias voluptas et reprehenderit, perferendis dolores, voluptatum tenetur architecto placeat perspiciatis natus ab quia ratione pariatur. 
                    Earum laborum placeat repellat saepe.</p>

            </div>
        </div>

        <!-- Divide Section -->
        
        <div id="section3_1" class="d-flex justify-content-center mt-5">
            <h2 style="font-weight:bold; color:black;">Meet Our Team</h2> <br>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>            
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>            
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>            
            <div class="col-md-4 mt-5">
                <img src="images/team.jpg" class="img-fluid w-80 rounded" alt="">
                <h2>Louis Armstrong</h2>
                <p>Lorem Ipsum</p>
            </div>
        </div>

        <!-- Divide Section -->

        <div id="section2" class="row text-center mt-5">
            <div class="col-md-6" style="color:black; margin-top:10%">
                <h2 style="font-weight:bold;">We Create Everything</h2>
                <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, 
                    molestias voluptas et reprehenderit, perferendis dolores, voluptatum tenetur architecto placeat perspiciatis natus ab quia ratione pariatur. 
                    Earum laborum placeat repellat saepe.</p>
            </div>
            <div class="col-md-6">
                <img src="images/meeting.jpg" class="img-fluid rounded" alt="">
            </div>
        </div>

    </div>

        <?php 
        require_once 'footer.php';
        ?>
</body>
</html>