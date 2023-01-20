@extends('layouts.app')

@section('content')

<div class="l-main sidebar-right">
    <div class="sidebar"></div>
    <div class="main-content">
        <div class="title-section two-section">
            <div class="title-section-1">
                <h1>Mon Compte</h1>
                <h2>Configuration</h2>
            </div>
            <div class="title-section-2">
                <div></div>
                <div class="">
                    <button class="btn">Soumettre un projet</button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20" width="18">
                        <path fill="#1081C5" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20" width="18">
                        <path fill="#1081C5" d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="wrapper wrapper-two-column">
                <div class="card card-style-2">
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employeurs.store') }}" method="POST">
                         @csrf

                            <div class="form-group">
                                <label for="nom" class="form-label">Entreprise</label>
                                <input type="text" name="nom" value="{{ $user->name }}" class="form-input input-style-profil">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-input input-style-profil">
                            </div>
                            <div class="form-group">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" name="adress" class="form-input input-style-profil">
                            </div>
                            <div class="form-group">
                                <label for="tel" class="form-label">Telephone</label>
                                <input type="text" name="tel" class="form-input input-style-profil">
                            </div>
                            <div class="form-group">
                                <label for="activite" class="form-label">Domaine Dactivité</label>
                                <input type="text" name="activite" class="form-input input-style-profil">
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="" class="form-input text-area input-style-profil"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="reset" class="btn" value="Annuler">
                                <input type="submit" class="btn btn-fill" value="Enregistrer">
                            </div>
                    </div>
                </div>
                <div class="card card-style-profil">
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                        <div class="card-photo">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="210" width="100">
                                <path fill="#164687" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                            </svg>
                        </div>
                        <div class="card-buttons">

                                <input type="file" name="photo" id="profil-photo" class="input-style-file btn">
                                <button class="btn btn-fill btn-file">Charger</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="l-footer">
    <div class="footer-left">
        <ul class="menu-footer">
            <li class="menu-footer-item"> copyright &copy; 2022, AcademiePlus.</li>
            <li class="menu-footer-item">Politique de confidentialité</li>
            <li class="menu-footer-item">Sécurité</li>
        </ul>
    </div>
    <div class="footer-right">
        <ul class="socials-icons">
            <li class="social-icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                    <path fill="#0009" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                </svg>
            </li>
            <li class="social-icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30" width="28">
                    <path fill="#0009" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                </svg>
            </li>
            <li class="social-icon-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="28">
                    <path fill="#0009" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                </svg>
            </li>
        </ul>
    </div>
</footer>



@endsection
