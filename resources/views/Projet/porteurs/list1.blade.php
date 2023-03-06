@include('Projet.navbar')
<div class="l-main sidebar-right toggled">
    @include('Projet.sidebar')
    <div class="main-content">
        <div class="title-section two-section">
            <div class="title-section-1">
                <h1>AcademiePlus Projet</h1>
                <h2>Mes projets</h2>
            </div>
            <div class="title-section-2 style-dashboard">
                <a href="{{ route('profilPorteur', auth()->user()->id) }}" class="btn btn-orange btn-fill">
                    Mon compte
                </a>
                <a href="{{ route('projet.liste') }}" class="btn">
                    Mes projets
                </a>
                <a href="" class="btn btn-fill">
                    Liste des investisseurs
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-right">
            <form action="#" method="post" class="search-form">
                <input type="text" name="search" id="" class="input-search style-1" placeholder="rechercher un projet...">
            </form>
            <div class="filter">
                <div class="label-filter" id="filtre">
                    <span>Filtrer...</span>
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/>
                    </svg>
                </div>
                <ul id="" class="filter-options disabled">
                    <li class="filter-item">
                        <input type="radio" class="item-input" value="1" name="filtre" id="filtre1">
                        <label for="filtre1" class="item-label">
                            Défaut
                        </label>
                    </li>
                    <li class="filter-item">
                        <input type="radio" class="item-input" value="1" name="filtre" id="filtre2">
                        <label for="filtre2" class="item-label">
                            Validés
                        </label>
                    </li>
                    <li class="filter-item">
                        <input type="radio" class="item-input" value="1" name="filtre" id="filtre3">
                        <label for="filtre3" class="item-label">
                            Rejetés
                        </label>
                    </li>
                    <li class="filter-item">
                        <input type="radio" class="item-input" value="1" name="filtre" id="filtre4">
                        <label for="filtre4" class="item-label">
                            Attente
                        </label>
                    </li>
                </ul>
            </div>
            <a href="{{ route('projet.create') }}" class="btn btn-orange btn-fill btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                </svg>
                Nouveau projet
            </a>
        </div>
        <div class="card-grid">
            @if (!empty($projets))
                @foreach ($projets as $projet)
                <div class="small-card boxed">
                    <div class="wrapper">
                        <div>
                            <h3>{{ $projet->nomStartup }}</h3>
                        </div>
                        <p>{{ Str::limit($projet->description, 30) }}</p>
                    </div>
                    <div class="wrapper">
                        <div>
                            <a href="{{route('showProjet',$projet->id)}}" class="link-text-orange">
                                Détails
                            </a>
                            <a href="{{route('projet.edit', $projet->id)}}" class="link-text">
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
                    <div class="">
                        <a href="investir.html" class="btn btn-fill btn-icon btn-red">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM128 416H64V352c35.3 0 64 28.7 64 64zM64 224V160h64c0 35.3-28.7 64-64 64zM448 352c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM384 256c0 61.9-43 112-96 112s-96-50.1-96-112s43-112 96-112s96 50.1 96 112zM252 208c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z"/>
                            </svg>
                            0 Investisseurs
                        </a>
                    </div>
                </div>
                @endforeach
            @else
            <p class="small-text">Vous n'avez pas encore de projet. <a href="{{ route('projet.create') }}">ajoutez-en</a></p>
            @endif
        </div>
        
        @if(isset($projets) && !empty($projets))
        {{ $projets->links('vendor.pagination.custom') }}
        @endif
    </div>
</div>
@include('Projet.footer')