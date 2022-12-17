@extends('layouts.master')

@section('content')
    <div class="program">
        <div class="container">
            <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                <li class="breadcrumb-item " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/">
                        <span itemprop="name">WHERE TO GO</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/Egypt/">
                        <span itemprop="name">Egypt</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <li class="breadcrumb-item " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/Egypt/Packages/">
                        <span itemprop="name">Packages</span>
                    </a>
                    <meta itemprop="position" content="3" />
                </li>
                <li class="breadcrumb-item " itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="/Egypt/Packages/Egypt-Classic-Tours/">
                        <span itemprop="name">Classic Egypt Tours</span>
                    </a>
                    <meta itemprop="position" content="4" />
                </li>
                <li class="breadcrumb-item  active" itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <span itemprop="name">{{ $place->name }}</span>
                    <meta itemprop="position" content="5" />
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-12">
                        <div class="top-destination">
                            <h1>{{ $place->name }}</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <link rel="stylesheet" type="text/css"
                            href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
                        <style>
                            .local_play {
                                position: absolute;
                                top: calc(50% - 45px);
                                right: calc(50% - 45px);
                                color: #fff;
                            }

                            .local_play i {
                                font-size: 90px;
                            }

                            .local_play:hover {
                                color: #fff;
                                opacity: 0.9;
                            }

                            .program_new_photo {
                                position: relative;
                                height: 550px;
                                background-size: cover;
                                background-position: center;
                            }

                            #galleryModal .modal-fullscreen .modal-content {
                                background-color: rgba(0, 0, 0, .9);
                            }

                            #galleryModal .close {
                                float: right;
                                font-size: 1.5rem;
                                font-weight: 700;
                                line-height: 1;
                                color: #000;
                                text-shadow: 0 1px 0 #fff;
                                opacity: .5
                            }

                            #galleryModal .close:focus,
                            .close:hover {
                                color: #000;
                                text-decoration: none;
                                opacity: .75
                            }

                            #galleryModal .close:not(:disabled):not(.disabled) {
                                cursor: pointer
                            }

                            #galleryModal button.close {
                                padding: 0;
                                background-color: transparent;
                                border: 0;
                                -webkit-appearance: none
                            }

                            #galleryModal .nav-pills .nav-link.active,
                            #galleryModal .nav-pills .show>.nav-link {
                                color: #212121;
                                background-color: #EEEEEE;
                                cursor: pointer;
                            }

                            #galleryModal .nav-pills .nav-link {
                                border-radius: 0.25rem 0.25rem 0 0;
                                cursor: pointer;
                            }

                            .modal-dark .close {
                                color: #f2f2f2;
                            }

                            .modal.modal-dark .close svg {
                                margin-right: 20px;
                                fill: #fff;
                            }

                            #galleryModal .modal-header {
                                justify-content: flex-end;
                            }

                            .slider-nav {
                                height: 500px;
                            }

                            .slick-next,
                            .slick-prev {
                                position: absolute;
                                display: block;
                                width: 34px;
                                height: 56px;
                                line-height: 0;
                                font-size: 0;
                                cursor: pointer;
                                top: 50%;
                                -webkit-transform: translateY(-50%);
                                transform: translateY(-50%);
                                padding: 0;
                                border: none;
                                z-index: 2;
                            }

                            .slick-next,
                            .slick-next:focus,
                            .slick-next:hover,
                            .slick-prev,
                            .slick-prev:focus,
                            .slick-prev:hover {
                                background: transparent;
                                color: transparent;
                                outline: none
                            }


                            .slick-prev {
                                left: 15px
                            }

                            [dir=rtl] .slick-prev {
                                left: auto;
                                right: 15px;
                            }


                            .slick-next {
                                right: 15px;
                            }

                            [dir=rtl] .slick-next {
                                left: 15px;
                                right: auto
                            }

                            .sliderMainPhoto {
                                height: 550px !important;
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                            }

                            .sliderNavPhoto {
                                height: 95px !important;
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                margin-bottom: 20px;
                                border: 5px solid #000 !important;
                            }

                            .sliderNavPhoto.slick-current {
                                border: 5px solid #fff !important;
                            }

                            .photo-tab .nav-pills .nav-link.active,
                            .photo-tab .nav-pills .show>.nav-link {
                                color: #212121;
                                background-color: #EEEEEE;
                                cursor: pointer;
                            }

                            #myTabContent .sliderNavPhoto:not(.slick-current) {
                                -webkit-filter: brightness(50%);
                                filter: brightness(50%);
                            }

                            .sliderMainNav {
                                height: 500px;
                            }

                            .sliderMainNav .sliderNavPhoto {
                                height: 170px !important;
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                margin-bottom: 20px;
                                border: 0 solid #000 !important;
                                position: relative;
                            }

                            .sliderMainNav .sliderNavPhoto.slick-current {
                                border: 0 solid #fff !important;
                            }

                            .sliderMainNav .slick-track {
                                transform: none !important;
                            }

                            #myTabContent .sliderMainNav .sliderNavPhoto:not(.slick-current) {
                                -webkit-filter: brightness(50%);
                                filter: brightness(50%);
                            }

                            .sliderMainNav .slick-slide {
                                cursor: pointer;
                            }

                            .sliderMainNav .sliderNavPhotoContain:not(.slick-current) .sliderNavPhoto {
                                -webkit-filter: brightness(50%);
                                filter: brightness(50%);
                            }

                            .sliderNavPhotoContain {
                                position: relative;
                            }

                            .gallery_count {
                                font-size: 24px;
                                color: #fff;
                                text-align: center;
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                line-height: 170px;
                                top: 0;
                                left: 0;
                            }

                            #travelerPhotos .slider-nav .slick-track {
                                transform: none !important;
                            }
                        </style>
                        <div class="row">
                            <div class="col-9 slickMainSlider">
                                @foreach ($images as $img)
                                    <div class="sliderMainPhoto"
                                        style="background-image: url('{{ asset('uploads/place/'.$img->image) }}')"
                                        title="{{ $place->name }}">
                                    </div>
                                @endforeach

                                {{-- <div class="sliderMainPhoto" style="background-image: url('https://images.memphistours.com/large/1270215224_Trip to Egypt Pyramids & Nile by Train.jpg')" title="{{ $place->name }}">
                                    </div>
                                    <div class="sliderMainPhoto" style="background-image: url('https://images.memphistours.com/large/1494661409_Trip to Egypt Pyramids & Nile by Air.jpg')" title="{{ $place->name }}">
                                    </div> --}}
                            </div>
                            <div class="col-3 sliderMainNav">
                                @for ($i = 0; $i <= 2; $i++)
                                    @if ($i == 2)
                                        <div class="sliderNavPhotoContain" data-bs-toggle="modal"
                                            data-bs-target="#galleryModal">
                                            <div class="sliderNavPhoto"
                                                style="background-image: url('{{ asset('uploads/place/' . $images[$i]->image)  }}')"
                                                title="{{ $place->name }}">
                                            </div>
                                            <div class="gallery_count" title="{{ $place->name }}"
                                                alt="{{ $place->name }}">
                                                {{ count($images) }} Photos </div>
                                        </div>
                                    @else
                                        <div class="sliderNavPhotoContain">
                                            <div class="sliderNavPhoto"
                                                style="background-image: url('/uploads/place/{{ $images[$i]->image }}')"
                                                title="{{ $place->name }}">
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                                {{--
                                    <div class="sliderNavPhotoContain">
                                        <div class="sliderNavPhoto" style="background-image: url('https://images.memphistours.com/large/1270215224_Trip to Egypt Pyramids & Nile by Train.jpg')" title="{{ $place->name }}">
                                        </div>
                                    </div> --}}

                            </div>
                        </div>
                        <div class="modal fade  modal-dark" id="galleryModal" tabindex="-1"
                            aria-labelledby="galleryModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close large" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">
                                                <svg width="24" height="24" aria-hidden="true" role="img"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M19.5 20a.498.498 0 01-.354-.146l-15-15a.5.5 0 01.707-.707l15 15A.5.5 0 0119.5 20z">
                                                    </path>
                                                    <path
                                                        d="M4.5 20a.5.5 0 01-.354-.854l15-15a.5.5 0 01.707.707l-15 15A.498.498 0 014.5 20z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <ul class="photo-tab nav nav-pills justify-content-start" id="pillsTab"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link p-3 active show" id="hostPhotosTab"
                                                        data-bs-toggle="tab" data-bs-target="#hostPhotos" role="tab"
                                                        aria-controls="hostPhotosTab" aria-selected="true">Company's
                                                        Photos ({{ count($images) }})</a></li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="hostPhotos" role="tabpanel"
                                                    aria-labelledby="login-tab">
                                                    <div class="row">
                                                        <div class="col-md-10 slickSlider">
                                                            @foreach ($images as $img)
                                                                <div class="sliderMainPhoto"
                                                                    style="background-image: url('{{ asset('uploads/place/'.$img->image) }}')"
                                                                    title="{{ $place->name }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-2 slider-nav">
                                                            @foreach ($images as $img)
                                                                <div class="sliderNavPhoto"
                                                                    style="background-image: url('{{ asset('uploads/place/'.$img->image) }}')"
                                                                    title="{{ $place->name }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="program_data" class="program_box_content">
                            <div class="program_box_title">Overview</div>
                            <div class="program_box_data mb-4">
                                <div class="program_icons_all d-flex flex-row justify-content-between">
                                    <div class="col-md-3">
                                        <div class="program_box_icons_contain d-flex align-items-center flex-column">
                                            <div class="program_box_icons_img">
                                                <img src="https://www.memphistours.com/theme/Com2021/img/dur.svg"
                                                    alt="Duration" title="Duration">
                                            </div>
                                            <div class="program_box_icons_text">
                                                Duration </div>
                                            <div class="program_box_icons_subtext">
                                                {{ explode('|', $place->duration)[0] }} </div>
                                            <div class="program_box_icons_subtext_sub">
                                                {{ explode('|', $place->duration)[1] }} </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="program_box_icons_contain d-flex align-items-center flex-column">
                                            <div class="program_box_icons_img">
                                                <img src="https://www.memphistours.com/theme/Com2021/img/location.svg"
                                                    alt="Duration" title="Countries">
                                            </div>
                                            <div class="program_box_icons_text">
                                                Countries </div>
                                            <div class="program_box_icons_subtext">
                                                {{ explode('|', $place->country)[0] }} </div>
                                            <div class="program_box_icons_subtext_sub">
                                                {{ explode('|', $place->country)[1] }} </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="program_box_icons_contain d-flex align-items-center flex-column">
                                            <div class="program_box_icons_img"><img
                                                    src="https://www.memphistours.com/theme/Com2021/img/type.svg"
                                                    alt="Type" title="Type"></div>
                                            <div class="program_box_icons_text">
                                                Type </div>
                                            <div class="program_box_icons_subtext">
                                                {{ explode('|', $place->type)[0] }} </div>
                                            {{-- <div class="program_box_icons_subtext_sub"> --}}
                                            {{-- {{ explode('|', $place->type)[1] }} </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="program_box_icons_contain d-flex align-items-center flex-column">
                                            <div class="program_box_icons_img">
                                                <img src="https://www.memphistours.com/theme/Com2021/img/run.svg"
                                                    alt="Run" title="Run">
                                            </div>
                                            <div class="program_box_icons_text">
                                                Run:
                                            </div>
                                            <div class="program_box_icons_subtext">
                                                {{ $place->run }} </div>
                                            <div class="program_box_icons_subtext_sub">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="program_box_data mb-3">
                                <p>{{ $place->description }}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="program_box_title" id="include">Included</div>
                                    <div class="program_box_data mb-3">
                                        <ul>
                                            @foreach (explode('|', $place->included) as $inc)
                                                <li><i class="fa-solid fa-check" class="program_box"
                                                        style="color: #F5A31B;"></i>{{ $inc }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="program_box_title" id="exclude">Excluded</div>
                                    <div class="program_box_data mb-3">
                                        <ul>
                                            @foreach (explode('|', $place->excluded) as $exc)
                                                <li><i class="fa-solid fa-xmark" class="program_box"
                                                        style="color:#E8235E;"></i>{{ $exc }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="program_box_title" id="itinerary">Itinerary</div>
                            <div class="program_box_data mb-3" id="itinerary">
                                <style>
                                    .program_itinerary_all_box {
                                        height: 700px;
                                        overflow-y: scroll;
                                    }

                                    /* width */
                                    .program_itinerary_all_box::-webkit-scrollbar {
                                        width: 10px;
                                    }

                                    /* Track */
                                    .program_itinerary_all_box::-webkit-scrollbar-track {
                                        background: #fff;
                                        border: 1px solid #EEEEEE;
                                    }

                                    /* Handle */
                                    .program_itinerary_all_box::-webkit-scrollbar-thumb {
                                        background: #757575;
                                    }

                                    /* Handle on hover */
                                    .program_itinerary_all_box::-webkit-scrollbar-thumb:hover {
                                        background: #757575;
                                    }

                                    .program_itinerary_box {
                                        padding: 10px 30px 10px 30px;
                                        position: relative;
                                    }

                                    .program_itinerary_box:before {
                                        content: "";
                                        height: 100%;
                                        position: absolute;
                                        width: 1px;
                                        left: 12px;
                                        top: 0;
                                        z-index: 2;
                                        background-color: rgba(177, 177, 177, .5);
                                    }

                                    .program_itinerary_box_title {
                                        font-weight: bold;
                                        font-size: 1.538rem;
                                        color: #212121;
                                        margin-bottom: 10px;
                                        position: relative;
                                        cursor: pointer;
                                    }

                                    .program_itinerary_box_title:before {
                                        content: "";
                                        position: absolute;
                                        width: 24px;
                                        height: 24px;
                                        left: -30px;
                                        top: 0;
                                        z-index: 2;
                                        background-color: #F5A31B;
                                        border-radius: 50%;
                                    }

                                    .program_itinerary_box_title h2 {
                                        font-size: 1.538rem;
                                    }

                                    .program_itinerary_box_desc {
                                        font-size: 1.154rem;
                                        color: #212121;
                                    }

                                    .mapboxgl-marker {
                                        width: 25px;
                                        height: 25px;
                                        border-radius: 50%;
                                        background-color: #F5A31B;
                                    }

                                    .program_itinerary_all {
                                        border: 1px solid #EEEEEE;
                                        margin-bottom: 50px;
                                    }
                                </style>
                                <div class="program_itinerary_all">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div id="map-canvas" style='width: 100%; height: 700px;'></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="program_itinerary_all_box">
                                                @foreach ($days as $item)
                                                    <div class="program_itinerary_box">
                                                        <div class="program_itinerary_box_title"
                                                            data-lat="{{ $item->lat }}"
                                                            data-lng="{{ $item->lng }}"
                                                            data-link="{{ $item->day - 1 }}">
                                                            <h2>Day {{ $item->day }}: {{ $item->title }}</h2>
                                                        </div>
                                                        <div class="program_itinerary_box_desc">
                                                            <p>{!! $item->description !!}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{-- <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="30.1128268"
                                                        data-lng="31.3976017" data-link="0">
                                                        <h2>Day 1: Arrival in Cairo</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Welcome to the mystical lands of Egypt, where the Pharaohs ruled
                                                            for thousands of years. Upon your arrival at Cairo International
                                                            Airport, your tour manager will meet and assist you and ease the
                                                            process by providing an entry visa. You will then be escorted
                                                            through the bustling streets of Cairo in an exclusive
                                                            air-conditioned vehicle. Once you reach your chosen hotel
                                                            according to your accommodation plan whether it will be
                                                            overlooking the Great Pyramids of Giza like Hilton Pyramids Golf
                                                            Hotel or over looking the Nile, like the luxurious Sheraton
                                                            Cairo Hotel &amp; Casino, your tour manager will assist you with
                                                            your check-in and double-check your itinerary with you to
                                                            establish and confirm all the pick-up times for all your
                                                            activities during your trip.<br />
                                                            <br />
                                                            <strong>Overnight in Cairo.</strong>
                                                        </p>
                                                        <p><strong>Welcome drink included.</strong></p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="29.9772962"
                                                        data-lng="31.1303068" data-link="1">
                                                        <h2>Day 2: Pyramids and Cairo Sightseeing</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>After enjoying a delicious wholesome breakfast at your hotel,
                                                            your personal guide will take you to the Giza Plateau to start
                                                            your journey by marveling at one of the Seven Wonders of the
                                                            World, the Great Pyramids of Giza. Walk or take a camel over to
                                                            the iconic Sphinx and Valley Temple. After your pyramids visit,
                                                            you&rsquo;ll go for lunch at an authentic Egyptian restaurant
                                                            and then head over to the Egyptian Museum, in the heart of
                                                            historic Downtown Cairo, overlooking the renowned Tahrir Square.
                                                            After relishing over the magnificent ancient Egyptian artifacts
                                                            and treasures, you will be driven through Old Cairo to arrive at
                                                            the historic Islamic Cairo area where you will explore the
                                                            vibrant, meandering, treasure-filled alleys of Khan El Khalili,
                                                            Cairo&rsquo;s oldest bazaar, if there is time.<br />
                                                            <br />
                                                            <strong>Overnight in Cairo.</strong>
                                                        </p>
                                                        <p><strong>Meals:</strong> Breakfast, Lunch.</p>
                                                        <p><strong>Visits: </strong>Great Pyramids of Giza, Sphinx, Valley
                                                            Temple, Egyptian Museum, Khan El Khalili.</p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="25.718508"
                                                        data-lng="32.6496197" data-link="2">
                                                        <h2>Day 3: Fly to Luxor - East Bank Sightseeing</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Today, you will be leaving Cairo and head out to the shining city
                                                            of Luxor. You will meet your tour manager early in the morning
                                                            at your hotel where he will accompany you to Cairo International
                                                            Airport for your trip to Luxor. Upon landing in Luxor, you will
                                                            be assisted and whisked away in an exclusive air-conditioned
                                                            vehicle to board your luxurious Nile cruise, Salacia, that will
                                                            offer you a unique experience cruising on the Nile with
                                                            high-quality service, gastronomy, and accommodation during your
                                                            stay. Enjoy a delicious lunch on board before heading out to
                                                            your first stop in Upper Egypt which is visiting Karnak Temple
                                                            and Luxor Temple at the East Bank. Return back to your cruise
                                                            and enjoy a warm and hand-crafted dinner.<br />
                                                            <br />
                                                            <strong>Overnight aboard your cruise in Luxor.</strong>
                                                        </p>
                                                        <p><strong>Meals:</strong> Breakfast, Lunch, Dinner.</p>
                                                        <p><strong>Visits:</strong> Karnak Temple, Luxor Temple.</p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="25.74258"
                                                        data-lng="32.5972163" data-link="3">
                                                        <h2>Day 4: West Bank Sightseeing</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Enjoy your first breakfast on board your cruise surrounded by the
                                                            calm waters of the Nile. After breakfast, head out to explore
                                                            the West Bank of Luxor. Visit the Royal Cemetery for 62
                                                            Pharaohs, the Valley of the Kings, then head to the Mortuary
                                                            Temple of Queen Hatshepsut, which was built by the architects of
                                                            the New Kingdom during the 15th century BCE at Deir El-Bahari.
                                                            Finish the day as you marvel at the towering Colossi of Memnon.
                                                            After finishing your visits at the West Bank, return back to
                                                            your cruise and start sailing to Edfu while enjoying a delicious
                                                            lunch on board. Relax the rest of the day as you sail; take
                                                            advantage of the amazing facilities of your cruise; enjoy some
                                                            afternoon tea, get a massage, de-stress in the Jacuzzi. End the
                                                            day with an appetizing dinner on board.<br />
                                                            <br />
                                                            <strong>Overnight aboard your cruise in Edfu.</strong>
                                                        </p>
                                                        <p><strong>Meals:</strong> Breakfast, Lunch, Dinner.</p>
                                                        <p><strong>Visits: </strong>Royal Cemetery, the Valley of the Kings,
                                                            Temple of Queen Hatshepsut, Colossi of Memnon.</p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="24.9751905"
                                                        data-lng="32.8696805" data-link="4">
                                                        <h2>Day 5: Edfu and Kom Ombo</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Enjoy a mouth-watering breakfast on board your cruise as you sail
                                                            to Edfu. Upon arrival, head out and visit Edfu Temple, one of
                                                            the best-preserved temples of the Greco Roman era, that of Horus
                                                            at Edfu. Enjoy a magnificent experience as you take a
                                                            horse-drawn carriage ride back and forth to the temple and
                                                            marvel at Upper Egypt&rsquo;s local life. Pass through the
                                                            slow-paced, rural life of the local farmers and fishermen.
                                                            Immerse yourself in the breathtaking lush, fertile landscapes
                                                            dotted with banana and date palm trees. After your visit, head
                                                            back to your cruise and start sailing to your second stop of the
                                                            day, Kom Ombo.<br />
                                                            <br />
                                                            Touch down on the shores of Kom Ombo and walk through the town
                                                            of Kom Ombo among the locals of the town until you arrive at the
                                                            unusual Kom Ombo temple with its two identical entrances,
                                                            hypostyle halls, and sanctuaries. After your visit, head back to
                                                            your cruise where you will enjoy an appetizing lunch while
                                                            sailing to Aswan. As the day comes to an end, enjoy a warm,
                                                            delicious dinner surrounded by the calm, serene water of the
                                                            Nile River.<br />
                                                            <br />
                                                            <strong>Overnight aboard your cruise in Aswan.</strong>
                                                        </p>
                                                        <p><strong>Meals</strong>: Breakfast, Lunch, Dinner.</p>
                                                        <p><strong>Visits: </strong>Temple of Edfu, Kom Ombo, Temple of Kom
                                                            Ombo.</p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="24.0923728"
                                                        data-lng="32.8825965" data-link="5">
                                                        <h2>Day 6: Aswan Sightseeing</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Enjoy yet another delicious breakfast on board as you sail to the
                                                            colorful city of Aswan. Upon arrival, head out and enjoy a day
                                                            of sightseeing in this beautiful city, meeting the kindest kind
                                                            of locals. Start with visit the famous High Dam and then head to
                                                            the massive Unfinished Obelisk, still resting on its side in the
                                                            stone quarries of ancient Egypt. After, you will go on to the
                                                            beautiful Temple of Philae, devoted to the two goddesses Isis
                                                            and Hathor. After your visits, you will head back to your cruise
                                                            and enjoy an appetizing dinner in the middle of the Nile
                                                            surrounded by its beautiful waters.<br />
                                                            <br />
                                                            <strong>Overnight aboard your cruise in Aswan.</strong>
                                                        </p>
                                                        <p><strong>Meals</strong>: Breakfast, Lunch, Dinner.</p>
                                                        <p><strong>Visits:</strong> High Dam, Unfinished Obelisk, Temple of
                                                            Philae.</p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="22.3372319"
                                                        data-lng="31.6236103" data-link="6">
                                                        <h2>Day 7: Fly to Cairo - Optional Tour to Abu Simbel</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Enjoy your last morning on your cruise with one last scrumptious
                                                            breakfast on board surrounded by the calm waters of the Nile.
                                                            After breakfast, disembark your cruise and get transferred to
                                                            Aswan Airport to catch your flight back to Cairo where you will
                                                            be met upon arrival and get transferred to your hotel for your
                                                            last night in the Land of Pharaohs.<br />
                                                            <br />
                                                            <strong>Overnight in Cairo.</strong>
                                                        </p>
                                                        <p><strong>Meals</strong>: Breakfast.<br />
                                                            <br />
                                                            *<strong> Optional Group tour by Coach to <u>Abu Simbel
                                                                    Temples</u> for an extra $89 USD</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="program_itinerary_box">
                                                    <div class="program_itinerary_box_title" data-lat="30.1128481"
                                                        data-lng="31.3975822" data-link="7">
                                                        <h2>Day 8: Cairo - Fly Back Home</h2>
                                                    </div>
                                                    <div class="program_itinerary_box_desc">
                                                        <p>Enjoy a deliciously prepared breakfast at your hotel and then
                                                            head out and roam the streets of the beautiful capital, Cairo.
                                                            Spend some free time at your leisure; buy some souvenirs for
                                                            your friend back home, chat up with some locals, or have some
                                                            Egyptian tea at a local caf&eacute;. As your flight nears, you
                                                            will be transferred through the buzzing streets of Cairo to
                                                            Cairo International Airport for your final departure back to
                                                            your homeland.<br />
                                                            <br />
                                                            <strong>Meals:</strong> Breakfast.
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="program_box_title">Prices & Accommodation</div>
                                <div class="program_box_data mb-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="new_price_box">
                                                <div class="new_price_box_title">
                                                    Golden Accommodation: </div>
                                                <div class="new_price_box_prices">
                                                    <div class="new_price_box_sub_title">
                                                        Prices </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="new-prices-tbl">
                                                                <div class="new-prices-tbl_title">MAY-SEPT</div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Triple Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1465" class="convertable">
                                                                                1465 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1465" value="1465" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Double Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1577" class="convertable">
                                                                                1577 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1577" value="1577" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        One Person Traveling Alone </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price2237" class="convertable">
                                                                                2237 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price2237" value="2237" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="new-prices-tbl">
                                                                <div class="new-prices-tbl_title">OCT-APRIL</div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Triple Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1587" class="convertable">
                                                                                1587 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1587" value="1587" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Double Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1675" class="convertable">
                                                                                1675 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1675" value="1675" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        One Person Traveling Alone </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price2525" class="convertable">
                                                                                2525 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price2525" value="2525" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new_price_box_hotels">
                                                    <div class="new_price_box_sub_title">
                                                        Hotels </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <a href="http://www.tripadvisor.com/300671" target="_blank">
                                                                <div class="new-hotel-boxes">
                                                                    <div class="new-hotel-boxes-img" style="background-image: url('https://images.memphistours.com/thumbs2/657275537_44911686.jpg')" title="Hilton Pyramids Golf Resort"></div>
                                                                    <div class="new-hotel-boxes-title">Hilton Pyramids Golf Resort <ul class="list-inline">
                                                                            <li value="1" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Hilton Pyramids Golf Resort" title="Hilton Pyramids Golf Resort"></li>
                                                                            <li value="2" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Hilton Pyramids Golf Resort" title="Hilton Pyramids Golf Resort"></li>
                                                                            <li value="3" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Hilton Pyramids Golf Resort" title="Hilton Pyramids Golf Resort"></li>
                                                                            <li value="4" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Hilton Pyramids Golf Resort" title="Hilton Pyramids Golf Resort"></li>
                                                                            <li value="5" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Hilton Pyramids Golf Resort" title="Hilton Pyramids Golf Resort"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <a href="http://www.tripadvisor.com/301746" target="_blank">
                                                                <div class="new-hotel-boxes">
                                                                    <div class="new-hotel-boxes-img" style="background-image: url('https://images.memphistours.com/thumbs2/640781496_80971828.jpg')" title="Le Passage Hotel and Casino"></div>
                                                                    <div class="new-hotel-boxes-title">Le Passage Hotel and Casino <ul class="list-inline">
                                                                            <li value="1" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Le Passage Hotel and Casino" title="Le Passage Hotel and Casino"></li>
                                                                            <li value="2" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Le Passage Hotel and Casino" title="Le Passage Hotel and Casino"></li>
                                                                            <li value="3" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Le Passage Hotel and Casino" title="Le Passage Hotel and Casino"></li>
                                                                            <li value="4" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Le Passage Hotel and Casino" title="Le Passage Hotel and Casino"></li>
                                                                            <li value="5" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Le Passage Hotel and Casino" title="Le Passage Hotel and Casino"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <a href="http://www.tripadvisor.com/20652067" target="_blank">
                                                                <div class="new-hotel-boxes">
                                                                    <div class="new-hotel-boxes-img" style="background-image: url('https://images.memphistours.com/thumbs2/358340138_1547588517_Cover  (3).jpg')" title="MS Salacia Cruise (Suite)"></div>
                                                                    <div class="new-hotel-boxes-title">MS Salacia Cruise (Suite) <ul class="list-inline">
                                                                            <li value="1" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Suite)" title="MS Salacia Cruise (Suite)"></li>
                                                                            <li value="2" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Suite)" title="MS Salacia Cruise (Suite)"></li>
                                                                            <li value="3" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Suite)" title="MS Salacia Cruise (Suite)"></li>
                                                                            <li value="4" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Suite)" title="MS Salacia Cruise (Suite)"></li>
                                                                            <li value="5" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Suite)" title="MS Salacia Cruise (Suite)"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="new_price_box">
                                                <div class="new_price_box_title">
                                                    Diamond Accommodation:
                                                </div>
                                                <div class="new_price_box_prices">
                                                    <div class="new_price_box_sub_title">
                                                        Prices </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="new-prices-tbl">
                                                                <div class="new-prices-tbl_title">MAY-SEPT</div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Triple Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1767" class="convertable">
                                                                                1767 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1767" value="1767" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Double Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1835" class="convertable">
                                                                                1835 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1835" value="1835" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        One Person Traveling Alone </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price2799" class="convertable">
                                                                                2799 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price2799" value="2799" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="new-prices-tbl">
                                                                <div class="new-prices-tbl_title">OCT-APRIL</div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Triple Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1857" class="convertable">
                                                                                1857 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1857" value="1857" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        Per Person in Double Room </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price1915" class="convertable">
                                                                                1915 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price1915" value="1915" />
                                                                    </div>
                                                                </div>
                                                                <div class="new-prices-tbl_data d-flex align-items-center justify-content-between">
                                                                    <div class="new_price_box_price_text">
                                                                        One Person Traveling Alone </div>
                                                                    <div class="new_price_box_price_price">
                                                                        <span class='pricelarge2'>
                                                                            <span class='currencySign'>$</span>
                                                                            <span id="min_price2985" class="convertable">
                                                                                2985 </span>
                                                                        </span>
                                                                        <input type="hidden" id="hmin_price2985" value="2985" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new_price_box_hotels">
                                                    <div class="new_price_box_sub_title">
                                                        Hotels </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <a href="http://www.tripadvisor.com/20652067" target="_blank">
                                                                <div class="new-hotel-boxes">
                                                                    <div class="new-hotel-boxes-img" style="background-image: url('https://images.memphistours.com/thumbs2/1430408157_1547588517_Cover  (3).jpg')" title="MS Salacia Cruise (Upper Suite)"></div>
                                                                    <div class="new-hotel-boxes-title">MS Salacia Cruise (Upper Suite) <ul class="list-inline">
                                                                            <li value="1" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Upper Suite)" title="MS Salacia Cruise (Upper Suite)"></li>
                                                                            <li value="2" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Upper Suite)" title="MS Salacia Cruise (Upper Suite)"></li>
                                                                            <li value="3" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Upper Suite)" title="MS Salacia Cruise (Upper Suite)"></li>
                                                                            <li value="4" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Upper Suite)" title="MS Salacia Cruise (Upper Suite)"></li>
                                                                            <li value="5" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="MS Salacia Cruise (Upper Suite)" title="MS Salacia Cruise (Upper Suite)"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <a href="http://www.tripadvisor.com/302721" target="_blank">
                                                                <div class="new-hotel-boxes">
                                                                    <div class="new-hotel-boxes-img" style="background-image: url('https://images.memphistours.com/thumbs2/257949350_caisi-exterior-2447-hor-clsc.jpg')" title="Sheraton Cairo Hotel & Casino"></div>
                                                                    <div class="new-hotel-boxes-title">Sheraton Cairo Hotel & Casino <ul class="list-inline">
                                                                            <li value="1" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Sheraton Cairo Hotel & Casino" title="Sheraton Cairo Hotel & Casino"></li>
                                                                            <li value="2" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Sheraton Cairo Hotel & Casino" title="Sheraton Cairo Hotel & Casino"></li>
                                                                            <li value="3" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Sheraton Cairo Hotel & Casino" title="Sheraton Cairo Hotel & Casino"></li>
                                                                            <li value="4" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Sheraton Cairo Hotel & Casino" title="Sheraton Cairo Hotel & Casino"></li>
                                                                            <li value="5" class="star"><img src="/theme/Com2021/img/star-filled.svg" alt="Sheraton Cairo Hotel & Casino" title="Sheraton Cairo Hotel & Casino"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="program_box_data mb-3"></div>
                            <div class="program_box_title">Important links</div>
                            <div class="program_box_data mb-3">
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8260">
                                        Charitable Giving </div>
                                    <div class="modal fade" id="info_8260" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Charitable Giving</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>We make a donation to the Magdi Yacoub Heart Foundation for each
                                                        booking reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8261">
                                        Prices </div>
                                    <div class="modal fade" id="info_8261" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Prices</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Price quotes are in US dollars per person per trip and are valid
                                                        until September 30, 2023. Please inquire for pricing over Christmas,
                                                        New Year&rsquo;s, and Easter holidays</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8262">
                                        Children Policy </div>
                                    <div class="modal fade" id="info_8262" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Children Policy</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>Up to 2 years: FREE</li>
                                                        <li>Age from 2&nbsp;and below&nbsp;6 years: 25% of adult price</li>
                                                        <li>Age from 6 up to 11&nbsp;years: 50% of adult price</li>
                                                        <li>Ages 12 and Up: adult price.</li>
                                                    </ul>
                                                    <p><strong>Notes :</strong></p>
                                                    <ul>
                                                        <li>Children policy is applied to children who share rooms with
                                                            their parents ( Maximum 1 Child sharing parent&#39;s room )</li>
                                                        <li>If your tour includes airfare, additional&nbsp;charges for your
                                                            children may apply.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8263">
                                        Booking Policy </div>
                                    <div class="modal fade" id="info_8263" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Booking Policy</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>We are offering a low down payment of just <strong><u>25% to secure
                                                                your spaces</u> </strong>on the tour including hotel room,
                                                        cruise cabin, domestic flight ticket, and other travel-related
                                                        services. The remaining balance can be paid up to two days prior to
                                                        your arrival date or in cash upon arrival at the destination to your
                                                        tour manager, therefore, making your booking a risk-free investment.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8264">
                                        Tipping </div>
                                    <div class="modal fade" id="info_8264" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Tipping</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tipping for a job well done is customary in Egypt, though not
                                                        required. Please feel welcomed but not obliged to offer a tip to
                                                        your guide.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="program_info_tags">
                                    <div class="program_info_box_tags_title" data-bs-toggle="modal"
                                        data-bs-target="#info_8265">
                                        Cancellation Policy </div>
                                    <div class="modal fade" id="info_8265" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title">
                                                        <b>Cancellation Policy</b>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>In case you cancel your trip, the following scale of charges
                                                            will be applied:</li>
                                                    </ul>
                                                    <p>From the date of booking until 61 days before your arrival date, 15%
                                                        of the entire tour price will be charged.<br />
                                                        Between 60 and 31 days before your arrival date, 25% of the entire
                                                        tour price will be charged.<br />
                                                        Between 30 and 15 days before your arrival date, 50% of the entire
                                                        tour price will be charged.<br />
                                                        Between 14 and 1 days before your arrival date, 100% of the entire
                                                        tour price will be charged.<br />
                                                        &nbsp;<br />
                                                        Additionally, there are cancellation fees on all domestic flights
                                                        within Egypt. If you cancel a tour at any time, you will be subject
                                                        to any fees according to the airline&rsquo;s cancellation policy.
                                                    </p>
                                                    <p>&nbsp;</p>
                                                    <ul>
                                                        <li><strong>Emergency Cancellation Policy</strong></li>
                                                    </ul>
                                                    <p>MariaEgypt offers a very flexible cancelation policy in case the
                                                        government or the airline issues a travel warning from/to your
                                                        departure country and destination. We, at MariaEgypt, prioritize
                                                        your well-being and safety above all else and for that reason, we
                                                        have adapted our cancellation policy to reflect our
                                                        values.&nbsp;<strong>Familiarize yourself with our <a
                                                                href="https://www.memphistours.com/Egypt/General/Terms-Conditions"
                                                                target="_blank">full payment policy, cancellation and
                                                                refund conditions</a>.</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="program_new_right_side">
                    <div class="program_new_right_side_price">
                        <div class="program_new_right_side_price_data">
                            <span class="from">from</span>
                            <span class="price">
                                <span class="currencySign">$</span><span id="min_price{{ $place->price }}"
                                    class="convertable">{{ $place->price }}</span>
                                <input type="hidden" id="hmin_price{{ $place->price }}" value="{{ $place->price }}" />
                            </span>
                        </div>
                    </div>
                    <div class="program_new_right_side_form">
                        <style>
                            .checkbox,
                            .radio {
                                margin: 0px;
                                padding: 0px;
                            }

                            hr {
                                margin: 5px 0px 15px 0px;
                            }

                            .new_btn_book {
                                padding: 8px 20px;
                                margin: 15px 0px 0px 0px;
                            }
                        </style>
                        <a id="Form"></a>
                        @guest
                            <form id="bookFormNew" method="post" action="{{ route('front.order', $place->slug) }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label>Name *</label>
                                </div>
                                <div class="col-12">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <div class="form-group form_select label-floating">
                                                <select name="title" id="title" class="required form-control">
                                                    <option value="">Title</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Mrs">Mrs</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group label-floating">
                                                <input name="name" type="text" id="name" value=""
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group label-floating">
                                        <label>E-mail *</label>
                                        <input name="email" value="" type="email" required
                                            class="form-control" id="UserEmail" onfocusout="validateMail()">
                                        <div id="mail-validation"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group label-floating">
                                        <label>Password *</label>
                                        <input name="password" type="password" required
                                            class="form-control" id="pass">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="days" name="days" value="0">
                            <div class="row">
                                <div class="col-12">
                                    <label>Nationality *</label>
                                    <div class="form-group label-floating form_select">
                                        <select id="nationality" class="form-control" name="nationality" required>
                                            <option value="" selected="selected">Select your Nationality</option>
                                            <option value="American">American</option>
                                            <option value="Afghan">Afghan</option>
                                            <option value="Albanian">Albanian</option>
                                            <option value="Algerian">Algerian</option>
                                            <option value="Andorran">Andorran</option>
                                            <option value="Angolan">Angolan</option>
                                            <option value="Argentinian">Argentinian</option>
                                            <option value="Armenian">Armenian</option>
                                            <option value="Australian">Australian</option>
                                            <option value="Austrian">Austrian</option>
                                            <option value="Azerbaijani">Azerbaijani</option>
                                            <option value="Bahamian">Bahamian</option>
                                            <option value="Bahraini">Bahraini</option>
                                            <option value="Bangladeshi">Bangladeshi</option>
                                            <option value="Barbadian">Barbadian</option>
                                            <option value="Belarusian">Belarusian</option>
                                            <option value="Belgian">Belgian</option>
                                            <option value="Belizean">Belizean</option>
                                            <option value="Beninese">Beninese</option>
                                            <option value="Bhutanese">Bhutanese</option>
                                            <option value="Bolivian">Bolivian</option>
                                            <option value="Bosnian">Bosnian</option>
                                            <option value="Botswanan">Botswanan</option>
                                            <option value="Brazilian">Brazilian</option>
                                            <option value="British Indian Ocean">British Indian Ocean</option>
                                            <option value="British Virgin">British Virgin</option>
                                            <option value="Bruneian">Bruneian</option>
                                            <option value="Bulgarian">Bulgarian</option>
                                            <option value="Burkinese">Burkinese</option>
                                            <option value="Burundian">Burundian</option>
                                            <option value="Cambodian">Cambodian</option>
                                            <option value="Cameroonian">Cameroonian</option>
                                            <option value="Canadian">Canadian</option>
                                            <option value="Cape Verdean">Cape Verdean</option>
                                            <option value="Chadian">Chadian</option>
                                            <option value="Chilean">Chilean</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Colombian">Colombian</option>
                                            <option value="Congolese">Congolese</option>
                                            <option value="Costa Rican">Costa Rican</option>
                                            <option value="Croatian">Croatian</option>
                                            <option value="Cuban">Cuban</option>
                                            <option value="Cypriot">Cypriot</option>
                                            <option value="Czech">Czech</option>
                                            <option value="Danish">Danish</option>
                                            <option value="Djiboutian">Djiboutian</option>
                                            <option value="Dominican">Dominican</option>
                                            <option value="East Timorese">East Timorese</option>
                                            <option value="Ecuadorean">Ecuadorean</option>
                                            <option value="Egyptian">Egyptian</option>
                                            <option value="Salvadorean">Salvadorean</option>
                                            <option value="Guinean">Guinean</option>
                                            <option value="Eritrean">Eritrean</option>
                                            <option value="Estonian">Estonian</option>
                                            <option value="Ethiopian">Ethiopian</option>
                                            <option value="Fijian">Fijian</option>
                                            <option value="Finnish">Finnish</option>
                                            <option value="French">French</option>
                                            <option value="Guyanese">Guyanese</option>
                                            <option value="Gabonese">Gabonese</option>
                                            <option value="Gambian">Gambian</option>
                                            <option value="Georgian">Georgian</option>
                                            <option value="German">German</option>
                                            <option value="Ghanaian">Ghanaian</option>
                                            <option value="Greek">Greek</option>
                                            <option value="Grenadian">Grenadian</option>
                                            <option value="Guatemalan">Guatemalan</option>
                                            <option value="Guinean">Guinean</option>
                                            <option value="Haitian">Haitian</option>
                                            <option value="Honduran">Honduran</option>
                                            <option value="Hungarian">Hungarian</option>
                                            <option value="Icelander">Icelander</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Iranian">Iranian</option>
                                            <option value="Iraqi">Iraqi</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Israeli">Israeli</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Jamaican">Jamaican</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Jordanian">Jordanian</option>
                                            <option value="Kazakh">Kazakh</option>
                                            <option value="Kenyan">Kenyan</option>
                                            <option value="Kuwaiti">Kuwaiti</option>
                                            <option value="Laotian">Laotian</option>
                                            <option value="Latvian">Latvian</option>
                                            <option value="Lebanese">Lebanese</option>
                                            <option value="Liberian">Liberian</option>
                                            <option value="Libyan">Libyan</option>
                                            <option value="Lithuanian">Lithuanian</option>
                                            <option value="Macedonian">Macedonian</option>
                                            <option value="Madagascan">Madagascan</option>
                                            <option value="Malawian">Malawian</option>
                                            <option value="Malaysian">Malaysian</option>
                                            <option value="Maldivian">Maldivian</option>
                                            <option value="Malian">Malian</option>
                                            <option value="Maltese">Maltese</option>
                                            <option value="Mauritanian">Mauritanian</option>
                                            <option value="Mauritian">Mauritian</option>
                                            <option value="Mexican">Mexican</option>
                                            <option value="Moldovan">Moldovan</option>
                                            <option value="Monacan">Monacan</option>
                                            <option value="Mongolian">Mongolian</option>
                                            <option value="Moroccan">Moroccan</option>
                                            <option value="Mozambican">Mozambican</option>
                                            <option value="Namibian">Namibian</option>
                                            <option value="Nepalese">Nepalese</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaraguan">Nicaraguan</option>
                                            <option value="Nigerien">Nigerien</option>
                                            <option value="Nigerian">Nigerian</option>
                                            <option value="North Korean">North Korean</option>
                                            <option value="Norwegian">Norwegian</option>
                                            <option value="Omani">Omani</option>
                                            <option value="Pakistani">Pakistani</option>
                                            <option value="Panamanian">Panamanian</option>
                                            <option value="Guinean">Guinean</option>
                                            <option value="Paraguayan">Paraguayan</option>
                                            <option value="Peruvian">Peruvian</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Qatari">Qatari</option>
                                            <option value="Romanian">Romanian</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Rwandan">Rwandan</option>
                                            <option value="Saudi">Saudi</option>
                                            <option value="Senegalese">Senegalese</option>
                                            <option value="Serbian">Serbian</option>
                                            <option value="Sierra Leonian">Sierra Leonian</option>
                                            <option value="Singaporean">Singaporean</option>
                                            <option value="Slovak">Slovak</option>
                                            <option value="Slovenian">Slovenian</option>
                                            <option value="Somali">Somali</option>
                                            <option value="South African">South African</option>
                                            <option value="South Korean">South Korean</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Sri Lankan">Sri Lankan</option>
                                            <option value="Sudanese">Sudanese</option>
                                            <option value="Surinamese">Surinamese</option>
                                            <option value="Swazi">Swazi</option>
                                            <option value="Swedish">Swedish</option>
                                            <option value="Swiss">Swiss</option>
                                            <option value="Syrian">Syrian</option>
                                            <option value="Taiwanese">Taiwanese</option>
                                            <option value="Tajik">Tajik</option>
                                            <option value="Tanzanian">Tanzanian</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Togolese">Togolese</option>
                                            <option value="Trinidadian">Trinidadian</option>
                                            <option value="Tunisian">Tunisian</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Turkmen">Turkmen</option>
                                            <option value="Tuvaluan">Tuvaluan</option>
                                            <option value="Ugandan">Ugandan</option>
                                            <option value="Ukrainian">Ukrainian</option>
                                            <option value="Emirati">Emirati</option>
                                            <option value="British">British</option>
                                            <option value="Uruguayan">Uruguayan</option>
                                            <option value="Uzbek">Uzbek</option>
                                            <option value="Vanuatuan">Vanuatuan</option>
                                            <option value="Venezuelan">Venezuelan</option>
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="Yemeni">Yemeni</option>
                                            <option value="Zambian">Zambian</option>
                                            <option value="Zimbabwean">Zimbabwean</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Mobile</label>
                                    <div class="col-12">
                                        <div class="row g-0">
                                            <div class="col-5">
                                                <div class="form-group form_select label-floating">
                                                    <select name="phone_ext" id="phone_ext"
                                                        class="required form-control">
                                                        <option value="">Code</option>
                                                        <option data-countryCode="DZ" value="213">Algeria (+213)
                                                        </option>
                                                        <option data-countryCode="AD" value="376">Andorra (+376)
                                                        </option>
                                                        <option data-countryCode="AO" value="244">Angola (+244)
                                                        </option>
                                                        <option data-countryCode="AI" value="1264">Anguilla (+1264)
                                                        </option>
                                                        <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda
                                                            (+1268)</option>
                                                        <option data-countryCode="AR" value="54">Argentina (+54)
                                                        </option>
                                                        <option data-countryCode="AM" value="374">Armenia (+374)
                                                        </option>
                                                        <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                        <option data-countryCode="AU" value="61">Australia (+61)
                                                        </option>
                                                        <option data-countryCode="AT" value="43">Austria (+43)
                                                        </option>
                                                        <option data-countryCode="AZ" value="994">Azerbaijan (+994)
                                                        </option>
                                                        <option data-countryCode="BS" value="1242">Bahamas (+1242)
                                                        </option>
                                                        <option data-countryCode="BH" value="973">Bahrain (+973)
                                                        </option>
                                                        <option data-countryCode="BD" value="880">Bangladesh (+880)
                                                        </option>
                                                        <option data-countryCode="BB" value="1246">Barbados (+1246)
                                                        </option>
                                                        <option data-countryCode="BY" value="375">Belarus (+375)
                                                        </option>
                                                        <option data-countryCode="BE" value="32">Belgium (+32)
                                                        </option>
                                                        <option data-countryCode="BZ" value="501">Belize (+501)
                                                        </option>
                                                        <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                        <option data-countryCode="BM" value="1441">Bermuda (+1441)
                                                        </option>
                                                        <option data-countryCode="BT" value="975">Bhutan (+975)
                                                        </option>
                                                        <option data-countryCode="BO" value="591">Bolivia (+591)
                                                        </option>
                                                        <option data-countryCode="BA" value="387">Bosnia Herzegovina
                                                            (+387)</option>
                                                        <option data-countryCode="BW" value="267">Botswana (+267)
                                                        </option>
                                                        <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                        <option data-countryCode="BN" value="673">Brunei (+673)
                                                        </option>
                                                        <option data-countryCode="BG" value="359">Bulgaria (+359)
                                                        </option>
                                                        <option data-countryCode="BF" value="226">Burkina Faso (+226)
                                                        </option>
                                                        <option data-countryCode="BI" value="257">Burundi (+257)
                                                        </option>
                                                        <option data-countryCode="KH" value="855">Cambodia (+855)
                                                        </option>
                                                        <option data-countryCode="CM" value="237">Cameroon (+237)
                                                        </option>
                                                        <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                        <option data-countryCode="CV" value="238">Cape Verde Islands
                                                            (+238)</option>
                                                        <option data-countryCode="KY" value="1345">Cayman Islands
                                                            (+1345)</option>
                                                        <option data-countryCode="CF" value="236">Central African
                                                            Republic (+236)</option>
                                                        <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                        <option data-countryCode="CN" value="86">China (+86)</option>
                                                        <option data-countryCode="CO" value="57">Colombia (+57)
                                                        </option>
                                                        <option data-countryCode="KM" value="269">Comoros (+269)
                                                        </option>
                                                        <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                        <option data-countryCode="CK" value="682">Cook Islands (+682)
                                                        </option>
                                                        <option data-countryCode="CR" value="506">Costa Rica (+506)
                                                        </option>
                                                        <option data-countryCode="HR" value="385">Croatia (+385)
                                                        </option>
                                                        <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                        <option data-countryCode="CY" value="90392">Cyprus North (+90392)
                                                        </option>
                                                        <option data-countryCode="CY" value="357">Cyprus South (+357)
                                                        </option>
                                                        <option data-countryCode="CZ" value="42">Czech Republic (+42)
                                                        </option>
                                                        <option data-countryCode="DK" value="45">Denmark (+45)
                                                        </option>
                                                        <option data-countryCode="DJ" value="253">Djibouti (+253)
                                                        </option>
                                                        <option data-countryCode="DM" value="1809">Dominica (+1809)
                                                        </option>
                                                        <option data-countryCode="DO" value="1809">Dominican Republic
                                                            (+1809)</option>
                                                        <option data-countryCode="EC" value="593">Ecuador (+593)
                                                        </option>
                                                        <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                        <option data-countryCode="SV" value="503">El Salvador (+503)
                                                        </option>
                                                        <option data-countryCode="GQ" value="240">Equatorial Guinea
                                                            (+240)</option>
                                                        <option data-countryCode="ER" value="291">Eritrea (+291)
                                                        </option>
                                                        <option data-countryCode="EE" value="372">Estonia (+372)
                                                        </option>
                                                        <option data-countryCode="ET" value="251">Ethiopia (+251)
                                                        </option>
                                                        <option data-countryCode="FK" value="500">Falkland Islands
                                                            (+500)</option>
                                                        <option data-countryCode="FO" value="298">Faroe Islands (+298)
                                                        </option>
                                                        <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                        <option data-countryCode="FI" value="358">Finland (+358)
                                                        </option>
                                                        <option data-countryCode="FR" value="33">France (+33)</option>
                                                        <option data-countryCode="GF" value="594">French Guiana (+594)
                                                        </option>
                                                        <option data-countryCode="PF" value="689">French Polynesia
                                                            (+689)</option>
                                                        <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                        <option data-countryCode="GM" value="220">Gambia (+220)
                                                        </option>
                                                        <option data-countryCode="GE" value="7880">Georgia (+7880)
                                                        </option>
                                                        <option data-countryCode="DE" value="49">Germany (+49)
                                                        </option>
                                                        <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                        <option data-countryCode="GI" value="350">Gibraltar (+350)
                                                        </option>
                                                        <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                        <option data-countryCode="GL" value="299">Greenland (+299)
                                                        </option>
                                                        <option data-countryCode="GD" value="1473">Grenada (+1473)
                                                        </option>
                                                        <option data-countryCode="GP" value="590">Guadeloupe (+590)
                                                        </option>
                                                        <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                        <option data-countryCode="GT" value="502">Guatemala (+502)
                                                        </option>
                                                        <option data-countryCode="GN" value="224">Guinea (+224)
                                                        </option>
                                                        <option data-countryCode="GW" value="245">Guinea - Bissau
                                                            (+245)</option>
                                                        <option data-countryCode="GY" value="592">Guyana (+592)
                                                        </option>
                                                        <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                        <option data-countryCode="HN" value="504">Honduras (+504)
                                                        </option>
                                                        <option data-countryCode="HK" value="852">Hong Kong (+852)
                                                        </option>
                                                        <option data-countryCode="HU" value="36">Hungary (+36)
                                                        </option>
                                                        <option data-countryCode="IS" value="354">Iceland (+354)
                                                        </option>
                                                        <option data-countryCode="IN" value="91">India (+91)</option>
                                                        <option data-countryCode="ID" value="62">Indonesia (+62)
                                                        </option>
                                                        <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                        <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                        <option data-countryCode="IE" value="353">Ireland (+353)
                                                        </option>
                                                        <option data-countryCode="IL" value="972">Israel (+972)
                                                        </option>
                                                        <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                        <option data-countryCode="JM" value="1876">Jamaica (+1876)
                                                        </option>
                                                        <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                        <option data-countryCode="JO" value="962">Jordan (+962)
                                                        </option>
                                                        <option data-countryCode="KZ" value="7">Kazakhstan (+7)
                                                        </option>
                                                        <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                        <option data-countryCode="KI" value="686">Kiribati (+686)
                                                        </option>
                                                        <option data-countryCode="KP" value="850">Korea North (+850)
                                                        </option>
                                                        <option data-countryCode="KR" value="82">Korea South (+82)
                                                        </option>
                                                        <option data-countryCode="KW" value="965">Kuwait (+965)
                                                        </option>
                                                        <option data-countryCode="KG" value="996">Kyrgyzstan (+996)
                                                        </option>
                                                        <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                        <option data-countryCode="LV" value="371">Latvia (+371)
                                                        </option>
                                                        <option data-countryCode="LB" value="961">Lebanon (+961)
                                                        </option>
                                                        <option data-countryCode="LS" value="266">Lesotho (+266)
                                                        </option>
                                                        <option data-countryCode="LR" value="231">Liberia (+231)
                                                        </option>
                                                        <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                        <option data-countryCode="LI" value="417">Liechtenstein (+417)
                                                        </option>
                                                        <option data-countryCode="LT" value="370">Lithuania (+370)
                                                        </option>
                                                        <option data-countryCode="LU" value="352">Luxembourg (+352)
                                                        </option>
                                                        <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                        <option data-countryCode="MK" value="389">Macedonia (+389)
                                                        </option>
                                                        <option data-countryCode="MG" value="261">Madagascar (+261)
                                                        </option>
                                                        <option data-countryCode="MW" value="265">Malawi (+265)
                                                        </option>
                                                        <option data-countryCode="MY" value="60">Malaysia (+60)
                                                        </option>
                                                        <option data-countryCode="MV" value="960">Maldives (+960)
                                                        </option>
                                                        <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                        <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                        <option data-countryCode="MH" value="692">Marshall Islands
                                                            (+692)</option>
                                                        <option data-countryCode="MQ" value="596">Martinique (+596)
                                                        </option>
                                                        <option data-countryCode="MR" value="222">Mauritania (+222)
                                                        </option>
                                                        <option data-countryCode="YT" value="269">Mayotte (+269)
                                                        </option>
                                                        <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                        <option data-countryCode="FM" value="691">Micronesia (+691)
                                                        </option>
                                                        <option data-countryCode="MD" value="373">Moldova (+373)
                                                        </option>
                                                        <option data-countryCode="MC" value="377">Monaco (+377)
                                                        </option>
                                                        <option data-countryCode="MN" value="976">Mongolia (+976)
                                                        </option>
                                                        <option data-countryCode="MS" value="1664">Montserrat (+1664)
                                                        </option>
                                                        <option data-countryCode="MA" value="212">Morocco (+212)
                                                        </option>
                                                        <option data-countryCode="MZ" value="258">Mozambique (+258)
                                                        </option>
                                                        <option data-countryCode="MN" value="95">Myanmar (+95)
                                                        </option>
                                                        <option data-countryCode="NA" value="264">Namibia (+264)
                                                        </option>
                                                        <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                        <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                        <option data-countryCode="NL" value="31">Netherlands (+31)
                                                        </option>
                                                        <option data-countryCode="NC" value="687">New Caledonia (+687)
                                                        </option>
                                                        <option data-countryCode="NZ" value="64">New Zealand (+64)
                                                        </option>
                                                        <option data-countryCode="NI" value="505">Nicaragua (+505)
                                                        </option>
                                                        <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                        <option data-countryCode="NG" value="234">Nigeria (+234)
                                                        </option>
                                                        <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                        <option data-countryCode="NF" value="672">Norfolk Islands
                                                            (+672)</option>
                                                        <option data-countryCode="NP" value="670">Northern Marianas
                                                            (+670)</option>
                                                        <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                        <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                        <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                        <option data-countryCode="PA" value="507">Panama (+507)
                                                        </option>
                                                        <option data-countryCode="PG" value="675">Papua New Guinea
                                                            (+675)</option>
                                                        <option data-countryCode="PY" value="595">Paraguay (+595)
                                                        </option>
                                                        <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                        <option data-countryCode="PH" value="63">Philippines (+63)
                                                        </option>
                                                        <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                        <option data-countryCode="PT" value="351">Portugal (+351)
                                                        </option>
                                                        <option data-countryCode="PR" value="1787">Puerto Rico (+1787)
                                                        </option>
                                                        <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                        <option data-countryCode="RE" value="262">Reunion (+262)
                                                        </option>
                                                        <option data-countryCode="RO" value="40">Romania (+40)
                                                        </option>
                                                        <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                        <option data-countryCode="RW" value="250">Rwanda (+250)
                                                        </option>
                                                        <option data-countryCode="SM" value="378">San Marino (+378)
                                                        </option>
                                                        <option data-countryCode="ST" value="239">Sao Tome &amp;
                                                            Principe (+239)</option>
                                                        <option data-countryCode="SA" value="966">Saudi Arabia (+966)
                                                        </option>
                                                        <option data-countryCode="SN" value="221">Senegal (+221)
                                                        </option>
                                                        <option data-countryCode="CS" value="381">Serbia (+381)
                                                        </option>
                                                        <option data-countryCode="SC" value="248">Seychelles (+248)
                                                        </option>
                                                        <option data-countryCode="SL" value="232">Sierra Leone (+232)
                                                        </option>
                                                        <option data-countryCode="SG" value="65">Singapore (+65)
                                                        </option>
                                                        <option data-countryCode="SK" value="421">Slovak Republic
                                                            (+421)</option>
                                                        <option data-countryCode="SI" value="386">Slovenia (+386)
                                                        </option>
                                                        <option data-countryCode="SB" value="677">Solomon Islands
                                                            (+677)</option>
                                                        <option data-countryCode="SO" value="252">Somalia (+252)
                                                        </option>
                                                        <option data-countryCode="ZA" value="27">South Africa (+27)
                                                        </option>
                                                        <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                        <option data-countryCode="LK" value="94">Sri Lanka (+94)
                                                        </option>
                                                        <option data-countryCode="SH" value="290">St. Helena (+290)
                                                        </option>
                                                        <option data-countryCode="KN" value="1869">St. Kitts (+1869)
                                                        </option>
                                                        <option data-countryCode="SC" value="1758">St. Lucia (+1758)
                                                        </option>
                                                        <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                        <option data-countryCode="SR" value="597">Suriname (+597)
                                                        </option>
                                                        <option data-countryCode="SZ" value="268">Swaziland (+268)
                                                        </option>
                                                        <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                        <option data-countryCode="CH" value="41">Switzerland (+41)
                                                        </option>
                                                        <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                        <option data-countryCode="TW" value="886">Taiwan (+886)
                                                        </option>
                                                        <option data-countryCode="TJ" value="7">Tajikstan (+7)
                                                        </option>
                                                        <option data-countryCode="TH" value="66">Thailand (+66)
                                                        </option>
                                                        <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                        <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                        <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago
                                                            (+1868)</option>
                                                        <option data-countryCode="TN" value="216">Tunisia (+216)
                                                        </option>
                                                        <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                        <option data-countryCode="TM" value="7">Turkmenistan (+7)
                                                        </option>
                                                        <option data-countryCode="TM" value="993">Turkmenistan (+993)
                                                        </option>
                                                        <option data-countryCode="TC" value="1649">Turks &amp; Caicos
                                                            Islands (+1649)</option>
                                                        <option data-countryCode="TV" value="688">Tuvalu (+688)
                                                        </option>
                                                        <option data-countryCode="UG" value="256">Uganda (+256)
                                                        </option>
                                                        <option data-countryCode="GB" value="44">UK (+44)</option>
                                                        <option data-countryCode="UA" value="380">Ukraine (+380)
                                                        </option>
                                                        <option data-countryCode="AE" value="971">United Arab Emirates
                                                            (+971)</option>
                                                        <option data-countryCode="UY" value="598">Uruguay (+598)
                                                        </option>
                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                        <option data-countryCode="UZ" value="7">Uzbekistan (+7)
                                                        </option>
                                                        <option data-countryCode="VU" value="678">Vanuatu (+678)
                                                        </option>
                                                        <option data-countryCode="VA" value="379">Vatican City (+379)
                                                        </option>
                                                        <option data-countryCode="VE" value="58">Venezuela (+58)
                                                        </option>
                                                        <option data-countryCode="VN" value="84">Vietnam (+84)
                                                        </option>
                                                        <option data-countryCode="VG" value="84">Virgin Islands -
                                                            British (+1284)</option>
                                                        <option data-countryCode="VI" value="84">Virgin Islands - US
                                                            (+1340)</option>
                                                        <option data-countryCode="WF" value="681">Wallis &amp; Futuna
                                                            (+681)</option>
                                                        <option data-countryCode="YE" value="969">Yemen (North)(+969)
                                                        </option>
                                                        <option data-countryCode="YE" value="967">Yemen (South)(+967)
                                                        </option>
                                                        <option data-countryCode="ZM" value="260">Zambia (+260)
                                                        </option>
                                                        <option data-countryCode="ZW" value="263">Zimbabwe (+263)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-group label-floating">
                                                    <input type="text" class="form-control" value=""
                                                        placeholder="Mobile" name="phone" id="UserPhone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @role('user')
                                <form id="bookFormNew" method="post" action="{{ route('user.order', $place->slug) }}">
                                    @csrf
                            @endrole
                        @endguest
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group label-floating">
                                        <label>From</label>
                                        <div id="Arrival2">
                                            <input name="arrival" value="" type="text"
                                                class="form-control datepicker" id="datepickerArrival2"
                                                placeholder="From *" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group label-floating">
                                        <label>To</label>
                                        <div id="Departure2">
                                            <input name="departure" value="" type="text"
                                                class="form-control datepicker" id="datepickerDeparture2"
                                                placeholder="To" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <div class="row">
                                            <label class="col-7">
                                                <b>No. of Adults</b><br>
                                                <span style="font-weight: normal" class="small">( + 12 years )</span>
                                            </label>
                                            <div class="col-5">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            data-type="minus" data-field="adults_book">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input id="adults_book" type="text" name="adults"
                                                        class="form-control input-number book_all" value="2"
                                                        min="1" max="100" readonly>
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            data-type="plus" data-field="adults_book">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <div class="row">
                                            <label class="col-7">
                                                <b>No. of Children</b><br>
                                                <span style="font-weight: normal" class="small">( 2 to 11 years
                                                    )</span>
                                            </label>
                                            <div class="col-5">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            disabled="disabled" data-type="minus"
                                                            data-field="children_book">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input id="children_book" type="text" name="children"
                                                        class="form-control input-number book_all" value="0"
                                                        min="0" max="10" readonly
                                                        onchange="paxOnChangeAll('1', this.value, 'Child', this, 9);">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            data-type="plus" data-field="children_book">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <div class="row">
                                            <label class="col-7">
                                                <b>No. of Infants</b><br>
                                                <span style="font-weight: normal" class="small">( 0 to 2 years )</span>
                                            </label>
                                            <div class="col-5">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            disabled="disabled" data-type="minus"
                                                            data-field="infants_book">
                                                            <span class="fa fa-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input id="infants_book" type="text" name="infants"
                                                        class="form-control input-number book_all" value="0"
                                                        min="0" max="10" readonly
                                                        onchange="paxOnChangeAll('1', this.value, 'Infant', this, 9);">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn-number book_all"
                                                            data-type="plus" data-field="infants_book">
                                                            <span class="fa fa-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="ageInputDiv" class="form-group label-floating hidden">
                                    <div class="unit size4of7">
                                        <div class="mrm mts div-0"> </div>
                                    </div>
                                    <div id="input" class="unit size3of7 lastUnit div-1"> </div>
                                </div>
                                <div class="row" id="1" ageDesc="child"> </div>
                                <div id="1" ageDesc="infant"> </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">

                                    </div>
                                </div>
                                <div class="flight_from" style="display:none">
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <input id="departure_airport" class="form-control"
                                                name="departure_airport" value=""
                                                placeholder="Departure Airport" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group label-floating">
                                        <textarea placeholder="Please advise your tour requirements"
                                            style="text-align: left; line-height:1.7em; height:80px;" class="form-control" name="comment" id="comment"
                                            autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    {{-- <div class="form-group">
                                        <div id='recaptcha' class="g-recaptcha"
                                            data-sitekey="6LegDoYUAAAAALe9PVEiSlLyX3RzYBzKmoKrxMEz"
                                            data-callback="SubmitForm" data-size="invisible">
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="new_btn_book" id="Enquire-btn">
                                        {{-- <button class="new_btn_book" type="submit" id="">Submit</button> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <input type="hidden" id="sys_token" name="sys_token" value="engfpdrm97VkSX8"> --}}
                            {{-- <input type="hidden" name="sys_package_id" value="57"> --}}
                            {{-- <input type="hidden" id="url_goal" name="url_goal" value="package"> --}}
                            {{-- <input type="hidden" id="program_id" name="program_id" value="146"> --}}
                            {{-- <input type="hidden" id="initial_price" name="initial_price" value="1465"> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="program_realted">
            <div id="related_tours">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 related_tours_title">
                            <div class="top-destination">
                                <h4><strong>You Might Also Like</strong></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="programBox">
                                <a href="/Jordan/Jordan-Travel-Packages/Jordan-Tours-Packages/jordan-private-tour">
                                    <div class="programBox_img_container lazy"
                                        data-src="https://images.memphistours.com/thumbs1/931876824_16.jpg">
                                        <div class="programBox_days">
                                            4 Days - 1 Country </div>
                                    </div>
                                </a>
                                <div class="programBox_wishList" data-program_id="179"></div>
                                <div class="programBox_title">
                                    <h2>
                                        <a
                                            href="/Jordan/Jordan-Travel-Packages/Jordan-Tours-Packages/jordan-private-tour">
                                            Taste of Jordan in Petra Tour </a>
                                    </h2>
                                </div>
                                <div class="programBox_description">
                                    <p>It&#39;s the best Jordan 4 Days tour. Live an amazing 3 nights in Jordan visiting the
                                        Roman Jerash, the best example of the Roman provincial city in the whole Middle
                                        East. Be ready for a new adventure and Book now!</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p><br />
                                        Enjoy visiting the legendary &lsquo;rose-red&rsquo; city of Petra, carved into the
                                        stone of the Jordan desert, Float in the Dead Sea salty water and more!&nbsp;<br />
                                        Explore Amman&rsquo;s ancient sites on a 4-day tour, private tour that&rsquo;s a
                                        great first taste of Jordan. You&rsquo;ll see Old Amman, colorful markets, the
                                        Citadel, the Blue Mosque, a Coptic church, Rainbow Street, the Royal Automobile
                                        Museum, and much more.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="programBox_price">
                                        <span class="from">from</span> <span class="currencySign">$</span><span
                                            id="min_price515" class="convertable" itemprop="lowPrice">515</span>
                                        <input type="hidden" id="hmin_price515" value="515" />
                                    </div>
                                    <div class="programBox_rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="programBox">
                                <a href="/Dubai/Dubai-Travel-Packages/Dubai-Short-Packages/Dubai-Short-Break">
                                    <div class="programBox_img_container lazy"
                                        data-src="https://images.memphistours.com/thumbs1/1095744945_Dubai%20Marina%201.jpg">
                                        <div class="programBox_days">
                                            4 Days - 1 Country </div>
                                    </div>
                                </a>
                                <div class="programBox_wishList" data-program_id="3587"></div>
                                <div class="programBox_title">
                                    <h2>
                                        <a href="/Dubai/Dubai-Travel-Packages/Dubai-Short-Packages/Dubai-Short-Break">
                                            Dubai Short Break </a>
                                    </h2>
                                </div>
                                <div class="programBox_description">
                                    <p>Experience this&nbsp;Dubai Short Break package&nbsp;to see the allure of UAE, and
                                        enjoy the luxuries that tease the soul and indulgences that will always make you
                                        want more. Enjoy Your Dubai Short Break Now!</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="programBox_price">
                                        <span class="from">from</span> <span class="currencySign">$</span><span
                                            id="min_price475" class="convertable" itemprop="lowPrice">475</span>
                                        <input type="hidden" id="hmin_price475" value="475" />
                                    </div>
                                    <div class="programBox_rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="programBox">
                                <a href="/Morocco/morocco-travel-packages/morocco-private-tours/morocco-tour-package">
                                    <div class="programBox_img_container lazy"
                                        data-src="https://images.memphistours.com/thumbs1/1270278592_Fountain%20at%20the%20Mausoleum%20of%20Mohammed%20V%20in%20Rabat%20%20Morocco.jpg">
                                        <div class="programBox_days">
                                            8 Days - 1 Country </div>
                                    </div>
                                </a>
                                <div class="programBox_wishList" data-program_id="5537"></div>
                                <div class="programBox_title">
                                    <h2>
                                        <a
                                            href="/Morocco/morocco-travel-packages/morocco-private-tours/morocco-tour-package">
                                            Morocco Imperial Cities </a>
                                    </h2>
                                </div>
                                <div class="programBox_description">
                                    <p>Morocco Vacations is a great wat to enjoy Morocco Imperial Cities&nbsp;to Live in the
                                        laps of history and explore the charm of Morocco in this morocco 8-day
                                        tour,&nbsp;the local inhabitants, the food and local experiences.&nbsp;Heading to
                                        Rabat before exploring the ancient history of Fez and Meknes. Move on to the amazing
                                        Marrakech to visit its landmarks before driving back to&nbsp;Casablanca for flying
                                        home.&nbsp;</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="programBox_price">
                                        <span class="from">from</span> <span class="currencySign">$</span><span
                                            id="min_price1156" class="convertable" itemprop="lowPrice">1156</span>
                                        <input type="hidden" id="hmin_price1156" value="1156" />
                                    </div>
                                    <div class="programBox_rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="programBox">
                                <a href="/Turkey/Turkey-Travel-Packages/Turkey-Group-Tours/turkey-trip-package">
                                    <div class="programBox_img_container lazy"
                                        data-src="https://images.memphistours.com/thumbs1/415703387_Blue%20Mosque%2C%20Turkey.jpg">
                                        <div class="programBox_days">
                                            10 Day - 1 Country </div>
                                    </div>
                                </a>
                                <div class="programBox_wishList" data-program_id="8039"></div>
                                <div class="programBox_title">
                                    <h2>
                                        <a href="/Turkey/Turkey-Travel-Packages/Turkey-Group-Tours/turkey-trip-package">
                                            Turkey Trip Package </a>
                                    </h2>
                                </div>
                                <div class="programBox_description">
                                    <p>Surf Turkey Group Tours with&nbsp;Splendors of Turkey in 10 Days.
                                        Visit&nbsp;Istanbul,&nbsp;Ephesus and more. Explore Major attractions like Grand
                                        Bazaar,&nbsp;Underground City, and more with MariaEgypt.</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="programBox_price">
                                        <span class="from">from</span> <span class="currencySign">$</span><span
                                            id="min_price1235" class="convertable" itemprop="lowPrice">1235</span>
                                        <input type="hidden" id="hmin_price1235" value="1235" />
                                    </div>
                                    <div class="programBox_rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="programBox">
                                <a
                                    href="/Egypt/Egypt-and-Beyond-Tours/middle-east-and-mediterranean-tours/greece-and-egypt-tour">
                                    <div class="programBox_img_container lazy"
                                        data-src="https://images.memphistours.com/thumbs1/177714923_4%281%29.jpg">
                                        <div class="programBox_days">
                                            14 Days - 2 Countries </div>
                                    </div>
                                </a>
                                <div class="programBox_wishList" data-program_id="9325"></div>
                                <div class="programBox_title">
                                    <h2>
                                        <a
                                            href="/Egypt/Egypt-and-Beyond-Tours/middle-east-and-mediterranean-tours/greece-and-egypt-tour">
                                            Best Tour of Greece and Egypt </a>
                                    </h2>
                                </div>
                                <div class="programBox_description">
                                    <p>Enjoy the Beauty of Greece combined with the history and glory of Egypt in this
                                        Greece Egypt 14 day travel package. Don&#39;t miss the chance and Book now with
                                        MariaEgypt!</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="programBox_price">
                                        <span class="from">from</span> <span class="currencySign">$</span><span
                                            id="min_price2425" class="convertable" itemprop="lowPrice">2425</span>
                                        <input type="hidden" id="hmin_price2425" value="2425" />
                                    </div>
                                    <div class="programBox_rating">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"779a0ce99a3b839d","token":"a383b74b961c437b9a4f634ad772c1b6","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
<script src="https://www.memphistours.com/cache_js/Com2021-all-jquery-combined-new.v1640264538.js"></script><script src="/com2021/js/bootstrap.bundle.min.js"></script> <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery.material.init();
        });
    </script>
<script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function(){
            jQuery("a[rel^='prettyPhoto']").prettyPhoto();

            jQuery(function() {
                jQuery("img.lazy").lazyload({
                    effect : "fadeIn"
                });

                jQuery("div.lazy").lazyload({
                    effect : "fadeIn"
                });

            });
        });
    </script>
<script type="text/javascript">
        $(document).ready(function(){
            $(".programBox_wishList").click(function() {
                let element = this;
                let link_data = $(this).data('program_id');
                $.ajax({
                    type: "POST",
                    url: '/ajax/clients/set_wish_list/'+link_data,
                    success: function(data) {
                        if(data == 'success'){
                            console.log($(element));
                            $(element).attr( 'id', 'wish' );
                        }else{
                            $('a[data-program_id="' + link_data + '"] > i.whishstate').css({"color":"red"})
                        }
                    }
                });
            });

            $(".programBox_wishList").each(function() {
                let element = this;
                let link_data = $(this).data('program_id');

            });
        });

    </script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
        $('.modal').on('shown.bs.modal', function (e) {
            $('.slickSlider').slick('setPosition', 0);
            $('.slider-nav').slick('setPosition', 0);
        });

        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            e.target
            e.relatedTarget
            $('.slickSlider').slick('setPosition', 0);
            $('.slider-nav').slick('setPosition', 0);
        });

        $('.slickSlider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav',
            prevArrow :'<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="33.556" height="55.701" viewBox="0 0 33.556 55.701"><g id="Arrow" transform="translate(0)"><g id="Rectangle_2162" data-name="Rectangle 2162" transform="translate(33.556 5.593) rotate(135)" fill="#212121" stroke="#fff" stroke-width="1"><rect width="39.546" height="7.909" stroke="none"/><rect x="0.5" y="0.5" width="38.546" height="6.909" fill="none"/></g><g id="Rectangle_2163" data-name="Rectangle 2163" transform="translate(27.963 55.701) rotate(-135)" fill="#212121" stroke="#fff" stroke-width="1"><rect width="39.546" height="7.909" stroke="none"/><rect x="0.5" y="0.5" width="38.546" height="6.909" fill="none"/></g></g></svg></button>',
            nextArrow :'<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="33.556" height="55.701" viewBox="0 0 33.556 55.701"><g id="Group_968" data-name="Group 968" transform="translate(-1266.566 -441.908)"><g id="Rectangle_2162" data-name="Rectangle 2162" transform="translate(1272.158 441.908) rotate(45)" fill="#212121" stroke="#fff" stroke-width="1"><rect width="39.546" height="7.909" stroke="none"/><rect x="0.5" y="0.5" width="38.546" height="6.909" fill="none"/></g><g id="Rectangle_2163" data-name="Rectangle 2163" transform="translate(1266.566 492.016) rotate(-45)" fill="#212121" stroke="#fff" stroke-width="1"><rect width="39.546" height="7.909" stroke="none"/><rect x="0.5" y="0.5" width="38.546" height="6.909" fill="none"/></g></g></svg></button>'
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slickSlider',
            arrows: false,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            infinity: true,
            vertical: true
        });

        $('.slickMainSlider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.sliderMainNav',
        });
        $('.sliderMainNav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slickMainSlider',
            arrows: false,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            vertical: true
        });
    </script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize&key=AIzaSyCN2jLP2y5WTC637u0nVZgJFW1zI1dyG74"></script>
<script>
                function initialize() {

                    var markers = new Array();

                    var mapOptions = {
                        zoom: 9,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        center: new google.maps.LatLng(30.1128268, 31.3976017)
                    };

                    var locations = [
                                                [new google.maps.LatLng(30.1128268, 31.3976017), "Day 1: Arrival in Cairo", "Day 1: Cairo Airport"],
                                                [new google.maps.LatLng(29.9772962, 31.1303068), "Day 2: Pyramids and Cairo Sightseeing", "Day 2: Pyramids"],
                                                [new google.maps.LatLng(25.718508, 32.6496197), "Day 3: Fly to Luxor - East Bank Sightseeing", "Day 3: Luxor East Bank"],
                                                [new google.maps.LatLng(25.74258, 32.5972163), "Day 4: West Bank Sightseeing", "Day 4: Luxor West Bank"],
                                                [new google.maps.LatLng(24.9751905, 32.8696805), "Day 5: Edfu and Kom Ombo", "Day 5: Edfu & Kom Ombo"],
                                                [new google.maps.LatLng(24.0923728, 32.8825965), "Day 6: Aswan Sightseeing", "Day 6: Aswan"],
                                                [new google.maps.LatLng(22.3372319, 31.6236103), "Day 7: Fly to Cairo - Optional Tour to Abu Simbel", "Day 7: Abu Simbel"],
                                                [new google.maps.LatLng(30.1128481, 31.3975822), "Day 8: Cairo - Fly Back Home", "Day 8: Cairo Airport"],
                                            ];

                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                    var infowindow = new google.maps.InfoWindow();

                    for (var i = 0; i < locations.length; i++) {

                        var marker = new google.maps.Marker({
                            position: locations[i][0],
                            map: map,
                            title: locations[i][1],
                        });

                        // Register a click event listener on the marker to display the corresponding infowindow content
                        google.maps.event.addListener(marker, 'click', (function (marker, i) {

                            return function () {
                                infowindow.setContent(locations[i][2]);
                                infowindow.open(map, marker);
                            }

                        })(marker, i));

                        // Add marker to markers array
                        markers.push(marker);
                    }

                    // Trigger a click event on each marker when the corresponding marker link is clicked
                    $('.program_itinerary_box_title').on('click', function () {
                        google.maps.event.trigger(markers[$(this).data('link')], 'click');
                    });

                    const flightPlanCoordinates = [
                                                { lat: 30.1128268, lng: 31.3976017 },
                                                { lat: 29.9772962, lng: 31.1303068 },
                                                { lat: 25.718508, lng: 32.6496197 },
                                                { lat: 25.74258, lng: 32.5972163 },
                                                { lat: 24.9751905, lng: 32.8696805 },
                                                { lat: 24.0923728, lng: 32.8825965 },
                                                { lat: 22.3372319, lng: 31.6236103 },
                                                { lat: 30.1128481, lng: 31.3975822 },
                                            ];
                    const flightPath = new google.maps.Polyline({
                        path: flightPlanCoordinates,
                        geodesic: true,
                        strokeColor: "#707070",
                        strokeOpacity: 1.0,
                        strokeWeight: 2,
                    });
                    flightPath.setMap(map);
                }

                initialize();
            </script>
{{-- <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script> --}}
<script>
        // $( document ).ready(function() {
        //     function onload() {
        //     var element = document.getElementById('Enquire-btn');
        //     element.onclick = validate;
        //   }
        //   onload();
        // });

        // function validate(event) {
        //     event.preventDefault();
        //     $("#bookFormNew").validate();
        //     var isFormValid = $("#bookFormNew").valid();
        //     if (isFormValid) {
        //         grecaptcha.execute();
        //     }
        // }

        // function SubmitForm(data) {
        //     if ($("#gRecaptchaResponse").val() == '') {
        //          $("#gRecaptchaResponse").val(data);
        //     }
        //     document.getElementById("bookFormNew").submit();
        // }
        jQuery(function() {
                  jQuery("#datepickerArrival2").datepicker({
                defaultDate: '+1d',
                dateFormat: 'dd/mm/yy',
                showOn: "both",
                buttonText: "<i class='far fa-calendar-alt'></i>",
                buttonImageOnly: false,
                minDate: 1,
                onClose: function( selectedDate ) {
                    jQuery( "#datepickerDeparture2" ).datepicker( "option", "minDate", selectedDate );
                }
          });
                jQuery( "#datepickerDeparture2" ).datepicker({
            defaultDate: "+1d",
            dateFormat: 'dd/mm/yy',
            showOn: "both",
            buttonText: "<i class='far fa-calendar-alt'></i>",
            buttonImageOnly: false,
            minDate: 0,
        });
    });

        function updateAgeFieldsAll(a, b, c) {
            var d = $("[ageDesc='" + c + "']");
            d.find(".age-input-div").length && d.find(".age-input-div").remove();
            for (var e = 0; b > e; e++) {
                if( c == "infant"){
                    var f = $("#ageInputDiv").clone().removeAttr("id").addClass("hidden age-input-div").removeClass("form-group label-floating");
                    f.find(".div-1").html("<input id='" + c + e + "' type='hidden' size='3' class='form-control' maxlength='2'  min='1' value='1.99' max='11.99' name='infants_age[" + c + "_" + e + "]' />"), d.append(f.removeClass("hidden"))
                }else{
                    var f = $("#ageInputDiv").clone().removeAttr("id").addClass("col-md-6 age-input-div");
                    f.find(".div-0").html("<label for='" + c + e + "'>Age of Child "+ (e+1) +"</label>"), f.find(".div-1").html("<input id='" + c + e + "' type='number' size='3' class='form-control' value=''  maxlength='2' required min='2' max='11.99' name='children_age[" + c + "_" + e + "]' />"), d.append(f.removeClass("hidden"))
                }
            }
        }

        function updateAgeSelectionAll(a) {
            var b = 0,
                c = 0,
                d = $('[id^="ageBands\\["]');
            d.each(function() {
                b += parseInt($(this).val())
            }), c = a - b, d.each(function() {
                var a = $(this),
                    b = parseInt(a.val()) + c,
                    d = a.val(),
                    e = 0;
                a.val(d)
            })
        }

        function paxOnChangeAll(a, b, c, d, e) {
            "Adult" === c ? updateAgeSelectionAll(e) : (updateAgeFieldsAll(a, b, c.toLowerCase()), updateAgeSelectionAll(e))
        }

        function validateMail() {

            let mailValue = jQuery('#UserEmail').val();
            // var settings = {
            //     "url": "https://api.sendgrid.com/v3/validations/email",
            //     "method": "POST",
            //     "timeout": 0,
            //     "headers": {
            //         "Authorization": "Bearer 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",
            //         "Content-Type": "text/plain"
            //     },
            //     "data": "{\r\n    \"email\": \""+mailValue+"\",\r\n     \"source\": \"Requests\"\r\n}",
            // };

            // if(mailValue.length > 1) {
            //     $.ajax(settings).done(function (response) {
            //         if (response.result.verdict == "Invalid") {
            //             jQuery('#UserEmail').css({"border": "1px solid red", "color": "red"});
            //             jQuery('#Enquire-btn').attr('disabled', 'disabled')
            //             jQuery('#mail-validation').html('Please enter a Valid Email');
            //             jQuery('#mail-validation').css({"margin-bottom": "10px", "color": "red"});
            //         } else {
            //             jQuery('#UserEmail').css({"border": "1px solid #757575", "color": "#757575"});
            //             jQuery('#Enquire-btn').removeAttr('disabled');
            //             jQuery('#mail-validation').html('');
            //             jQuery('#mail-validation').css({"margin-bottom": "10px", "color": "red"});
            //         }

            //     });
            // }

        }
    </script>
<script type="text/javascript">
                                updateAgeSelectionAll(9);
            </script>
<script type="text/javascript">
                                updateAgeSelectionAll(9);
            </script>
<script>

        jQuery('.btn-number.book_all').click(function(e){
            e.preventDefault();

            fieldName = jQuery(this).attr('data-field');
            type      = jQuery(this).attr('data-type');
            var input = jQuery("input[id='"+fieldName+"']");

            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if(type == 'minus') {

                    if(currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('min')) {
                        jQuery(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('max')) {
                        jQuery(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(1);
            }
        });
        jQuery('.input-number.book_all').focusin(function(){
            jQuery(this).data('oldValue', jQuery(this).val());
        });
        jQuery('.input-number.book_all').change(function() {

            minValue =  parseInt(jQuery(this).attr('min'));
            maxValue =  parseInt(jQuery(this).attr('max'));
            valueCurrent = parseInt(jQuery(this).val());

            name = jQuery(this).attr('id');
            if(valueCurrent >= minValue) {
                jQuery(".btn-number.book_all[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                jQuery(this).val(jQuery(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                jQuery(".btn-number.book_all[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                jQuery(this).val(jQuery(this).data('oldValue'));
            }


        });
        jQuery(".input-number.book_all").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        jQuery.material.init();
        jQuery.material.checkbox();

        function valueChanged(){
            if(jQuery('.flight').is(":checked")) {
                jQuery("#departure_airport").attr("required", true);
                jQuery(".flight_from").show();
            }else{
                jQuery(".flight_from").hide();
                jQuery("#departure_airport").attr("required", false);
            }
        }

        function childAge(){
            if(jQuery('.children').val().length != 0) {
                jQuery(".children_age").attr("required", true);
            }else{
                jQuery(".children_age").attr("required", false);
            }
        }
    </script>
<script>
        jQuery(document).ready(function(){
            jQuery("#check_btn").on('click', function(event) {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                var body = jQuery('html, body');
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                body.animate({
                    scrollTop: jQuery(hash).offset().top - 200
                }, 800, function(){

                    body.animate({
                        scrollTop: jQuery(hash).offset().top - 200
                    });
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    //window.location.hash = hash;
                });
            });

            jQuery('#myTabs a').click(function (e) {
                e.preventDefault()
                jQuery(this).tab('show')
            });
        });
    </script>
<script type="text/javascript">
    var currenciesExArray = new Array();
    var currenciesSignArray = new Array();
    var currenciesAbbrevArray = new Array();
    var currenciesAbbrevTextArray = new Array();

            currenciesExArray['1'] = "1.00000";
        currenciesSignArray['1'] ="US$";
        currenciesAbbrevArray['1'] ="USD (US$)";
        currenciesAbbrevTextArray['1'] ="USD";


            currenciesExArray['2'] = "0.94086";
        currenciesSignArray['2'] ="&euro;";
        currenciesAbbrevArray['2'] ="EUR (&euro;)";
        currenciesAbbrevTextArray['2'] ="EUR";


            currenciesExArray['3'] = "0.80891";
        currenciesSignArray['3'] ="&pound;";
        currenciesAbbrevArray['3'] ="GBP (&pound;)";
        currenciesAbbrevTextArray['3'] ="GBP";


            currenciesExArray['4'] = "1.45900";
        currenciesSignArray['4'] ="AU$";
        currenciesAbbrevArray['4'] ="AUD (AU$)";
        currenciesAbbrevTextArray['4'] ="AUD";


        function updateSiteRatesTop(current_currency,session_update){
        jQuery(".curr_contain#currency").find('li').show();
        jQuery("#e"+current_currency).hide();
        jQuery(".convertable").each(function(){
                var id = jQuery(this).attr('id');
                var current_value = jQuery('#h'+id).val();

                if(!isNaN(parseFloat(current_value))){

                    var new_value = parseFloat(current_value) * parseFloat(currenciesExArray[current_currency]);
                    var rounded_value = Math.round(new_value*Math.pow(10,0))/Math.pow(10,0);;
                    jQuery(this).html(rounded_value);
                }
        });

        jQuery(".currencySign").html(currenciesSignArray[current_currency]);
        jQuery(".currencySign3").html(currenciesAbbrevArray[current_currency]);
        jQuery(".currencySignText").html(currenciesAbbrevTextArray[current_currency]);

        if(session_update){
            jQuery.ajax({ url: '/ajax/dashboard/update_currency_session/'+current_currency });
        }
    }


    jQuery(document).ready(function(){
        jQuery("ul.subnav_top").parent().append(""); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
        jQuery("ul.topnav_top li .hover").mouseover(function() { //When trigger is clicked...
            //Following events are applied to the subnav itself (moving subnav up and down)

            jQuery(this).parent().find("ul.subnav_top").slideDown('fast').show(); //Drop down the subnav on click
            jQuery(this).parent().hover(function() {
            }, function(){
                jQuery(this).parent().find("ul.subnav_top").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
            });

            //Following events are applied to the trigger (Hover events for the trigger)
            }).hover(function() {
                jQuery(this).addClass("subhover"); //On hover over, add class "subhover"
            }, function(){  //On Hover Out
                jQuery(this).removeClass("subhover"); //On hover out, remove class "subhover"
        });

    });


    jQuery(document).ready(function(){
        updateSiteRatesTop('1',false);
    });
    </script>
@endsection
