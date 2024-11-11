<header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">

        <div class="container ">

            <a class="navbar-brand" href="./index.html">
                <img src="{{ asset('assets/jpg/logo.png') }}" alt="Logo" class="logo-img">
            </a>            


            <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
                aria-label="Toggle navigation"><ion-icon name="menu-outline"
                    style="font-size: 30px;"></ion-icon></button>

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
                            <a class="nav-link me-md-4" href="#residence">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-md-4" href="#about-us">News</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link me-md-4 text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">About</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="index.html" class="dropdown-item">Contact us</a>
                                </li>
                                <li><a href="index.html" class="dropdown-item">Service</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link me-md-4 text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">Become a Distributor</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="index.html" class="dropdown-item">Apply Now</a>
                                </li>
                                <li><a href="index.html" class="dropdown-item">Distributor Network</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-md-4" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Login</a>
                        </li>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing mt-4">
                                            <nav>
                                                <div class="d-flex justify-content-center">
                                                    <img class="mb-4" src="{{ asset('tmplt/images/logo.png') }}"
                                                        alt="Logo">
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade active show" id="nav-sign-in"
                                                    role="tabpanel" aria-labelledby="nav-sign-in-tab">
                                                    <form id="form1" class="form-group flex-wrap p-3 ">
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                Address</label>
                                                            <input type="text" id="exampleInputEmail1"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword1"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword1"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                            <div id="passwordHelpBlock" class="form-text text-center">
                                                                <a href="#" class=" password">Forgot Password
                                                                    ?</a>
                                                            </div>

                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">Remember Me</span>
                                                        </label>
                                                        <div class="d-grid my-3">
                                                            <button
                                                                class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
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
                                                            <input type="text" id="exampleInputEmail2"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword2"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword2"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">I agree to the <a
                                                                    href="#"
                                                                    class="text-black password border-bottom">Privacy
                                                                    Policy</a>
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
                        <div class="modal fade" id="exampleModal2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing mt-4">
                                            <nav>
                                                <div class="d-flex justify-content-center">
                                                    <img class="mb-4" src="{{ asset('tmplt/images/logo.png') }}"
                                                        alt="Logo">
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
                                                            <input type="text" id="exampleInputEmail3"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword3"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword3"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                            <div id="passwordHelpBlock2"
                                                                class="form-text text-center">
                                                                <a href="#" class=" password">Forgot Password
                                                                    ?</a>
                                                            </div>

                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">Remember Me</span>
                                                        </label>
                                                        <div class="d-grid my-3">
                                                            <button
                                                                class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                                                In</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade active show" id="nav-register2"
                                                    role="tabpanel" aria-labelledby="nav-register-tab2">
                                                    <form id="form4" class="form-group flex-wrap p-3 ">
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="exampleInputEmail4"
                                                                class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                Address</label>
                                                            <input type="text" id="exampleInputEmail4"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword4"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword4"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">I agree to the <a
                                                                    href="#"
                                                                    class="text-black password border-bottom">Privacy
                                                                    Policy</a>
                                                            </span>
                                                        </label>
                                                        <div class="d-grid my-3">
                                                            <button
                                                                class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Registrasi
                                                            </button>
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
