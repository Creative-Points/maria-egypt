@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <div class="row">
                        <div class="col-10">
                            <p style="font-size: 1.5rem" class="my-0">{{ __('Places Manage') }}</p>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('admin.place.create') }}" class="btn btn-primary btn-md">Add</a>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Run</th>
                                <th>Country</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($places as $place)
                                <tr>
                                    <td>{{ $place->id }}</td>
                                    <td>
                                        <div class="img">
                                            <img src="{{ asset('uploads/place/') . '/' . $place->image }}" width="50" height="50">
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.place.view', $place->id) }}" class="nav-link">{{ $place->name }}</a></td>
                                    <td>{{ $place->duration }}</td>
                                    <td>{{ $place->price }}</td>
                                    <td>{{ $place->run }}</td>
                                    <td>{{ $place->country }}</td>
                                    <td>{{ $place->type }}</td>
                                    <td>{!!  $place->status == 1 ? "<span class='text-success'>Active</span>" : "<span class='text-danger'>Unactive</span>"  !!}</td>
                                    <td>
                                        <div class="d-inline-block">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('admin.place.view', $place->id) }}" class="dropdown-item">View</a>
                                                <a href="{{ route('admin.place.edit', $place->id) }}" class="dropdown-item">Edit</a>
                                                <a href="{{ route('admin.place.addItin', $place->slug) }}" class="dropdown-item">Itinerary</a>
                                                @if ($place->status == 1)
                                                    <a href="{{ route('admin.place.unactive', $place->id) }}" class="dropdown-item">Unctive</a>
                                                @else
                                                    <a href="{{ route('admin.place.active', $place->id) }}" class="dropdown-item">Active</a>
                                                @endif
                                                <div class="dropdown-divider"></div>
                                                <form class="" method="POST"
                                                    action="{{ route('admin.place.delete', $place->id) }}"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="dropdown-item text-danger delete-record">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center text-muted">
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
