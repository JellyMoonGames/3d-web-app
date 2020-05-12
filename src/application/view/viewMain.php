<!doctype html>

<html lang="en">

    <head>
        
        <!-- Required Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>3D Wep App</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        
        <!-- JS -->
        <script src="https://kit.fontawesome.com/d8e9c5bb34.js" crossorigin="anonymous"></script>
        <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        
    </head>

    <body>

        <!-- Navigation Bar -->
        <nav class="navbar sticky-top navbar-expand-sm navbar-main">

            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand" href="javascript:changePage('home')">3D SHOWCASE</a>

                <!-- Collapse Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <ul class="navbar-nav">

                        <!-- Home Button -->
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:changePage('home')">Home</a>
                        </li>
                        
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">3D Models</a>
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:changePage('model')">Model 1</a>
                                <a class="dropdown-item" href="#">Model 2</a>
                                <a class="dropdown-item" href="#">Model 3</a>
                                <a class="dropdown-item" href="#">Model 4</a>
                            </div>
                            
                        </li>

                        <!-- About Button -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        
                    </ul>
                    
                </div>

            </div>

        </nav>

        <!-- Home Block Element-->
        <div id="home" class="container main-contents">

            <h1>Home</h1>
            <p>This is a showcase of a variety of low-poly 3D models that I have created.</p>

            <!-- Carousel -->
            <div id="home-carousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#home-carousel" data-slide-to="1"></li>
                  <li data-target="#home-carousel" data-slide-to="2"></li>
                </ul>
              
                <!-- Slideshow -->
                <div class="carousel-inner">

                    <!-- Image 1 -->
                    <div class="carousel-item active">
                        <img src="assets/images/banner_1.jpg" alt="Image 1">
                    </div>

                    <!-- Image 2 -->
                    <div class="carousel-item">
                        <img src="assets/images/banner_2.jpg" alt="Image 2">
                    </div>

                    <!-- Image 3 -->
                    <div class="carousel-item">
                        <img src="assets/images/banner_3.jpg" alt="Image 3">
                    </div>

                </div>
              
                <!-- Left and right Controls -->
                <a class="carousel-control-prev" href="#home-carousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#home-carousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              
            </div>  

            <br>
            
            <!-- Row of Cards -->
            <div class="row">

                <!-- Card 1 -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery/1.jpg" alt="Image 1">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Model 1</h3>
                            <p class="card-text">This is the description text for model 1.</p>
                            <a class="btn btn-warning" href="#">View Model</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery/2.jpg" alt="Image 2">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Model 2</h3>
                            <p class="card-text">This is the description text for model 2.</p>
                            <a class="btn btn-warning" href="#">View Model</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery/3.jpg" alt="Image 3">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Model 3</h3>
                            <p class="card-text">This is the description text for model 3.</p>
                            <a class="btn btn-warning" href="#">View Model</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Gallery Element -->
        <div id="model" class="container main-contents" style="display:none">

            <h1>Model Gallery</h1>
            <p>This is a collection of all my 3D models.</p>
            
            <!-- Row 1 -->
            <div class="row">

                <!-- Gallery Card -->
                <div id="gallery-master-card" class="card text-left">
    
                    <!-- Gallery Header -->
                    <div id="gallery-header" class="card-header">
                        Gallery
                    </div>

                    <!-- Gallery Body -->
                    <div id="gallery-body" class="card-body">
                        
                        <div class="row">
                            
                            <!-- Dynamic Gallery -->
                            <?php for ($i=0; $i < count($data); $i++){ ?>
                            
                                <div class="col-sm-4">
                                    <div class="gallery-card card">
                                        
                                        <div class="content">

                                        <img class="card-img-top" src="<?php echo 'assets/images/gallery/' . strval($i+1) . '.jpg'?>"/>
                                        
                                        <div class="overlay">
                                            <h2><?php echo $data[$i]['modelTitle'] ?></h2>
                                            <a class="info" data-toggle="modal" id="view-button" href="#main-modal" onclick="<?php echo 'updateModal(' . strval($i+1) . ')' ?>">View Model</a>
                                        </div>

                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- 3D Model Modal Popup -->
        <div id="main-modal" class="modal fade">
                
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 id="modalHeader">3D Model</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <!-- 3D Viewer Row-->
                        <div id="row-3d" class="row">

                            <!-- 3D Contents -->
                            <div id="model3D">
                                <x3d>
                                    <scene>
                                        <inline></inline>
                                    </scene>
                                </x3d>
                            </div>

                        </div>

                        
                        <!-- 3D Interaction Button Row -->
                        <div id="row-interaction" class="row">
    
                            <!-- Camera View Button Column -->
                            <div class="camera-controls">

                                <h5>Camera View</h5>

                                <div class="btn-group">
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="switchCamera('front')">Front</a>
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="switchCamera('back')">Back</a>
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="switchCamera('left')">Left</a>
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="switchCamera('right')">Right</a>
                                </div>

                            </div>
                            

                            <!-- Lights Button Column -->
                            <div class="camera-controls">

                                <h5>Lights</h5>

                                <div class="btn-group">
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="toggleLights()">On / Off</a>
                                </div>

                            </div>
                            

                            <!-- Animation Button Column -->
                            <div class="camera-controls">

                                <h5>Animations</h5>

                                <div class="btn-group">
                                    <a class="btn btn-responsive btn-warning" href="#">Anim-1</a>
                                    <a class="btn btn-responsive btn-warning" href="#">Anim-2</a>
                                    <a class="btn btn-responsive btn-warning" href="#">Anim-3</a>
                                </div>

                            </div>

                        </div>

                        <div id="row-description" class="row">
                            <p id=modalDescription>This model is an ancient ruin. This model is an ancient ruin. This model is an ancient ruin. This model is an ancient ruin. This model is an ancient ruin.</p>
                        </div>

                        <div id="row-image-gallery" class="row">

                        </div>
                        
                    </div>
                    
                </div>
            
            </div>

        </div>

        <!-- Footer -->
        <nav class="navbar navbar-expand-sm footer">

            <div class="container">

                <!-- Copyright -->
                <div class="navbar-text float-left copyright">
                    <p><span class="align-baseline">&copy 2020 3D Web Applications</span></p>
                </div>

                <!-- Icons -->
                <div class="navbar-text float-right social">
                    <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size:20px;color:white;"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x" style="font-size:20px;color:white;"></i></a>
                    <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size:20px;color:white;"></i></a>
                    <a href="#"><i class="fab fa-github-square fa-2x" style="font-size:20px;color:white;"></i></a>
                </div>

            </div>

        </nav>

        <!-- JQuery, Popper.js and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts/utils.js"></script>
        <!--<script type="text/javascript" src="scripts/gallery-generator.js"></script>-->
        
    </body>

</html>