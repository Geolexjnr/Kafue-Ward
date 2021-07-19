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
                                    <div class="overlay-image" style="background-image: url(./img/disinfecting.jpg);"></div>

                                    <div class="container">

                                        <h1 >Disinfecting</h1>
                                        <p>One of the ways of keeping healthy from illneses and diseases is making sure that the most touched
                                          surfaces and handles are germ free
                                        </p>


                                    </div>

                                </div>

                                    <div class="carousel-item">

                                    <div class="overlay-image" style="background-image: url(./img/handwashing.jpg);"></div>

                                        <div class="container">

                                            <h1 >Washing hands oftenly</h1>
                                            <p>Washing of hands and making sure we sanitise our hands with hand sanitizer is also a great way of healthy living</p>


                                        </div>

                                    </div>

                                    <div class="carousel-item">
                                    <div class="overlay-image" style="background-image: url(./img/mask.jpg);"></div>
                                        <div class="container">

                                            <h1 >Mask Up</h1>
                                            <p>In this covid Era it always wise to wear a mask when outside the house or
                                              when you are in crowds of people and always stand 2 meters apart with people #Social-Distancing
                                            </p>


                                        </div>

                                    </div>

                                    <div class="carousel-item">
                                    <div class="overlay-image" style="background-image: url(./img/sweat.jpg);"></div>
                                        <div class="container">

                                            <h1 >Exercise</h1>
                                            <p>another way to fight illnesses is exercising when you keep you body active some <br>
                                              of the illnesses are gotten rid of through sweating and the immune system is also boosted.<br>
                                              Exercises also help in fighting fatigue
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
                    <h1 class="display-5">Good Heath Tips</h1>
                    <p>Below are some of the links to some of the health tips for Kafue Ward</p>
                    <hr class="my-4">
                    <a  href="fitness_health_tips.php" class="lead">Health Fitness Tips</a>
                    <hr class="my-4">
                    <a href="covid-19.php" class="lead">Covid-19 Health Practices</a>
                    <hr>
                    <a href="circumcision_tips.php" class="lead">What is Circumcision?</a>
                    <hr>
                    <a href="breast_cancer_tips.php" class="lead">Breast Cancer Tips</a>
                    <hr>

        </div>
    </div>

</body>
<?php
    include '../Kafue_Ward/includes/footer.php';
?>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</html>
