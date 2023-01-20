@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>Départements</h1>
                <h2>Les Départements</h2>
            </div>
            <div class="title-section-2">
                <form action="{{route('departement.search') }}" class="search-form">
                    <input type="sumbit" name="q" value="{{ request()->q ??  '' }}" id="" id="" class="input-search search-style-large" placeholder="rechercher un département...">

                </form>
            </div>
            <a href="{{ route('departement.add') }}" class="btn btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                Nouveau Département
            </a>
        </div>
        <div class="filter filter-right">
            <div class="label-filter" id="filtre">
                <span>Filtrer...</span>
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg>
            </div>
            <ul id="" class="filter-options disabled">
                <li class="filter-item">
                    <input type="radio" class="item-input" value="1" name="filtre" id="filtre2">
                    <label for="filtre2" class="item-label">
                        Recents
                    </label>
                </li>
                <li class="filter-item">
                    <input type="radio" class="item-input" value="1" name="filtre" id="filtre3">
                    <label for="filtre3" class="item-label">
                        Recents
                    </label>
                </li>
                <li class="filter-item">
                    <input type="radio" class="item-input" value="1" name="filtre" id="filtre4">
                    <label for="filtre4" class="item-label">
                        Recents
                    </label>
                </li>
            </ul>
        </div>


        <div class="wrapper">
            @foreach ($departements as $departement)

            @foreach (auth()->user()->ecole->departements as $departement)


            <div class="card card-style-1 card-red">
                <div class="card-left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                    </svg>
                    <h4>Annexe A</h4>
                </div>
                <div class="card-details">
                    <div>
                        <h1>{{ $departement->nomDepartement }}</h1>
                        <span class="icon">
                            {{ $departement->descriptionDepartement }}
                        </span>
                    </div>
                    <span class="icon-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                        </svg>
                    </span>
                </div>
                <div class="card-buttons">
                    <a href="{{ route('show.departement',$departement->id) }}" class="icon">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/></svg>
                    </a>
                    <a class="icon">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </a>
                </div>
            </div>
            <div class="card-down-details disabled">
                <div class="wrapper">
                    <h3>Les filières du département 1</h3>
                </div>
                <form action="" method="post">
                    <div class="details">
                        <div class="form-group detail-item">
                            <label class="toggler-wrapper style-1">
                                <input type="checkbox" name="filiere1" checked>
                                <div class="toggler-slider">
                                <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <div class="badge">Informatique</div>
                        </div>
                        <div class="form-group detail-item">
                            <label class="toggler-wrapper style-1">
                                <input type="checkbox" name="filiere" checked>
                                <div class="toggler-slider">
                                <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <div class="badge">Gestion</div>
                        </div>
                        <div class="form-group detail-item">
                            <label class="toggler-wrapper style-1">
                                <input type="checkbox" name="grande-section" checked>
                                <div class="toggler-slider">
                                <div class="toggler-knob"></div>
                                </div>
                            </label>
                            <div class="badge">Multimedia</div>
                        </div>
                    </div>
                    <button class="btn btn-fill">Mettre à jour</button>
                </form>
            </div>
            @endforeach
            @endforeach
        {{--  <div class="wrapper">
            <nav>
                <ul class="pager">
                <li class="pager-item pager-item-prev"><a class="pager-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                        <g fill="none" fill-rule="evenodd">
                        <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                        </g>
                    </svg></a>
                </li>
                <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                <li class="pager-item active"><a class="pager-link" href="#">3</a></li>
                <li class="pager-item"><a class="pager-link" href="#">4</a></li>
                <li class="pager-item"><a class="pager-link" href="#">5</a></li>
                <li class="pager-item"><a class="pager-link" href="#">6</a></li>
                <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                <li class="pager-item pager-item-next"><a class="pager-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                        <g fill="none" fill-rule="evenodd">
                        <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                        </g>
                    </svg></a>
                </li>
                </ul>
            </nav>
        </div>  --}}
    </div>
@endsection

