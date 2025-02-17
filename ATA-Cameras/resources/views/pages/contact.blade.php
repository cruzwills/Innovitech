@extends('layouts.app')
@section('content')
<section class="google-map py-0">
    <iframe height="620" style="width: 100%;"
      src="https://maps.google.com/maps?q=Suite%20100%20San%20Francisco%2C%20LA%2094107%20United%20States&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
  </section><!-- /.GoogleMap -->

  <!-- ==========================
      contact layout 1
  =========================== -->
  <section class="contact-layout1 py-0 mt--100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contact-panel d-flex flex-wrap">
            <div class="contact-panel__info bg-overlay bg-overlay-primary">
              <div class="bg-img"><img src="assets/images/banners/2.jpg" alt="banner"></div>
              <h4 class="contact-panel__title color-white">Tailored Solutions For Your Security Priorities</h4>
              <p class="contact-panel__desc color-white">We take great pride in everything that we do, control over
                products allows us to ensure our customers receive the best quality service.
              </p>
              <ul class="contact__list list-unstyled mb-40">
                <li>
                  <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                </li>
                <li>
                  <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                </li>
                <li>
                  <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                </li>
              </ul>
              <a href="contact-us.html" class="btn btn__white btn__xl btn__block justify-content-between">
                <span>Get Started Now</span> <i class="icon-arrow-right"></i>
              </a>
            </div>
            <form class="contact-panel__form" method="post" action="https://7oroof.com/demos/sekure/assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Get In Touch</h4>
                  <p class="contact-panel__desc mb-30">We take great pride in everything that we do, control over
                    products allows us to ensure customers receive the best quality service and highest standards, you
                    need a dedicated team of specialists.
                  </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                      name="contact-email" required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                      name="contact-phone" required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <select class="form-control">
                      <option value="0">Select Your services</option>
                      <option value="1">service 1</option>
                      <option value="2">service 2</option>
                    </select>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                      name="contact-message"></textarea>
                  </div>
                  <button type="submit" class="btn btn__secondary btn__xl mt-10">
                    <i class="icon-arrow-right"></i> <span>Submit Request</span>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contact layout 1 -->


  <!-- ======================
     FAQ
  ========================= -->
  <section class="faq">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
          <div class="heading-layout2 text-center mb-50">
            <h3 class="heading__title">What Are You Looking For?</h3>
            <p class="heading__desc px-xl-5">Whether it’s protecting your possessions while you are on vacation or
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
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
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
                <a class="accordion-item__title" href="#">If I have questions, where can I find answers? </a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse10" class="collapse" data-parent="#accordion2">
                <div class="accordion-item__body">
                  <p>With any financial product that you buy, it is important that you know you are getting the best
                    advice from a reputable company as often</p>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
          </div><!-- /.accordion -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
          <p class="text__link text-center mt-60 mb-0">Our team can also provide security integration services for
            highly
            complex facilities and offer preventative maintenance plans.
            <a href="#">Contact Us Now!</a>
          </p>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.FAQ -->
@endsection