<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="assets/images/logo/ata-logo.png" class="logo-light ata-logo" alt="All Tech Alliance">
                <img src="assets/images/logo/ata-logo.png" class="logo-dark ata-logo" alt="All Tech Alliance">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav__item ">
                        <a href="{{route('index')}}" data-toggle="" class=" nav__item-link active">Home</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="{{route('index')}}" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{ route('about')}}" class="nav__item-link">About Us</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('howitworks')}}" class="nav__item-link">How It Works</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('awards')}}" class="nav__item-link">Awards & Recognition</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('review')}}" class="nav__item-link">Customers' Reviews</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('pricing')}}" class="nav__item-link">Packages & Pricing</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('location')}}" class="nav__item-link">Our Locations</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('faq')}}" class="nav__item-link">Help & FAQs</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('gallery')}}" class="nav__item-link">Our Gallery</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{route('contact')}}" class="nav__item-link">Contact Us</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services &
                            Products</a>
                        <ul class="dropdown-menu wide-dropdown-menu">
                            <li class="nav__item">
                                <div class="row mx-0">
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="{{route('services')}}" class="nav__item-link dropdown-menu-title">Our Services</a>
                                        <ul class="nav flex-column">
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">CCTV &amp; Surveillance</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Access Control Systems</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Starlink Installation</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Networking Installation</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Computer &amp; IT Support</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Office Equipment Maintenance</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="{{route('industries')}}"
                                            class="nav__item-link dropdown-menu-title">Products We Supply</a>
                                        <ul class="nav flex-column">
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Security &amp; Surveillance</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Starlink Equipment</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Computers &amp; Laptops</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Printers &amp; Photocopiers</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Networking Equipment</a>
                                            </li>
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Office Accessories</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                </div><!-- /.row -->
                            </li><!-- /.nav-item -->
                        </ul>
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Industries</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Corporate &amp; Office</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Retail &amp; Commercial</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Healthcare &amp; Medical</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Education &amp; Schools</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Manufacturing &amp; Logistics</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{route('industriessingle')}}" class="nav__item-link">Residential &amp; Homes</a>
                            </li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li><button class="action__btn action__btn-search"><i class="icon-search"></i></button></li>
                <li>
                    <a href="{{route('contact')}}" class="btn btn__white action__btn action__btn-contact">Get A Quote</a>
                </li>
                <li>
                    <div class="phone__number">
                        <div class="phone__icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div>
                            <a class="phone__link d-block" href="tel:+263773625107">+263 773 625 107</a>
                            <a class="email__link d-block" href="mailto:info@allteachalliance.co.zw">info@allteachalliance.co.zw</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</header>
