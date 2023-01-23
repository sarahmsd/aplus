@extends('layouts.app')

@section('content')

<div class="card">
<div class="row">
    <div class="col-3">
       <img src=" images/{{ $candidat->photo }} " class="w-25 h-25" alt="">
    </div>

</div>
</div>

@include('Cvs.show');
@endsection
