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
                <form action="{{ route('medias.update', $media->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <div class="mb-3">
                            <label>image file</label>
                            <input type="file" name="media" class="form-control">
                            @if($errors->has('image'))
                            <strong class="text-danger">{{ $errors->first('image') }}</strong>
                            @endif
                            <img src="{{ url('storage/images/'.$media->media) }}" alt="no image" width="100" height="100">
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
