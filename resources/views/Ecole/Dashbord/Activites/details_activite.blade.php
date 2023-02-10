@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Activités</h1>
                <h2>{{ $activite->nomActivite }}</h2>
            </div>
            <div class="title-section-2">
                <a href="{{ route('activite.index') }}" class="btn btn-icon">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                    Retour aux Activités
                </a>
            </div>
        </div>
        <div class="wrapper">
            <div class="card card-1">
                <div class="card-top">
                    <div class="title-section dashboard-title">
                        <div class="title">
                            <h1>{{ $activite->nomActivite }}</h1>
                            <h2>Infos {{ $activite->nomActivite }}</h2>
                        </div>
                        <div class="">
                            <a class="btn btn-icon btn-fill" href="{{ route('edit.activite',$activite->id) }}">
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                                Modifier
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('delete.activite', $activite->id) }}" method="get">
                                @csrf
                                <a class="btn btn-icon btn-red delete-btn">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                    </svg>
                                    Supprimer
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-middle">
                    <div class="icons">
                    </div>
                    <div class="description">
                        <span>{{ $activite->descriptionActivite }}</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="wrapper">
                        <h2>Medias</h2>
                    </div>
                    <div class="wrapper">
                        <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group inline-form">
                                <input type="file" name="media" class="form-input input-style-2" placeholder="charger un media">
                                <button class="btn btn-fill" type="submit">Ajouter</button>
                            </div>
                            <input type="hidden" name="activite_id" value="{{ $activite->id }}">
                        </form>
                    </div>
                    <div class="wrapper wrapper-four-columns">
                        @foreach ($medias as $media)
                        <div class="small-card removable-style">
                            <svg class="remove-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                            </svg>
                            <img src="{{url('storage/images/'.$media->media)}}" alt="" class="xsmall-media">
                            <form action="{{ route('medias.delete', $media->id) }}" method="get" class="disabeld">
                                <input type="hidden" value="id-media" name="rm-media">
                                <input type="hidden" name="activity" value="id-activity">
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
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
