@extends('Ecole.Dashbord.Sidebar.navbar')
@section('content')
            <div class="l-header-admin">
                <div class="">
                    <ul class="nav-menu menu-admin">
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">Ecole</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">Emploi</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">Projet</a>
                        </li>
                        <li class="nav-menu-item">
                            <a href="" class="nav-menu-item-link">CV Thèque</a>
                        </li>
                    </ul>
                </div>
                <div class="line-with-logo">
                    <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" srcset="" class="module-media">
                </div>
            </div>
            <div class="main-section">
                <div class="title-section dashboard-title">
                    <div class="title">
                        <h1>Activités</h1>
                        <h2>Les Activités</h2>
                    </div>
                    <div class="title-section-2">
                        <form action="{{route('activite.search') }}" class="search-form">
                            <input type="sumbit" name="q" value="{{ request()->q ??  '' }}" id="" id="" class="input-search search-style-large" placeholder="rechercher un département...">

                        </form>
                    </div>
                    <a href="{{ route('activite.add') }}" class="btn btn-icon">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                        Nouvelle Activité
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
                    @foreach ($activites as $activite)
                    @foreach (auth()->user()->ecole->activites as $activitee)

                    <div class="card card-style-1 card-red">
                        <div class="card-left">
                            <img src="{{url('Activite/'.$activite->Image)}}" alt="" srcset="">
                            {{--  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z"/>
                            </svg>  --}}
                        </div>
                        <div class="card-details">
                            <div>
                                <h1>{{ $activitee->nomActivite }}</h1>
                                <span class="small-text">{{ $activitee->descriptionActivite }}</span>
                            </div>
                        </div>
                        <div class="card-buttons">
                            <a href="{{ route('show.activite',$activitee->id) }}" class="icon">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/></svg>
                            </a>
                            <a href="{{ route('delete.activite',$activite->id) }}" class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>



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



