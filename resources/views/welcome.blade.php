<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">

    <title>Hack Solutions Usa Homepage</title>
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
                    <li class="nav-item "><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/pricing') }}" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Discover <span>Effortless Vehicle Rentals</span></h1>
                        <p style="font-size: 18px;">Experience the convenience of renting a Vehicle with us. We offer
                            top-notch services to make your journey smooth and worry-free.</p>
                        <a href="https://youtu.be/xh7_uzq7UQE?si=vo97g2sWOmcCMpAf"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Watch Our Rental Process</span>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
                    <form action="#" class="request-form ftco-animate">
                        <h2>Plan Your Journey</h2>
                        <div class="form-group">
                            <label for="" class="label">Starting Point</label>
                            <input type="text" class="form-control" placeholder="Your Location">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Destination</label>
                            <input type="text" class="form-control" placeholder="Your Destination">
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="" class="label">Departure Date</label>
                                <input type="text" class="form-control" id="departure_date" placeholder="Date">
                            </div>
                            <div class="form-group ml-2">
                                <label for="" class="label">Return Date</label>
                                <input type="text" class="form-control" id="return_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Preferred Time</label>
                            <input type="text" class="form-control" id="preferred_time" placeholder="Time">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Find a Vehicle" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <section class="custom-search-section ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-search-wrap ftco-animate mb-5">
                        <form action="#" class="custom-search-form">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Vehicle Type</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Type</option>
                                                    <option value="">SUV</option>
                                                    <option value="">Sedan</option>
                                                    <option value="">Truck</option>
                                                    <option value="">Van</option>
                                                    <option value="">Convertible</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Range</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$1 - $50</option>
                                                    <option value="">$51 - $100</option>
                                                    <option value="">$101 - $200</option>
                                                    <option value="">$201 - $300</option>
                                                    <option value="">$301 - $400</option>
                                                    <option value="">$401 - $500</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Find Vehicles"
                                                class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center mt-4">Work With Us</h1>
                <p class="lead text-center">Enter Your Information</p>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>






    <section class="custom-services-section ftco-section ftco-no-pt ftco-no-pb" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading" style="color: #333;">Our Unique Services</span>
                    <h2 class="mb-2" style="color: #222;">Explore What We Offer</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon" style="background-color: #ff9900; color: #fff;"><span
                                        class="flaticon-customer-support"></span></div>
                                <h3 class="heading mb-0 pl-3">24/7 Assistance</h3>
                            </div>
                            <p>Our dedicated support team is available round-the-clock to assist you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon" style="background-color: #0099cc; color: #fff;"><span
                                        class="flaticon-route"></span></div>
                                <h3 class="heading mb-0 pl-3">Convenient Locations</h3>
                            </div>
                            <p>Find us at multiple locations to serve your travel needs more conveniently.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon" style="background-color: #ff6699; color: #fff;"><span
                                        class="flaticon-online-booking"></span></div>
                                <h3 class="heading mb-0 pl-3">Easy Reservations</h3>
                            </div>
                            <p>Make hassle-free reservations online or through our mobile app.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services" style="background-color: #fff; border-radius: 10px;">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon" style="background-color: #33cc33; color: #fff;"><span
                                        class="flaticon-rent"></span></div>
                                <h3 class="heading mb-0 pl-3">Wide Vehicle Selection</h3>
                            </div>
                            <p>Choose from a diverse range of vehicles to suit your transportation needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Choose Your Vehicle</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/26ft.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">$749</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/week</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Box Truck 26ft</a></h2>
                            <span></span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/24ft.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">$709</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/WEEK</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Box Truck 24ft</a></h2>
                            <span></span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/20ft.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">$399</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/WEEK</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Box Truck 20ft</a></h2>
                            <span> </span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/16ft.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">$349</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/WEEK</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Box Truck 16ft</a></h2>
                            <span></span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/14ft.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">$299</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/WEEK</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Box Truck 14ft</a></h2>
                            <span></span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/sedans.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">19.99</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Sedans</a></h2>
                            <span>TOYOTA</span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/suv.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">19.99</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="">SUVs</a></h2>
                            <span>TOYOTA</span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/lexus.jpg);">
                            <div class="price-wrap d-flex">
                                <span class="rate">25.99</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="">Lexus Sedans</a></h2>
                            <span>TOYOTA</span>
                            <p class="d-flex mb-0 d-block"><a href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black mr-1">Book now</a> <a
                                    href="{{ url('/contact') }}"
                                    class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-services-section ftco-section services-section img"
        style="background-image: url(images/24ft.jpg);">
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5);"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading" style="color: #fff;">Our Process</span>
                    <h2 class="mb-3" style="color: #fff;">How It Works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2"
                        style="background-color: #333; border-radius: 10px;">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"
                                style="background-color: #ff9900; color: #fff;"><span class="flaticon-route"></span>
                            </div>
                            <h3 style="color: #fff;">Choose Destination</h3>
                            <p style="color: #fff;">Select your desired destination for your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2"
                        style="background-color: #333; border-radius: 10px;">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"
                                style="background-color: #0099cc; color: #fff;"><span class="flaticon-select"></span>
                            </div>
                            <h3 style="color: #fff;">Select Term</h3>
                            <p style="color: #fff;">Choose the duration of your rental term.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2"
                        style="background-color: #333; border-radius: 10px;">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"
                                style="background-color: #ff6699; color: #fff;"><span class="flaticon-rent"></span>
                            </div>
                            <h3 style="color: #fff;">Choose A Vehicle</h3>
                            <p style="color: #fff;">Select a vehicle that suits your needs and preferences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2"
                        style="background-color: #333; border-radius: 10px;">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"
                                style="background-color: #33cc33; color: #fff;"><span class="flaticon-review"></span>
                            </div>
                            <h3 style="color: #fff;">Enjoy Your Ride</h3>
                            <p style="color: #fff;">Relax and enjoy your journey with our comfortable vehicles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/charles2.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Youll have an amazing experience leasing Vehicles with Our
                                        company. Our services are top-notch!</p>
                                    <p class="name">Charles Green</p>
                                    <span class="position">CEO HACK SOLUTIONS</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/charles.jpeg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">The box trucks offered by this company are exceptional. They
                                        helped streamline our supply chain operations.</p>
                                    <p class="name">Aaron Alves</p>
                                    <span class="position">Supply Chain Analyst</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Working with this company's box truck leasing experts has been a
                                        game-changer for our business.</p>
                                    <p class="name">David Johnson</p>
                                    <span class="position">Logistics Coordinator</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Their box truck leasing solutions have significantly improved our
                                        efficiency and cost-effectiveness.</p>
                                    <p class="name">Robert Wilson</p>
                                    <span class="position">Transportation Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/veronica.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">I'm impressed with their dedication and expertise in box truck
                                        leasing.</p>
                                    <p class="name">Veronica Tateum</p>
                                    <span class="position">Logistics Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Company Team</span>
                    <h2 class="mb-3">Meet Our Team</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/charles2.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Meet our CEO, Charles Green. He leads the way with passion and
                                        expertise.</p>
                                    <p class="name">Charles Green</p>
                                    <span class="position">CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/jrmhd.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Meet our Software Engineer, JRMHD (Reagan Mukabana). He's our
                                        tech wizard!</p>
                                    <p class="name">JRMHD (Reagan Mukabana)</p>
                                    <span class="position">Software Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <h2 class="mb-4">About Us</h2>
                        <p>Welcome to Hack Solutions USA</p>

                        <p>We are your trusted partner for all your box truck leasing needs. With a fleet of 14ft, 16ft,
                            20ft, 24ft, and 26ft straight box trucks, we provide flexible leasing options starting at
                            just $19.99 per day.</p>

                        <p>Our mission is to make it easy for you to rent a truck for your business or personal use.
                            Whether you need a box truck for moving, transportation, or any other purpose, we have the
                            perfect vehicle for you.</p>

                        <p>Explore our selection of box trucks and find the one that suits your needs. Contact us today
                            to start your leasing journey with Hack Solutions USA.</p>

                        <p><a href="{{ url('/contact') }}" class="btn btn-primary">Search Vehicle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              <div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              <div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              <div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>		 -->



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
