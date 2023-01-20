<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/mimi.css') }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>
<div class="body"><div class="container">
    <div class="left-side">
     <div class="profilText">
        <div class="imgBx">
            <img src="{{ URL::asset('images/profil.png') }}" alt="">
        </div>
        <h2 id="nomC1">Nadi YourQueen</h2>
        <h2><span id="Post1">Web developer</span></h2>
      </div>
     <div class="contactInfo">
        <h3 class="title">Contacts</h3>
        <ul>
            <li>
                <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <span class="text" id="ContC1">+221 78 462 54 46</span>
            </li>
            <li>
                <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <span class="text" id="mailM1">ndamala91@gmail.com</span>
            </li>
            <li>
                <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                <span class="text">linkedin.com</span>
            </li>
            <li>
                <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                <span class="text" id="adressA1">Medina rue 31 angle 18</span>
            </li>

        </ul>
     </div>

     <div class="contactInfo education">
        <h3 class="title">Formations</h3>
        <ul>
            <li>
              <h5 id="df1">2019-2021</h5>
              <h4 id="f1">Master en Informatique </h4>
              <h4 id="etf1">Ecole </h4>
            </li>

            <li>
                <h5>2016-2019</h5>
                <h4>Licence en Informatique </h4>
                <h4>Ecole </h4>
              </li>

              <li>
                <h5>2015-2016</h5>
                <h4>Bac C </h4>
                <h4>Ecole </h4>
              </li>

        </ul>
     </div>

     <div class="contactInfo langue">
        <h3 class="title">Langues</h3>
        <ul>
            <li>
                <span class="text">Français</span>
                <span class="pourcentage">
                    <div style="width: 90%"></div>
                </span>
            </li>
            <li>
                <span class="text">Anglais</span>
                <span class="pourcentage">
                    <div style="width: 50%"></div>
                </span>
            </li>

        </ul>
     </div>

    </div>
    <div class="right-side">
        <div class="a_propos">
            <h2 class="titre2">Profil</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quibusdam autem quisquam sequi! Exercitationem perferendis voluptatem excepturi itaque ea incidunt laudantium veniam aliquam. Repellendus, magni laudantium iste aliquam fugiat maxime.</p>
        </div>

        <div class="a_propos">
            <h2 class="titre2">Experiences</h2>
            <div class="box">
                <div class="duree">
                    <h5>2022-Present</h5>
                    <h5>Entreprise</h5>
                </div>
            <div class="text">
                <h4>Stagiaire en Developpement Web</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi cumque quis architecto veritatis dolorum itaque, nam dicta animi corporis exercitationem nihil quae, neque aspernatur laboriosam tenetur.</p>
            </div>
            </div>

            <div class="box">
                <div class="duree">
                    <h5>2020-2021</h5>
                    <h5>Entreprise</h5>
                </div>
            <div class="text">
                <h4>Stagiaire en Developpement Web</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi cumque quis architecto veritatis dolorum itaque, nam dicta animi corporis exercitationem nihil quae, neque aspernatur laboriosam tenetur.</p>
            </div>
            </div>

            <div class="box">
                <div class="duree">
                    <h5>2019-2020</h5>
                    <h5>Entreprise</h5>
                </div>
            <div class="text">
                <h4>Stagiaire en Developpement Web</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi cumque quis architecto veritatis dolorum itaque, nam dicta animi corporis exercitationem nihil quae, neque aspernatur laboriosam tenetur.</p>
            </div>
            </div>

        </div>

        <div class="a_propos competences">
            <h2 class="titre2">Competences</h2>
            <div class="box">
                <h4>Html</h4>
                <div class="pourcentage">
                    <div style="width: 90%"></div>
                </div>
            </div>
            <div class="box">
                <h4>Css</h4>
                <div class="pourcentage">
                    <div style="width: 70%"></div>
                </div>
            </div>
            <div class="box">
                <h4>Php</h4>
                <div class="pourcentage">
                    <div style="width: 50%"></div>
            </div>
            </div>
            <div class="box">
                <h4>Laravel</h4>
                <div class="pourcentage">
                    <div style="width: 30%"></div>
                </div>
            </div>
        </div>

        <div class="a_propos loisirs">
            <h2 class="titre2">Loisirs</h2>
            <ul>
                <li><i class="fa fa-microphone" aria-hidden="true"></i> Music</li>
                <li><i class="fa fa-child" aria-hidden="true"></i> Dance</li>
                <li><i class="fa fa-book" aria-hidden="true"></i> Lecture</li>
            </ul>
        </div>

    </div>
</div>
</div>
</body>
</html>
