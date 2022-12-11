@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <div class="row">
                            <div class="col-10">
                                <p style="font-size: 1.5rem" class="my-0">{{ __('View Place') }}</p>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('admin.place.manage') }}" class="btn btn-primary btn-md">Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="post" enctype="multipart/form-data">
                            <div class="container px-5">
                                @csrf
                                {{-- start View Image --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>View Images</h5>
                                    </div>
                                    <div class="col-9">
                                        @foreach ($images as $file)
                                            <img src="{{ asset('uploads/place/'.$file->image) }}" width="150" height="150" alt="">
                                        @endforeach
                                    </div>
                                </div>
                                {{-- end View Image --}}
                                {{-- start Name --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Name</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="name" value="{{ $place->name }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Name --}}
                                {{-- start Description --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Description</h5>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control" type="text" name="description" disabled required>{{ $place->description }}</textarea>
                                    </div>
                                </div>
                                {{-- end Description --}}
                                {{-- start Address --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Address</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="address" required>
                                    </div>
                                </div> --}}
                                {{-- end Address --}}
                                {{-- start Duration --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Duration</h5>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-warning h5">Use | between Days & Nights *Ex: 8 Days|7 Nights*</span>
                                        <input class="form-control" type="text" name="duration" value="{{ $place->duration }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Duration --}}
                                {{-- start Country --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Country</h5>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-warning h5">Use | between Countries & Cities *Ex: 1 Country|7 Cities*</span>
                                        <input class="form-control" type="text" name="country" value="{{ $place->country }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Country --}}
                                {{-- start Price --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Price</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="number" name="price" value="{{ $place->price }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Price --}}
                                {{-- start Run --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Run</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="run" value="{{ $place->run }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Run --}}
                                {{-- start Type --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Type</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="type" value="{{ $place->type }}" disabled required>
                                    </div>
                                </div>
                                {{-- end Type --}}
                                {{-- start Included --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Included</h5>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-warning h5">use | between every item * Ex: item1|item2|..*</span>
                                        <textarea class="form-control" type="text" name="included" disabled required>{{ $place->included }}</textarea>
                                    </div>
                                </div>
                                {{-- end Included --}}
                                {{-- start Excluded --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Excluded</h5>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-warning h5">use | between every items * Ex: item1|item2|..*</span>
                                        <textarea class="form-control" type="text" name="excluded" disabled required>{{ $place->excluded }}</textarea>
                                    </div>
                                </div>
                                {{-- end Excluded --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-info text-center">
                        <div class="row">
                            <div class="col-10">
                                <p style="font-size: 1.5rem" class="my-0">{{ __('View Itinerary') }}</p>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('admin.place.addItin', $place->slug) }}" class="btn btn-success btn-md">Add Itinerary</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body py-0 px-0">
                        <table class="table table-dark my-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Day</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Lat</th>
                                    <th>Lng</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($itins as $itin)
                                    <tr>
                                        <td>{{ $itin->id }}</td>
                                        <td>{{ $itin->title }}</td>
                                        <td>{{ $itin->description }}</td>
                                        <td>{{ $itin->lat }}</td>
                                        <td>{{ $itin->lng }}</td>
                                        <td>{{ $itin->link }}</td>
                                        <td>
                                            <div class="d-inline-block">
                                                <button class="btn btn-sm btn-icon text-light dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <form method="POST"
                                                        action="{{ route('admin.place.delete', $place->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger delete-record">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            <span>No Data</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
