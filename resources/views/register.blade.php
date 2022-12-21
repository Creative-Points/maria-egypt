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
                        <div class="nav-link active">Sign Up</div>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="signupTab" role="" aria-labelledby="signup-tab">
                        <div class="client_login_form">
                            <form method="post" accept-charset="utf-8" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>
                                    <div class="input mail required"><input type="mail" name="email"
                                            class="form-control" placeholder="Email" required="required"
                                            id="email" /></div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Name</label>
                                    <div class="input text required"><input type="text" name="name"
                                            class="form-control" required="required" id="name" /></div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <div class="input password required"><input type="password" name="password"
                                            class="form-control" required="required" id="password" /></div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input password required"><input type="password"
                                            name="password_confirmation" class="form-control" required="required"
                                            id="confirm-password" /></div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="submit-btn">Sign Up</button>
                                </div>
                            </form>
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <a class="btn btn-primary col-12" href="{{ route('login') }}">Login</a>
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