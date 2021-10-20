<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Highscope School</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if (Route::is('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @if (Auth::user()->role === 'USER')
        <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if (Route::is('profile.*') || Route::is('data-anak.*')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Diri</span>
        </a>
        <div id="collapseTwo" class="collapse @if (Route::is('profile.*') || Route::is('data-anak.*')) show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Diri</h6>
                <a class="collapse-item @if (Route::is('profile.*')) active @endif" href="{{ route('profile.show') }}">Profile</a>
                <a class="collapse-item @if (Route::is('data-anak.*')) active @endif" href="{{ route('data-anak.index') }}">Data Anak</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if (Route::is('pembayaran.*')) active @endif">
        <a class="nav-link" href="{{ route('pembayaran.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pembayaran</span></a>
    </li>
    @elseif(Auth::user()->role === 'ADMIN')
    <li class="nav-item @if (Route::is('pembayaran.*')) active @endif">
        <a class="nav-link" href="{{ route('admin-pembayaran.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pembayaran</span></a>
    </li>
    @endif


</ul>
<!-- End of Sidebar -->
