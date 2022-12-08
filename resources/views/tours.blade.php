@extends('layouts.master')

@section('content')
<style>
    .home_sub_boxs {
        padding: 45px 0;
    }

    .sort_top {
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #EEEEEE;
    }

    .prog_count {
        font-size: 1.923rem;
        font-weight: bold;
    }

    .new_top_content {
        background-color: transparent;
        z-index: 3;
    }

    .new_top_content_title {
        text-align: center;
    }

    .new_top_content_title h1 {
        color: #fff;
        text-align: center;
        font-size: 2.692rem;
    }

    .new_top_content_desc {
        text-align: center;
        color: #fff;
        font-size: 1.154rem;
        height: 65px;
    }

    .new_top_content_desc a {
        color: #fff;
        font-weight: bold;
    }
</style>
<div class="sites_box d-flex align-items-center" style="background-image: url(https://www.memphistours.com/theme/Com2018/img/home/egypt_main.jpg); height: 300px">
    <div class="new_top_content">
        <div class="container">
            <div class="new_top_content_title">
                <h1>
                    Cruises & Tours in Egypt </h1>
            </div>
            <div class="new_top_content_desc">
                Get a taste of the past on our trips to Egypt, where you’ll take a walk through the footsteps of the pharaohs through ancient temples and monuments. While on your trip to Egypt, spend your days in Cairo visiting the Great Pyramids of Giza and the Sphinx, and then sail away on a luxury Nile cruise to Luxor and Aswan. Relax in the Red Sea and swim among playful dolphins and colorful corals.
                We will provide you with a variety of tours in Egypt, whether you were looking for small group packages of friends, family and fellow travelers or simply going solo and if you are looking for customizing your own personal best tours in Egypt. We offer a big variety of tours and cruises and you enjoy the best of the two worlds and choose from our combined tours of both Egypt and Jordan or you can pick one of our magical Egypt day trips and tours from any city in Egypt. Book your tour and experience the majestic land of the pharaohs through one of our tours in Egypt! </div>
        </div>
    </div>
    <div class="box_overlay"></div>
</div>
<div class="program">
    <div class="container">
        <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
            <li class="breadcrumb-item " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/">
                    <span itemprop="name">WHERE TO GO</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item  active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">Egypt</span>
                <meta itemprop="position" content="2" />
            </li>
        </ul>
    </div>
</div>
<div class="home_sub_boxs">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-3">
                <style>
                    .left_filter_all {
                        padding: 40px;
                        border: solid 1px #eeeeee;
                        background-color: #ffffff;
                    }

                    .left_filter_all_box {
                        border-bottom: 1px solid #eeeeee;
                        padding: 0 0 15px 0;
                        margin: 0 0 15px 0;
                    }

                    .left_filter_all_box_title {
                        font-size: 1.154rem;
                        font-weight: 500;
                        color: #212121;
                        cursor: pointer;
                        position: relative;
                        margin-bottom: 15px;
                    }

                    .left_filter_all_box_title::after {
                        font-family: 'bootstrap-icons';
                        content: "\f235";
                        position: absolute;
                        right: 0;
                        font-size: 1rem;
                        color: #212121;
                        height: 25px;
                    }

                    .left_filter_all_box_title.collapsed::after {
                        content: "\f229";
                    }

                    .left_filter_all_box .radio {
                        font-size: 1rem;
                        text-align: left;
                        color: #757575;
                        margin-bottom: 10px;
                    }

                    .left_filter_all_box_data img {
                        width: 17px;
                        height: 17px;
                        line-height: normal;
                    }

                    .left_filter_all_box .price_range_input input {
                        background: 0 0;
                        padding: 7px;
                        width: 100%;
                        border: 0 solid #e3e3e3;
                        border-radius: 0;
                        color: #7b7b7b;
                        text-align: center;
                    }

                    .left_filter_all_box .ui-widget-header {
                        border: 0 solid #757575;
                        background: #757575;
                        color: #fff;
                        font-weight: 700
                    }

                    .left_filter_all_box .ui-widget-content {
                        border: 0 solid #757575;
                        background: #eeeeee;
                    }

                    .left_filter_all_box .ui-slider-horizontal {
                        height: 1px
                    }

                    .left_filter_all_box .ui-state-default,
                    .left_filter_all_box .ui-widget-content .ui-state-default,
                    .left_filter_all_box .ui-widget-header .ui-state-default {
                        border: 0 solid #757575;
                        background: #757575;
                        font-weight: 700;
                        color: #fff;
                        border-radius: 50%
                    }

                    .left_filter_all_box .ui-slider .ui-slider-handle {
                        width: 20px;
                        height: 20px
                    }

                    .left_filter_all_box .ui-slider-horizontal .ui-slider-handle {
                        top: -10px
                    }

                    .ui-corner-all,
                    .ui-corner-bottom,
                    .ui-corner-right,
                    .ui-corner-br,
                    .ui-corner-left,
                    .ui-corner-bl,
                    .ui-corner-tr,
                    .ui-corner-tl {
                        border-radius: 0
                    }

                    .slider_range_all {
                        margin: 35px 0 20px 0;
                    }
                </style>
                <div class="left_filter_all">
                    <form method="post" accept-charset="utf-8" action="/Egypt?/Egypt">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#SingleCountry" aria-expanded="true">Destinations</div>
                            <div class="left_filter_all_box_data collapse show" id="SingleCountry">
                                <div class="row">
                                    <input name="Country" type="radio" style="display: none" value="0" id="0" onchange="filter(' ')">
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="1" id="1" onchange="changeCountries('Egypt')"> Egypt </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="14" id="14" onchange="changeCountries('Jordan')"> Jordan </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="13" id="13" onchange="changeCountries('Dubai')"> Dubai </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="39" id="39" onchange="changeCountries('Oman')"> Oman </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="30" id="30" onchange="changeCountries('Morocco')"> Morocco </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="15" id="15" onchange="changeCountries('Turkey')"> Turkey </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="49" id="49" onchange="changeCountries('African-Safari')"> African Safari </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input name="Country" type="radio" value="51" id="51" onchange="changeCountries('India')"> India </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#SpecialOffer" aria-expanded="true">Special Offers</div>
                            <div class="left_filter_all_box_data collapse show" id="SpecialOffer">
                                <div class="radio">
                                    <label>
                                        <input name="Offer" type="radio" value="0" id="0" onchange="filter(' ')" checked> Any </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Offer" type="radio" value="2" id="2" onchange="filter(' ')"> Christmas & New Year Offers </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Offer" type="radio" value="3" id="3" onchange="filter(' ')"> Easter Offers </label>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#RootCategories" aria-expanded="true">Trip Type</div>
                            <div class="left_filter_all_box_data collapse show" id="RootCategories">
                                <div class="row">
                                    <div class="radio">
                                        <label>
                                            <input name="rootCategory" type="radio" value="0" id="0" onchange="filter(' ')" checked> Any </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="rootCategory" type="radio" value="3" id="3" onchange="filter(' ')"> Packages </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="rootCategory" type="radio" value="5" id="5" onchange="filter(' ')"> Cruises </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="rootCategory" type="radio" value="2" id="2" onchange="filter(' ')"> Excursions </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="rootCategory" type="radio" value="1" id="1" onchange="filter(' ')"> Shore Excursions </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Styles" aria-expanded="true">Styles</div>
                            <div class="left_filter_all_box_data collapse show" id="Styles">
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="0" id="0" onchange="filter(' ')" checked> Any </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="19" id="19" onchange="filter(' ')"> Accessible Tours </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="1" id="1" onchange="filter(' ')"> Classic Tours </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="2" id="2" onchange="filter(' ')"> Luxury Tours </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="17" id="17" onchange="filter(' ')"> Off The Beaten Track </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="18" id="18" onchange="filter(' ')"> Romantic Tours </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Style" type="radio" value="3" id="3" onchange="filter(' ')"> Short City Break Tours </label>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Range" aria-expanded="true">Price Range</div>
                            <div class="left_filter_all_box_data collapse show" id="Range">
                                <div class="slider_range_all">
                                    <div id="slider-range"></div>
                                </div>
                                <div class="price_range_input">
                                    <div class="input text"><input type="text" name="amount" id="amount" values="0,12000" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Duration" aria-expanded="true">Duration</div>
                            <div class="left_filter_all_box_data collapse show" id="Duration">
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="0" id="0" onchange="filter(' ')" checked> Any </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="1" id="1" onchange="filter(' ')"> 1 day </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="2" id="2" onchange="filter(' ')"> 2-5 days </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="3" id="3" onchange="filter(' ')"> 5-10 days </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="4" id="4" onchange="filter(' ')"> 10-15 days </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="5" id="5" onchange="filter(' ')"> 15-20 days </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Duration" type="radio" value="6" id="6" onchange="filter(' ')"> More than 20 days </label>
                                </div>
                            </div>
                        </div>

                        <div class="left_filter_all_box">
                            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Group" aria-expanded="true">Group Size</div>
                            <div class="left_filter_all_box_data collapse show" id="Group">
                                <div class="radio">
                                    <label>
                                        <input name="Group" type="radio" value="0" id="0" onchange="filter(' ')" checked> Any </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Group" type="radio" value="57" id="3" onchange="filter(' ')"> Group Tour </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Group" type="radio" value="2" id="3" onchange="filter(' ')"> Private Tour </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="Group" type="radio" value="30" id="3" onchange="filter(' ')"> Small Group Tour </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
            <div class="col-md-9">
                <div class="sort_top d-flex align-items-center justify-content-between">
                    <div class="prog_count">
                        Found <span id="programs_count">
                            145 </span>
                        Tours </div>
                    <style>
                        .home_sub_filrers {
                            font-size: 1.154rem;
                            font-weight: bold;
                        }

                        .home_sub_filrers select {
                            border: 0;
                            margin: 0 0 0 10px;
                            padding: 0 20px 0 0;
                            background-image: none;
                        }
                    </style>
                    <div class="home_sub_filrers d-flex align-items-center justify-content-between">
                        <div>Sort by</div>
                        <div class="search_filters" id="select">
                            <form action="" method="get">
                                <select class="form-select" name="sort" id="sort" onchange="this.form.submit()">
                                    <option value="order" selected="selected">Recommended</option>
                                    <option value="price_desc">High to Low Price</option>
                                    <option value="price_asc">Low to High Price</option>
                                    <option value="dur_asc">Short to Long Duration</option>
                                    <option value="dur_desc">Long to Short Duration</option>
                                </select>
                                <input type="hidden" id="getSortType" value="">
                                <input type="hidden" name="Offer" value="">
                                <input type="hidden" name="Country" value="">
                                <input type="hidden" name="Category" value="">
                                <input type="hidden" name="Style" value="">
                                <input type="hidden" name="Group" value="">
                                <input type="hidden" name="Activity" value="">
                                <input type="hidden" name="Duration" value="">
                                <input type="hidden" name="price" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <style>
                    .site_single_tag {
                        border: 1px solid #757575;
                        padding: 5px 10px;
                        margin: 8px 8px 8px 0;
                        color: #757575;
                        font-size: 1.154rem;
                    }

                    .site_single_tag:hover {
                        border: 1px solid #F5A31B;
                        color: #F5A31B;
                    }
                </style>
                <!-- <div class="sort_top siteTags d-flex flex-wrap align-items-center justify-content-start">
                    <a class="site_single_tag" href="/Egypt/Packages/Egypt-Classic-Tours" title="Classic Tours"> Classic Tours</a>
                    <a class="site_single_tag" href="/Egypt/Packages/Christmas-And-New-Year-In-Egypt" title="Christmas Tours"> Christmas Tours</a>
                    <a class="site_single_tag" href="/Egypt/Cruises/River-Nile-Cruises" title="Nile Cruises"> Nile Cruises</a>
                    <a class="site_single_tag" href="/Egypt/Cruises/Dahabiya" title="Dahabiyas"> Dahabiyas</a>
                    <a class="site_single_tag" href="/Egypt/Packages/Egypt-Luxury-Tours" title="Luxury Tours"> Luxury Tours</a>
                    <a class="site_single_tag" href="/Egypt/Packages/Honeymoon-Tours-Egypt" title="Honeymoon Tours"> Honeymoon Tours</a>
                </div> -->
                <div class="row" id="programs">
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Off-The-Beaten-Track/treasures-of-egypt">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/380895712_Treasures%20of%20Egypt.jpg">
                                    <div class="programBox_days">
                                        12 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10319"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Off-The-Beaten-Track/treasures-of-egypt">
                                        Off the Beaten Track to the Treasures of Egypt </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>This tour&nbsp;will give you the chance to explore Egypt in-depth while taking unique different routes. Only in 12 days, travel the length of Egypt, start and end in Cairo and embark on a leisurely paced cruise, Salacia Cruise.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price2189" class="convertable" itemprop="lowPrice">2189</span>
                                    <input type="hidden" id="hmin_price2189" value="2189" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Easter-Holiday/moevenpick-nile-cruise-during-easter">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/723526368_hatshepsut%20temple.jpg">
                                    <div class="programBox_days">
                                        5 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10623"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Easter-Holiday/moevenpick-nile-cruise-during-easter">
                                        5-day Mövenpick Nile Cruise During Easter </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Enjoy the beauty of Egypt with this 5-day Nile cruise and spend Easter in Egypt on board of M&ouml;venpick Royal Lily Nile Cruise.&nbsp;Visit the charming Pharaonic places along the Nile in Aswan and Luxor.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1259" class="convertable" itemprop="lowPrice">1259</span>
                                    <input type="hidden" id="hmin_price1259" value="1259" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Cruises/Dahabiya/nebyt-dahabiya">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/1014749820_Nebyt%20Dahabiya.jpg">
                                    <div class="programBox_days">
                                        4/5/8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10271"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Cruises/Dahabiya/nebyt-dahabiya">
                                        Ashranda Nebyt Dahabiya </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Cruise the Nile in style on the Golden Lady of the Nile, Nebyt Dahabiya. &nbsp;The 5-star deluxe Nile cruise will offer you elegantly decorated cabins, a shaded sun deck level with a hot tub and chaise lounges.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price837" class="convertable" itemprop="lowPrice">837</span>
                                    <input type="hidden" id="hmin_price837" value="837" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/Cairo-Luxor-Tours">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/592626854_5%20Days%20Trip%20to%20Egypt%20Cairo%20and%20Luxor.jpg">
                                    <div class="programBox_days">
                                        5 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="145"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/Cairo-Luxor-Tours">
                                        5 Days Trip to Egypt: Cairo and Luxor </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p dir="ltr">Enjoy an Egypt short break! Explore Egypt on a 5 Days Trip. Travel to Egypt and visit all historical sites in Cairo and Luxor. Book your trip and enjoy Egypt Short Break!</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p><strong>&nbsp;- Cairo:</strong> Pyramids of Giza and the Sphinx, the Egyptian Museum, Coptic Cairo, and Khan Al Khalili Bazaar<br />
                                    <strong>&nbsp;- Luxor:</strong>&nbsp;Hatshepsut Temple, the Valley of the Kings, Karnak Temples and Luxor Temple.
                                </p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1077" class="convertable" itemprop="lowPrice">1077</span>
                                    <input type="hidden" id="hmin_price1077" value="1077" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/Cairo-And-Nile-Cruise-Holiday">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/1270215224_Trip%20to%20Egypt%20Pyramids%20%26%20Nile%20by%20Train.jpg">
                                    <div class="programBox_days">
                                        8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="146"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/Cairo-And-Nile-Cruise-Holiday">
                                        Trip to Egypt: Pyramids & Nile by Air </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Combine the rich heritage of Cairo with a magical 5-day Nile cruise on this Egypt vacation package&mdash;a must for any lover of history.&nbsp;Follow the path of the pharaohs in Cairo, then fly continue the path in&nbsp;Luxor, and Aswan.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1465" class="convertable" itemprop="lowPrice">1465</span>
                                    <input type="hidden" id="hmin_price1465" value="1465" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/The-Best-Of-Egypt">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/701620246_Cairo%2C%20Nile%20Cruise%20%26%20Sharm%20El%20Sheikh.jpg">
                                    <div class="programBox_days">
                                        12 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="163"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/The-Best-Of-Egypt">
                                        The Best of Egypt: Cairo, Nile Cruise & Sharm El Sheikh </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Start and end in Cairo. Enjoy the perfect combination of Egyptian culture and&nbsp;relaxation. This trip is ideal for those who want to have a taste of Egypt&rsquo;s wonderful sites, as well as a good time to relax in Sharm El Sheikh.&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>This Travel Package to Egypt will take you to rural Egypt on the Nile and to the shores of the&nbsp;Red Sea<a href="../../../Egypt/WikiTravel/Destinations-Egypt/wiki/Red-Sea-Egypt">.</a> See the&nbsp;Pyramids and Sakkara. Cruise the Nile for 4 days and then relax in&nbsp;Sharm El Sheikh before returning to see Old Cairo and the&nbsp;Museum. In Sinai optional excursions into the desert and mountains are available.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1997" class="convertable" itemprop="lowPrice">1997</span>
                                    <input type="hidden" id="hmin_price1997" value="1997" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/Egypt-Budget-Tours">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/1522985297_Trip%20to%20Egypt%20Pyramids%20%26%20Nile%20by%20Air.jpg">
                                    <div class="programBox_days">
                                        8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="176"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/Egypt-Budget-Tours">
                                        Trip to Egypt: Pyramids & Nile by Train </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Discover captivating pharaonic history through an exciting tour that suits your financial conditions in 8 days. Visit the Pyramids before heading down to Aswan by Egypt sleeper train to cruise between Luxor &amp; Aswan.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>and see how great the ancient Egyptians&nbsp;were to build such gigantic pyramids.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price975" class="convertable" itemprop="lowPrice">975</span>
                                    <input type="hidden" id="hmin_price975" value="975" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/Round-Trip-Nile-Cruise-and-Pyramids">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/1219093823_Round%20Trip%20Cruise%20%26%20Pyramids.jpg">
                                    <div class="programBox_days">
                                        10 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="5185"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/Round-Trip-Nile-Cruise-and-Pyramids">
                                        Round Trip Nile Cruise and Pyramids </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Cruise the Nile in Egypt enjoying a unique roundtrip sailing experience on board MS Mayfair Nile Cruise between Luxor and Aswan for 6 nights and see the spectacular&nbsp;Pyramids in Cairo during this 10 day tour.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price2497" class="convertable" itemprop="lowPrice">2497</span>
                                    <input type="hidden" id="hmin_price2497" value="2497" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Cruises/River-Nile-Cruises/Moevenpick-Royal-Lily-Nile-Cruise">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/800959921_lily3.jpg">
                                    <div class="programBox_days">
                                        4 Days Aswan/ Luxor - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="189"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Cruises/River-Nile-Cruises/Moevenpick-Royal-Lily-Nile-Cruise">
                                        Movenpick MS Royal Lily Nile Cruise </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Enjoy your cruise down the Nile with the Movenpick Royal Lily. This&nbsp;cruise ship offers stylish and comfortable suites, an elegant dinning room,a spacious sundeck, swimming pool and other amenities.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price796" class="convertable" itemprop="lowPrice">796</span>
                                    <input type="hidden" id="hmin_price796" value="796" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Luxury-Tours/Luxury-Egypt-Cairo-and-Nile-Tour">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/626770708_Abu%20Simbel.jpg">
                                    <div class="programBox_days">
                                        8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="6981"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Luxury-Tours/Luxury-Egypt-Cairo-and-Nile-Tour">
                                        Luxury Egypt and The Nile Tour </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>This luxurious&nbsp;tour will take you down the entire length of Egypt. In Cairo, see the Pyramids and&nbsp;Old Cairo, and then travel south for a Nile cruise from Luxor to Aswan, enjoying the ancient sights along the way.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1995" class="convertable" itemprop="lowPrice">1995</span>
                                    <input type="hidden" id="hmin_price1995" value="1995" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Classic-Tours/pyramids-abu-simbel-and-nile-cruise">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/601769232_Pyramids%2C%20Nile%20Cruise%20%26%20Abu%20Simbel.jpg">
                                    <div class="programBox_days">
                                        8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="9394"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Classic-Tours/pyramids-abu-simbel-and-nile-cruise">
                                        Pyramids, Nile Cruise & Abu Simbel </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>See the best of Egypt on 8 days&nbsp;trip.&nbsp;Visit the Giza Pyramids and the Sphinx, the Egyptian Museum, Khan Al Khalili in Islamic Cairo before heading south to Abu Simbel and embark on a Nile cruise from Aswan to Luxor.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price1379" class="convertable" itemprop="lowPrice">1379</span>
                                    <input type="hidden" id="hmin_price1379" value="1379" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Luxury-Tours/Luxury-Tour-of-Egypt">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/286909043_pool.jpg">
                                    <div class="programBox_days">
                                        10 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10102"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Luxury-Tours/Luxury-Tour-of-Egypt">
                                        Private Luxury Tour of Egypt </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Step into the land of pharaohs and&nbsp;wonder at its ancient temples, pyramids, and tombs. Travel across Egypt and down its Nile with this luxurious private tour where you will get to see attractions in Cairo, Luxor, and Aswan.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>In Cairo, you will get to see many attractions such as the Great Pyramids of Giza, the Egyptian Museum, the Citadel of Salah al-Din, and Coptic Cairo.&nbsp;Then, you will travel through the Nile river in a cruise from Luxor to Aswan. In Luxor and Aswan, you will get to see many monuments such as Karnak Temple, Valley of the Kings, and Temple of Queen Hatshepsut.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price2490" class="convertable" itemprop="lowPrice">2490</span>
                                    <input type="hidden" id="hmin_price2490" value="2490" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Packages/Egypt-Luxury-Tours/cairo-and-nile-adventure">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/1547765680_Cairo%20and%20Nile%20Adventure.jpg">
                                    <div class="programBox_days">
                                        11 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10260"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Packages/Egypt-Luxury-Tours/cairo-and-nile-adventure">
                                        Cairo and Nile Adventure </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Explore the mysterious beauty of Egypt by going on this Cairo and Nile Adventure. Wander in the capital city of the land of the pharaohs before&nbsp;sailing from Luxor to Aswan on the golden pearl of the Nile, Nebyt Dahabiya.&nbsp;</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price3299" class="convertable" itemprop="lowPrice">3299</span>
                                    <input type="hidden" id="hmin_price3299" value="3299" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Cruises/River-Nile-Cruises/ms-salacia-nile-cruise">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/870907729_Cover--%283%29-%282%29-1.jpg">
                                    <div class="programBox_days">
                                        4 Days Aswan / Luxor - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10037"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Cruises/River-Nile-Cruises/ms-salacia-nile-cruise">
                                        MS Salacia Nile cruise </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Salacia&nbsp;cruise offers&nbsp;you a unique experience cruising on the Nile with high quality of service&nbsp;&amp; accommodation. Salacia Nile cruise offers 3 and 4 nights&nbsp;itineraries in which you will explore the wonders of Egypt.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price619" class="convertable" itemprop="lowPrice">619</span>
                                    <input type="hidden" id="hmin_price619" value="619" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="programBox">
                            <a href="/Egypt/Cruises/Dahabiya/nuun-and-nuut-dahabiyas">
                                <div class="programBox_img_container lazy" data-src="https://images.memphistours.com/thumbs1/833218396_website-Nuut2.jpg">
                                    <div class="programBox_days">
                                        4/5/8 Days - 1 Country </div>
                                </div>
                            </a>
                            <div class="programBox_wishList" data-program_id="10302"></div>
                            <div class="programBox_title">
                                <h2>
                                    <a href="/Egypt/Cruises/Dahabiya/nuun-and-nuut-dahabiyas">
                                        Ashranda Nuun and Nuut Dahabiyas </a>
                                </h2>
                            </div>
                            <div class="programBox_description">
                                <p>Experience unique routes and the Nile River in the most exclusive and luxurious way by taking a cruise on&nbsp;Nuun or Nuut.&nbsp;Life on board a dahabiya will&nbsp;bring together superb sightseeing, sailing, and delicious meals.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="programBox_price">
                                    <span class="from">from</span> <span class="currencySign">$</span><span id="min_price835" class="convertable" itemprop="lowPrice">835</span>
                                    <input type="hidden" id="hmin_price835" value="835" />
                                </div>
                                <div class="programBox_rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div nextpage="1" totalpages="10" progCount="145" page="2" id="programs_more"></div>
                  
                </div>
                <div id="loader_div"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="home_new_boxes" itemscope itemtype="http://schema.org/FAQPage">
                <div class="home_new_box_title">FAQs</div>
                <div class="home_new_box_title_list_faq">
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is Egypt considered a safe destination?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">- Egypt has served as one of the best and safest tourist destinations for decades. Surrounded by warm Egyptian hospitality, courteous and kind-hearted locals you're gonna feel at home and as safe as you'll ever be. With some Sensible precautions and preparations, you will be able to explore Egypt tours and trips and enjoy Egypt's generally very safe cities with your mind at ease. Boasting a usually low crime rate visitors will be more than safe especially in areas frequently visited by tourists.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What are the health procedures MariaEgypt are taking during COVID-19?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">
                                <p>To ensure the health and safety of our travelers, MariaEgypt has adapted to the new care measures established by WHO. We are taking all the necessary procedures and precautions when it comes to the health and safety of our travelers as your safety and well-being remain our top priority. We always aim to ensure that your trip is stress-free. With MariaEgypt, traveling and exploring Egypt with health and safety will be possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Why book with MariaEgypt Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">MariaEgypt being one of the leading figures and key players in tourism industry offers a wide array of benefits to its clientele. Ensuring that your journey with us is a once in a lifetime experience that will leave you longing for more. Here are a couple of reasons why MariaEgypt should be your default to-go travel companion...
                                - Customer Feedback: With over 8000 reviews on Tripadvisor scoring at an average of 4.9
                                - Flexible itineraries
                                - Competitive prices
                                - Excellent customer service
                                - Facilitated payment
                                - Our River Nile Cruises: home to the fascinating river Nile cruises we assure you a unique and insightful experience. </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is there a special rate for private groups booking with MariaEgypt? </div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Yes, MariaEgypt Egypt does provide a discount for private trips booked with large groups. Some Egypt travel packages will include discount as well for repeated customers, loyalty program members and students.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">How much will I have to pay as a deposit? </div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">The fixed deposit amount is 25% of the tours total price Except for Egypt Christmas tours, new years and other peak seasons where the deposit goes up to 50%.
                            </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What types of tours are offered in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">With countless experiences to live and a lot of wonders to see in Egypt, there are more than one kind and one type of tour you can go on that suits your taste.
                                1. Classic Egypt Tours: Discover Egypt’s history and its most iconic attractions. From its Great Pyramids of Giza and Great Sphinx to majestic tombs and temple complex in Luxor and Aswan, combine a tour of Cairo with a cruise down the longest river in the world, the Nile River. Prices starting from $983. 
                                2. Off the Beaten Track Tours: Take a unique track during your journey in Egypt. Discover ancient Egypt from a different perspective as you explore unique monuments telling different stories. Prices starting from $775.
                                3. Luxury Tours:  Our luxury packages will take you back to a bygone era of more comfortable travel. Kick back and experience all the charm and history that Egypt has to offer with the most exclusive service. Prices starting from $1929.
                                4. Christmas in Egypt Tours: Change the usual scene of snow and sitting by the fire and spend the holidays in the warmer weather of Egypt as you follow the steps of Pharaohs. Prices starting from $825
                                5. Small Group Tours: If you are looking for a more intimate travel away from the crowds, but still be able to meet and befriend some fellow travelers, then traveling with a small group is the perfect pick for you. This will give you a deeper connection to Egypt as you explore its hidden gems. Prices starting from $227.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is there any surcharge on transactions completed using a debit or credit card?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Standing by our designation to make the payment process as smooth and effortless as possible we do not apply any surcharge on your transactions via Debit or Credit card.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">How can I obtain my visa to visit Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Visitors and travellers to Egypt are required to carry a passport valid for at least six months from there arrival date. However, in an effort to revitalize tourism in Egypt the following nationalities can purchase a 1-month entry visa on arrival.
                                The Nationalities that benefit from the aforementioned exception are Australia, Canda, Croatia, the European Union, Georgia, Japan, New Zealand, Norway, Macedonia, South Korea, Russia, Serbia, Ukraine, United Kingdom and The U.S.A.
                                The Process for acquiring these entry visas is extremely simple and only takes a mere couple of minutes through any bank window before proceeding to customs.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What kind of transportation can be used to move in Egypt cities ?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">From your very first step after landing in Cairo airport, there will be a wide range of comfortable and affordable means of transport under your beck and call. The Fastest and most abundant is the Taxi. It is preferred to avoid white taxis as they Rarely abide by a meter reading and might ask for an exaggerated fare.
                                However, the GPs and meter utilizing Uber transportation service is a preferred alternative. Another popular and highly accessible option for moving around is the Subway/Metro. With the Streets occasionally getting congested with people and automobiles the metro has become one of the fastest means of transportation to move from point A to Point B in Egypt. It tends to get crowded in rush hour times but still stands as a fast and convenient means of transport.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Do Egyptians speak languages other than Arabic?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Have no fear Most Egyptians living in Cities have a basic command over the English language and some English words and phrases.
                                However the same cannot be said for French, Italian, Spanish and finally German. Nevertheless, Professionals working in the tourism sector have easily adapted to visitors who don't speak Arabic. Satisfying the needs of most travellers with a combination of English and other lingual phrases.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is it a common practice to give tips in Egypt? </div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Service charges are by default included in the bill when dining in a restaurant. However, these fees go to the restaurant and not the waiters. Knowing this it is advisable and courteous to directly tip the servers with an additional 10 %.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Do I have to learn Arabic in order to enjoy my visit to Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">It's not a must but definitely advisable and beneficial to learn a couple of day to day basic Arabic words and phrases such as greetings amongst others. If you are planning to dive deeper and explore more than the Popular destinations and famous tourist attractions learning some phrases is surely a smart move.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What different types of hotels are there in hotels in Egypt? What about check-in time?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Accommodations for travelers in Egypt fall across a broad range—everything from world class luxury to simple hostel accommodations are available. The nicest hotels compare well with luxury hotels anywhere, Egyptian hotels have their own rating system that loosely classifies them on a 5-star scale.
                                The check-in time in most hotels in Egypt is around midday, 12 or 1 PM.
                            </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Can I take pictures while visiting the monuments in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Photography is allowed in most of the historical sites and museums in Egypt, but some of them have extra charges for taking in a camera.
                                in some museums, like the Egyptian Museum of Antiquities, and some historical sites, like the Valley of the Kings in Luxor, photography is prohibited and visitors are asked to leave their cameras at the reception before entering.
                            </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is there any special dress code to be followed during visiting a mosque in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">modest dress would be highly recommended and in some mosques, women will be asked to cover their hair and perhaps their arms and legs.
                                Both women and men will be asked to remove their shoes before entering a mosque.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Are there any health issues that I should worry about in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Some travelers might suffer sunburn or heat stroke from the heat and sun during the summer if they are not careful; however, taking the proper precautions and drinking bottled water can eliminate any health risks.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Can I bring a supply of cigarettes & alcohol while visiting Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">It is always recommended for travelers who wish to have their own supply of cigarettes and alcohol with them in Egypt to purchase them upon arrival. There are duty free shops in the airports in Cairo, Luxor, Hurghada, El Gouna and Sharm El Sheikh. Tourists are allowed to purchase up to 3 liters of alcohol and up to 200 cigarettes on arrival.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What are the opening hours for shops and different stores in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Most of the shops in Egypt open from around 10 AM and stay open until 10PM; however, many shops, cafes, and restaurants especially in major cities stay open much later and some
                                facilities and shops are open 24 hours.
                            </div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">What are the opening hours for monuments in Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">Most of the monuments, historical sites, and museums in Egypt open from 9 AM until 5 PM.
                                Open-air historical sites, like the Pyramids of Giza, are open from 8 AM until sunset.
                                Some museums have morning opening hours, from 9 AM to 4 PM
                                evening opening hours, from 5 PM to 9 or 10 PM.During Ramadan, the holy month of the Islamic calendar, be aware that these hours will change significantly.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">Is there any special advice for women travelers while visiting Egypt?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">In less touristic places, relatively modest dress is recommended.
                                Women should avoid very tight clothing, keep their shoulders and knees covered, and avoid very revealing necklines. Men should also avoid particularly revealing clothing.
                                wearing shorts is not very common among Egyptians. Dressing with relative modesty is a way of respecting the local culture.
                                The metro in Cairo has separate cars for women that might be more comfortable, especially during rush hours when the cars can be very full.</div>
                        </div>
                    </div>
                    <div class="home_new_box_faq" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="home_new_box_faq_title" itemprop="name">How much should I tip?</div>
                        <div class="home_new_box_faq_answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <div itemprop="text">In a restaurant, it is good to give between 5 and 10% tip directly to the waiter.
                                For a small favor, like carrying luggage or parking a car, a few Egyptian pounds would be appropriate. Not more than five.
                                Often times in Egypt you will find someone tending to the bathroom to keep it clean. Giving them one Egyptian pound is an appropriate amount.
                                Tipping your tour guide and vehicle driver is completely optional but should be considered if you're provided with great service. If you decide to tip feel free to give what you think your experience was worth.
                            </div>
                        </div>
                    </div>
                </div>
                <div id="load_more"><span class="loadmoretext">Load more</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
