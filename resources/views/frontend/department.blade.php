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
                    قسم الطب البشري
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">الرئيسية</a>
                    </li>
                    <li>
                       قسم الطب البشري
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
                    <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news "> رؤية القسم </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        إعداد أطباء اكفاء معرفيا ومهارياً وبحثيا لمواكبة التطورات العلمية في العلوم الطبية الأساسية والسريرية من خلال توفير بيئة مناسبة للتعليم الطبي وكادر متميز ومناهج دراسية مجودة  وطرائق تدريس حديثة بما يلبي رعاية صحية على المستوى المحلي والإقليمي .                    </div>
                    <div class="sec-title mb-40 md-mb-20 text-left wow fadeInUp">
                        <h2 class="title mb-0 header-news "> رسالة القسم </h2>
                    </div>
                    <div class="sec-title mb-26 wow fadeInUp mt-20" data-wow-delay="300ms" data-wow-duration="2000ms">
                        تسعى كلية الطب والعلوم الصحية إلى إعداد كادر طبي وبحثي متميز، يتمثل القيم المهنية، قادراً على المنافسة، ومواكباً للتطورات العلمية، وملبياً لاحتياجات المجتمع، وبما يحقق معايير الاعتماد الوطني والإقليمي؛ من خلال برامج دراسية تطبيقية مجودة، وتعليم مستمر في بيئة تعليمية داعمة وكادر تدريسي محترف، وشراكة مجتمعية فاعلة.                    </div>
                    <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="readon2" href="https://www.ibbuniv.edu.ye/faculty-of-medicine/pages/%D9%86%D8%A8%D8%B0%D8%A9-%D8%B9%D9%86-%D8%A7%D9%84%D9%82%D8%B3%D9%85">{{ __('panel.move_to_the_rest_of_the_speech') }}</a>
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