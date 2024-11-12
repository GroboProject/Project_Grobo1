<header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">
        <div class="container">
            <a class="navbar-brand" href="/">
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
                            <a class="nav-link me-md-4 {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-md-4 {{ request()->is('community') ? 'active' : '' }}"
                                href="/community">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-md-4 {{ request()->is('news') ? 'active' : '' }}"
                                href="/news">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link me-md-4 text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">About</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="/about" class="dropdown-item">About Grove</a></li>
                                <li><a href="/contact" class="dropdown-item">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link me-md-4 text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">Become a Distributor</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="/apply" class="dropdown-item">Apply Now</a></li>
                                <li><a href="/network" class="dropdown-item">Distributor Network</a></li>
                            </ul>
                        </li>
                        <!-- Jika pengguna telah login -->
                        @auth
                            <ul class="navbar-nav mx-2" id="exampleAccordion">
                                <li class="nav-item dropdown" data-toggle="tooltip" data-placement="right">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-fw fa-user"></i>
                                        <span class="nav-link-text text-light user-name">Hi, {{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="fa fa-fw fa-sign-out"></i> Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        @else
                            <!-- Jika pengguna belum login -->
                            <li class="nav-item">
                                <a class="nav-link mx-md-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-md-4" href="#" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">Sign Up</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true"
            data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="tabs-listing mt-4">
                            <div class="d-flex justify-content-center">
                                <img class="mb-4 rounded-circle" src="{{ asset('assets/jpg/logo.png') }}"
                                    alt="Logo" style="max-width: 114px;">
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="loginForm" class="form-group flex-wrap p-3"
                                action="{{ route('login.submit') }}" method="POST">
                                @csrf
                                <div class="form-input col-lg-12 my-4">
                                    <label for="loginEmail"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
                                    <input type="text" id="loginEmail" value="{{ old('email') }}" name="email"
                                        placeholder="Email" class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="loginPassword"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
                                    <input type="password" id="loginPassword" name="password" placeholder="Password"
                                        class="form-control ps-3">
                                    <div id="passwordHelpBlock" class="form-text text-center">
                                        <a href="#" class="password">Forgot Password?</a>
                                    </div>
                                </div>
                                <label class="py-3">
                                    <input type="checkbox" class="d-inline">
                                    <span class="label-body text-black">Remember Me</span>
                                </label>
                                <div class="d-grid my-3">
                                    <button class="btn btn-primary btn-lg btn-dark text-uppercase fs-6">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="tabs-listing mt-4">
                            <div class="d-flex justify-content-center">
                                <img class="mb-4 rounded-circle" src="{{ asset('assets/jpg/logo.png') }}"
                                    alt="Logo" style="max-width: 114px;">
                            </div>
                            @if (Session::has('pesan'))
                                <script>
                                    Swal.fire({
                                        title: 'Registration Successful!',
                                        text: '{{ Session::get('pesan') }}',
                                        icon: 'success'
                                    });
                                </script>
                            @endif
                            <form id="registerForm" class="form-group flex-wrap p-3"
                                action="{{ route('register.submit') }}" method="POST">
                                @csrf
                                <div class="form-input col-lg-12 my-4">
                                    <label for="registerName"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Name</label>
                                    <input type="text" id="registerName" value="{{ old('name') }}"
                                        name="name" placeholder="Name" class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="registerEmail"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                        Address</label>
                                    <input type="text" id="registerEmail" value="{{ old('email') }}"
                                        name="email" placeholder="Email" class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="registerPassword"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
                                    <input type="password" id="registerPassword" name="password"
                                        placeholder="Password" class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="registerPasswordConfirm"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Confirm
                                        Password</label>
                                    <input type="password" id="registerPasswordConfirm" name="password_confirmation"
                                        placeholder="Confirm Password" class="form-control ps-3">
                                </div>
                                <label class="py-3">
                                    <input type="checkbox" class="d-inline">
                                    <span class="label-body text-black">I agree to the <a href="#"
                                            class="text-black password border-bottom">Privacy Policy</a></span>
                                </label>
                                <div class="d-grid my-3">
                                    <button
                                        class="btn btn-primary btn-lg btn-dark text-uppercase fs-6">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
