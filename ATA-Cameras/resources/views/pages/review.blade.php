@extends('layouts.app')
@section('content')
 <!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Reviews</h1>
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
                  <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
  
      <!-- ========================
      Reviews categories
      ========================== -->
      <section class="reviews-categories pt-60 pb-60 bg-gray border-top">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <ul class="categories-list d-flex flex-wrap align-items-center justify-content-center list-unstyled mb-0">
                <li class="cat__item d-flex justify-content-center align-items-center">
                  <div class="cat__img"><img src="assets/images/icons/google.png" alt="cat"></div>
                  <div>
                    <h3 class="cat__title">Check out our reviews on Google</h3>
                    <div class="cat__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div><!-- /.cat__rating -->
                  </div>
                </li><!-- /.cat__item -->
                <li class="cat__item d-flex justify-content-center align-items-center">
                  <div class="cat__img"><img src="assets/images/icons/yelp.png" alt="cat"></div>
                  <div>
                    <h3 class="cat__title">Check out our reviews on Yelp</h3>
                    <div class="cat__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div><!-- /.cat__rating -->
                  </div>
                </li><!-- /.cat__item -->
                <li class="cat__item d-flex justify-content-center align-items-center">
                  <div class="cat__img"><img src="assets/images/icons/trustpilot.png" alt="cat"></div>
                  <div>
                    <h3 class="cat__title">Check out our reviews on Trustpilot</h3>
                    <div class="cat__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div><!-- /.cat__rating -->
                  </div>
                </li><!-- /.cat__item -->
              </ul><!-- /.categories-list -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.reviews categories -->
  
      <!-- ========================
      testimonials-layout2
      ========================== -->
      <section class="testimonials-layout2">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
              <!-- Testimonial #1 -->
              <div class="testimonial-item d-flex flex-wrap">
                <div class="testimonial__icon"></div>
                <div class="testimonial__info">
                  <h3 class="testimonial__title">
                    That’s a defense you can trust! I love that I can access my video feed, arm and disarm my system from
                    my
                    phone anytime, anywhere!
                  </h3>
                  <div class="testimonial__meta d-flex align-items-center">
                    <div class="testimonial__rating mr-20">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4 class="testimonial__meta-title mb-0">Martin Qube Jr ,</h4>
                    <p class="testimonial__meta-desc mb-0">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div>
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #2 -->
              <div class="testimonial-item d-flex flex-wrap">
                <div class="testimonial__icon"></div>
                <div class="testimonial__info">
                  <h3 class="testimonial__title">
                    The technician answered some other questions I had regarding our existing equipment. He "warned" us
                    before the alarm went off during the final checkout. He was fast and professional.
                  </h3>
                  <div class="testimonial__meta d-flex align-items-center">
                    <div class="testimonial__rating mr-20">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4 class="testimonial__meta-title mb-0">Wallace Jr ,</h4>
                    <p class="testimonial__meta-desc mb-0">Axima Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div>
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #3 -->
              <div class="testimonial-item d-flex flex-wrap">
                <div class="testimonial__icon"></div>
                <div class="testimonial__info">
                  <h3 class="testimonial__title">
                    the technician was an outstanding and worked to solve an odd problem. He could have simply replaced
                    the keypad but he contacted people until he found a guru for my old one and fixed it.
                  </h3>
                  <div class="testimonial__meta d-flex align-items-center">
                    <div class="testimonial__rating mr-20">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4 class="testimonial__meta-title mb-0">Marin Todlr ,</h4>
                    <p class="testimonial__meta-desc mb-0">Smartdata Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div>
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #4 -->
              <div class="testimonial-item d-flex flex-wrap">
                <div class="testimonial__icon"></div>
                <div class="testimonial__info">
                  <h3 class="testimonial__title">
                    The technician was very courteous and informative about the new cameras that I didn’t even know was
                    out there. My cameras are old and keeps going into night mode. I will be getting new cameras. I thank
                    the technician who showed me a new view of what you can see with new cameras and I like it!
                  </h3>
                  <div class="testimonial__meta d-flex align-items-center">
                    <div class="testimonial__rating mr-20">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4 class="testimonial__meta-title mb-0">John Swade ,</h4>
                    <p class="testimonial__meta-desc mb-0">google Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div>
              </div><!-- /. testimonial-item -->
              <!-- Testimonial #5 -->
              <div class="testimonial-item d-flex flex-wrap">
                <div class="testimonial__icon"></div>
                <div class="testimonial__info">
                  <h3 class="testimonial__title">
                    The technician arrived as scheduled. He did the work professionally, efficiently and courteously. I
                    was highly pleased with the service and strongly recommend the company. </h3>
                  <div class="testimonial__meta d-flex align-items-center">
                    <div class="testimonial__rating mr-20">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4 class="testimonial__meta-title mb-0">Jhoana Todd ,</h4>
                    <p class="testimonial__meta-desc mb-0">google Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div>
              </div><!-- /. testimonial-item -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials-layout2 -->
  
      <!-- ========================
      cta layout1
      ========================== -->
      <section class="cta-layout1 bg-overlay bg-overlay-primary bg-overlay-primary-gradient text-center pt-140">
        <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="banner"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <div class="heading heading-light">
                <h2 class="heading__subtitle">Home Security Products Everyone Can Install, Afford, And Use!</h2>
                <h3 class="heading__title">Custom Alerts For Friends & Family</h3>
              </div>
              <form class="cta__form">
                <div class="form-group d-flex flex-wrap">
                  <input type="text" class="form-control" placeholder="Enter your email">
                  <button type="submit" class="btn btn__secondary btn__xl">
                    <span>Start Your Quote</span> <i class="icon-arrow-right"></i>
                  </button>
                </div>
              </form>
              <strong class="color-white fz-15">This consent is not required to make a purchase.</strong>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.cta layout1 -->
  
@endsection