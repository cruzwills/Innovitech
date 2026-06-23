<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="assets/images/logo/ata-logo.png" class="logo-light ata-logo" alt="Innovinetec Solutions">
                <img src="assets/images/logo/ata-logo.png" class="logo-dark ata-logo" alt="Innovinetec Solutions">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav__item">
                        <a href="{{route('index')}}" class="nav__item-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{route('about')}}" class="nav__item-link">About Us</a>
                    </li>
                    <li class="nav__item has-dropdown">
                        <a href="{{route('services')}}" class="nav__item-link">Our Services</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-surveillance mr-2"></i> CCTV &amp; Surveillance
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-door-lock mr-2"></i> Access Control Systems
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-satellite mr-2"></i> Starlink Internet Installation
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-wifi mr-2"></i> Networking &amp; Wi-Fi Setup
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-smart-control mr-2"></i> Computer &amp; IT Support
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route('services')}}">
                                    <i class="icon-detector mr-2"></i> Office Equipment Maintenance
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="{{route('gallery')}}" class="nav__item-link">Gallery</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{route('review')}}" class="nav__item-link">Reviews</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{route('contact')}}" class="nav__item-link">Contact Us</a>
                    </li>
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{route('contact')}}" class="btn btn__white action__btn action__btn-contact">Get A Free Quote</a>
                </li>
                <li>
                    <div class="phone__number">
                        <div class="phone__icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div>
                            <a class="phone__link d-block" href="tel:+263773625107">+263 773 625 107</a>
                            <a class="email__link d-block" href="mailto:info@innovinetec.co.zw">info@innovinetec.co.zw</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</header>
