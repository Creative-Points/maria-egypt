@extends('layouts.master')

@section('content')
    <style>
        .profile_header {
            height: 580px;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .profile_header_over {
            background: linear-gradient(312deg, rgba(2, 13, 19, 0.5) 0%, rgba(2, 13, 19, 0.5) 35%, rgba(245, 163, 27, 0.5) 100%);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .profile_header_data {
            position: relative;
            z-index: 2;
        }

        .profile_header_name {
            font-weight: bold;
            font-size: 2.692rem;
            color: #fff;
        }

        .profile_header_img img {
            width: 230px;
            height: 230px;
            border: 1px solid #707070;
            border-radius: 50%;
        }

        .profile_header_rp {
            margin: 15px 50px;
        }

        .profile_header_rp .num {
            font-weight: bold;
            font-size: 2.692rem;
            color: #f5a31b;
        }

        .profile_header_rp .txt {
            font-weight: 500;
            text-decoration: underline;
            font-size: 1.154rem;
            color: #fafafa;
        }
    </style>
    <div class="profile">
        <div class="profile_header d-flex align-items-center justify-content-center"
            style="background-image: url('/theme/Com2021/img/user_bg.png')">
            <div class="profile_header_over"></div>
            <div class="profile_header_data">
                <div class="container">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <div class="profile_header_img">
                            <img src="https://lh3.googleusercontent.com/a/ALm5wu2rH_n9UYn24O8grwoTo5gOa7y_Pe1-7w3DCPfN=s96-c"
                                width="100%">
                        </div>
                        <div class="profile_header_name text-center">
                            {{ $user->name }}</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center align-items-center">
                        <div class="profile_header_rp">
                            <a class="d-flex justify-content-center flex-column align-items-center"
                                href="/clients/my_points" title="My Points">
                                <div class="num">
                                    0 </div>
                                <div class="txt"> My Points </div>
                            </a>
                        </div>
                        <div class="profile_header_rp d-flex justify-content-center flex-column align-items-center">
                            <a class="d-flex justify-content-center flex-column align-items-center" href="/clients/my_tours"
                                title="My Tours">
                                <div class="num">
                                    {{ count($orders) }} </div>
                                <div class="txt"> My Tours </div>
                            </a>
                        </div>
                        <div class="profile_header_rp d-flex justify-content-center flex-column align-items-center">
                            <a class="d-flex justify-content-center flex-column align-items-center"
                                href="/clients/my_enquires" title="My Enquiry">
                                <div class="num">
                                    0 </div>
                                <div class="txt"> My Enquiry </div>
                            </a>
                        </div>
                        <div class="profile_header_rp d-flex justify-content-center flex-column align-items-center">
                            <a class="d-flex justify-content-center flex-column align-items-center"
                                href="{{ route('user.setting') }}" title="My Info">
                                {{-- <div class="num">
                                    0 </div> --}}
                                <div class="txt"> My Info </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-destination">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1>Tours</h1>
                        <div class="top-destination-more"><a href="#" title="View All" alt="View All">View
                                All</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <table class="table table-dark table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Tour</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td scope="row">{{ $order->order_id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>
                                        @if ($order->order_status == 0)
                                            <span class='text-info'>New</span>
                                        @elseif ($order->order_status == 1)
                                            <span class='text-warning'>Progress</span>
                                        @elseif ($order->order_status == 2)
                                            <span class='text-success'>Complated</span>
                                        @elseif ($order->order_status == 3)
                                            <span class='text-danger'>Canceled</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"><span class="text-muted">No Tours ..</span></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .client_photo_box {
            height: 350px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin-bottom: 20px;
            position: relative;
        }

        .client_photo_box_data {
            position: absolute;
            bottom: 0;
            padding: 20px;
            background-color: rgba(33, 33, 33, .5);
            width: 100%;
            color: #fff;
        }

        .client_photo_box_data_date {
            font-weight: bold;
            font-size: 1.154rem;
            color: #f5a31b;
        }

        .client_photo_box_data_count {
            font-weight: normal;
            font-size: 1.538rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .client_photo_box_data_title {
            font-weight: bold;
            font-size: 1.923rem;
            color: #fff;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-destination">
                    <h1>My Photos</h1>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
            </div>
        </div>
    </div>
@endsection
