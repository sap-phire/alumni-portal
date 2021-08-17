<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alumni portal</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="new.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>

<body>

    <section class="colored-section" id="title">

        <div class="container-fluid">

            <!-- Nav Bar -->

            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand" href="">MMMUT</a>
                <img class="navbar-image" src="edb 1.png" alt="iphone-mockup">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Register</a>
                        </li>
                    </ul>

                </div>
            </nav>


            <!-- Title -->

            <div class="row">

                <div class="bg-image">
                    <img class="bg-image col-lg-6" src="alumni.jpg" alt="iphone-mockup">
                </div>
                <div class="bg-text col-lg-6">
                    <h2></h2>
                    <h1 style="font-size:50px">Welcome to MMMUT Alumni Portal</h1>
                    <p></p>
                </div>

                <!-- <div class="col-lg-6">
                    <h1 class="big-heading">Welcome to the MMMUT Alumni Community.</h1>
                </div>

                <div class="col-lg-6">
                    <img class="title-image" src="alumni.jpg" alt="iphone-mockup">
                </div>
 -->
            </div>

        </div>

    </section>





    <!-- Pricing -->

    <section class="white-section" id="pricing">

        <h2 class="section-heading">Communities & Clubs</h2>
        <p>With more than 1,00,000 alumni around the globe, there are a number of ways to connect and gather with fellow
            Malviyans, both in person and virtually. Learn more about how you can stay connected:</p>

        <div class="row">

            <div class="pricing-column col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Alumni Directory</h2>
                    </div>
                    <div class="card-body">

                        <h5 class="price-text">Reconnect with former roommates and classmates with the Malviyan Alumni
                            Directory.</h5>

                        <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
                    </div>
                </div>
            </div>

            <div class="pricing-column col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Alumni Meet</h2>
                    </div>
                    <div class="card-body">

                        <h5 class="price-text"> Be the part of biggest event hosted by university especially for the
                            alumnis.</h5>

                        <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
                    </div>
                </div>
            </div>

            <div class="pricing-column col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Alumni Groups</h2>
                    </div>
                    <div class="card-body">

                        <h5 class="price-text">Find upcoming events hosted by the Alumni Association or a local club.
                        </h5>
                        <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>

                    </div>
                </div>
            </div>



        </div>

    </section>
    <!-- Testimonials -->

    <section class="colored-section" id="testimonials">

        <div id="testimonial-carousel" class="carousel slide" data-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active container-fluid">
                    <h1>Our Mission...</h1>
                    <h2 class="testimonial-text">We enrich the Madam Mohan Malviya University's impact by serving as an
                        independent gateway for alums of all identities, backgrounds, and experiences – across the globe
                        and in our neighborhoods – in order to create and deepen belonging to the Malviyan Family, the
                        Leaders and Best..</h2>
                    <img class="testimonial-image" src="mmmut1.jpg" alt="dog-profile">

                </div>
                <div class="carousel-item container-fluid">
                    <h1>Scholarships and Awards...</h1>
                    <h2 class="testimonial-text">When you give to the Alumni Association, you help make it possible to
                        offer scholarships to underrepresented students, offer career support to all alumni, make MMMUT
                        the beloved place it is, and so much more. It’s all about Malviyans helping
                        Malviyans. Your generous gifts have an immeasurable impact on students and your fellow alumni.
                    </h2>
                    <img class="testimonial-image" src="mmmut2.jpg" alt="lady-profile">

                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </section>
   

    <!-- footer -->

    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
            <h3 class="text-white mt-3">Made by Divyanshi Yadav</h3>
            <!-- <p class="h5 text-white">University Alumni Portal <br> for Ecommerce, marketplace, booking websites
        and product landing pages</p> <br>
      <p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com
          <i class="fa fa-window-restore "></i></a></p>
    </div> -->
            <br><br>
    </article>

    <!-- javascript code -->
    <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("txtPassword").value;
            var confirmPassword = document.getElementById("txtConfirmPassword").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            
            return true;
        }







    </script>




</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

</html>