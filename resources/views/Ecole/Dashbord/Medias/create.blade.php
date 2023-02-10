@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
<div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Medias</h1>
                <h2>Nouveau media</h2>
            </div>
            <a href="{{ route('activite.index') }}" class="btn btn-icon">
                Les Activités
            </a>
            <a href="{{ route('filiere.index') }}" class="btn btn-icon btn-red">
                Les Filières
            </a>
            <a href="{{ route('departement.index') }}" class="btn btn-blue btn-icon">
                Les Départements
            </a>
            <a href="{{ route('medias.index') }}" class="btn btn btn-icon">
                Les Medias
            </a>
            <a href="{{ route('enseignement.index') }}" class="btn btn-red">
                Les Enseignements
            </a>
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
    @if(Session::has('success'))
    <div class="flash-message flash-success">
        <p class="text">{{Session::get('success')}}</p>
        <a class="close">&times;</a>
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="flash-message flash-error">
        <p class="text">{{Session::get('fail')}}</p>
        <a class="close">&times;</a>
    </div>
    @endif
@endsection
