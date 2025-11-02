@if ($president_speech)
<div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-12 pr-0 pl-0">
                <div class="widget-area">
                  <div class="widget-archives mb-50">
              
                    <h3 class="widget-title mobile-toggle d-lg-none d-sm-block">
                      القـائـمـة
                       <span class="toggle-icon plus posationn"></span>
                    </h3>
              
                    <ul class="mobile-toggle-content">
                        
                        @foreach ($web_menus->where('section', 3)->sortBy('published_on', SORT_REGULAR, false) as $menu)
                            <li class="has-submenu">
                                <a href="{{ count($menu->appearedChildren) > 0 ? 'javascript:void(0)' : $menu->link }}">{{ $menu->title }}</a>
                                @if (count($menu->appearedChildren) > 0)
                                    <ul class="submenu">
                                        @foreach ($menu->appearedChildren as $sub_menu)
                                            <li class=" {{ count($sub_menu->appearedChildren) > 0 ? 'has-submenu' : '' }}">
                                                <a href="{{ $sub_menu->link }}">{{ $sub_menu->title }}</a>
                                                @if (count($sub_menu->appearedChildren) > 0)
                                                    <ul class="submenu">
                                                        @foreach ($sub_menu->appearedChildren as $sub_sub_menu)
                                                            <li>
                                                                <a
                                                                    href="{{ $sub_sub_menu->link }}">{{ $sub_sub_menu->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                  </div>
                </div>
              </div>
                <div class="col-lg-8 pr-50 md-pr-15">
                    <div class="blog-deatails">
                        <div class="blog-full">
                            <div class="sec-title mb-40 md-mb-20 text-left">
                                <h2 class="title mb-0 header-news"> {!! $president_speech->title ?? '' !!} </h2>
                            </div>
                            <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                {!! $president_speech->content ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endif

@section('script')

<script>
//    document.addEventListener("DOMContentLoaded", function() {
//     const submenuParents = document.querySelectorAll(".widget-archives .has-submenu");

//     submenuParents.forEach(parent => {
//         parent.addEventListener("click", function() {
//             // تبديل عرض القائمة الفرعية
//             const submenu = parent.querySelector(".submenu");
//             submenu.style.display = submenu.style.display === "block" ? "none" : "block";

//             // تبديل الفئة لتدوير السهم
//             parent.classList.toggle("open");
//         });
//     });
// });

    $(document).ready(function() {
        $(".has-submenu > a").click(function(e) {
            $(this).next(".submenu").each(function(){
                e.preventDefault(); // منع الرابط من التنقل
                $(this).closest(".has-submenu").toggleClass("open");
                $(this).slideToggle();
            });
            $(this).parent().siblings().find(".submenu").slideUp(); // إغلاق القوائم الأخرى
            $(this).parent().siblings().find(".has-submenu").removeClass("open"); // إغلاق القوائم الأخرى
        });
    });
    </script>

@endsection
