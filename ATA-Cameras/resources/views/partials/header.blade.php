<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
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
                                <a href="{{route('review')}}" class="nav__item-link">Customers’ Reviews</a>
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
                                <a href="{{route('contact')}}" class="nav__item-link">contact us</a>
                            </li><!-- /.nav-item -->
                            <!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services &
                            Industries</a>
                        <ul class="dropdown-menu wide-dropdown-menu">
                            <li class="nav__item">
                                <div class="row mx-0">
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="{{route('services')}}" class="nav__item-link dropdown-menu-title">Services</a>
                                        <ul class="nav flex-column">
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="services-single.html">Business
                                                    Security</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Fire Detection</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Access control</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Alarm Systems</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">CCTV & Video</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('servicessingle')}}">Smart Home</a>
                                            </li> <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6 dropdown-menu-col">
                                        <a href="{{route('industries')}}"
                                            class="nav__item-link dropdown-menu-title">Industries</a>
                                        <ul class="nav flex-column">
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Pharmaceutic &
                                                    Biotech</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Manufacturing
                                                    & Logistics</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Healthcare
                                                    Buildings</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Commercial
                                                    Buildings</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}"> Finance &
                                                    Banking</a>
                                            </li> <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a class="nav__item-link" href="{{route('industriessingle')}}">Office
                                                    Buildings</a>
                                            </li> <!-- /.nav-item -->
                                            <!-- /.nav-item -->
                                        </ul>
                                    </div><!-- /.col-sm-6 -->
                                </div><!-- /.row -->
                            </li><!-- /.nav-item -->
                        </ul>
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">News &
                            Media</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="blog.html" class="nav__item-link">Blog Grid</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="case-study-modern.html" class="nav__item-link">Case Studies Modern</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="case-study-grid.html" class="nav__item-link">Case Studies Grid</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="case-study-single.html" class="nav__item-link">Single Case Study</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Products</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="shop.html" class="nav__item-link">Shop Products</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="shop-single-product.html" class="nav__item-link">Single Product</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="shopping-cart.html" class="nav__item-link">Cart</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li><button class="action__btn action__btn-search"><i class="icon-search"></i></button></li>
                <li>
                    <a href="#" class="action__btn action__btn-cart">
                        <i class="icon-cart"></i><span class="cart__counter">3</span>
                    </a>
                    <div class="cart-minipopup">
                        <ul class="list-unstyled">
                            <li class="cart-item">
                                <div class="cart__img"><img src="assets/images/products/1.jpg" alt="thumb"></div>
                                <div class="cart__content">
                                    <a class="cart__title" href="shop-single.html">Broom & Dustpan</a>
                                    <span class="cart__price">$ 8.00</span>
                                    <button class="cart__delete">&times;</button>
                                </div><!-- /.cart-item-content -->
                            </li><!-- /.cart-item -->
                            <li class="cart-item">
                                <div class="cart__img"><img src="assets/images/products/2.jpg" alt="thumb"></div>
                                <div class="cart__content">
                                    <a class="cart__title" href="shop-single.html">Sponge Cleaner </a>
                                    <span class="cart__price">$ 6.00</span>
                                    <button class="cart__delete">&times;</button>
                                </div><!-- /.cart-item-content -->
                            </li><!-- /.cart-item -->
                        </ul>
                        <div class="cart-total">
                            <span>Total:</span>
                            <span>$14.00</span>
                        </div><!-- /.cart-subtotal -->
                        <a href="shopping-cart.html" class="btn btn__secondary btn__block">View Cart</a>
                    </div><!-- /.cart-minipopup -->
                </li>
                <li>
                    <a href="get-quote.html" class="btn btn__white action__btn action__btn-contact">Get A Quote</a>
                </li>
                <li>
                    <div class="phone__number">
                        <div class="phone__icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div>
                            <a class="phone__link d-block" href="tel:00201061245741">02 01061245741</a>
                            <a class="email__link d-block"
                                href="https://7oroof.com/cdn-cgi/l/email-protection#d281b7b9a7a0b792e5bda0bdbdb4fcb1bdbf"><span
                                    class="__cf_email__"
                                    data-cfemail="2675434d535443661149544949400845494b">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
