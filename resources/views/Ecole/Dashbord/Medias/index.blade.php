@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
<div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Medias</h1>
                <h2>Liste des medias</h2>
            </div>
            <div class="title-section-2">
                <form action="{{route('medias.search') }}" class="search-form">
                    <input type="sumbit" name="q" value="{{ request()->q ??  '' }}" id="" id="" class="input-search search-style-large" placeholder="rechercher un media...">

                </form>
            </div>
            <a href="{{ route('medias.create') }}" class="btn btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                Ajouter un media
            </a>        
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