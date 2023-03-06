
@include('Projet.navbar')
<div class="l-main sidebar-right">
    @include('Projet.sidebar')
    <div class="main-content">
        <div class="title-section two-section">
            <div class="title-section-1">
                <h1>AcademiePlus Projet</h1>
                <h2>Configurez votre projet</h2>
            </div>
            <div class="title-section-2">
                <div class="buttons-flex">
                    <a href="{{ route('projet.liste') }}" class="btn btn-icon btn-fill btn-orange">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                        </svg>
                        Retour aux projets
                    </a>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-two-column">
            <div class="card card-style-2 boxed">
                <div class="">
                    <h2 class="box-title">{{$projet->nomStartup}}</h2>
                    @if ($projet->status == 0)
                    <a class="link-text-orange">En attente de validation</a>
                    @else
                    <a class="link-text">Valider</a>
                    @endif
                    <p class="description">
                        {{$projet->description}}
                    </p>
                </div>
                <div class="buttons-flex">
                    <div>
                    <a class="link-text" href="{{ route('projet.edit', $projet->id) }}">
                        Modifier
                    </a>
                    </div>
                    <form action="{{route('projet.delete', $projet->id)}}" method="get">
                        @csrf
                        <a class="link-text-orange delete-btn">
                            Supprimer
                        </a>
                    </form>
                </div>
                <a href="investir.html" class="btn btn-icon btn-gris">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM128 416H64V352c35.3 0 64 28.7 64 64zM64 224V160h64c0 35.3-28.7 64-64 64zM448 352c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM384 256c0 61.9-43 112-96 112s-96-50.1-96-112s43-112 96-112s96 50.1 96 112zM252 208c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z"/></svg>
                    {{ $projet->investisseurs->count() }} Investisseurs
                </a>
            </div>
            <div class="card card-style-2 boxed">
                <div class="small-card">
                    <div class="form-edit-one-row">
                        <div class="form-group inline-form">
                            <label for="idProjet" class="form-label-inline">Identifiant de projet</label>
                            <input type="text" class="form-input-edit" disabled name="idProjet" id="" value="id1234CVHBJ8gg8FJ">
                        </div>
                        <span class="small-text">Ceci est votre identifiant de projet. Il ne peut etre modifier</span>
                    </div>
                </div>
                <div class="small-card">
                    <form action="#" method="post" class="form-edit-one-row">
                        <div class="form-group inline-form">
                            <label for="nomProjet" class="form-label-inline">Nom du projet</label>
                            <input type="text" value="{{ $projet->nomStartup }}" name="nomProjet" class="form-input-edit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="10" width="8" class="edit-icon">
                                <path fill="#1081C5" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                            </svg>
                        </div>
                    </form>
                </div>
                <div class="small-card">
                    <form action="" method="post" class="form-edit-one-row">
                        <div class="form-group inline-form">
                            <label for="email" class="form-label-inline">Email</label>
                            <input type="email" value="{{$projet->email}}" name="email" class="form-input-edit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="10" width="8" class="edit-icon">
                                <path fill="#1081C5" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                            </svg>
                        </div>
                    </form>
                </div>
                <div class="small-card">
                    <form action="" method="post" class="form-edit-one-row">
                        <div class="form-group inline-form">
                            <label for="telephone" class="form-label-inline">Telephone</label>
                            <input type="text" value="{{$projet->telephone}}" name="telephone" class="form-input-edit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="10" width="8" class="edit-icon">
                                <path fill="#1081C5" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                            </svg>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="title-section two-section">
                <div class="title-section-1">
                    <h1>Investisseurs potentiels</h1>
                    <h2>Votre projet est maintenat en ligne mais vous pouvez choisir quels investisseurs peuvent le voir.</h2>
                </div>
                <div class="title-section-2">
                </div>
            </div>
            <div class="card-grid">
                @foreach ($projet->investisseurs as $investisseur)
                    @if ($investisseur->status == 1)
                    <form action="{{ route('add.projet', [$investisseur->id]) }}" method="post">
                        @csrf
                        <div class="small-card boxed">
                            <div class="">
                                <img class="small-media" src="{{ asset('images/unesco.jpg') }}" alt=""></span>
                                <h2>{{ $investisseur->user->name }}</h2>
                            </div>
                            @if ($projet->status == 0)
                            <button type="submit" class="btn btn-orange btn-retirer-investisseur">Retirer pour ce projet</button>
                            @else
                            @endif
                        </div>

                    </form>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('Projet.footer')
