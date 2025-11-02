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
                    ماجستير مختبرات طبية
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">الرئيسية</a>
                    </li>
                    <li>
                       ماجستير مختبرات طبية
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
                        <img class="ima" src="https://www.ibbuniv.edu.ye/faculty-of-medicine/assets/pages/اهداف-البرنامج-3_17386230331.JPG"
                            alt="قسم الطب البشري">
                        <img class="shape top-center animated rotate infinite"
                            src="{{ asset('frontend/images/president_speech/image-center-circle.png') }}"
                            alt="Cirle Shape Img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news"> رسالة البرنامج </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        يسعى برنامج ماجستير الطب المخبري في علم الأحياء الدقيقة الطبية والمناعة إلى تأهيل الخريجين المتمرسين والمتمرسين في علم الأحياء الدقيقة الطبية والمناعة ليكونوا رائدين في هذا المجال على المستويين المحلي والإقليمي. سيكون الخريجون مستعدين للالتزام بالتعلم مدى الحياة ومواكبة التطورات لتحسين
                    </div>
                   <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news"> اهداف البرنامج </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp mt-20" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <ol>
                        <li dir="RTL">تزويد الخريجين بالمعرفة المتقدمة في مجالات علم الأحياء الدقيقة الطبية والمناعة.</li>
                        <li dir="RTL">تعزيز معرفة الخريجين بالأهمية السريرية للعلوم الطبية.</li>
                        <li dir="RTL">تطوير مهارات الخريجين في استخدام تقنيات المختبرات التقليدية والحديثة في تشخيص الأمراض المعدية واضطرابات الجهاز المناعي.</li>
                        <li dir="RTL">تمكين الخريجين من الإشراف على الوقاية من العدوى والسيطرة عليها ومكافحتها في أماكن الرعاية الصحية.</li>
                        <li dir="RTL">تزويد الخريجين بمهارات البحث العلمي والنشر في مجال الطب المخبري.</li>
                        <li dir="RTL">تطوير قدرات الخريجين في مهارات الاتصال والتعلم الذاتي والتفكير النقدي.</li>
                    </ol>
                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon2" href="https://www.ibbuniv.edu.ye/faculty-of-medicine/category/ماجستير-مختبرات-طبية">{{ __('panel.move_to_the_rest_of_the_speech') }}</a>
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