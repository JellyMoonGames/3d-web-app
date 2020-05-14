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

            <h1>Deeper Understanding</h1>
            <p class="justify">
                In this section I will discuss the extra components that I implemented in my website to
                encompass the deeper understanding section of the assignment.
            </p>

            <h5>Blender</h5>
            <p class="justify">
            
                For the 3D authoring aspect of this assignment, I utilised Blender, which is a free, open source toolset to model, animate and light 3D scenes.
                As Blender was not taught in the labs, I had to teach myself the workflow of the program and how to create the same output as 3ds Max.
                One issue that I had to overcome was that there was a bug in the more recent versions of Blender which prevented x3d models being exported out with texture data,
                which meant that I would be unable to display textured models in my app and only show a diffuse colour. However after some debugging, I found that I had to
                manually add the ‘ImageTexture’ and ‘TextureTransform’ tags in-between the ‘Appearance’ tag inside the x3d file, which ended up creating a link to the texture and applying it to the UV-unwrapped model.

            </p>

            <h5>PBR Rendering</h5>
            <p class="justify">

                For the 3D images, I used Blender’s ‘Eevee’ renderer which utilises physically-based Rendering (PBR) materials which allows for photorealistic results.
                This means that for each material, I was able to adjust settings such as how metallic it was, how specular it was, or how rough the surface was.
                This gives you an essentially unlimited amount of control when it comes to material authoring, which is why it’s used heavily the art industry.
                In the settings for the renderer, I added various visual effects that increase the realism of the image, such as ambient occlusion, bloom,
                screen-space reflections and baked-indirect lighting from an irradiance volume.

            </p>
            
            <h5>Carousel</h5>
            <p class="justify">

                On my home page, I implemented an image carousel that automatically slides between images and has an indicator to show which image you are currently on.
                It also has interactive buttons which allows you to go either backwards or forward to select an image, providing extra interaction for the user.
                As this was not taught in the lab, I had to learn the classes and structure of the carousel component.

            </p>

            <h5>Gallery Hover System</h5>
            <p class="justify">

                To manage the 3D models for the app, I decided to use a gallery which contains an entry for each model that is contained in the database.
                Extra functionality that I implemented that was not taught in the labs was to add various effects when the user hovers over an item in the gallery.
                For example, one of the effects that I added was that the image has a blur transition. Another effect when hovering was that the image slightly loses its colour
                by applying a weak grayscale filter to the image, which may make it easier to see the text if it happens to remove strong, intense colours.
                Another effect that I added was to zoom in the image slightly to add a bit more interaction to the app and to make it obvious when the user is hovering over an item.
                The last effect that I added was to fade in a semi-transparent text banner which contains the name of the model and a button that fades in an orange glow
                around the border whose purpose is to open up the modal component. The background image and name of the model shown is all loaded in from the database
                and is a dynamic system which could handle hundreds of models automatically, making it easier to maintain the app as you only need to add an entry to the
                database and don’t need to change the source code of the website, which could lead to human error and bugs.

            </p>

            <h5>Modal System</h5>
            <p class="justify">
            
                To actually view the models for my app, I decided to use a modal system from the bootstrap framework, which essentially acts as a pop-up and is displayed over the current page that you are on. 
                As this was not taught in the labs, I had to learn the intricacies of the framework and adapt it to suit that I functionality that I wanted.
                In my implementation, there is only one ‘global’ modal component that exists in the app, which makes it an efficient system as it means that you wouldn’t
                have multiple x3d components contained in the app at the same time which would decrease performance. For example, even if you had 100 models on your website,
                then my system would only have one x3d canvas at any given time, making it much more efficient. Every time a user clicks on an item in the gallery,
                it calls a JavaScript function that updates the modal in the app with the necessary information, that it pulls from the database. It knows which model information
                to get as every item passes in a unique ID which corresponds with the ID primary key contained in the database. The elements that are updated in the modal component
                are the header, the 3d model, the interactivity buttons such as the camera angle and light buttons, the model description, and the 3d images of the model.

            </p>

            <h5>Animation Control</h5>
            <p class="justify">

                To add more interaction to the app, I decided to implement the ability for the user to change the speed of the animation when it plays.
                I did this by changing the ‘cycleInterval’ parameter of the ‘TimeSensor’ for each of the models. As I have used a generalised approach by using only
                one modal and then swapping the models out dynamically, it allows me to use the same names for the model objects in the x3d file meaning that I don’t
                need to do any specific work to connect the buttons to each individual model. Along with changing the animation speed, the interaction section also has
                a button for toggling all the lights in each scene. It does this by looping through and finding all the lights that exist, meaning that this system works
                with any number of lights if needed (although I limited it to a maximum of 7 as I knew that was the most I had in any model).

            </p>

            <h5>Deep Image AI</h5>
            <p class="justify">

                For the model’s textures, I utilised the ‘Deep Image AI’ technology which utilises machine learning to upscale images into a higher quality.
                This website allowed me to achieve higher quality models as the textures are clearer, which especially benefits textures that include text.
                This technique was used for the Coca-Cola Can and Fanta Bottle and made a quite significant difference.

            </p>

            <h5>Photoshop</h5>
            <p class="justify">

                For the various art that I made for the website, such as the carousel contents and the images seen, I used photoshop to adjust them and make sure
                they were in the right format (JPEG) and that they were the right dimensions, both important steps when including such media on a
                website as you want small file sizes and consistency throughout.

            </p>

            <h5>JQuery</h5>
            <p class="justify">

                For the JavaScript in my app, I utilised the highly popular JQuery framework to make to make the more tedious tasks of JavaScript
                easier to program then if I were to just use the standard JavaScript libraries.

            </p>

            <h5>Bootstrap</h5>
            <p class="justify">

                For my front-end framework, I utilised Bootstrap 4 and the various components that it provides. The use of these components is detailed in the other sections of this page.

            </p>

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
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="toggleAnimation()">Play / Stop</a>
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="changeAnimationSpeed(1)">- Speed</a>
                                    <a class="btn btn-responsive btn-warning" href="#" onclick="changeAnimationSpeed(-1)">+ Speed</a>
                                </div>

                            </div>

                        </div>

                        <!-- Model Description -->
                        <div id="row-description" class="row">
                            <p id=modalDescription></p>
                        </div>

                        <!-- Model Images -->
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