{{ auth()->user()->name }} <br>
{{ auth()->user()->email }} <br>

{{ auth()->user()->ecole->sigle }} <br>
{{ auth()->user()->ecole->description }} <br>

{{ auth()->user()->ecole->id }}

{{--  @foreach ($enseignements as $enseign)
    <li>{{ $enseign->enseignement }}</li>
@endforeach  --}}

@foreach (auth()->user()->ecole->Ecoleens as $enseignement)
    <h1>{{ $enseignement->enseignement->enseignement}} </h1>


        @foreach ($enseignement->EnsCycles as $cycle)
            @if ($cycle->cycle->enseignement_id == $enseignement->enseignement->id )

            @foreach ($cycles as $cyc)
            @if ($cycle->cycle_id == $cyc->id)
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="{{ $cycle->cycle->id }}" checked>
            <label class="form-check-label" for="inlineCheckbox2">{{ $cycle->cycle->cycle }}</label>


            @endif

            @endforeach


            @endif
        @endforeach

@endforeach

<br><br>
Deprtement <br>
<form action="{{ route('departement.save') }}" method="POST">
    @csrf
<input hidden name="ecole_id" value="{{ auth()->user()->ecole->id }}" type="text" placeholder="ajout departement">
<input name="nomDepartement" type="text" placeholder="ajout departement">
<button type="submit">Ajouter</button>
</form><br>
<hr>
@foreach (auth()->user()->ecole->departements as $departement)

<h4>{{ $departement->nomDepartement }}</h4>
<ul>
@foreach ($departement->filieres as $filiere)
    <li>{{ $filiere->nomFiliere }}</li>
    <ul>
        @foreach ($filiere->accreditations as $accreditation)
                <li>{{ $accreditation->nomAcreditation }}</li>
        @endforeach
    </ul>
@endforeach
</ul>
@endforeach
<br><br>
<hr>
Filere <br>
<form action="{{ route('filiere.save') }}" method="POST">
    @csrf
<select name="departement_id">
  @foreach ($departements as $departement)
<option value="{{ $departement->id }}">{{ $departement->nomDepartement }}</option>

  @endforeach
</select>
<input name="nomFiliere" type="text" placeholder="nom Filiere">
<button type="submit">ajouter</button>
</form>
<br><br>

Acreditation <br>
<form action="{{ route('accreditation.save') }}" method="post">
    @csrf
    <select name="filiere_id" id="">
        @foreach ($departements as $departement)
        @foreach ($departement->filieres as $filiere)
            <option value="{{ $filiere->id }}">{{ $filiere->nomFiliere }}</option>
        @endforeach
        @endforeach
    </select>
    <input name="nomAcreditation" type="text" placeholder="ajout acredidation">
    <button type="submit">ajouter</button>
</form>
<br><br>
