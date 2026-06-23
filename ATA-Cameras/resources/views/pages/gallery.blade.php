@extends('layouts.app')
@section('title', 'Gallery | Innovinetec Solutions — Our Work in Zimbabwe')
@section('meta_description', 'Browse our gallery of IT installations across Zimbabwe — CCTV systems, Starlink setups, network infrastructure, access control and more completed by Innovinetec Solutions.')
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
                  <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
              </nav>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.breadcrumb-area -->
  
      <style>
        .gallery-img {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 30px;
            height: 260px;
        }
        .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .gallery-img:hover img {
            transform: scale(1.06);
        }
        .gallery-img a.popup-gallery-item {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(46, 48, 143, 0.55);
            opacity: 0;
            transition: opacity 0.35s ease;
            z-index: 2;
        }
        .gallery-img:hover a.popup-gallery-item {
            opacity: 1;
        }
        .gallery-img a.popup-gallery-item i {
            color: #fff;
            font-size: 28px;
        }
      </style>

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
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/7.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/7.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/8.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/8.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="gallery-img">
                <a class="popup-gallery-item" href="assets/images/gallery/9.jpg"><i class="fas fa-plus"></i></a>
                <img src="assets/images/gallery/9.jpg" alt="gallery img">
              </div><!-- /.gallery-img -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.gallery -->
@endsection