@extends('layouts.dashboard_Employeur')
@section('content')
<div class="main-content dashboard-emploi">
            <div class="toggle" onclick="toggleMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                </svg>
            </div>
            <div class="entete-main-dashboard">
                <div class="entete-left">
                    <h1>Candidats</h1>
                </div>
                <div class="entete-right">
                    <a href="/modules/emploi/new_offre.html" class="button-add">
                        <span> Publier une offre</span>
                    </a>
                </div>
            </div>

            <div class="offre">

                <div class="offre-left candidature-detail">
                    <div class="entete-offre">
                        <h1 class="form-title">Candidat à l'offre Nº: {{$candidature->offre->id}}
                            / {{$candidature->offre->nom}}</h1>
                    </div>
                    <div class="candidature-content-top">
                        <div class="title-1">
                            <a href="" class="lien-offre">Voir l'offre</a>
                        </div>
                        <div class="title-2">
                            <span class="text">{{ $candidature->offre->contratType->nom }} </span>
                            <span class="bare-vertical">&#124;</span>
                            <span class="text">
                                @foreach (  $candidature->offre->contrat_modes as $contratMode )
                                    {{ $contratMode->nom }}
                                @endforeach
                            </span>
                            <span class="bare-vertical">&#124;</span>
                            <span class="text">
                                @foreach (  $candidature->offre->methode_travails as $methode_travails )
                                    {{ $methode_travails->nom }}
                                @endforeach
                            </span>
                        </div>
                    </div>
                    <div class="candidature-content-bottom">
                        <h3>Informations du candidat</h3>
                        <div class="infos">
                            <div class="left">
                                <span class="text-small">Prénom:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{ $candidature->user->candidat->prenom }}</span>
                            </div>
                        </div>
                        <div class="infos">
                            <div class="left">
                                <span class="text-small">Nom:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{ $candidature->user->candidat->nom }}</span>
                            </div>
                        </div>
                        <div class="infos">
                            <div class="left">
                                <span class="text-small">Email:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{ $candidature->user->email }}</span>
                            </div>
                        </div>
                        <div class="infos">
                            <div class="left">
                                <span class="text-small">Téléphone:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{ $candidature->user->candidat->tel }}</span>
                            </div>
                        </div>
                        <div class="infos">
                            <div class="left">
                                <span class="text-small">Pays:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{ $candidature->user->candidat->adress }}</span>
                            </div>
                        </div>

                        <div class="infos">
                            <div class="left">
                                <span class="text-small">LinkedIn:</span>
                            </div>
                            <div class="right">
                                <span class="text-big">{{$candidature->linkedin}}</span>
                            </div>
                        </div>
                        <div class="infos message-candidat">
                            <div class="left">
                                <span class="text-small">Message:</span>
                            </div>
                            <div class="right">
                                <p class="message">{{$candidature->message}}</p>
                            </div>
                        </div>
                        <span class="date-envoi">Candidature envoyée le: {{$candidature->created_at}}</span>
                    </div>
                    <div class="btnOffre">
                        <div class="form-reset-btn">
                            <input type="reset" value="Retirer">
                        </div>
                        <div class="form-submit-btn">
                            <input type="submit" value="Contacter">
                        </div>
                        <div class="form-submit-btn">
                            @if($candidature->valider == 1)
                                <span class="btn btn-green">Déjà Validée</span>
                            @elseif($candidature->valider == 0)
                                <span class="btn btn-red">Déjà Refusée</span>
                            @else
                                <a href="{{ route('candidature.valider', $candidature->id) }}">
                                    <button class="btn btn-green" onclick="return confirm('Êtes-vous sûr de vouloir accepter cette candiature?')">Accepter</button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="offre-right candidature-detail">
                    <div class="telechargement">
                    <iframe height="400"  width="400" src="/assets/{{$candidature->cv}}"></iframe>
                        <a class="lien-download" href="../../public/images/CV-Assistant-Comptable-1.pdf"
                        download="CV-Candidat.pdf">
                        <span>Télécharger</span>
                        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="15" height="15">
                            <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/>
                        </svg>
                        </a>
                    </div>

                    <form action="{{ route('candidature.refuser') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="id" hidden value="{{ $candidature->id }}">
                            <label for="motif" class="form-label">Motif de refus</label>
                            <textarea class="form-input" name="motif" id="" cols="30" rows="10" placeholder="Motif de refus"></textarea>
                        </div>
                        <button class="btn btn-red" type="submit" onclick="return confirm('Etes vous sur de vouloir refuser cette candidature')">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection