<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Rentiz - Real Estate Free Website Template</title>

  <link rel="stylesheet" type="text/css" href="css/vendor.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <!-- Link Bootstrap's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <!-- Google Fonts ================================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- script ================================================== -->
  <script src="{{ asset('js/modernizr.js') }}"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">

  <!-- nav bar start  -->
  <header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">

      <div class="container ">

        <a class="navbar-brand" href="./index.html"><img src="images/logo.png" alt="image"></a>


        <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation"><ion-icon
            name="menu-outline" style="font-size: 30px;"></ion-icon></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
          aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1 ">
              <li class="nav-item">
                <a class="nav-link active me-md-4" href="#billboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-md-4" href="#residence">Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-md-4" href="#about-us">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-md-4" href="#help">Contact</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link me-md-4 text-center dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a href="index.html" class="dropdown-item">About</a>
                  </li>
                  <li><a href="index.html" class="dropdown-item">Blog</a>
                  </li>
                  <li><a href="index.html" class="dropdown-item">Blog-Single <span
                        class="badge bg-secondary">PRO</span></a></li>
                  <li><a href="index.html" class="dropdown-item">Properties <span
                        class="badge bg-secondary">PRO</span></a></li>
                  <li><a href="index.html" class="dropdown-item">Property-Single <span
                        class="badge bg-secondary">PRO</span></a></li>
                  <li><a href="index.html" class="dropdown-item">Contact <span
                        class="badge bg-secondary">PRO</span></a></li>
                  <li><a href="index.html" class="dropdown-item">Review <span
                        class="badge bg-secondary">PRO</span></a></li>
                  <li><a href="index.html" class="dropdown-item">Agents</a>
                  </li>
                  <li><a href="index.html" class="dropdown-item">FAQs</a>
                  </li>
                  <li><a href="index.html" class="dropdown-item">Styles</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-md-4" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
              </li>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="tabs-listing mt-4">
                        <nav>
                          <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab" role="tablist">
                            <button class="btn btn-outline-primary text-uppercase me-3 active" id="nav-sign-in-tab"
                              data-bs-toggle="tab" data-bs-target="#nav-sign-in" type="button" role="tab"
                              aria-controls="nav-sign-in" aria-selected="true">Log In</button>
                            <button class="btn btn-outline-primary text-uppercase" id="nav-register-tab"
                              data-bs-toggle="tab" data-bs-target="#nav-register" type="button" role="tab"
                              aria-controls="nav-register" aria-selected="false">Sign Up</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                            aria-labelledby="nav-sign-in-tab">
                            <form id="form1" class="form-group flex-wrap p-3 ">
                              <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                  class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                  Address</label>
                                <input type="text" id="exampleInputEmail1" name="email" placeholder="Email"
                                  class="form-control ps-3">
                              </div>
                              <div class="form-input col-lg-12 my-4">
                                <label for="inputPassword1"
                                  class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                <input type="password" id="inputPassword1" placeholder="Password"
                                  class="form-control ps-3" aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock" class="form-text text-center">
                                  <a href="#" class=" password">Forgot Password ?</a>
                                </div>

                              </div>
                              <label class="py-3">
                                <input type="checkbox" required="" class="d-inline">
                                <span class="label-body text-black">Remember Me</span>
                              </label>
                              <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                  In</button>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane fade" id="nav-register" role="tabpanel"
                            aria-labelledby="nav-register-tab">
                            <form id="form2" class="form-group flex-wrap p-3 ">
                              <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail2"
                                  class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                  Address</label>
                                <input type="text" id="exampleInputEmail2" name="email" placeholder="Email"
                                  class="form-control ps-3">
                              </div>
                              <div class="form-input col-lg-12 my-4">
                                <label for="inputPassword2"
                                  class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                <input type="password" id="inputPassword2" placeholder="Password"
                                  class="form-control ps-3" aria-describedby="passwordHelpBlock">
                              </div>
                              <label class="py-3">
                                <input type="checkbox" required="" class="d-inline">
                                <span class="label-body text-black">I agree to the <a href="#"
                                    class="text-black password border-bottom">Privacy Policy</a>
                                </span>
                              </label>
                              <div class="d-grid my-3">
                                <button
                                  class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                  Up</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <li class="nav-item">
                <a class="btn-medium btn btn-primary" href="#" data-bs-toggle="modal"
                  data-bs-target="#exampleModal2">Sign Up</a>
              </li>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="tabs-listing mt-4">
                        <nav>
                          <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab2" role="tablist">
                            <button class="btn btn-outline-primary text-uppercase me-4 " id="nav-sign-in-tab2"
                              data-bs-toggle="tab" data-bs-target="#nav-sign-in2" type="button" role="tab"
                              aria-controls="nav-sign-in2" aria-selected="false">Log In</button>
                            <button class="btn btn-outline-primary text-uppercase active" id="nav-register-tab2"
                              data-bs-toggle="tab" data-bs-target="#nav-register2" type="button" role="tab"
                              aria-controls="nav-register2" aria-selected="true">Sign Up</button>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent1">
                          <div class="tab-pane fade " id="nav-sign-in2" role="tabpanel"
                            aria-labelledby="nav-sign-in-tab2">
                            <form id="form3" class="form-group flex-wrap p-3 ">
                              <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail3"
                                  class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                  Address</label>
                                <input type="text" id="exampleInputEmail3" name="email" placeholder="Email"
                                  class="form-control ps-3">
                              </div>
                              <div class="form-input col-lg-12 my-4">
                                <label for="inputPassword3"
                                  class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                <input type="password" id="inputPassword3" placeholder="Password"
                                  class="form-control ps-3" aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock2" class="form-text text-center">
                                  <a href="#" class=" password">Forgot Password ?</a>
                                </div>

                              </div>
                              <label class="py-3">
                                <input type="checkbox" required="" class="d-inline">
                                <span class="label-body text-black">Remember Me</span>
                              </label>
                              <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                  In</button>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane fade active show" id="nav-register2" role="tabpanel"
                            aria-labelledby="nav-register-tab2">
                            <form id="form4" class="form-group flex-wrap p-3 ">
                              <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail4"
                                  class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                  Address</label>
                                <input type="text" id="exampleInputEmail4" name="email" placeholder="Email"
                                  class="form-control ps-3">
                              </div>
                              <div class="form-input col-lg-12 my-4">
                                <label for="inputPassword4"
                                  class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                <input type="password" id="inputPassword4" placeholder="Password"
                                  class="form-control ps-3" aria-describedby="passwordHelpBlock">
                              </div>
                              <label class="py-3">
                                <input type="checkbox" required="" class="d-inline">
                                <span class="label-body text-black">I agree to the <a href="#"
                                    class="text-black password border-bottom">Privacy Policy</a>
                                </span>
                              </label>
                              <div class="d-grid my-3">
                                <button
                                  class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                  Up</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </ul>

          </div>
        </div>


      </div>
    </nav>
  </header>

  <!-- billboard start  -->
  <section id="billboard">
    <div class="container ">
      <div class="row flex-lg-row-reverse align-items-center ">

        <div class="col-lg-6">
          <img src="images/billboard.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy">
        </div>

        <div class="col-lg-6">
          <h1 class=" text-capitalize  lh-1 my-3">Perfect way to buy and sell a home</h1>
          <p class="lead">Diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
            pellentesque. Ac, gravida in eget non amet eget purus non.</p>
          <nav class="navbar navbar-expand-lg billboard-nav">
            <div class="container billboard-search p-0">

              <div class="row billboard-row">
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Purpose">
                    <option selected>Purpose</option>
                    <option value="1">Buy</option>
                    <option value="2">Rent</option>
                    <option value="3">Sell</option>
                    <option value="4">Something else here</option>

                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Location">
                    <option selected>Location</option>
                    <option value="1">Texas</option>
                    <option value="2">Miami</option>
                    <option value="3">Chicago</option>
                    <option value="4">New York</option>
                    <option value="5">Something else here</option>
                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Type">
                    <option selected>Type</option>
                    <option value="1">House</option>
                    <option value="2">Appartment</option>
                    <option value="3">Villa</option>
                    <option value="4">Loft</option>
                    <option value="5">Bungalow</option>
                    <option value="3">Something else here</option>
                  </select>
                </div>

                <div class="col-lg-3 billboard-btn">
                  <button type="submit" class="btn btn-primary btn-lg billboard-search">Search</button>
                </div>
              </div>


            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature start  -->
  <section id="feature">
    <div class="container py-5">
      <div class="row">
        <div class="section-header align-center mb-5">
          <h2 class=" text-capitalize m-0">Featured In</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-between">
        <div class="col-md-2 ">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="images/logo1.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="images/logo2.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="images/logo3.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="images/logo4.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="images/logo6.png"></div>
        </div>


      </div>
    </div>
  </section>

  <!-- Residence start  -->
  <section id="residence">
    <div class="container  my-5 py-5">
      <h2 class="text-capitalize m-0 py-lg-5">Popular Residence</h2>

      <div class="swiper-button-next residence-swiper-next  residence-arrow"></div>
      <div class="swiper-button-prev residence-swiper-prev residence-arrow"></div>

      <div class="swiper residence-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item15.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item16.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item17.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item1.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item2.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item3.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="images/item4.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div>




      </div>

      <div class="residence-btn">
        <a href="index.html" class="btn btn-primary btn-lg my-5">View All Properties</a>
      </div>

    </div>
  </section>

  <!--About us start  -->
  <section id="about-us">
    <div class="container">
      <div class="row py-lg-5">

        <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

        <div class="text-center col-lg-4">
          <img src="images/search.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Easy to find</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="images/price.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Affordable Prices</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="images/time.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Quickly Process</h4>
          <p>Ac, gravida in diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
            pellentesque. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial start  -->
  <section id="testimonial">
    <div class="container my-5">



      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>

        <div class=" testimonial-swiper-button col-md-3 position-absolute">
          <div class="swiper-button-prev testimonial-arrow"></div>
          <div class="arrow-divider"> | </div>
          <div class="swiper-button-next testimonial-arrow"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- Help start  -->
  <section id="help" class="py-5"
    style="background: linear-gradient(270deg, #1A242F 0.01%, rgba(26, 36, 47, 0.00) 100%);">
    <div class="container-lg my-5">

      <div class="row d-flex justify-content-between align-items-center">

        <div class="col-md-6">
          <div class="image-holder d-flex">
            <img src="images/group.png" class="img-fluid" alt="Bootstrap Themes" loading="lazy">
          </div>
        </div>

        <div class="col-md-6">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <h2 class="text-capitalize">We help people to find homes</h2>
            <p>Mauris orci donec blandit maecenas. Orci lorem purus porttitor massa consectetur. Neque, vestibulum sed
              varius magna et at. Eu, adipiscing morbi augue justo. Nibh laoreet volutpat quis velit. Blandit aliquam
              donec sed morbi congue eget lorem viverra porta id lobortis.</p>
            <a href="index.html" class="btn btn-primary btn-lg">Get In Touch</a>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Lets start  -->
  <section id="start">
    <div class="container my-5 py-5">
      <div class="row featurette py-lg-5 ">
        <div class="col-md-5 order-md-1 d-flex">
          <h1 class="text-capitalize  lh-1 mb-3">Let’s simply begin with rentiz.</h1>
        </div>
        <div class="col-md-7 order-md-2">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <p class="py-lg-2">Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue justo. Nibh
              laoreet volutpat quis velit. Blandit aliquam donec sed morbi congue eget lorem viverra porta id
              lobortis.</p>
            <a href="index.html" class="btn btn-primary btn-lg px-4 me-md-2">Get
              Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer start  -->
  <section id="footer">
    <div class="container footer-container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5  ">

        <div class=" col-md-4">
          <h3><img src="images/logo.png" alt="image"></h3>
          <p>Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue.</p>
          <i class="bi-facebook pe-4"></i>
          <i class="bi-instagram pe-4"></i>
          <i class="bi-twitter pe-4"></i>
          <i class="bi-youtube pe-4"></i>
        </div>

        <div class="col-md-2 ">
          <h5>Project</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Houses</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Rooms</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Flats</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Appartments</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Company</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">How we work ?</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Capital </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Security </a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Movement</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Movement</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Support us</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
          </ul>
        </div>

        <div class="col-md-2 ">
          <h5>Help</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Privacy </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Condition</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Blog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
          </ul>
        </div>
      </footer>
    </div>



    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 ">
        <div class="col-md-8 d-flex align-items-center">
          <p>© 2023 TemplatesJungle, Inc. All rights reserved.</p>

        </div>
        <div class="col-md-4 d-flex align-items-center">
          <p>HTML template by: <a href="https://templatesjungle.com/" class="link-primary"
              target="_blank">TemplatesJungle</a> <br> Distributed by: <a href="https://themewagon.com" class="link-primary"
              target="_blank">ThemeWagon</a></p>

        </div>

      </footer>
    </div>
  </section>




  <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>