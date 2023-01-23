@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 w-50">
            <div class="card">
                <div class="card-header bg-primary text-light text-center"><h3>{{ __('Login') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sso.login') }}">
                        @csrf



                    </form>
                </div>
                <div class="ms-5 mt-4">Vous n'avez pas de compte? <a href="{{ route('register') }}" >Enregistrez-vous</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
