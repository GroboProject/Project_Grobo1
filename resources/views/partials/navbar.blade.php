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
                                <li><a href="/about" class="dropdown-item">About us</a></li>
                                <li><a href="/contact" class="dropdown-item">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link me-md-4 text-center" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false">Become a Distributor</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    @auth
                                        <a href="{{ route('apply') }}" class="dropdown-item">Apply Now</a>
                                    @else
                                        <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#loginModals">Apply Now</a>
                                    @endauth
                                </li>
                                <li><a href="/disNetwork" class="dropdown-item">Distributor Network</a></li>
                            </ul>
                        </li>
                        <!-- Modal Harap Login -->
                        <div class="modal fade" id="loginModals" tabindex="-1" aria-labelledby="loginModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-bg-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel">Harap Login Terlebih Dahulu</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Anda harus login terlebih dahulu untuk mengakses fitur ini.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <!-- Jika pengguna belum login -->
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>
    function checkLogin() {
        // Simulasi login status; ubah sesuai kebutuhan
        const isLoggedIn = false; // Ubah menjadi true jika pengguna sudah login

        if (!isLoggedIn) {
            const loginModals = new bootstrap.Modal(document.getElementById('loginModals'));
            loginModals.show();
        } else {
            // Arahkan ke halaman Apply Now jika sudah login
            window.location.href = "/apply";
        }
    }
</script>

