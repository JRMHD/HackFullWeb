<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <title>Pricing Hack Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="images/hack.jpg" alt="" class="navbar-logo" style="max-height: 100px;">
                Hack<span>Solutions</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/pricing') }}" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!DOCTYPE html>
    <html>

    <head>
        <title>Understanding Vehicle Rental Price Changes</title>
        <style>
            /* Style for the text explanation */
            .pricing-explanation {
                background-color: #f5f5f5;
                padding: 20px;
                border-radius: 10px;
            }

            /* Style for the headings */
            .heading-primary {
                color: #007bff;
                /* Blue color */
            }

            .heading-dark {
                color: #333;
                /* Dark gray color */
            }

            .heading-black {
                color: #000;
                /* Black color */
            }
        </style>
    </head>

    <body>
        <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                    <div class="col-md-9 ftco-animate pb-5">
                        <p class="breadcrumbs"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a> /
                            Pricing <i class="ion-ios-arrow-forward"></i></p>
                        <h1 class="mb-3 bread">Vehicle Rental Pricing</h1>
                        <p class="sub-heading">Discover our competitive rates and flexible options for renting and
                            leasing vehicles.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="vehicle-list">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>Vehicle Model</th>
                                        <th class="bg-primary heading-primary">Hourly Rate</th>
                                        <th class="bg-dark heading-dark">Daily Rate</th>
                                        <th class="bg-black heading-black">Leasing</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Pricing Information for Vehicles -->
                                    <tr class="">
                                        <td class="vehicle-image">
                                            <div class="img" style="background-image:url(images/car-1.jpg);"></div>
                                        </td>
                                        <td class="product-name">
                                            <h3>VEHICLE RENTING</h3>
                                            <p class="mb-0 rated">
                                                <span>Rating:</span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                            </p>
                                        </td>

                                        <!-- Hourly Rate -->
                                        <td class="price">
                                            <p class="price-label">Hourly Rental</p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">$</small>
                                                        Pending</span>
                                                    <span class="per">/per hour</span>
                                                </h3>
                                                <span class="subheading">$3/hour fuel surcharge</span>
                                            </div>
                                        </td>

                                        <!-- Daily Rate -->
                                        <td class="price">
                                            <p class="price-label">Daily Rental</p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">$</small>
                                                        19.99</span>
                                                    <span class="per">/per day</span>
                                                </h3>
                                                <span class="subheading">$3/hour fuel surcharge</span>
                                            </div>
                                        </td>

                                        <!-- Leasing Rate -->
                                        <td class="price">
                                            <p class="price-label">Leasing</p>
                                            <div class="price-rate">
                                                <h3>
                                                    <span class="num"><small class="currency">$</small>
                                                        Pending</span>
                                                    <span class="per">/per month</span>
                                                </h3>
                                                <span class="subheading">$3/hour fuel surcharge</span>
                                            </div>
                                        </td>
                                    </tr><!-- END Pricing Information for Vehicles -->

                                    <!-- Add more pricing information for other vehicles as needed -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Text explanation about pricing changes -->
        <div class="container pricing-explanation">
            <h2 class="heading-dark">Understanding Rental Price Changes</h2>
            <p>Market prices for vehicle renting can fluctuate due to various factors. These price changes are
                influenced by supply and demand dynamics, seasonal variations, and economic conditions. When demand for
                rental vehicles is high, such as during holidays or peak travel seasons, prices tend to rise.
                Conversely, during off-peak times or when there is an excess of available rental cars, prices may be
                lower.</p>
            <p>The type of vehicle and its features can impact pricing. Luxury or high-demand vehicles often come with a
                higher rental cost compared to standard models. Fuel prices, insurance rates, and maintenance expenses
                also play a role in determining rental prices.</p>
            <p>It's important for consumers to keep in mind that booking in advance can sometimes lead to cost savings,
                as last-minute rentals may incur premium charges. To get the best rental deal, it's advisable to compare
                prices, be flexible with rental dates, and book early when possible.</p>
        </div>
    </body>

    </html>


    @include('footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
