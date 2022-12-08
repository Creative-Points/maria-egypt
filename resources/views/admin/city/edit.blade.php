@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2">
                                <h4>{{ __('Edit City') }}</h4>
                            </div>
                            <div class="col-8"></div>
                            <div class="col-2">
                                <a href="{{ route('admin.city.manage') }}" class="btn btn-primary btn-md">Back</a>
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
                        <form method="post" action="{{ route('admin.city.update', $city->id) }}" enctype="multipart/form-data">
                            <div class="container px-5">
                                @csrf
                                @method('PUT')
                                {{-- start View Image --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>View Image</h5>
                                    </div>
                                    <div class="col-9">
                                        <img src="{{ asset('uploads/city/'.$city->image) }}" width="200" height="200" alt="">
                                    </div>
                                </div>
                                {{-- end View Image --}}
                                {{-- start Image --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Image</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="file" name="image"
                                            accept=".gif, .jpg, .jpeg, .png">
                                    </div>
                                </div>
                                {{-- end Image --}}
                                {{-- start Name --}}
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <h5>Name</h5>
                                    </div>
                                    <div class="col-9">
                                        <input class="form-control" type="text" name="name" value="{{ $city->name }}" required>
                                    </div>
                                </div>
                                {{-- end Name --}}
                                {{-- start submit --}}
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <input name="submit" id="" class="btn btn-success" type="submit"
                                            value="Update">
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
