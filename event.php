<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Twin Heart Event Planner</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="img/logo1.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <style>
        .fa-list1 {
    list-style: none;
    padding-left: 0;
}

.fa-list1 li {
    margin-bottom: 10px;
}

.fa-list1 i {
    color: #f28c28; /* accent color */
    margin-right: 8px;
}
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid px-5 py-4 d-none d-lg-block">
        <div class="row gx-0 align-items-center text-center">
            <div class="text-center text-lg-start">
                <div class="d-inline-flex align-items-center">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="display-5 text-primary m-0"></h1>
                         <img src="img/logo1.png" alt="Logo" style="width: 50px;height: 50px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <div class="row gx-0 bg-primary px-5 align-items-center">
            <div class="col-lg-3 d-none d-lg-block">
                <nav class="navbar navbar-light position-relative" style="width: 250px;">
                </nav>
            </div>
            <div class="col-12 col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="display-5 text-secondary m-0"></h1>
                        <img src="img/logo1.png" alt="Logo" style="width: 50px;height: 50px;">
                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars fa-1x"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="aboutus.html" class="nav-item nav-link">About Us</a>
                            <a href="testimonial.html" class="nav-item nav-link">Testimonials</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Our Events</a>
                                <div class="dropdown-menu m-0">
                                    <a href="wedding.php" class="dropdown-item">Wedding</a>
                                    <a href="event.php" class="dropdown-item">Birthday</a>
                                    <a href="event.php" class="dropdown-item">Corporate Events</a>
                                    <a href="event.php" class="dropdown-item">Surprise Events</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link me-2">Contact</a>
                        </div>
                        <a href="event.php" class="btn btn-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0"><i
                                class="fa fa-mobile-alt me-2"></i>Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Book your Events</h1>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Our Events</a></li>
            <li class="breadcrumb-item active text-white">Birthday/Other Events</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Products Offer Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="tel:8220184674" class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <h3 class="text-primary">Have a Date Fixed?</h3>
                            <p class="text-muted mb-3">We’ll handle everything else</p>
                            <h4 class="text-secondary mb-0">Check your availability</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <a href="#" class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <h3 class="text-primary">Custom Event Solutions</h3>
                            <p class="text-muted mb-3">Your vision, our execution - personalised events made memorable</p>
                            <h4 class="text-secondary mb-0">Connect with us</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Offer End -->


    <!-- Bestseller Products Start -->
    <div class="container-fluid products pt-5">
        <div class="container products-mini py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius wow fadeInUp"
                    data-wow-delay="0.1s">Our event Packages</h4>
                <p class="mb-0 wow fadeInUp" data-wow-delay="0.2s">Choose any of our package and customize as per your requirements</p>
            </div>
            <div class="row g-4">      
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="products-mini-item border">
                        <div>
                            <div>
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/bdayPackage.png" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-content p-3">
                                    <form id="bookingForm">
                                    <select class="form-control" id="packageSelect">
    <option>Select your Package</option>
    <option value="Standard">Standard</option>
    <option value="Premium">Premium</option>
    <option value="Luxury">Luxury</option>
</select><br>

<a href="#" class="btn btn-primary rounded-pill px-4"
   data-bs-toggle="modal"
   data-bs-target="#bookingModal"
   onclick="setPackage()">
   Book Now
</a>

<div class="modal fade" id="bookingModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4">

      <div class="modal-body">

        <!-- STEPS -->
        <div class="step-icons mb-4">
          <div class="step active">01</div>
          <div class="step">02</div>
          <div class="step">03</div>
          <div class="step">04</div>
        </div>
<form id="bookingForm">
        <!-- STEP 1 -->
        <div class="step-content active">
          <h5 class="text-center mb-3">Basic Details</h5>
          <div class="row g-3">
            <div class="col-md-6"><input class="form-control" placeholder="First Name" name="fname" required></div>
            <div class="col-md-6"><input class="form-control" placeholder="Last Name" name="lname" required></div>
            <div class="col-md-6"><input class="form-control" placeholder="Phone Number" name="mobile" required></div>
            <div class="col-md-6">
              <select class="form-control" name="EventType">
                <option>Event Type</option>
                <option value="wedding">Wedding</option>
                <option value="Birthday">Birthday</option>
                <option value="Corporate Events">Corporate Events</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
        </div>

        <!-- STEP 2 -->
        <div class="step-content">
          <h5 class="text-center mb-3">Selected Package</h5>
          <input class="form-control text-center" name="Package" id="selectedPackage" readonly>
          <h5 class="text-center mb-3">Event Date</h5>
          <input type="date" class="form-control" name="eventdate" required>
          <h5 class="text-center mb-3">Event Time</h5>
          <input type="time" class="form-control" name="eventtime" required>
          </div>

        <!-- STEP 3 -->
        <div class="step-content">
          <h5 class="text-center mb-3">Your Expected Budget</h5>
          <input type="number" class="form-control" name="budget" required>
          <h5 class="text-center mb-3">Your Location</h5>
          <input type="text" class="form-control" name="location" required>
          <h5 class="text-center mb-3">Event Venue and location</h5>
          <input type="text" class="form-control" name="venue" required>
          <h5 class="text-center mb-3">Your Requirements</h5>
          <textarea class="form-control" name="requirements"></textarea>
        </div>

        <!-- STEP 4 -->
        <div class="step-content">
          <h5 class="text-center mb-3">Confirmation</h5>
          <p class="text-center">Our team will contact you shortly 🎉 or call us on 8220184674</p>
        </div></form>

        <!-- FOOTER -->
        <div class="d-flex justify-content-between mt-4">
  <button class="btn btn-outline-secondary rounded-pill px-4"
          onclick="prevStep()">Back</button>

  <button id="continueBtn"
          class="btn btn-success rounded-pill px-4"
          onclick="nextStep()">Continue</button>

  <button id="submitBtn"
          class="btn btn-primary rounded-pill px-4 d-none"
          onclick="submitForm()">Submit</button>
</div>


      </div>
    </div>
  </div>
</div>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestseller Products End -->


    <!-- Our Products Start -->
     <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <a class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <h3 class="text-primary">Why Choose us?</h3>
                            <ul class="fa-list1">
                                <li> <i class="fa fa-check-circle"></i> 200+ events managed</li>
                                <li> <i class="fa fa-heart"></i> Trusted Vendors</li>
                                <li> <i class="fa fa-clock"></i> On-time execution</li>
                                <li> <i class="fa fa-tag"></i> Transparent Pricing</li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <a class="d-flex align-items-center justify-content-between border bg-white rounded p-4">
                        <div>
                            <h3 class="text-primary">Client Satisfaction</h3>
                            <ul class="fa-list1">
                                <li> <i class="fa fa-star"></i> 4.9/5 rating</li>
                                <li> <i class="fa fa-smile"></i> Happy Customers</li>
                                <li> <i class="fa fa-map-marker"></i> Serving all over tamilnadu</li>
                                <li> <i class="fa fa-leaf"></i> Stress free experience</li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Products End -->

    <!-- Product List Satrt -->
    <div class="container-fluid products productList overflow-hidden">
        <div class="container products-mini py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h4 class="text-primary border-bottom border-primary border-2 d-inline-block p-2 title-border-radius wow fadeInUp"
                    data-wow-delay="0.1s">Event Highlights</h4>
            </div>
            <div class="productList-carousel owl-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/c2.jpg" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/c3.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/c5.jpeg" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/w7.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/w8.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/w4.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/w9.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productImg-carousel owl-carousel productList-item">
                    <div class="productImg-item products-mini-item border">
                        <div class="row g-0">
                            <div class="col-7">
                                <div class="products-mini-img border-end h-100">
                                    <img src="img/w3.JPG" class="img-fluid w-100 h-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Product Banner Start -->
    <!-- Product Banner End -->

    <!-- Footer Start -->
     <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-4 rounded mb-5" style="background: rgba(255, 255, 255, .03);">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Address</h4>
                            <p class="mb-2">Pudukottai, Thoothukudi district</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Mail Us</h4>
                            <p class="mb-2"><a href="mailto:twinheart.weddingplanner@gmail.com">twinheart.weddingplanner@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Call/Whatsapp</h4>
                            <p class="mb-2"><a href="tel:8220184674">8220184674</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="rounded p-4">
                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mb-4"
                            style="width: 70px; height: 70px;">
                            <i class="fab fa-firefox-browser fa-2x text-primary"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Follow us on</h4>
                        <a href="https://instagram.com/2winheart_eventplanner?igshid=NTc4MTIwNjQ2YQ==" target="_blank" class="bi-instagram"></a> &nbsp;
                        <a href="https://www.facebook.com/Twinheartweddingplanner" target="_blank" class="bi-facebook"></a>&nbsp;
                        <a href="https://www.linkedin.com/in/twin-heart-event-planner-46407a298/" target="_blank" class="bi-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Twin Heart Event Planner</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">

                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a>Twin Technologies</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/temp.js"></script>

    <script>
$("#bookingForm").on("submit", function(e){
    e.preventDefault();

    $.ajax({
        url: "enq.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(response){
            alert(response);
            $("#bookingModal").modal("hide");
            $("#bookingForm")[0].reset();
        }
    });
});
</script>

</body>

</html>