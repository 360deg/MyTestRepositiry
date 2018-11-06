<!DOCTYPE html>
<html>
<head>
    <title>Vlad Pecherytsya | Blog</title>
    <script src=kek.js></script>
    <link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico" />
    <link rel=stylesheet type="text/css" href="style.css">
</head>
<body class="pisya">
<!-- The overlay -->
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
<!-- Next div is going to bottom -->
<div>

</div>
<!-- Use any element to open/show the overlay navigation menu -->
<button onclick="pisya()">pisya</button>

</body>
</html>