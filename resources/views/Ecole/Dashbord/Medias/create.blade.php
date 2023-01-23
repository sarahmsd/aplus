@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
<div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Medias</h1>
                <h2>Nouveau media</h2>
            </div>
            
        </div>
        <div class="wrapper wrapper-two-columns">
            <div class="card card-style-2 boxed">
                <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name">
                        @if($errors->has('name'))
                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label>image file</label>
                            <input type="file" name="media" class="form-control">
                            @if($errors->has('image'))
                            <strong class="text-danger">{{ $errors->first('image') }}</strong>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card card-for-icon">
                <img class="small-media" src="{{ asset('images/gh.png') }}" alt="" srcset="">
            </div>
        </div>
    </div>
@endsection
