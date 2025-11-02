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
                    برنامج الطب البشري والجراحة
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">الرئيسية</a>
                    </li>
                    <li>
                       برنامج الطب البشري والجراحة
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
                        <img class="ima" src="https://www.ibbuniv.edu.ye/faculty-of-medicine/assets/pages/نبذة-عن-القسم_17368577751.JPG"
                            alt="قسم الطب البشري">
                        <img class="shape top-center animated rotate infinite"
                            src="{{ asset('frontend/images/president_speech/image-center-circle.png') }}"
                            alt="Cirle Shape Img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sec-title mb-40 md-mb-20 text-left">
                        <h2 class="title mb-0 header-news"> رسالة البرنامج </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        إعداد أطباء اكفاء معرفيا ومهارياً وبحثيا لمواكبة التطورات العلمية في العلوم الطبية الأساسية والسريرية من خلال توفير بيئة مناسبة للتعليم الطبي وكادر متميز ومناهج دراسية مجودة  وطرائق تدريس حديثة بما يلبي رعاية صحية على المستوى المحلي والإقليمي .                
                    </div>
                     <div class="sec-title mb-40 md-mb-20 text-left">
                        <h2 class="title mb-0 header-news"> اهداف البرنامج </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <ol>
                            <li dir="RTL">تزويد الطلبة بالمعارف الأساسية والمهارية والبحثية في العلوم الطبية الأساسية والسريرية</li>
                            <li dir="RTL">تدريب الطلبة على مهارات الفحص السريري للوصول إلى التشخيص السليم</li>
                            <li dir="RTL">تنمية مهارات الطلبة في صياغة وصفة طبية وتقديم المشورة للمرضى وعائلاتهم حسب الحاجة</li>
                            <li dir="RTL">تنمية قدرات الطلبة على مهارات التعلم الذاتي المستمر لمواكبة التقدم العلمي والمهني</li>
                            <li dir="RTL">تزويد الطلبة بالقيم الإنسانية والمجتمعية وأخلاقيات المهنة</li>
                            <li dir="RTL">إكساب الطلبة مهارات الاتصال الفعال والعمل ضمن فريق</li>
                        </ol>
                                        <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon2" href="https://www.ibbuniv.edu.ye/faculty-of-medicine/category/بكالوريوس-طب-وجراحة">{{ __('panel.move_to_the_rest_of_the_speech') }}</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

        <!-- Blog Section End -->

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