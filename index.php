<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- CSS -->
        <link href="views/style.css" rel="stylesheet" type="text/css"/>

        <title>Moodslider 2.0</title>
    </head>

    <body>
        <!-- Title Bar -->
        <div class ="jumbotron " style="margin-bottom:0">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <a href="index.php">
                            <img src="resources/sky.png" class="img-fluid center-block" alt=""/></a>
                    </div>
                    <div class="col-10">
                        <h1>Mood Slider 2.0</h1> 
                        <p class="lead">Please move the sliders to select movies for your moods.</p>
                    </div>  
                </div> 
            </div>
        </div>
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light"> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Mood Slider</a>
                    </li>
                </ul>   
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="views/upload.php" method="post" enctype="multipart/form-data">
                        <div class="input-group input-group-sm mb-3">
                            <div class="custom-file">
                                <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input">
                                <label class="custom-file-label" for="inputGroupFile02">Choose your xml file</label>
                            </div>
                            <div class="input-group-append">
                                <input type="submit" value="Upload Content" name="submit" class="input-group-text" >
                            </div>
                        </div>
                    </form>   
                </li>
            </ul>
        </nav>

        <br>
        <!-- 4 sliders -->
        <div class ="container">
            <div class="row">
                <div class="col-sm text-right my-auto">
                    <h5>Agitated</h5>    
                </div>
                <div class="col-sm">
                    <input type="range" min="1" max="3" value="2" class="slider" id="Range1">
                </div>
                <div class="col-sm my-auto ml-5">
                    <h5>Calm</h5>    
                </div>
            </div>

            <div class="row">
                <div class="col-sm text-right my-auto ">
                    <h5>Happy</h5>    
                </div>
                <div class="col-sm">
                    <input type="range" min="1" max="3" value="2" class="slider" id="Range2">
                </div>
                <div class="col-sm my-auto ml-5">
                    <h5>Sad</h5>    
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-right my-auto">
                    <h5>Tired</h5>    
                </div>
                <div class="col-sm">
                    <input type="range" min="1" max="3" value="2" class="slider" id="Range3">
                </div>
                <div class="col-sm my-auto ml-5">
                    <h5>Wide Awake</h5>    
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-right my-auto">
                    <h5>Scared</h5>    
                </div>
                <div class="col-sm">
                    <input type="range" min="1" max="3" value="2" class="slider" id="Range4">
                </div>
                <div class="col-sm my-auto ml-5">
                    <h5>Fearless</h5>    
                </div>
            </div>
        </div>
        <br>

        <!-- 5 card decks for movies -->
        <div class="card-deck mx-auto" >
            <div class="card" id="0">
                <img class="card-img-top" src="resources/noContent.jpg" alt="No content">
                <div class="card-body">
                    <h5 class="card-title">No content</h5>
                </div>
            </div>
            <div class="card"id="1">
                <img class="card-img-top" src="resources/noContent.jpg" alt="No content">
                <div class="card-body">
                    <h5 class="card-title">No content</h5>
                </div>
            </div>
            <div class="card" id="2">
                <img class="card-img-top" src="resources/noContent.jpg" alt="No content">
                <div class="card-body">
                    <h5 class="card-title">No content</h5>
                </div>
            </div>
            <div class="card" id="3">
                <img class="card-img-top" src="resources/noContent.jpg" alt="No content">
                <div class="card-body">
                    <h5 class="card-title">No content</h5>
                </div>
            </div>
            <div class="card" id="4">
                <img class="card-img-top" src="resources/noContent.jpg" alt="No content">
                <div class="card-body">
                    <h5 class="card-title">No content</h5>
                </div>
            </div>
        </div> 
        <br>
        <!-- Javascript -->
        <script src="views/javascript.js" type="text/javascript"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>

</html> 


