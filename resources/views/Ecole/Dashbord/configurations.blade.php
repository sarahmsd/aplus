@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>{{auth()->user()->name}}</h1>
                <h2>Configuration</h2>
            </div>
            <a href="{{ route('getprofil', auth()->user()->id) }}" class="btn btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
                Mon Profil
            </a>
        </div>
        <form action="{{ route('update.ecole') }}" method="post" class="form-input">
            @csrf
            <div class="step-1" id="step-1">
                <div class="wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel est votre type d établissement?</h2>
                            </div>
                        </div>
                        <div class="wrapper wrapper-two-columns">
                            <div class="form-radio">
                                <input type="radio" id="customRadio1" name="etablissement" value="public" class="radio-input" {{ isset($ecole->etablissement) && $ecole->etablissement == 'public' ? 'checked' : '' }}>
                                <label class="radio-label" for="customRadio1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Public</div>
                                </label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" id="customRadio2" name="etablissement" value="prive" class="radio-input" {{ isset($ecole->etablissement) && $ecole->etablissement == 'prive' ? 'checked' : '' }}>
                                <label class="radio-label" for="customRadio2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Privé</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card card-for-icon">
                        <img class="small-media" src="../../public/images/Hero-formation.jpeg" alt="" srcset="">
                    </div>
                </div>
                <input type="button" class="next btn btn-fill" value="Suivant" id="">
            </div>
            <div class="step-2 disabled" id="step-2">
                <div class="wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel est votre système éducatif?</h2>
                            </div>
                        </div>
                        <div class="wrapper wrapper-flex">
                            <div class="form-radio se">
                                <input type="radio" id="se-1" name="systemeEducatif_id" value="1" class="radio-input" {{ isset($ecole->systemeEducatif_id) && $ecole->systemeEducatif_id == '1' ? 'checked' : '' }}>
                                <label class="radio-label" for="se-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Français</div>
                                </label>
                            </div>
                            <div class="form-radio se">
                                <input type="radio" id="se-2" name="systemeEducatif_id" value="2" class="radio-input" {{ isset($ecole->systemeEducatif_id) && $ecole->systemeEducatif_id == '2' ? 'checked' : '' }}>
                                <label class="radio-label" for="se-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Anglais US</div>
                                </label>
                            </div>
                            <div class="form-radio se">
                                <input type="radio" id="se-3" name="systemeEducatif_id" value="3" class="radio-input" {{ isset($ecole->systemeEducatif_id) && $ecole->systemeEducatif_id == '3' ? 'checked' : '' }}>
                                <label class="radio-label" for="se-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Anglais UK</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card card-for-icon">
                        <img class="small-media" src="../../public/images/Hero-formation.jpeg" alt="" srcset="">
                    </div>
                </div>
                <button type="button" class="prev btn">Retour</button>
                <input type="button" class="next btn btn-fill" value="Suivant" id="">
            </div>
            <div class="step-3 disabled" id="step-3">
                <div class="wrapper wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel sont vos enseignements?</h2>
                                <span class="small-text">Plusieurs choix sont possible</span>
                            </div>
                        </div>
                        @foreach ($systemeEducatifs as $se)
                        <div class="{{ isset($ecole->systemeEducatif_id) && $ecole->systemeEducatif_id == $se->id ? '' : 'disabled' }}" id="{{$se->id}}">
                            <div class="wrapper wrapper-flex">
                                @foreach ($se->enseignements as $enseignement)
                                <div class="form-radio ens">
                                    <input type="checkbox" id="e-{{$enseignement->id}}" name="enseignement[]" value="{{$enseignement->id}}" class="radio-input"  {{ isset($enseignement->checked) && $enseignement->checked == 1 ? 'checked' : '' }}>
                                    <label class="radio-label" for="e-{{$enseignement->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                            <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                        </svg>
                                        <div class="text">{{$enseignement->enseignement}}</div>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card card-style-2 boxed">
                        @foreach ($systemeEducatifs as $se)
                        @foreach ($se->enseignements as $enseignement)
                        <div class="e-{{$enseignement->id}} cycle {{ isset($enseignement->checked) && $enseignement->checked == 1 ? '' : 'disabled' }}">
                            <div class="wrapper">
                                <h3>Les cycles de {{$enseignement->enseignement}}</h3>
                            </div>
                            <div class="wrapper wrapper-flex">
                                @foreach ($enseignement->cycles as $cycle)
                                <div class="form-group">
                                    <label class="toggler-wrapper style-1">
                                        <input type="checkbox" name="cycle[]" value="{{$cycle->id}}"  {{ isset($cycle->checked) && $cycle->checked == 1 ? 'checked' : '' }}>
                                        <div class="toggler-slider">
                                        <div class="toggler-knob"></div>
                                        </div>
                                    </label>
                                    <div class="badge">{{$cycle->cycle}}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
                <button type="button" class="prev btn">Retour</button>
                <input type="submit" class="btn btn-fill" value="Enregistrer les modifications" id="">
            </div>
        </form>
    </div>
@endsection