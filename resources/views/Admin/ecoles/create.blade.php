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
            <h1>Nouvel Utilisateur</h1>
        </div>
    </div>
    <div class="wrapper">
        <form action="{{ route('save.ecole') }}" method="post" class="form-input">
            @csrf
            <div  class="step-1" id="step-1">
                <div class="wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="form-group">
                            <label for="ecole" class="form-label">Ecole</label>
                            <input type="text" name="ecole" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="sigle" class="form-label">Sigle</label>
                            <input type="text" name="sigle" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" name="adresse" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" name="telephone" class="form-input input-style-2">
                        </div>
                    </div>
                    <div class="card card-style-2 boxed">
                        <div class="form-group">
                            <label for="siteWeb" class="form-label">Site Web</label>
                            <input type="text" name="siteWeb" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" name="linkedin" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-input input-style-2">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-input text-area input-style-2"></textarea>
                        </div>
                        {{--  <input type="button" class="btn btn-fill btn-red" value="Annuler">
                        <input type="submit" class="btn btn-fill" value="Enregistrer">  --}}
                    </div>
                </div>

                <input type="button" class="next btn btn-fill" value="Suivant" id="">
            </div>
            <div class="step-2 disabled" id="step-2">
                <div class="wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel est votre type d établissement?</h2>
                            </div>
                        </div>
                        <div class="wrapper wrapper-two-columns">
                            <div class="form-radio">
                                <input type="radio" id="customRadio1" name="etablissement" value="public" class="radio-input">
                                <label class="radio-label" for="customRadio1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Public</div>
                                </label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" id="customRadio2" name="etablissement" value="prive" class="radio-input">
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
                <button type="button" class="prev btn">Retour</button>
                <input type="button" class="next btn btn-fill" value="Suivant" id="">
            </div>
            <div class="step-3 disabled" id="step-3">
                <div class="wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel est votre système éducatif?</h2>
                            </div>
                        </div>
                        <div class="wrapper wrapper-flex">
                            <div class="form-radio se">
                                <input type="radio" id="se-1" name="systemeEducatif_id" value="1" class="radio-input">
                                <label class="radio-label" for="se-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Français</div>
                                </label>
                            </div>
                            <div class="form-radio se">
                                <input type="radio" id="se-2" name="systemeEducatif_id" value="2" class="radio-input">
                                <label class="radio-label" for="se-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-radio" viewBox="0 0 512 512">
                                        <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8.1-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zm128-96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    <div class="text">Anglais US</div>
                                </label>
                            </div>
                            <div class="form-radio se">
                                <input type="radio" id="se-3" name="systemeEducatif_id" value="3" class="radio-input">
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
            <div class="step-4 disabled" id="step-4">
                <div class="wrapper wrapper wrapper-two-column">
                    <div class="card card-style-2 boxed">
                        <div class="title-section dashboard-title">
                            <div class="title">
                                <h2>Quel sont vos enseignements?</h2>
                                <span class="small-text">Plusieurs choix sont possible</span>
                            </div>
                        </div>
                        @foreach ($systemeEducatifs as $se)
                        <div class="disabled" id="{{$se->id}}">
                            <div class="wrapper wrapper-flex">
                                @foreach ($se->enseignements as $enseignement)
                                <div class="form-radio ens">
                                    <input type="checkbox" id="e-{{$enseignement->id}}" name="enseignement[]" value="{{$enseignement->id}}" class="radio-input">
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
                        <div class="e-{{$enseignement->id}} cycle disabled">
                            <div class="wrapper">
                                <h3>Les cycles de {{$enseignement->enseignement}}</h3>
                            </div>
                            <div class="wrapper wrapper-flex">
                                @foreach ($enseignement->cycles as $cycle)
                                <div class="form-group">
                                    <label class="toggler-wrapper style-1">
                                        <input type="checkbox" name="cycle[]" value="{{$cycle->id}}">
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
                <input type="submit" class="btn btn-fill" value="Enregistrer" id="">
            </div>
        </form>
    </div>
    <script src="{{ asset('js/multi-step-form.js') }}"></script>
    <script>
        let se = document.querySelectorAll(".se");
        let cycles = document.querySelectorAll(".cycle");
        let enseignements = document.querySelectorAll(".ens")
        se.forEach(e => {
            let id = e.firstElementChild.value;
            e.firstElementChild.addEventListener("click", function(){
                document.getElementById("1").classList.add("disabled");
                document.getElementById("2").classList.add("disabled");
                document.getElementById("3").classList.add("disabled");
                cycles.forEach(c => {
                    if(!(c.classList.contains("disabled"))){
                        c.classList.add("disabled");
                    }
                    let inputs = c.getElementsByTagName("input");
                    let inputsList = Array.prototype.slice.call(inputs);
                    inputsList.forEach(i => {
                        i.checked = false;
                    });
                });
                enseignements.forEach(ens => {
                    ens.firstElementChild.checked = false;
                });
                if(e.firstElementChild.checked === true){
                    document.getElementById(id).classList.remove("disabled");
                }
            });
        });

        enseignements.forEach(ens => {
            let id = ens.firstElementChild.id;
            ens.firstElementChild.addEventListener("click", function(){
                if(ens.firstElementChild.checked === true){
                    document.querySelector("."+id).classList.remove("disabled");
                    console.log(ens.firstElementChild.checked);
                }else{
                    document.querySelector("."+id).classList.add("disabled");
                }
            });
        });
    </script>
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
@endsection