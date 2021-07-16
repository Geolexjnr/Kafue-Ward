<?php
include '../Kafue_Ward/includes/header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
</head>
<body>
    <style>
       .map-responsive{

overflow:hidden;

padding-bottom:40%;

position:relative;

height:0;

}

.map-responsive iframe{

left:0;

top:0;

height:100%;

width:100%;

position:absolute;

} 
        

    </style>
    
    <div class="map-responsive">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.685312609945!2d28.181921615711154!3d-15.767777989067802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940c3f569a9032d%3A0x29ca37774a0c4ce9!2sMalundu%20Private%20School!5e0!3m2!1sen!2szm!4v1626443960558!5m2!1sen!2szm" width="600"
         height="450" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>

    </div>
    <div class=”row” style="margin-left: 40%;">

                <div class="jumbotron col-md-4 text-center" style="margin-left: 30px; margin: left 4rem; margin-top: 1rem; background-color: #000; opacity:0.5;">
                        <h2 class="text-info text-center">
                            Address
                        </h2>
                        <p class="text-white text-center">
                            Kafue Town,<br>
                            172, Unity Drive Rd,<br>
                            Opposite Malundu Private School
                        </p>
                        

                </div>
        </div>
    </div>

    
</body>
<?php
    include '../Kafue_Ward/includes/footer.php';
?>
</html>