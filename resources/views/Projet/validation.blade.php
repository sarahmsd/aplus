
 @foreach ($projets as $projet)
 <form action="{{ route('validation', [$projet->id]) }}" method="post">
    @csrf
    <li>{{ $projet->nomStartup }}

        <button><a href="{{ route('showProjet', [$projet->id]) }}">consulter le projet</a></button>

        <button type="submit">Valider</button>
        </form>
    </li>


    @endforeach

