@extends('Ecole.Dashbord.Sidebar.navbar', ['sigle' => auth()->user()->name])
@section('content')
    <div class="main-section">
        <div class="title-section dashboard-title">
            <div class="title">
                <h1>{{$ecole->sigle}}</h1>
                <h2>Profil</h2>
            </div>
            <a href="configurations.html" class="btn btn-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.7 8.4 166.9 8 160 8s-13.7 .4-20.4 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM208 176c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 400c-26.5 0-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48z"/>
                </svg>
                Configurations
            </a>
        </div>
        <div class="card-grid">
            <div>
                <div class="small-card boxed">
                    <H3>Changer votre photo de couverture</H3>
                    <img src="{{ $cover != null ? asset('storage/images/' . $cover->media) : '' }}" alt="photo de couverture" class="xsmall-media">
                    @if ($cover)
                        <a href="{{ route('medias.delete', $cover->id) }}">Supprimer</a>
                    @endif
                    <form action="{{ route('profilEcole/cover', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="file" name="cover" id="">
                        <input type="submit" value="Modifier" class="btn btn-fill btn-small">
                    </form>
                </div>
                <div class="small-card boxed">
                    <H3>Changer votre logo</H3>
                    <img src="{{ $logo != null ? asset('storage/images/' . $logo->media) : ''}}" alt="photo de couverture" class="xsmall-media">
                    @if ($logo)
                        <a href="{{ route('medias.delete', $logo->id) }}">Supprimer</a>
                    @endif
                    <form action="{{ route('profilEcole/logo', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="file" name="logo" id="">
                        <input type="submit" value="Modifier" class="btn btn-fill btn-small">
                    </form>
                </div>
            </div>
            <div class="small-card boxed">
                <H2>Modifier le mot de passe</H2>
                <form action="{{ route('profilEcole/password', auth()->user()->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="password" name="oldpassword" class="form-input input-style-2" placeholder="mot de paase actuel">
                    </div>
                    <div class="form-group">
                        <input type="password" name="newpassword" class="form-input input-style-2" placeholder="nouveau mot de passe">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmpassword" class="form-input input-style-2" placeholder="confirmation nouveau mot de passe">
                    </div>
                    <input type="submit" value="Mettre à jour" class="btn btn-fill">
                </form>
            </div>
        </div>
        <div class="card-grid">
            <form action="{{ route('profilEcole', auth()->user()->id) }}" class="form-input wrapper wrapper-two-column" method="post">
                @csrf
                <div class="card card-style-2 boxed">
                    <div class="form-group">
                        <label for="ecole" class="form-label">Ecole</label>
                        <input type="text" name="ecole" class="form-input input-style-2" value="{{$ecole->ecole}}">
                    </div>
                    <div class="form-group">
                        <label for="sigle" class="form-label">Sigle</label>
                        <input type="text" name="sigle" class="form-input input-style-2" value="{{$ecole->sigle}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-input input-style-2" value="{{$ecole->email}}">
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" class="form-input input-style-2" value="{{$ecole->adresse}}">
                    </div>
                </div>
                <div class="card card-style-2 boxed">
                    <div class="form-group">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-input input-style-2" value="{{$ecole->telephone}}">
                    </div>
                    <div class="form-group">
                        <label for="siteWeb" class="form-label">Site Web</label>
                        <input type="text" name="siteWeb" class="form-input input-style-2" value="{{$ecole->siteWeb}}">
                    </div>
                    <div class="form-group">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" name="linkedin" class="form-input input-style-2" value="{{$ecole->linkedin}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-input text-area input-style-2">{{$ecole->description}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-fill" value="Mettre à jour">     
                </div>
            </form>
        </div>
        <div class="small-card">
            <H3>Supprimer mon compte</H3>
            <span class="small-text">!!!Pour supprimer votre compte vous devez entrez le nom complet de votre ecole dans le champs ci-dessous</span>
            <form action="{{ route('destroy.ecole') }}" method="post">
                @csrf
                <input type="text" name="ecole" class="form-input input-style-2" placeholder="entrez le nom de votre ecole">
                <input type="submit" class="btn btn-small btn-red btn-fill" value="supprimer">
            </form>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif
@endsection