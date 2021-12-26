<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>Official Website Sekolah Highscope Kota Bengkulu</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="https://www.instagram.com/highscope.bengkulu/?hl=id"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/highscopeus/"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/highscopeindo"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/highscopeindo/"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        SEKOLAH HIGHSCOPE BENGKULU
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="@if(Route::is('home')) active @endif">Home</a></li>
                        <li ><a href="{{ route('profil') }}" class="@if(Route::is('profil')) active @endif">Profil</a></li>
                        <li><a href="{{ route('berita') }}" class="@if(Route::is('berita')) active @endif">Berita</a></li>
                        <li ><a href="{{ route('dashboard') }}">Pendaftaran</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
