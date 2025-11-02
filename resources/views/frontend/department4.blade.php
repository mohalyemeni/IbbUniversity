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
                     قسم المختبرات الطبية 
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">الرئيسية</a>
                    </li>
                    <li>
                        قسم المختبرات الطبية 
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
                        <img class="ima" src="https://www.ibbuniv.edu.ye/faculty-of-medicine/assets/pages/%D8%B1%D8%B3%D8%A7%D9%84%D8%A9-%D8%A7%D9%84%D9%82%D8%B3%D9%85-2_17386107821.JPG"
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
                    تقديم تعليم متميز يخدم المجتمع في مجال علوم المختبرات الطبية مهنيا وإنسانياً 
                    </div>
                   <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news "> رسالة القسم </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp mt-20" data-wow-delay="300ms" data-wow-duration="2000ms">
                    يسعى برنامج  المختبرات الطبية لإعداد وتأهيل أخصائيين في علوم المختبرات الطلبية علميا وأخلاقيا وجعلهم متمكنين مهنيا وقادرين على تطوير مهارات التعليم المستمر بما يستجد في مجال الطب التشخيصي المخبري .                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon2" href="https://www.ibbuniv.edu.ye/faculty-of-medicine/category/قسم-المختبرات-الطبية">{{ __('panel.move_to_the_rest_of_the_speech') }}</a>
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