@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
<div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Medias</h1>
                <h2>Liste des medias</h2>
            </div>
            
        </div>
        <div class="card-grid">
            @foreach ($medias as $media)
            <div class="small-card boxed">
                <img src="{{url('storage/images/'.$media->media)}}" alt="">
                <span>{{ $media->id }}</span>
                <span>
                    <a href="{{ route('medias.edit', $media->id) }}">Modifier</a>
                    <a href="{{ route('medias.delete', $media->id) }}">Supprimer</a>
                    <a href="{{ route('medias.makecover', $media->id) }}">Définir comme photo de couverture</a>
                </span>
            </div>
            @endforeach
        </div>
    </div>
@endsection