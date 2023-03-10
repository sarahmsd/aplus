@extends ('layouts.admin.sidebar')
@section('content')
<div class="main-content dashboard-emploi">
    <div>
        @if (session('message'))
            <div id="alert-success">
                {{ session('message') }}
            </div>
        @endif
    
        @if (session('error'))
            <div id="alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="toggle" onclick="toggleMenu();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
        </svg>
    </div>
    <div class="entete-main-dashboard">
        <div class="entete-left">
            <h1>Liste des utilisateurs</h1>
        </div>
        <div class="entete-right">
            <a href="{{  route('admin.newuser') }}" class="button-add">
                <span> Ajouter un nouvel utilisateur</span>
            </a>
        </div>
    </div>
            <div class="wrapper">
                <div>
                    <div class="header-table">
                        <div class="header-table-left">
                            <form action="" method="post" class="search-form input-search-1">
                                <input type="text" name="search" id="" class="input-search search-style-large input-search-1" placeholder="Rechercher un utilisateur...">
                            </form>
                        </div>
                        <div class="header-table-right">
                            <div class="input-group select-style-simple ">
                                <div class="select-box box-filter">
                                    <div class="options-container">
                                    <div class="option">
                                        <input type="radio" class="radio" id="automobiles" name="category"/>
                                        <label for="informatique">Domaine</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="science" name="category" />
                                        <label for="science">Titre Poste</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="art" name="category" />
                                        <label for="art">Ville</label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" class="radio" id="music" name="category" />
                                        <label for="music">Type Contrat</label>
                                    </div>

                                    </div>
                                    <div class="selected input-text selected-filter">
                                        <span class="selected-item">Trier par...</span>
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
                                        </svg>
                                        <input type="hidden" name="domaine" class="input-for-select">
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <table class="fl-table table-style-1">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Profil</th>
                            <th>Cr???? par</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (isset($users) && count($users) > 0)
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ strtolower($user->name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tel }}</td>
                                <td>{{ $user->profil }}</td>
                                <td>{{ $user->creator->name ?? '' }}</td>
                                <td>
                                    <div class="actions-icons">
                                        <a href="{{ route('admin.users.show', $user->id) }}">
                                        <svg  class="icon icon-vue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="27" width="25">
                                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/>
                                        </svg>
                                        </a>
                                        <a href="{{ route('admin.users.edit', $user->id) }}">
                                            <svg class="icon icon-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="27" width="25">
                                                <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.users.delete', $user->id) }}" onclick="return confirm('Confirmer la supprsion de cet utilisateur?')">
                                            <svg class="icon icon-vue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        <tbody>
                    </table>
                </div>
            </div>
            <div class="title-section two-section">
                <div class="title-section-1">
                    <div class="card-btn">
                        <button class="btn btn-small btn-left-1">Afficher toutes mes offres demploi</button>
                    </div>
                </div>
                <div class="title-section-2">
                    <div class="pagination">
                        <button class="btnPage1" onclick="backBtn()">Pr??c??dent</button>
                        <ul>
                            <li class="link active" value="one" onclick="activeLink()">1</li>
                            <li class="link" value="2" onclick="activeLink()">2</li>
                            <li class="link" value="3" onclick="activeLink()">3</li>
                        </ul>
                        <button class="btnPage2" onclick="nextBtn()">Suivant</button>
                      </div>
                    </div>
                </div>
            </div>
            <script>
                function showMessage() {
                    var message = document.getElementById("alert-success");
                    message.style.opacity = 1;
                    setTimeout(function() {
                    message.style.opacity = 0;
                    }, 5000);
                }
                showMessage();
            </script>
            <script>
                function showMessage() {
                    var message = document.getElementById("alert-danger");
                    message.style.opacity = 1;
                    setTimeout(function() {
                    message.style.opacity = 0;
                    }, 5000);
                }
                showMessage();
            </script>



    </div>

@endsection