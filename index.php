<!DOCTYPE html>
<html>
<head>
    <title>Vlad Pecherytsya | Blog</title>
    <script src=kek.js></script>
    <link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico" />
    <link rel=stylesheet type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="body_class">

<?php /*
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <a onclick='addcontent("ab")' href="#">About</a>
        <a onclick='addcontent("co")' href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

</div>
<div style="height: 405px">
    <div class="grad1">
        <div class="card">
            <img src="img_avatar2.png" onclick="openNav()" alt="Avatar" style="width:100%">
            <div class="container">
                <h4 style="margin-top: 8px; margin-bottom: 8px"><b>Hi</b></h4>
                <p style="margin-top: 8px">Click on picture to navigate</p>
            </div>
        </div>
        <div class="card">
            <img src="img_avatar2.png" onclick="openNav()" alt="Avatar" style="width:100%">
            <div class="container">
                <h4 style="margin-top: 8px; margin-bottom: 8px"><b>Hi</b></h4>
                <p style="margin-top: 8px">Click on picture to navigate</p>
            </div>
        </div>
    </div>
</div>
<div>

</div>
<button onclick="pisya()">pisya</button>

 */?>

<div class="body_shapochka">
    Hello World
</div>
<div class="body_body">
    <div class="row">
        <div class="col-sm-3">
            <div class="body_miniContainer">
                <img class="body_kartinka" src="img_avatar2.png" onclick="openNav()" alt="Avatar" style="width:100%">
                <span class="body_podpis">
                    <h4 style="margin-top: 8px; margin-bottom: 8px"><b>Hi</b></h4>
                    <p style="margin-top: 8px">Click on picture to navigate</p>
                </span>
            </div>
        </div>
        <div class="col-sm-9" style="padding: 0">
            <div class="body_megoContainer">
                <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
                <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
                <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
                <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

                <div id="Home" class="tabcontent">
                    <h3>Home</h3>
                    <p>Home is where the heart is..</p>
                </div>

                <div id="News" class="tabcontent">
                    <h3>News</h3>
                    <p>Some news this fine day!</p>
                </div>

                <div id="Contact" class="tabcontent">
                    <h3>Contact</h3>
                    <p>Get in touch, or swing by for a cup of coffee.</p>
                </div>

                <div id="About" class="tabcontent">
                    <h3>About</h3>
                    <p>Who we are and what we do.</p>
                </div>
            </div>
        </div>
    </div>


</div>


</body>
</html>