@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <div class="row">
                            <div class="col-10">
                                <p style="font-size: 1.5rem" class="my-0">{{ __('Add New Itinerary For (') . $place->name . ')' }}
                                </p>
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
                        @if (request()->routeIs('admin.place.addItin'))
                            <form method="post" action="{{ route('admin.place.storeItin', $place->slug) }}">
                                <div class="container px-5">
                                    @csrf
                                    {{-- start Day --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Day</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="number" name="day" required>
                                        </div>
                                    </div>
                                    {{-- end Day --}}
                                    {{-- start Title --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Title</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="title" required>
                                        </div>
                                    </div>
                                    {{-- end Title --}}
                                    {{-- start Description --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Description</h5>
                                        </div>
                                        <div class="col-9">
                                            <textarea class="form-control" type="text" name="description" required></textarea>
                                        </div>
                                    </div>
                                    {{-- end Description --}}
                                    {{-- start lat --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Lat</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="lat" required>
                                        </div>
                                    </div>
                                    {{-- end lat --}}
                                    {{-- start lng --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Lng</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="lng" required>
                                        </div>
                                    </div>
                                    {{-- end lng --}}
                                    {{-- start submit --}}
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <input name="submit" class="btn btn-primary" type="submit" value="Add">
                                        </div>
                                    </div>
                                    {{-- end submit --}}
                                </div>
                            </form>
                        @elseif (request()->routeIs('admin.place.editItin'))
                            <form method="post" action="{{ route('admin.place.updateItin', [$place->slug, $itinerar->id]) }}">
                                <div class="container px-5">
                                    @csrf
                                    @method('PUT')
                                    {{-- start Day --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Day</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="number" name="day"
                                                value="{{ $itinerar->day }}" required>
                                        </div>
                                    </div>
                                    {{-- end Day --}}
                                    {{-- start Title --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Title</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="title"
                                                value="{{ $itinerar->title }}" required>
                                        </div>
                                    </div>
                                    {{-- end Title --}}
                                    {{-- start Description --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Description</h5>
                                        </div>
                                        <div class="col-9">
                                            <textarea class="form-control" name="description" required>{!! $itinerar->description !!}</textarea>
                                        </div>
                                    </div>
                                    {{-- end Description --}}
                                    {{-- start lat --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Lat</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="lat"
                                                value="{{ $itinerar->lat }}" required>
                                        </div>
                                    </div>
                                    {{-- end lat --}}
                                    {{-- start lng --}}
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <h5>Lng</h5>
                                        </div>
                                        <div class="col-9">
                                            <input class="form-control" type="text" name="lng"
                                                value="{{ $itinerar->lng }}" required>
                                        </div>
                                    </div>
                                    {{-- end lng --}}
                                    {{-- start submit --}}
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <input name="submit" class="btn btn-success" type="submit" value="Update">
                                            <a href="{{ route('admin.place.addItin', $place->slug) }}" class="btn btn-primary">Add New</a>
                                        </div>
                                    </div>
                                    {{-- end submit --}}
                                </div>
                            </form>
                        @endif
                        <br>
                        <table class="table table-light my-0">
                            <thead class="thead-light">
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
                                        <td>{!! $itin->description !!}</td>
                                        <td>{{ $itin->lat }}</td>
                                        <td>{{ $itin->lng }}</td>
                                        <td>{{ $itin->link }}</td>
                                        <td>
                                            <div class="d-inline-block">
                                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="{{ route('admin.place.editItin', [$place->slug, $itin->id]) }}"
                                                        class="dropdown-item">Edit</a>
                                                    <form method="POST"
                                                        action="{{ route('admin.place.deleteItin', $itin->id) }}"
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
