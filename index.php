<?php 
require_once 'bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <div class="contrainer-fluid" >
        <!-- Navbar -->
        <?php
        require_once 'navbar.php'; 
        ?>
        <!--  -->

        <div id="section1" class="d-flex justify-content-center">
            <img src="images/image1.jpg" class="img-fluid w-100" alt="...">
        </div>

<!-- Divide Section -->

        <div id="section2_1" class="d-flex justify-content-center mt-5">
            <h3 style="font-weight:bold; color:black;">JOSH ARCHITECTURE</h3> <br>
        </div>
        <div id="section2_2" class="d-flex justify-content-center ">
            <h2 style="font-weight:bold; color:black;">Designing For a Better Future</h2>
        </div>
        <div id="section2_3" class="d-flex justify-content-center ">
            <img src="images/divider.png" class="img-fluid" alt="..." style="max-width:400px;">
        </div>
        <div id="section2_4" class="d-flex justify-content-center ms-5 me-5">
            <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eligendi commodi modi assumenda rerum nihil ducimus voluptas quaerat voluptate? Quos, excepturi minima. Facilis consectetur officiis animi nostrum sunt cum cumque.</p>
        </div>

<!-- Divide Section -->

        <div id="section3_1" class="d-flex justify-content-center mt-5">
            <h2 style="font-weight:bold; color:black;">Highlight Projects</h2> <br>
        </div>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-md-6 mt-5 bg-image hover-overlay ripple shadow-1-strong rounded">
                    <img src="images/highlight1.jpg" class="img-fluid rounded" style="height:600px;" alt="Louvre" />
                        <a href="#!">
                            <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                <h4><i class="fas fa-search-plus"></i></h4>
                                <p class="m-0">View Project</p>
                            </div>
                        </a>
                </div>
                <div class="col-md-6 mt-5 bg-image hover-overlay ripple shadow-1-strong rounded">
                    <img src="images/highlight2.jpg" class="img-fluid rounded" style="height:600px;" alt="Louvre" />
                        <a href="#!">
                            <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                <h4><i class="fas fa-search-plus"></i></h4>
                                <p class="m-0">View Project</p>
                            </div>
                        </a>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
            <div class="col-md-6 mt-5 bg-image hover-overlay ripple shadow-1-strong rounded">
                    <img src="images/highlight3.jpg" class="img-fluid rounded" style="height:600px;" alt="Louvre" />
                        <a href="#!">
                            <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                <h4><i class="fas fa-search-plus"></i></h4>
                                <p class="m-0">View Project</p>
                            </div>
                        </a>
                </div>
                <div class="col-md-6 mt-5 bg-image hover-overlay ripple shadow-1-strong rounded">
                    <img src="images/highlight4.jpg" class="img-fluid rounded" style="height:600px;" alt="Louvre" />
                        <a href="#!">
                            <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                <h4><i class="fas fa-search-plus"></i></h4>
                                <p class="m-0">View Project</p>
                            </div>
                        </a>
                </div>
            </div>
        </div>
        
<!-- Divide Seciont -->

        <div id="section4_1" class="d-flex justify-content-center mt-5">
            <h2 style="font-weight:bold; color:black;">Our Clients</h2> <br>
        </div>

        <div id="section4_2" class="container text-center mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
  
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-microsoft ms-4" viewBox="0 0 16 16">
                    <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/>
                    </svg>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-spotify ms-4" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z"/>
                    </svg>
                                        
                    <img src="images/amazon.png" class="img-fluid ms-4" width="100" alt="">
                                        
                    <img src="images/netflix.png" class="img-fluid ms-4" width="100" alt="">
                    
        </div>

        <div id="section4_2" class="container text-center mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                                        
                    <img src="images/amazon.png" class="img-fluid ms-4" width="100" alt="">
                                        
                    <img src="images/netflix.png" class="img-fluid ms-4" width="100" alt="">
                    
        </div>

<!-- Divide Section -->

        <?php 
        require_once 'footer.php';
        ?>

    </div>
</body>
</html>