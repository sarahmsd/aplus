
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>
<body>


@if(isset($cv))

<div class="row mt-3 w-100">
<div class="col-5 px-2 " style="background-color:  #517EBC;">
    <div>
        <img src=" {{ $src }} " class="mb-2 mx-5" style="width: 90px; height: 90px; border-radius: 50%; border: 1px solid black" alt="">
    </div>
<div class="card mb-4 ms-3" style="width: 18rem;">
    <div class="card-header">
      Coordonnées
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Adress: {{ $candidat->adress }}</li>
      <li class="list-group-item">Email: {{ $candidat->email }}</li>
      <li class="list-group-item">{{ $candidat->tel }}</li>

    </ul>
  </div>

  <div class="card mb-4 mx-3" style="width: 18rem;">
    <div class="card-header">
      Specialités
    </div>
    <ul class="list-group list-group-flush">

    @foreach ($cv->specialites as $specialite )
    <li class="list-group-item">{{ $specialite->nom }}</li>

    @endforeach
    </ul>

  </div>

  <div class="card mb-2 mx-3" style="width: 18rem;">
    <div class="card-header">
      Langues
    </div>
    <ul class="list-group list-group-flush">

        @foreach ($cv->langues as $langue )
        <li class="list-group-item">{{ $langue->nom }}: {{ $langue->niveau }}</li>

        @endforeach

    </ul>
  </div>


</div>

<div class="col-7">
 <h2 class="">{{ $candidat->nom }}  {{ $candidat->prenom }} </h2>
 <h4>{{ $cv->postRecherche }}</h4>

 <h5>Formations</h5>

 <ul class="list-group list-group-numbered">

    @if(!is_null($formation) )
    @foreach ($formation as $form )

    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $form->nom }}</div>
        <h6>{{ $form->dateDebut}} - {{ $form->dateFin }}| {{ $form->etablissement }} à {{ $form->lieu }}</h6>
        <p>{{ $form->description }}</p>
        </div>
      </li>

    @endforeach
    @endif

  </ul>

  <h5>Experience</h5>

  <ul class="list-group list-group-numbered">

     @if(!is_null($experience) )
     @foreach ($experience as $exp )

     <li class="list-group-item d-flex justify-content-between align-items-start">
         <div class="ms-2 me-auto">
           <div class="fw-bold">{{ $exp->nom }}</div>
         <h6>{{ $exp->dateDebut }} - {{ $exp->dateFin }}| {{ $exp->entreprise }} à {{ $exp->lieu }}</h6>
         <p>{{ $exp->description }}</p>
         </div>
       </li>

     @endforeach
     @endif

   </ul>

   <h5>Loisirs</h5>

   <ul class="list-group list-group-numbered">

      @if(!is_null($divers) )
      @foreach ($divers as $diver )

      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $diver->nom }}</div>
          </div>
        </li>

      @endforeach
      @endif

    </ul>


</div>

</div>

@else
  <h3>Vous navez pas de cv</h3>
@endif


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>



