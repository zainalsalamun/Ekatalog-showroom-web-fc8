<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="align-items-center d-none d-md-flex">
            <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-phone"></i> Call us now +62 817 - 9145 - 514
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="{{ 'img/logo.png' }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="logo me-auto"><a href="index.html">Sangga</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="{{ route('showroom') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('listvehicle') }}">List Vehicle</a></li>
                <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a>

    </div>
</header><!-- End Header -->
