@extends('layouts.app')

@section('content')
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">

                @php
                    $imagePath = public_path('assets/site_settings/' . $siteSettings['site_img']->value);
                @endphp

                <img src="{{ $siteSettings['site_img']->value && file_exists($imagePath)
                    ? asset('assets/site_settings/' . $siteSettings['site_img']->value)
                    : asset('image/not_found/placeholder6.jpg') }}"
                    alt="{{ $siteSettings['site_name']->value }}">

                {{-- <img src="{{ asset('frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image"> --}}
            </div>
            <div class="breadcrumbs-text">
                <h1 class="page-title">
                    {{ $page->title }}
                </h1>
                <ul>
                    <li>
                        <a class="active" href="{{ route('frontend.index') }}">{{ __('panel.main') }}</a>
                    </li>
                    <li>
                        {{ $page->title }}
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="widget-area">
                            <div class="widget-archives mb-50">
                    
                            <h3 class="widget-title mobile-toggle d-lg-none d-sm-block">
                            القـائـمـة
                            <span class="toggle-icon plus posationn"></span>
                            </h3>
                    
                            <ul class="mobile-toggle-content">
                                
                                @foreach ($web_menus->where('section', 3)->sortBy('published_on') as $menu)
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
                            <div class="bs-img">
                                @php
                                    if ($page->photos->last() != null && $page->photos->last()->file_name != null) {
                                        $page_img = asset('assets/pages/' . $page->photos->last()->file_name);

                                        if (!file_exists(public_path('assets/pages/' . $page->photos->last()->file_name))) {
                                            $page_img = "";
                                       // $page_img = asset('image/not_found/placeholder.jpg');
                                        }
                                    } 
                                    else {
                                    $page_img = "";
                                       // $page_img = asset('image/not_found/placeholder.jpg');
                                    }
                                @endphp
                                 @if($page_img !="")
                                    <img src="{{ $page_img }}" class="w-100" alt="{{$page->title}}">
                                @endif
                            </div>
                            <div class="blog-full">
                                <div class="widget-area">
                                    <div class="recent-posts mb-0 no">
                                        <h2 class="widget-title f_shh mb-2">{{$page->title}}</h2>
                                    </div>
                                    <ul class="single-post-meta pb-1">
                                        <li>
            
                                            <?php
                                            $date = $page->created_at;
                                            $higriShortDate = Alkoumi\LaravelHijriDate\Hijri::ShortDate($date); // With optional Timestamp It will return Hijri Date of [$date] => Results "1442/05/12"
                                            ?>
            
                                            <span class="p-date">
                                                <i class="fa fa-calendar-check-o"></i>
                                                {{ $higriShortDate . ' ' . __('panel.calendar_hijri') }}
            
                                                <span>{{ __('panel.corresponding_to') }} </span>
                                                {{ $page->created_at->isoFormat('YYYY/MM/DD') . ' ' . __('panel.calendar_gregorian') }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="p-date">
                                                <i class="fa fa-user-o"></i>
                                                {{ $page->users && $page->users->isNotEmpty() ? $page->users->first()->full_name : __('panel.admin') }}
                                            </span>
                                        </li>
            
                                    </ul>
                                </div>
                                <div class="blog-desc mb-35">
                                    <p>
                                        {!! $page->content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

    </div>
    <!-- Main content End -->
@endsection

@section('script')
<script>
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