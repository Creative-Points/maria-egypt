@extends('layouts.master')

@section('content')
<style>
    *,
    *:after,
    *:before {
        box-sizing: border-box;
    }

    body {
        background: #e4e4e4 url(../images/banner.jpg) center bottom;
        background-size: cover;
        min-height: 100vh;
        font-family: arial;
        font-size: 16px;
        margin: 0;
    }


    #header {
        /* padding: 15px 30px; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #022335;
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
    }

    .containerr {
        max-width: 1100px;
        width: 100%;
        margin: 0 auto;
        padding: 0 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav_ico {
        display: block;
        width: 40px;
        cursor: pointer;
    }

    .main_nav {
        float: right;
    }

    .main_nav ul {
        margin: 0;
        padding: 0px;
        list-style: none;
    }

    .main_nav ul li {
        float: left;
        margin: 0 0 0 5px;
        position: relative;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: 300;
        position: relative;
    }

    .main_nav ul li a {
        color: white;
        display: block;
        line-height: 1.4;
        text-decoration: none;
        padding: 5px 15px;
        transition: all 0.3s ease-out;
    }

    .main_nav ul li:hover>a {
        color: #0a91da
    }

    .main_nav ul li i {
        position: absolute;
        right: 0;
        top: 10px;
        color: #fff;
    }

    .main_nav ul li:hover>i {
        color: #0a91da
    }

    .main_nav ul ul {
        position: absolute;
        left: 0;
        top: calc(100% + 15px);
        white-space: nowrap;
        opacity: 0;
        transition: all 0.3s ease-out;
        pointer-events: none;
    }

    .main_nav ul ul li {
        float: none;
        margin: 0;
        border-bottom: 1px solid #fff;
    }

    .main_nav>ul>li>ul:after {
        content: "";
        position: absolute;
        bottom: 100%;
        height: 16px;
        width: 100%;
        left: 0;
    }

    .main_nav ul ul ul {
        left: 100%;
        top: 0;
    }

    .main_nav ul li:hover>ul {
        opacity: 1;
        pointer-events: auto;
    }

    .main_nav ul ul li a {
        background: #022335;
    }

    .main_nav ul li:hover ul li:hover>a {
        color: #fff;
        background: #0a91da;
    }

    .main_nav ul ul li i {
        transform: rotate(-90deg);
    }

    .main_nav ul ul li:hover i {
        color: #fff;
    }




    /*This Media Query use for iPad Portrait View*/
    @media only screen and (min-width:768px) and (max-width:991px) {
        .main_nav ul li {
            margin: 0;
            font-size: 16px;
        }

        .main_nav ul li a {
            padding: 5px 10px;
        }

    }

    @media screen and (min-width: 768px) {

        .nav_ico,
        #menuTrigger {
            display: none;
        }
    }

    /*This Media Query use for Mobile View*/
    @media screen and (max-width: 767px) {
        .nav_ico {
            display: block;
            position: relative;
            z-index: 10;
            color: #fff;
            font-size: 36px;

        }

        .main_nav {
            position: fixed;
            left: 0;
            top: 72px;
            padding: 0;
            background: #053e5d;
            z-index: 5;
            height: calc(100vh - 74px);
            overflow: auto;
            width: calc(100% - 0px);
            transition: all 0.3s ease-out;
            transform: translateX(-100%);
        }

        .main_nav ul li {
            float: none;
            margin: 0 !important;
            padding: 0 !important;
            border-bottom: 1px solid;
        }

        .main_nav ul li a {
            display: block;
            color: #fff;
            padding: 10px;
        }

        .main_nav>ul>li:hover>a {
            background: #0a91da;
            color: #fff;
        }

        .main_nav ul ul {
            position: static;
            pointer-events: auto;
            opacity: 1;
            height: 0;
            overflow: hidden;
        }

        .main_nav ul ul li a {
            padding-left: 30px;
        }

        .main_nav ul ul ul li a {
            padding-left: 60px;
        }

        .main_nav ul ul ul ul li a {
            padding-left: 90px;
        }

        .main_nav ul li:hover>ul {
            height: auto;
        }

        .main_nav ul li i {
            right: 10px !important;
        }

        .main_nav ul li:hover>i {
            color: #fff
        }

        .main_nav ul ul li i {
            transform: rotate(0deg);
        }

        #menuTrigger {
            opacity: 0;
            position: fixed;
            width: 0;
            height: 0;
            margin: 0
        }

        #menuTrigger:checked+.main_nav {
            transform: translateX(0%);
        }



    }
</style>
<div class="fade show" id="loginmodal" aria-labelledby="loginmodalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active"aria-controls="home" aria-selected="true">Login</div>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="loginTab" role="tabpanel" aria-labelledby="login-tab">
                        {{-- <div class="row" id="socialLoginWrapper">
                            <div class="col-12">
                                <a class="social-login-button"
                                    href="https://www.memphistours.com//theme/clients/getGoogleURL">
                                    <span class="media d-flex align-items-center">
                                        <svg class="float-left" width="24" height="24" viewBox="0 0 18 18"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path
                                                    d="M17.64 9.205c0-.639-.057-1.252-.164-1.841H9v3.481h4.844a4.14 4.14 0 0 1-1.796 2.716v2.259h2.908c1.702-1.567 2.684-3.875 2.684-6.615z"
                                                    fill="#4285F4"></path>
                                                <path
                                                    d="M9 18c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332A8.997 8.997 0 0 0 9 18z"
                                                    fill="#34A853"></path>
                                                <path
                                                    d="M3.964 10.71A5.41 5.41 0 0 1 3.682 9c0-.593.102-1.17.282-1.71V4.958H.957A8.996 8.996 0 0 0 0 9c0 1.452.348 2.827.957 4.042l3.007-2.332z"
                                                    fill="#FBBC05"></path>
                                                <path
                                                    d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0A8.997 8.997 0 0 0 .957 4.958L3.964 7.29C4.672 5.163 6.656 3.58 9 3.58z"
                                                    fill="#EA4335"></path>
                                                <path d="M0 0h18v18H0z"></path>
                                            </g>
                                        </svg>
                                        <div class="media-body">Continue with Google</div>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="social-login-button"
                                    href="https://www.memphistours.com//theme/clients/getFBUrl">
                                    <span class="media d-flex align-items-center">
                                        <svg class="float-left" width="24" height="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.407.593 24 1.324 24h11.504v-9.281H9.703v-3.633h3.125V8.412c0-3.099 1.895-4.787 4.659-4.787.931-.002 1.862.045 2.789.14v3.24h-1.904c-1.506 0-1.8.712-1.8 1.763v2.313h3.6l-.467 3.633h-3.153V24h6.124c.731 0 1.324-.593 1.324-1.324V1.324C24 .593 23.407 0 22.676 0z"
                                                fill="#4267B2" fill-rule="evenodd"></path>
                                        </svg>
                                        <div class="media-body">Continue with Facebook</div>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="social-login-button" href="#">
                                    <span class="media d-flex align-items-center">
                                        <svg class="d-inline-block" width="24" height="24"
                                            viewBox="0 0 1000 1187.198">
                                            <path
                                                d="M979.042 925.188c-17.954 41.477-39.206 79.657-63.828 114.759-33.563 47.853-61.044 80.976-82.222 99.37-32.83 30.192-68.006 45.654-105.672 46.533-27.041 0-59.652-7.694-97.611-23.303-38.085-15.536-73.084-23.23-105.086-23.23-33.563 0-69.56 7.694-108.061 23.23-38.561 15.609-69.625 23.743-93.376 24.55-36.12 1.538-72.123-14.364-108.06-47.78-22.938-20.006-51.627-54.302-85.997-102.888-36.875-51.883-67.191-112.047-90.942-180.639C12.751 781.703 0 709.96 0 640.504c0-79.562 17.192-148.183 51.627-205.687 27.063-46.19 63.066-82.625 108.127-109.373 45.06-26.748 93.749-40.378 146.182-41.25 28.69 0 66.312 8.874 113.066 26.315 46.622 17.5 76.557 26.374 89.682 26.374 9.812 0 43.068-10.376 99.443-31.064 53.313-19.185 98.307-27.129 135.168-24 99.883 8.062 174.923 47.436 224.828 118.372-89.33 54.126-133.52 129.936-132.64 227.188.806 75.751 28.287 138.788 82.295 188.84 24.476 23.23 51.81 41.183 82.222 53.934-6.595 19.127-13.557 37.447-20.958 55.035zM749.964 23.75c0 59.374-21.692 114.81-64.928 166.122-52.176 61-115.286 96.248-183.724 90.686a184.836 184.836 0 01-1.378-22.497c0-56.999 24.813-117.998 68.878-167.874 21.999-25.253 49.978-46.25 83.907-63 33.856-16.5 65.88-25.625 95.999-27.187.88 7.937 1.246 15.875 1.246 23.75z">
                                            </path>
                                        </svg>
                                        <div class="media-body">Continue with Apple</div>
                                    </span>
                                </a>
                            </div>
                        </div> --}}
                        {{-- <div class="row align-items-center my-3 no-gutters">
                            <div class="col">
                                <div class="border border-bottom-0"></div>
                            </div>
                            <div class="col-2 text-center font-weight-bold">OR</div>
                            <div class="col">
                                <div class="border border-bottom-0"></div>
                            </div>
                        </div> --}}
                        <div class="client_login_form">
                            <form method="post" accept-charset="utf-8" action="{{ route('login') }}">
                                @csrf
                                {{-- <div style="display:none;">
                                    <input type="hidden" name="_method" value="POST" />
                                </div> --}}
                                <div class="mb-4">
                                    <label class="form-label">{{ __('Email Address') }}</label>
                                    <div class="input mail required">
                                        <input type="mail" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="{{ __('Email Address') }}" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus id="email" />

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <div class="input password required">
                                        <input type="password" placeholder="{{ __('Password') }}" name="password"
                                            class="form-control @error('password') is-invalid @enderror" required
                                            autocomplete="current-password" id="password" />
                                    </div>
                                </div>
                                <button type="submit" class="submit-btn">Login</button>
                            </form>
                            <br>
                            <div class="form_links d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="remember" id="RememberMe">
                                    <label class="form-check-label" for="RememberMe">
                                        Remember me </label>
                                </div>
                                <div class="forgetpass">
                                    <h4><a href="{{ route('register') }}">Sign Up</a></h4>
                                </div>
                                <div class="forgetpass">
                                    <a href="{{ route('password.request') }}">Forgot
                                        Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection