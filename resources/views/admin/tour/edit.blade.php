@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <div class="row">
                            <div class="col-10">
                                <p style="font-size: 1.5rem" class="my-0">{{ __('Edit Place') }}</p>
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
                        <form method="post" action="{{ route('admin.place.update', $place->id) }}" enctype="multipart/form-data">
                            <div class="container px-5">
                                @csrf
                                @method('put')
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
                                {{-- start Image --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Images</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="file" name="images[]"
                                            accept=".gif, .jpg, .jpeg, .png" multiple>
                                    </div>
                                </div>
                                {{-- end Image --}}
                                {{-- start Name --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Name</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="name" value="{{ $place->name }}" required>
                                    </div>
                                </div>
                                {{-- end Name --}}
                                {{-- start Description --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Description</h5>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control" type="text" name="description" required>{{ $place->description }}</textarea>
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
                                        <input class="form-control" type="text" name="duration" value="{{ $place->duration }}" required>
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
                                        <input class="form-control" type="text" name="country" value="{{ $place->country }}" required>
                                    </div>
                                </div>
                                {{-- end Country --}}
                                {{-- start Price --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Price</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="number" name="price" value="{{ $place->price }}" required>
                                    </div>
                                </div>
                                {{-- end Price --}}
                                {{-- start Run --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Run</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="run" value="{{ $place->run }}" required>
                                    </div>
                                </div>
                                {{-- end Run --}}
                                {{-- start Type --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Type</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="type" value="{{ $place->type }}" required>
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
                                        <textarea class="form-control" type="text" name="included" required>{{ $place->included }}</textarea>
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
                                        <textarea class="form-control" type="text" name="excluded" required>{{ $place->excluded }}</textarea>
                                    </div>
                                </div>
                                {{-- end Excluded --}}
                                {{-- start submit --}}
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <input name="submit" class="btn btn-primary" type="submit"
                                            value="Add">
                                    </div>
                                </div>
                                {{-- end submit --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
