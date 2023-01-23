@extends('layouts.app')


@section('content')

<div class="card">
<div class="card-body">
 <h5 class="text-bold">Context:</h5>
 <p>{{ $description->context }}</p>
 <h5 class="text-bold">Mission:</h5>
 <p>{{ $description->mission }}</p>
 <h5 class="text-bold">Qualifications:</h5>
 <p>{{ $description->qualifications }}</p>
 <h5 class="text-bold">Niveau d'experience:</h5>
 <p>{{ $description->niveauExperience }}</p>
 <h5 class="text-bold">Niveau d'etude:</h5>
 <p>{{ $description->niveauEtude }}</p>

</div>
</div>

@endsection
