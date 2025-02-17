@extends('layouts.app')
@section('content')
    <!-- ========================
           page title
        =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">FAQS</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <div class="breadcrumb-area border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQS</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-area -->

    <!-- ======================
             FAQ
          ========================= -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading-layout2 text-center mb-50">
                        <h3 class="heading__title">What Are You Looking For?</h3>
                        <p class="heading__desc px-xl-5">Whether it’s protecting your possessions while you are on vacation
                            or
                            your family
                            while they sleep, we will give you the peace of mind that should the worst happen.</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion" id="accordion1">
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                                <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse1" class="collapse" data-parent="#accordion1">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                                <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse2" class="collapse" data-parent="#accordion1">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item opened">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                                <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse3" class="collapse show" data-parent="#accordion1">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse4">
                                <a class="accordion-item__title" href="#">What if I pick the wrong plan?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse4" class="collapse" data-parent="#accordion1">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse5">
                                <a class="accordion-item__title" href="#">Any contracts or commitments?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse5" class="collapse" data-parent="#accordion1">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                    </div><!-- /.accordion -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="accordion" id="accordion2">
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse6">
                                <a class="accordion-item__title" href="#">What are my payment options?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse6" class="collapse" data-parent="#accordion2">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item opened">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse7">
                                <a class="accordion-item__title" href="#">How does the free trial work?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse7" class="collapse show" data-parent="#accordion2">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse8">
                                <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse8" class="collapse" data-parent="#accordion2">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse9">
                                <a class="accordion-item__title" href="#">How does the free trial work?</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse9" class="collapse" data-parent="#accordion2">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                        <div class="accordion-item">
                            <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
                                <a class="accordion-item__title" href="#">If I have questions, where can I find
                                    answers? </a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse10" class="collapse" data-parent="#accordion2">
                                <div class="accordion-item__body">
                                    <p>With any financial product that you buy, it is important that you know you are
                                        getting the best
                                        advice from a reputable company as often</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                    </div><!-- /.accordion -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <p class="text__link text-center mt-60 mb-0">Our team can also provide security integration services
                        for
                        highly
                        complex facilities and offer preventative maintenance plans.
                        <a href="#">Contact Us Now!</a>
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <!-- ======================
           Work Process
          ========================= -->
    <section class="work-process-layout1 bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading heading-light mb-70">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">See How it works!</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title">The Right System For Your Home’s Needs.</h3>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc mb-30">Because a commercial security camera system has to produce results, we
                        offer
                        what most security camera companies can’t. For CCTV installation companies, it’s important to treat
                        cctv
                        camera installation with a modern approach. Our security camera system installation department is
                        just
                        passionate about security installation. </p>
                    <a href="team.html" class="btn btn__white btn__outlined btn__xl justify-content-around">
                        <span>Meet Our Experts</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="processes-wrapper bg-white">
                        <nav class="nav nav-tabs">
                            <a class="nav__link active" data-toggle="tab" href="#process1">
                                <span class="nav__number">1</span>
                                <span>Choose Your System</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process2">
                                <span class="nav__number">2</span>
                                <span>Set Up In Few Minutes</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process3">
                                <span class="nav__number">3</span>
                                <span>We Guard Your Home</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process4">
                                <span class="nav__number">4</span>
                                <span>You Enjoy Your Safety</span>
                            </a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="process1">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">We Will Walk You Through Exactly What Your Home
                                                Security Needs & Ship
                                                It
                                                To Your Front DoorWithin A Week.</h4>
                                            <p class="process__desc">We can partner with you to design and implement a
                                                scalable integrated
                                                security solution that addresses your toughest security challenges, while
                                                gaining efficiencies
                                                across your systems and teams by standardizing platforms and implementing
                                                event-driving system
                                                automation and powerful solutions help</p>
                                            <a href="about-us.html"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Discover More Info</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/1.jpg" alt="img">
                                        </div><!-- /.process__img -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.process-item -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane fade" id="process2">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">Set Up The System In Just A Few Minutes, No Tools
                                                Needed, Or Let One
                                                Of Our Experts Do It For You.</h4>
                                            <p class="process__desc">We can partner with you to design and implement a
                                                scalable integrated
                                                security solution that addresses your toughest security challenges, while
                                                gaining efficiencies
                                                across your systems and teams by standardizing platforms and implementing
                                                event-driving system
                                                automation and powerful solutions</p>
                                            <a href="about-us.html"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Discover More Info</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/2.jpg" alt="img">
                                        </div><!-- /.process__img -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.process-item -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane fade" id="process3">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">If There Is A Trouble, Our Monitoring Center Will
                                                Call You, And will
                                                Dispatch Authorities Immediately.</h4>
                                            <p class="process__desc">We can partner with you to design and implement a
                                                scalable integrated
                                                security solution that addresses your toughest security challenges, while
                                                gaining efficiencies
                                                across your systems and teams by standardizing platforms and implementing
                                                event-driving system
                                                automation and powerful solutions help</p>
                                            <a href="about-us.html"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Discover More Info</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/3.jpg" alt="img">
                                        </div><!-- /.process__img -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.process-item -->
                            </div><!-- /.tab-pane -->
                            <div class="tab-pane fade" id="process4">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">Adding Visual Verification To Your Monitoring Plan
                                                Lets Us Verify
                                                Alarm Is Real So Police Can Dispatch Faster.</h4>
                                            <p class="process__desc">We can partner with you to design and implement a
                                                scalable integrated
                                                security solution that addresses your toughest security challenges, while
                                                gaining efficiencies
                                                across your systems and teams by standardizing platforms and implementing
                                                event-driving system
                                                automation and powerful solutions help</p>
                                            <a href="about-us.html"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Discover More Info</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.col -->
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/4.jpg" alt="img">
                                        </div><!-- /.process__img -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.process-item -->
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ======================
           Clients
          ========================= -->
    <section class="clients pb-50 border-bottom bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <p class="font-weight-bold my-3">
                        Provide better security and control for residential and business customers.
                        <a href="#" class="text-underlined">Compare Security Options!</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="assets/images/clients/8.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/10.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/11.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Clients -->

    <!-- ======================
            features layout1
          ========================= -->
    <section class="features-layout1 pt-120 pb-90">
        <div class="container">
            <div class="row heading mb-30">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <h3 class="heading__title">Keep An Eye On Everything <br> With Our Video Security!</h3>
                    <p class="heading__desc font-weight-bold mb-30">Not only will this reduce the probability of crime
                        happening
                        on your
                        property, it will reduce or eliminate any liability that falls on you if you can show you have
                        solid,
                        well-designed commercial building security systems in place.
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row row-gutter-15 list-items-layout3">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Alarm Monitoring 24/7
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Security Monitoring Equipment
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Fire Monitor And Detection
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Remote Arm And Disarm
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Smart Home Controls
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Live Stream From Any Mobile
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Alerts, Schedules & Automations
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Record And Save Video Clips
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Lifetime Rate Lock Guarantee
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Lifetime Equipment Warranty
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Easy And Fair Cancellation
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">
                        Professional Grade Protection
                    </div><!-- /.list__item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            <div class="row align-items-center mt-60">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-7">
                    <p class="fz-15 font-weight-bold my-3">
                        For the Security and IT directors ensuring our places of work and leisure are safe. For the Chief
                        Technology Officers shaping the smart businesses of tomorrow. We delivers powerful and insightful
                        security
                        solutions that enable protectors to drive forward. As the leader in home security, we can help you
                        customize a home security system to meet your safety needs.
                        <a href="#" class="text-underlined">Schedule A Visit</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-5 d-flex justify-content-lg-end">
                    <a href="about-us.html" class="btn btn__secondary btn__outlined btn__xl">
                        Get A Free Quote
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.features layout1 -->
@endsection
