@extends('layouts.app')
@section('content')
<!-- ========================
       page title 
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/9.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Gallery</h1>
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
                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
  
      <!-- ========================
       gallery 
      =========================== -->
      <section class="gallery pt-130 pb-90">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/1.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/1.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/2.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/2.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/3.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/3.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/4.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/4.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/5.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/5.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/6.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/6.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4 gallery-hidden">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/7.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/7.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4 gallery-hidden">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/8.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/8.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4 gallery-hidden">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/9.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/9.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12 text-center">
              <button class="btn btn__primary loadMoreGallery">Load More</button>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.gallery -->
@endsection