@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <div class="row">
                            <div class="col-10">
                                <p style="font-size: 1.5rem" class="my-0">{{ __('Orders') }}</p>
                            </div>
                            <div class="col-2">
                                {{-- <a href="{{ route('admin.order.create') }}" class="btn btn-primary btn-md">Add</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 py-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-light my-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    {{-- <th>Place Image</th> --}}
                                    <th>Tour</th>
                                    <th>Price</th>
                                    <th>Arrival</th>
                                    <th>Departure</th>
                                    <th>Adults</th>
                                    <th>Children</th>
                                    <th>Infants</th>
                                    <th>Username</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        {{-- <td>
                                        <div class="img">
                                            <img src="{{ asset('uploads/place/') . '/' . $order->image }}" width="50" height="50" alt="">
                                        </div>
                                    </td> --}}
                                        <td><a href="{{ route('admin.place.view', $order->place_id) }}" class="nav-link">{{ $order->name }}</a></td>
                                        <td>${{ $order->price }}</td>
                                        <td>{{ $order->arrival }}</td>
                                        <td>{{ $order->departure }}</td>
                                        <td>{{ $order->adults }}</td>
                                        <td>{{ $order->children }}</td>
                                        <td>{{ $order->infants }}</td>
                                        <td><a href="{{ route('admin.order.viewUser', $order->user_id) }}" class="nav-link">{{ $order->username }}</a></td>
                                        <td>{{ $order->ca }}</td>
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
                                        <td>
                                            <div class="d-inline-block">
                                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    {{-- <a href="{{ route('admin.order.view', $order->id) }}"
                                                        class="dropdown-item">View</a> --}}
                                                    {{-- <a href="{{ route('admin.order.edit', $order->id) }}"
                                                        class="dropdown-item">Edit</a> --}}
                                                    {{-- @if ($order->status == 0) --}}
                                                    <a href="{{ route('admin.order.progress', $order->order_id) }}"
                                                        class="dropdown-item">Progress</a>
                                                    {{-- @elseif ($order->status == 1) --}}
                                                    <a href="{{ route('admin.order.complete', $order->order_id) }}"
                                                        class="dropdown-item">Complete</a>
                                                    <a href="{{ route('admin.order.new', $order->order_id) }}"
                                                        class="dropdown-item">As New</a>
                                                    <a href="{{ route('admin.order.cancel', $order->order_id) }}"
                                                        class="dropdown-item">Cancel</a>
                                                    {{-- @endif --}}
                                                    {{-- <div class="dropdown-divider"></div>
                                                    <form class="" method="POST"
                                                        action="{{ route('admin.order.delete', $order->order_id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dropdown-item text-danger delete-record">Delete</button>
                                                    </form> --}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">
                                            <span>No Data</span>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                {{-- <tr>
                                <th>#</th>
                            </tr> --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
