        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="/">
                        <img src="images/logo/kursus-logo.png" class="l-dark" height="39" alt="">
                        <img src="images/logo/kursus-logo-white.png" class="l-light" height="39" alt="">
                    </a>
                </div>
                <div class="buy-button">
                    <a href="#" target="_blank">
                        <div class="btn btn-primary login-btn-primary">Hubungi Kami</div>
                        <div class="btn btn-light login-btn-light">Hubungi Kami</div>
                    </a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-light">
                        <li><a href="{{route('home')}}">Beranda</a></li>
                        <li><a href="{{route('about')}}">Tentang Kami</a></li>
                        <li><a href="{{route('harga')}}">Daftar Paket</a></li>
                        <li><a href="{{route('jadwal')}}">Jadwal</a></li>
                        <li><a href="{{route('pengumuman.index')}}">Pengumuman</a></li>
                        <li><a href="{{route('kontak')}}">Kontak</a></li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="#" target="_blank" class="btn btn-primary">Hubungi Kami</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
