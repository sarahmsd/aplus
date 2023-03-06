@include('Projet.navbar');

    <div class="l-main">
        <div class="l-banner banner-two-columns">
            <div class="banner-left">
                <h1>Vous avez une idée de projet?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere excepturi cum commodi neque pariatur quam sunt quisquam, omnis dolores sapiente totam optio doloremque deleniti minus illo, laborum porro odit tenetur.</p>
                <a href="{{ route('projet.create') }}"><button class="btn btn-fill">Soumettre</button></a>
            </div>
            <div class="banner-right">
                <img class="banner-img" src="{{ asset('images/Rectangle 595.png') }}" alt="">
            </div>
        </div>

        <div class="l-startups">
            <div class="wrapper wrapper-two-columns">
                <div class="wrapper-title-section">
                    <h1>Startups créées</h1>
                    <span>Les idées d'aujourd'hui sont les startups de demain</span>
                </div>
                <div class="slider" id="slider">
                    <div class="slide-group three-items" id="slide-group-1">
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">ZenStartup</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">ZenStartup</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">ZenStartup</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;" class="slide-group three-items" id="slide-group-2">
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">MatosBi</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">MatosBi</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                        <div class="box float-animation">
                            <div class="box-title">
                                <img class="startup-logo-img" src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt=""></span>
                                <h1 class="startup-title">MatosBi</h1>
                            </div>
                            <div class="box-content">
                                <h2>Masr 2021</h2>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h2>Aujourd'hui</h2>
                                <p>Lorem ipsum dolor sit amet . </p>
                            </div>
                        </div>
                    </div>
                    <button class="slider-prev-btn" id="prev">&#8810;</button>
                    <button class="slider-next-btn" id="next">&#8811;</button>
                </div>
            </div>
            <div class='wave'>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#f4f9fd" fill-opacity="1" d="M0,96L30,112C60,128,120,160,180,181.3C240,203,300,213,360,213.3C420,213,480,203,540,170.7C600,139,660,85,720,80C780,75,840,117,900,117.3C960,117,1020,75,1080,53.3C1140,32,1200,32,1260,26.7C1320,21,1380,11,1410,5.3L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                </svg>
            </div>
        </div>

        <div class="l-steps">
            <h1>Prêt à vous lancez?</h1>
            <h2 class="sous-titre">Suivez les étapes</span>
            <div class="timeline">
                <div class="timeline-nav">
                    <ul class="timeline-nav-menu">
                        <li class="timeline-nav-item"><a href="#milestone-1">1</a></li>
                        <li class="timeline-nav-item"><a href="#milestone-2">2</a></li>
                        <li class="timeline-nav-item"><a href="#milestone-3">3</a></li>
                    </ul>
                </div>
                <div class="timeline-content">
                    <div class="timeline-wrapper">
                        <div id="milestone-1" class="milestone-content-1">
                            <div class="milestone-content-left">
                                <div class="middle-media float-animation">
                                    <video width="100%" height="100%" autoplay>
                                        <source src="{{ asset('videos/Signin.webm') }}" type="video/ogg">
                                    </video>
                                </div>
                            </div>
                            <div class="milestone-content-right">
                                <h1>Inscrivez vous </h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus neque iste soluta dolorem ipsa nobis deleniti hic veritatis. Ratione sequi voluptatem voluptates harum similique repellat officiis, omnis dolore eligendi obcaecati expedita amet reiciendis voluptatum quia atque eveniet explicabo! Magnam, porro.</p>
                                <button class="btn btn-fill">
                                    Je M inscris
                                </button>
                            </div>
                        </div>
                        <div id="milestone-2" class="milestone-content-2">
                            <div class="milestone-content-left">
                                <h1>Soumettez votre projet</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus neque iste soluta dolorem ipsa nobis deleniti hic veritatis. Ratione sequi voluptatem voluptates harum similique repellat officiis, omnis dolore eligendi obcaecati expedita amet reiciendis voluptatum quia atque eveniet explicabo! Magnam, porro.</p>
                                <button class="btn fill">
                                    Soumettre mon projet
                                </button>
                            </div>
                            <div class="milestone-content-right">
                                <div class="middle-media float-animation" style="margin-left: 40px;">
                                    <video width="100%" height="100%" controls autoplay>
                                        <source src="{{ asset('videos/Signin.webm') }}" type="video/ogg">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div id="milestone-3" class="milestone-content-2">
                            <div class="milestone-content-right">
                                <h1>Nous étudions votre projet</h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat sint blanditiis magni omnis culpa iure ipsum itaque, sit repellat labore perferendis accusamus quas?
                                </p>
                            </div>
                            <div class="milestone-content-left">
                                <img class="small-media" src="{{ asset('images/icon.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-newsletter style-bc">
        <div class="title">
            <h1>Inscrivez vous à la newsletter</h1>
        </div>
        <form action="#" method="post" class="search-form with-icon">
            <input type="text" name="search" id="" class="input-search style-2" placeholder="votre adresse email...">                            
            <button type="submit" class="btn btn-fill btn-orange">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
            </button>
        </form>
    </div>

    @include('Projet.footer')
