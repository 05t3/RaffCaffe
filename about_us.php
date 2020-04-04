<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- TOP_DIV-->
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- Grey with black text -->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item disabled">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-md-4"></div>
    </div>
<br>
<br>
<br>
<br>


<!-- MIDDLE_DIV   -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h3>ABOUT US</h3>
        <p>Raffs Cafe was started in 2021. <br><br>At Raffs cafe, we pride ourselves on quality, variety and excellent customer service
        .We are on of the leading quick service caffes' in Kenya, with the widest range of flame grilled bargers, hot-oven fresh pizza,
        fresh-baked cakes, hot-made coffee, creamy tasty milkshakes, and a juice bar with refreshing-all_flavours juice.
            <br><br> With Raffs cafe its not just about the burgers or the fresh juice.Its about giving you a little pick-me-up when you're having a
            long week.Its about sharing food with your friends- whether its a quick bite or a fun filled occasion.
            <br>Raffs cafe is definitely the place you want to be when in need of a quick, tasty meal, a fun time time with the kids, a meeting
            with colleagues or on special occasions with family or friends.
         </p>
    </div>
    <div class="col-md-2"></div>

</div>
<br>
<br>
<br>
<br>
<br>

<!--FOOTER-->
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@swalimotors.com">support@swalimotors.com</a></p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+254 772 800613</p>
                </div>

    </div>
    <div class="col-md-4">

                <div id="map" style="width:300px;height:300px;background:black"></div>
                <script>
                    function myMap() {
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {
                            center: new google.maps.LatLng(51.5, -0.2), zoom: 10
                        };
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

    </div>
    <div class="col-md-3">


                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-snapchat-ghost"></a>


    </div>
    <div class="col-md-1"></div>
</div>


</body>
</html>
