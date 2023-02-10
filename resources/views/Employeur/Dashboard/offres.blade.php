@extends ('layouts.dashboard_Employeur')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.bootstrap5.min.css">
<style>
    a {
  text-decoration: none;
}
</style>
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
                    <h1>Offres publiées</h1>
                </div>
                <div class="entete-right">
                    <a href="{{  route('offres.create') }}" class="button-add">
                        <span> Publier une offre</span>
                    </a>
                </div>
            </div>
            <h3>Hello {{$user->name}}, vous avez publié {{$nbre_offre}} offres d'emploi</h3>
            <div class="wrapper">
                <div>
                    

                    <table id="example" class="fl-table table-style-1">
                        <thead>
                        <tr>
                            <th>Titre Poste</th>
                            <th>Domaine</th>
                            <th>Mode Contrat</th>
                            <th>Date Expiration</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (!is_null($offres) && is_countable($offres) && count($offres) > 0)

                            @foreach ($offres as $offre)

                        <tr>
                            <td>{{ $offre->nom }}</td>
                            <td>
                            @foreach (  $offre->domaines as $domaine )
                            {{ $domaine->nom }},
                            @endforeach
                            </td>
                            
                            
                            <td>
                                @foreach (  $offre->contrat_modes as $contratMode )
                                {{ $contratMode->nom }}
                                @endforeach
                            </td>
                            <td>{{ date('d/m/Y', strtotime( $offre->dateLimite )) }}</td>
                            <td>{!! $offre->description !!}</td>
                            <td>
                                <div class="actions-icons">
                                    <a href="{{ route('monOffre', $offre->id) }}">

                                    <svg  class="icon icon-vue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="27" width="25">
                                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z"/>
                                    </svg>
                                    </a>
                                    <a href="{{ route('offres.edit', [$offre->id]) }}">
                                    <svg class="icon icon-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="27" width="25">
                                        <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                    </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        

                        @endforeach
                        @endif

                        <tbody>
                    </table>
                    <div>&nbsp &nbsp &nbsp &nbsp</div>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.1.1/js/searchPanes.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
                }
                }
            } );
            } );

    </script>
@endsection