<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 pt-94 pb-70 md-pt-64 md-pb-70">
            <div id="rs-blog" class="rs-blog rs-news-events main-home ">
                <div class="container">
                    <div class="sec-title mb-40 md-mb-20 text-left">
                        <h2 class="title mb-0 header-news">
                            <a href="{{ route('frontend.news_list') }}">
                                اخبار القسم
                            </a>
                        </h2>
                    </div>

                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        @foreach ($news as $news)
                            <div class="blog-item">
                                @php
                                    if (
                                        $news->photos->first() != null &&
                                        $news->photos->first()->file_name != null
                                    ) {
                                        $news_img = asset('assets/news/' . $news->photos->first()->file_name);

                                        if (
                                            !file_exists(
                                                public_path('assets/news/' . $news->photos->first()->file_name),
                                            )
                                        ) {
                                            $news_img = asset('image/not_found/placeholder.jpg');
                                        }
                                    } else {
                                        $news_img = asset('image/not_found/placeholder.jpg');
                                    }
                                @endphp
                                <div class="image-part">
                                    <img src="{{ $news_img }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <?php
                                            $date = $news->created_at;
                                            $higriShortDate = Alkoumi\LaravelHijriDate\Hijri::ShortDate($date); // With optional Timestamp It will return Hijri Date of [$date] => Results "1442/05/12"
                                            ?>
                                            <i class="fa fa-calendar"></i>
                                            {{ $higriShortDate . ' ' . __('panel.calendar_hijri') }}
                                            <span>{{ __('panel.corresponding_to') }} </span>
                                            {{ $news->created_at->isoFormat('YYYY/MM/DD') . ' ' . __('panel.calendar_gregorian') }}

                                        </li>
                                    </ul>
                                    <a href="{{ route('frontend.news_single', $news->slug) }}">
                                        {!! \Illuminate\Support\Str::words($news->title, 8, '...') !!}
                                    </a>
                                    <div class="desc">
                                        {{ \Illuminate\Support\Str::words(strip_tags(htmlspecialchars_decode($news->content)), 10, '...') }}
                                    </div>
                                    <div class="btn-btm justify-content-end">
                                        <div class="rs-view-btn">
                                            <a
                                                href="{{ route('frontend.news_single', $news->slug) }}">{{ __('panel.read_more') }}</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
