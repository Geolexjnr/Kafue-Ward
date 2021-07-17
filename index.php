<?php
    include '../Kafue_Ward/includes/header.php';
?>
<!DOCTYPE html>
<title>Home Page</title>

<body>
  

   <style>

       .carousel-item{
           height: 32rem;
           background: #000;
           color: white;
           position: relative;
           background-position: center;
           background-size: cover;
       }

       .container{
           position:absolute;
           bottom:0;
           left: 0;
           right: 0;
           padding-bottom: 50px;
       }

       .overlay-image{
        position:absolute;
           bottom:0;
           left: 0;
           right: 0;
           top:0;
           background-position: center;
           background-size: cover;
           opacity: 0.8;
       }
   </style>
   
    <div class="jumbotron col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 float-md-center">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="3"></li>
                <li data-target="myCarousel" data-slide-to="4"></li>
            </ol>
                    <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="overlay-image" style="background-image: url(./img/KafueGorge.jpg);"></div>

                                    <div class="container">

                                        <h1 >Kafue Gorge</h1>
                                        <p>Kafue is where where some of Zambia's hydro electricity is generated
                                        </p>
                                       

                                    </div>

                                </div>

                                    <div class="carousel-item">

                                    <div class="overlay-image" style="background-image: url(./img/KafueNPark.jpg);"></div>

                                        <div class="container">

                                            <h1 >Kafue National Park</h1>
                                            <p>Are you looking a safari holiday? come to Kafue, We have Kafue National Park</p>
                                            

                                        </div>

                                    </div>

                                    <div class="carousel-item">
                                    <div class="overlay-image" style="background-image: url(./img/Pic2.jpg);"></div>
                                        <div class="container">

                                            <h1 >Kafue Fast Food Places</h1>
                                            <p>Looking for a fast food place for a quick lunch or take away? 
                                                don't worry they are available in Kafue ward
                                            </p>
                                            

                                        </div>

                                    </div>

                                    <div class="carousel-item">
                                    <div class="overlay-image" style="background-image: url(./img/Mukambi-Lodge.jpg);"></div>
                                        <div class="container">

                                            <h1 >Kafue Accommodation</h1>
                                            <p>Visit Kafue Ward they are several lodges that offer services next 
                                                to a home a way from home
                                            </p>
                                            

                                        </div>

                                    </div>
                    </div>
                    <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>

                    <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="sr-only">Previous</span>
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
        </div>
        
        <div class="jumbotron col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 float-md-center">
            <style>
                .jumbotron{
                    margin-top: 0;
                }
            </style>
                    <h1 class="display-4">Utilities</h1>
                    <p>Below are some of the links to some of the utilities in Kafue</p>
                    <hr class="my-4">
                    <a  href="https://www.kafuenationalparkzambia.com/" class="lead">Tourism</a>
                    <hr class="my-4">
                    <a href="https://web.facebook.com/Kafue-General-Hospital-475396713009384/" class="lead">Health</a>
                    <hr>
                    <a href="https://www.mukambi.com/" class="lead">Accommodation</a>
                    <hr>
                    <a href="http://www.lwsc.com.zm/" class="lead">Water and Sanitation</a>
                    <hr>
                    <a href="https://web.facebook.com/Kafue-River-Mall-263709657342992/" class="lead">Businesses</a>
                    <hr>
                    <a href="https://www.zanaco.co.zm/" class="lead">Banks</a>
                    
                    <hr>
                    
        </div>
    </div>
    
</body>
<?php
    include '../Kafue_Ward/includes/footer.php';
?>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</html>