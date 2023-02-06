@extends('layouts.dashboard_Employeur')

@section('content')
<div class="main-content dashboard-emploi">
            <div class="toggle" onclick="toggleMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                </svg>
            </div>
            <h1>Accueil-Dashboard</h1>
            <div class="cartes">
                <div class="carte style-1">
                    <div class="card-content">
                        <div class="card-number">313</div>
                        <div class="card-name">Offres</div>
                    </div>
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="42" height="44">
                            <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/>
                        </svg>
                    </div>
                </div>
                <div class="carte style-2">
                    <div class="card-content">
                        <div class="card-number">511</div>
                        <div class="card-name">Candidats</div>
                    </div>
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="42" height="44">
                            <path d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                        </svg>
                    </div>
                </div>
                <div class="carte style-3">
                    <div class="card-content">
                        <div class="card-number">83</div>
                        <div class="card-name">Recrutés</div>
                    </div>
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="42" height="44">
                            <path d="M144 160c-44.2 0-80-35.8-80-80S99.8 0 144 0s80 35.8 80 80s-35.8 80-80 80zm368 0c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM416 224c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                        </svg>
                    </div>
                </div>
                <div class="carte style-4">
                    <div class="card-content">
                        <div class="card-number">708</div>
                        <div class="card-name">Messages</div>
                    </div>
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="42" height="44">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h4>Offres publiées (6 derniers mois)</h4>
                    <canvas id="lineChart"></canvas>
                </div>
                <div class="chart">
                    <h4>Candidatures reçues (6 derniers mois)</h4>
                    <canvas id="doughnut"></canvas>
                </div>
            </div>
            <div class="calendars">
                <div class="calcul-offers">
                    <div class="cartes offres">
                        <div class="carte">
                            <div class="card-top style-top-1">
                                <span>Offre Nº12: Assistant Marketing</span>
                            </div>
                            <div class="card-content">
                                <div>
                                    <div class="card-name">Consultés</div>
                                    <div class="card-number">313<span>fois</span></div>
                                </div>
                                <div>
                                    <div class="card-name">Candidatures</div>
                                    <div class="card-number">201</div>
                                </div>
                            </div>
                            <div class="date-limite">Date limite: 10 Janvier 2023</div>

                        </div>
                        <div class="carte">
                            <div class="card-top style-top-2">
                                <span>Offre Nº12: Assistant Marketing</span>
                            </div>
                            <div class="card-content">
                                <div>
                                    <div class="card-name">Consultés</div>
                                    <div class="card-number">313<span>fois</span></div>
                                </div>
                                <div>
                                    <div class="card-name">Candidatures</div>
                                    <div class="card-number">201</div>
                                </div>
                            </div>
                            <div class="date-limite">Date limite: 10 Janvier 2023</div>

                        </div>
                        <div class="carte">
                            <div class="card-top style-top-3">
                                <span>Offre Nº12: Assistant Marketing</span>
                            </div>
                            <div class="card-content">
                                <div>
                                    <div class="card-name">Consultés</div>
                                    <div class="card-number">313<span>fois</span></div>
                                </div>
                                <div>
                                    <div class="card-name">Candidatures</div>
                                    <div class="card-number">201</div>
                                </div>
                            </div>
                            <div class="date-limite">Date limite: 10 Janvier 2023</div>

                        </div>
                        <div class="carte">
                            <div class="card-top style-top-4">
                                <span>Offre Nº12: Assistant Marketing</span>
                            </div>
                            <div class="card-content">
                                <div>
                                    <div class="card-name">Consultés</div>
                                    <div class="card-number">313<span>fois</span></div>
                                </div>
                                <div>
                                    <div class="card-name">Candidatures</div>
                                    <div class="card-number">201</div>
                                </div>
                            </div>
                            <div class="date-limite">Date limite: 10 Janvier 2023</div>

                        </div>
                    </div>
                </div>
                <div class="calendar">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <svg id="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="14" height="14">
                                <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                            </svg>
                            <svg id="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="14" height="14">
                                <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                            </svg>
                        </div>
                    </header>
                    <div class="content-calendar">
                        <ul class="weeks">
                            <li>Dim</li>
                            <li>Lun</li>
                            <li>Mar</li>
                            <li>Mer</li>
                            <li>Jeu</li>
                            <li>Ven</li>
                            <li>Sam</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>
            </div>
        </div>
@endsection