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
                            <a id="nav-home" class="nav-link active" href="javascript:changePage('home')">Home</a>
                        </li>

                        <!-- Showcase Button -->
                        <li class="nav-item">
                            <a id="nav-showcase" class="nav-link" href="javascript:changePage('showcase')">Showcase</a>
                        </li>

                        <!-- Deeper Understanding Button -->
                        <li class="nav-item">
                            <a id="nav-understanding" class="nav-link" href="javascript:changePage('understanding')">Deeper Understanding</a>
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
                        <img src="assets/images/carousel/1.jpg" alt="Image 1">
                    </div>

                    <!-- Image 2 -->
                    <div class="carousel-item">
                        <img src="assets/images/carousel/2.jpg" alt="Image 2">
                    </div>

                    <!-- Image 3 -->
                    <div class="carousel-item">
                        <img src="assets/images/carousel/3.jpg" alt="Image 3">
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
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/Coca-Cola Can/3.jpg" alt="Image 1">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Showcase</h3>
                            <p class="card-text">This is the interactable 3D model showcase.</p>
                            <a class="btn btn-warning" href="javascript:changePage('showcase')">View Page</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/blender-logo.jpg" alt="Image 2">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Deeper Understanding</h3>
                            <p class="card-text">This section goes into detail of the extra functionality that I added.</p>
                            <a class="btn btn-warning" href="javascript:changePage('understanding')">View Page</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-sm-4">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/Fanta Bottle/3.jpg" alt="Image 3">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">Card 3</h3>
                            <p class="card-text">This is the description text for card 3 which is currently a placeholder.</p>
                            <a class="btn btn-warning" href="#">View Model</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Gallery Element -->
        <div id="showcase" class="container main-contents" style="display:none">

            <h1>3D Model Showcase</h1>
            <p>This is a showcase of all my interactable, 3D models.</p>
            
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

                                            <img class="card-img-top" src="<?php echo 'assets/images/' . $data[$i]['modelTitle'] . '/' . '3.jpg'?>"/>
                                            
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

        <!-- Deeper Understanding Block Element-->
        <div id="understanding" class="container main-contents" style="display:none">

            <br>
            <h1>Deeper Understanding</h1>
            <p class="justify">
                In this section I will discuss the extra components that I implemented in my website to
                encompass the deeper understanding section of the assignment.
            </p>

            <h5>Blender</h5>
            <p class="justify">I used Blender.</p>

            <h5>Carousel</h5>
            <p class="justify">I implemented a carosuel.</p>
            
            <h5>Modal System</h5>
            <p class="justify">I implemented a modal pop-up system for displaying the models.</p>  

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
                    <a href="https://github.com/JellyMoonGames/3d-web-app"><i class="fab fa-github-square fa-2x" style="font-size:20px;color:white;"></i></a>
                </div>

            </div>

        </nav>

        <!-- JQuery, Popper.js and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts/utils.js"></script>
        
    </body>

</html>