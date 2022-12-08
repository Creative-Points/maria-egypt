@extends('layouts.master')

@section('content')
<div class="d-flex flex-wrap justify-content-center home_new_search lazy" data-src="assets/images/home_bg_new.webp">
    <div class="home_new_search_box_all d-flex align-self-center flex-column">
        <div class="home_new_search_box_content_title">
            <h1>Tailor-made Tours With The Best Locals Ever!</h1>
        </div>
        <div class="home_new_search_box_desc">
            Confused? want to tailor package? Enquire here in 1 min. </div>
        <div class="home_new_search_actions d-flex flex-row justify-content-center align-items-center">
            <div class="home_new_search_box_content_btn">
                <a href="https://www.memphistours.com//theme/tailor-make-your-trip">Inquire Now</a>
            </div>
            <div class="home_new_search_actions">OR</div>
            <div class="home_new_search_box_content_btn_dark">
                <a href="https://www.memphistours.com//theme/where-to-go">Discover Travel Packages</a>
            </div>
        </div>
    </div>
    <div class="home_new_search_bottom align-self-end">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex align-items-center home_new_search_bottom_box">
                        <div class="home_new_search_bottom_box_icon">
                            <i class="fa-solid fa-face-smile" ></i>
                        </div>
                        <div class="home_new_search_bottom_box_text">
                            <div class="home_new_search_bottom_box_text_title" style="color: #ffffff;font-weight: 900;font-size: 19px;">
                                Happy customers <br><span id="count1"></span> </div>
                            <div class="home_new_search_bottom_box_text_sub_title">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center home_new_search_bottom_box">
                        <div class="home_new_search_bottom_box_icon">
                            <i class="fa-solid fa-plane"></i>
                        </div>
                        <div class="home_new_search_bottom_box_text">
                            <div class="home_new_search_bottom_box_text_title" style="color: #ffffff;font-weight: 900;font-size: 19px;">
                                Travels <br> <span id="count2"></span> </div>
                            <div class="home_new_search_bottom_box_text_sub_title">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center home_new_search_bottom_box">
                        <div class="home_new_search_bottom_box_icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="home_new_search_bottom_box_text">
                            <div class="home_new_search_bottom_box_text_title" style="color: #ffffff;font-weight: 900;font-size: 19px;">
                                Support hours <br> <span id="count3"></span> </div>
                            <div class="home_new_search_bottom_box_text_sub_title">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center home_new_search_bottom_box">
                        <div class="home_new_search_bottom_box_icon">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <div class="home_new_search_bottom_box_text">
                            <div class="home_new_search_bottom_box_text_title" style="color: #ffffff;font-weight: 900;font-size: 19px;">
                                clients <br> <span id="count4"></span> </div>
                            <div class="home_new_search_bottom_box_text_sub_title">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="special-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-destination">
                    <h3>Hot Travel Deals</h3>
                </div>
            </div>
            
            @foreach ($tours as $tour)
                <div class="col-md-3">

                    <div class="programBox">
                        <a href="{{ route('front.tour', $tour->slug) }}">
                            <div class="programBox_img_container lazy" data-src="{{ asset('uploads/place/'. $tour->image) }}">
                                <div class="programBox_days">
                                    @php
                                        $days = explode('|', $tour->duration);
                                        $country = explode('|', $tour->country);
                                        $desc = substr($tour->description, 0, 80);
                                    @endphp
                                    {{ $days[0] }} - {{ $country[0] }} </div>
                            </div>
                        </a>
                        <div class="programBox_wishList" data-program_id="146"></div>
                        <div class="programBox_title">
                            <h2>
                                <a href="{{ route('front.tour', $tour->slug) }}">
                                    {{ $tour->name }} </a>
                            </h2>
                        </div>
                        <div class="programBox_description">
                            <p>{{ $desc }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="programBox_price">
                                <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1465" class="convertable" itemprop="lowPrice">{{ $tour->price }}</span>
                                <input type="hidden" id="hmin_price1465" value="1465" />
                            </div>
                            <div class="programBox_rating">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="special-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-destination">
                    <h3>How it Works</h3>
                </div>
            </div>
            <a href="https://www.youtube.com/watch?v=gPFqICK_zPo?autoplay=1&controls=0" rel="how_it_works">
                <div class="how_it_works">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="how_it_works_data d-flex flex-column">
                                <div class="how_it_works_data_top_desc">
                                </div>
                                <div class="how_it_works_data_step d-flex justify-content-start align-items-start">
                                    <div class="how_it_works_data_step_icon">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="how_it_works_data_step_text d-flex justify-content-start">
                                        <div class="how_it_works_data_step_text_title">
                                            Step 1:
                                        </div>
                                        <div class="how_it_works_data_step_text_sub_title">
                                            Customize Your Trip<br />
                                            Choose, customize or just tell us about your perfect trip, destinations, preferences, and what you would like to see and do. </div>
                                    </div>
                                </div>
                                <div class="how_it_works_data_step d-flex justify-content-start align-items-start">
                                    <div class="how_it_works_data_step_icon">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="how_it_works_data_step_text d-flex justify-content-start">
                                        <div class="how_it_works_data_step_text_title">
                                            Step 2:
                                        </div>
                                        <div class="how_it_works_data_step_text_sub_title">
                                            Get Matched<br />
                                            Get connected with a local travel specialist who build for you the perfect itinerary with the best price. </div>
                                    </div>
                                </div>
                                <div class="how_it_works_data_step d-flex justify-content-start align-items-start">
                                    <div class="how_it_works_data_step_icon">
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="how_it_works_data_step_text d-flex justify-content-start">
                                        <div class="how_it_works_data_step_text_title">
                                            Step 3:
                                        </div>
                                        <div class="how_it_works_data_step_text_sub_title">
                                            Book with Confidence <br />
                                            Get your itinerary customized to fit all your needs and preferences. Pay and book when you’re happy with the travel specialist and the itinerary. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="how_it_works_video">
                                <svg class="how_it_works_video_bg">
                                    <rect id="how_it_works_video_bg" rx="100" ry="100" x="0" y="0" width="425" height="260">
                                    </rect>
                                </svg>
                                <img class="how_it_works_video_img lazy" src="https://www.memphistours.com//theme/Com2021/img/how_it_works_video_bg_new.webp">
                                <div class="local_play">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="home_new_box_title">Reviews </div>
        </div>
        <div class="col-12">
            <div id="feefo-service-review-carousel-widgetId" class="feefo-review-carousel-widget-service"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://api.feefo.com/api/javascript/memphis-tours?tags=language=English" async></script>

<div class="special-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-destination">
                    <div class="d-flex align-items-center justify-content-between">
                        <h3>Happening Around The Globe</h3>
                        <div class="top-destination-more"><a href="https://www.memphistours.com//theme/blog" title="View All" alt="View All">View All</a> </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="" data-src="https://images.memphistours.com/thumbs1/314d1e13a6fc7a63d92c67fdb55128de.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/the-oldest-cities-of-the-world-to-visit" title="The oldest cities of the world to visit">The oldest cities of the world to visit</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="10 Best French Polynesian Islands to Visit For a Blissful Holiday" data-src="https://images.memphistours.com/thumbs1/71a30a9a6c5da22a04331b16b4e5c6b4.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/best-french-polynesian-islands" title="10 Best French Polynesian Islands to Visit For a Blissful Holiday">10 Best French Polynesian Islands to Visit For a Blissful Holiday</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="" data-src="https://images.memphistours.com/thumbs1/730cba185bdce05cd356087832c824d1.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/7-places-to-travel-while-attending-the-2022-world-cup-in-qatar" title="7 Places to Travel While Attending the 2022 World Cup in Qatar">7 Places to Travel While Attending the 2022 World Cup in Qatar</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="10 Best Places to Visit in Europe This Autumn and Winter" data-src="https://images.memphistours.com/thumbs1/0bc56283be1135898bbec0383d4e861d.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/best-places-to-visit-in-europe-this-autumn-and-winter" title="10 Best Places to Visit in Europe This Autumn and Winter">10 Best Places to Visit in Europe This Autumn and Winter</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="Gestures Around The World" data-src="https://images.memphistours.com/thumbs1/284888ecdb4e82c6a63e3bf9c708ad3d.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/15-gestures-around-the-world-you-should-know-before-travelling" title="15 Gestures Around The World You Should Know Before Travelling">15 Gestures Around The World You Should Know Before Travelling</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="article_box">
                            <div class="lazy article_box_image" title="8 Best Countries to Visit in Asia" data-src="https://images.memphistours.com/thumbs1/7577c7d86f87d4191797683d1b431327.jpg">
                                <div class="article_box_content">
                                    <h2 class="article_box_title">
                                        <a href="https://www.memphistours.com//theme/blog/best-countries-to-visit-in-asia" title="8 Best Countries to Visit in Asia">8 Best Countries to Visit in Asia</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
@endsection