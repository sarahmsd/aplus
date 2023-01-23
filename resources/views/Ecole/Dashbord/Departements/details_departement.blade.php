@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Départements</h1>
                <h2>Département {{ $departement->nomDepartement }}</h2>
            </div>
            <div class="title-section-2">
                <a href="{{ route('departement.index')}}" class="btn btn-icon">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                    </svg>
                    Retour aux Départements
                </a>
            </div>
        </div>
        <div class="wrapper">
            <div class="card card-1">
                <div class="card-top">
                    <div class="title-section dashboard-title">
                        <div class="title">
                            <h1>Département {{ $departement->nomDepartement }}</h1>
                            <h2>Détails du département {{ $departement->nomDepartement }}</h2>
                        </div>
                        <div class="">
                            <a href="{{ route('edit.departement', $departement->id) }}">
                                <button class="btn btn-icon btn-fill">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                                    Modifier
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('delete.departement',$departement->id) }}">
                                <button class="btn btn-icon btn-fill btn-red">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                    Supprimer
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-middle">
                    <div class="icons">
                    </div>
                    <p>{{ $departement->descriptionDepartement }}</p>
                </div>
                <div class="card-footer">
                    <div class="wrapper">
                        <h2>Filières du département {{ $departement->nomDepartement }}</h2>
                    </div>
                    <div class="wrapper">
                        @foreach ($filieres as $filiere)
                        <div class="small-card">
                            <span>{{ $filiere->nomFiliere }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
 @endsection
