@extends('layouts.app')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">

                <img src=" {{asset('image/not_found/placeholder6.jpg')}}" alt="">
            </div>
            <div class="breadcrumbs-text">
                <h1 class="page-title">
                    قسم التغذية العلاجية والحميات  
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">الرئيسية</a>
                    </li>
                    <li>
                       قسم التغذية العلاجية والحميات  
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->

    <div id="rs-about" class="rs-about style1 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pl-110 order-last md-pl-15 md-mb-60">
                    <div class="img-part js-tilt">
                        <img class="ima" src="https://www.ibbuniv.edu.ye/faculty-of-medicine/assets/page_categories/قسم-التغذية-العلاجية-والحميات_17368568711.JPG"
                            alt="قسم الطب البشري">
                        <img class="shape top-center animated rotate infinite"
                            src="{{ asset('frontend/images/president_speech/image-center-circle.png') }}"
                            alt="Cirle Shape Img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news "> رؤية القسم </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                    التميز محليا والمساهمة  الفاعلة إقليميا في التعليم الطبي والبحث العلمي وخدمة المجتمع في مجال التغذية الطبية.                    </div>
                   <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news "> رسالة القسم </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp mt-20" data-wow-delay="300ms" data-wow-duration="2000ms">
                    يسعى القسم إلى إعداد كادر بكفاءات علمية ومهنية عالية في التخصص وبما يحقق معايير الاعتماد الوطني والإقليمي من خلال تقديم برامج أكاديمية مجمود تسهم في تطوير الخدمات  التغذوية والصحية والبحثية لتلبية التطلعات المجتمعية ولمواجهة التحديات الصحية والتنموية.                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon2" href="https://www.ibbuniv.edu.ye/faculty-of-medicine/category/قسم-التغذية-العلاجية-والحميات">{{ __('panel.move_to_the_rest_of_the_speech') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!-- Blog Section End -->
        @include('frontend.home.news')
        @include('frontend.home.statistics')

    @include('frontend.home.albums')

    </div>
    <!-- Main content End -->
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const submenuParents = document.querySelectorAll(".widget-archives .has-submenu");
    
        submenuParents.forEach(parent => {
            parent.addEventListener("click", function() {
                // تبديل عرض القائمة الفرعية
                const submenu = parent.querySelector(".submenu");
                submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    
                // تبديل الفئة لتدوير السهم
                parent.classList.toggle("open");
            });
        });
    });
    </script>
@endsection