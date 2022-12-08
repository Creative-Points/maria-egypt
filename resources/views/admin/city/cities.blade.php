@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <div class="row">
                        <div class="col-10">
                            <p style="font-size: 1.5rem" class="my-0">{{ __('Cities') }}</p>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('admin.city.create') }}" class="btn btn-primary btn-md">Add</a>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>
                                        <div class="img">
                                            <img src="{{ asset('uploads/city/') . '/' . $city->image }}" width="50" height="50" alt="">
                                        </div>
                                    </td>
                                    <td>{{ $city->name }}</td>
                                    <td>{!!  $city->status == 1 ? "<span class='text-success'>Active</span>" : "<span class='text-danger'>Unactive</span>"  !!}</td>
                                    <td>
                                        <div class="d-inline-block">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="{{ route('admin.city.view', $city->id) }}" class="dropdown-item">View</a>
                                                <a href="{{ route('admin.city.edit', $city->id) }}" class="dropdown-item">Edit</a>
                                                @if ($city->status == 1)
                                                    <a href="{{ route('admin.city.unactive', $city->id) }}" class="dropdown-item">Unctive</a>
                                                @else
                                                    <a href="{{ route('admin.city.active', $city->id) }}" class="dropdown-item">Active</a>
                                                @endif
                                                <div class="dropdown-divider"></div>
                                                <form class="" method="POST"
                                                    action="{{ route('admin.city.delete', $city->id) }}"
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
