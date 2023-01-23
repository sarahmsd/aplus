@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
    .form-step{
        display: none;
    }
    .form-step-active{
        display: block;
    }
        .btnh:active{
            color: blue;
        }
        .lg{
            height: 40px;
            width: 40px;
        }

        a{
            text-decoration: none;
            color: white;
        }

        .wrapper{

           height: 90vh;
           background-color: rgb(106, 137, 231);
           display: flex;
           flex-direction: row;

        }
        .radio-buttons{
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .custom-radio input{
          //display: none;

        }

        .radio-btn{
            position: relative;
            width: 234px;
            height: 260px;
            border: 4px solid transparent;
            border-radius: 10px;
            cursor: pointer;

        }

        .radio-btn .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .radio-btn .check-icon{
          width: 30px;
          height: 30px;
          background-color: royalblue;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          overflow: hidden;
        }

        .radio-btn .check-icon .icon{
            display: inline-block;
            position: relative;
            width: 18px;
            height: 8px;
            margin-top: -2px;
            transform:rotate(-40deg)
        }

        .radio-btn .check-icon .icon::before{
          content: "";
          width: 3px;
          height: 100%;
          background-color: white;
          position:absolute;
          left: 0;
          bottom: 0;
          border-radius: 10px;
          box-shadow: -2px 0 5px rosybrown;
          transform: scaleY(1);
          transform-origin: top;
          transition:  all 0.2s  ease-in-out;
        }

        .radio-btn .check-icon .icon::after{
            content: "";
            width: 100%;
            height: 3px;
            background-color: white;
            position:absolute;
            left: 0;
            bottom: 0;
            border-radius: 10px;
            box-shadow: 0 3px 5px rosybrown;
            transform: scaleX(1);
            transform-origin: left;
            transition:  all 0.2s  ease-in-out;
          }

          .radio-buttons .input:checked + .radio-btn {
            border: 4px solid rgb(218, 97, 234);
           height: 345px;
           width: 200px;
          }

          .input:checked + .radio-btn .check-icon{
            background-color: rgb(218, 97, 234);
          }


          .custom-radio input:checked + .radio-btn .check-icon .icon::before,
            .custom-radio input:checked + .radio-btn .check-icon .icon::after{
             transform: scale(1)
            }



  </style>




<div class="card mb-3 w-50 h-50" style="margin-left: 300px">
<div class="card-body">
    <form action="{{ route('cvs.update') }}" method="POST" class="form text-secondary">
        @csrf


    <div class="form-step form-step-active" >
        <h3>Choisissez un modèle de cv</h3>
        <div class="row"  style="display: flex; flex-direction:row">
            @if(!is_null($models))
               @foreach ($models as $model)


         <div class="wrapper">
           <div class="radio-buttons">
             <label for="" class="custom-radio">
               <input type="radio" class="input" value="{{ $model->id }}" name="model" id="">
               <div class="radio-btn">
                 <div class="content" style="margin-top: px;">
                       <img style="width: 12rem;" src=" images/{{ $model->photo }}" alt="">
                       <div class="bg-white" style="width: 12rem;" >
                          <h3>{{ $model->nom }}</h3>
                          <span class="check-icon">
                           <span class="icon"></span>
                           </span>
                       </div>
                   </div>
               </div>
             </label>
           </div>
         </div>
         @endforeach
         @endif


         <div class="row mt-3">

         <div class="col-3">
            <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
         </div>
      </div>
    </div>
    </div>


    <div class="form-step " >
        <h4 class="text-secondary my-3">Détails</h4>

         <div class="row">
        <div class="col-6 mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="titre" name="nom" placeholder="" >
          </div>


          <div class=" col-6 mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="" >
          </div>
         </div>

          <div class="mb-3">
            <label for="email" class="form-label">Mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="" >
          </div>

          <div class="mb-3">
            <label for="tel" class="form-label">Telephone</label>
            <input type="tel" class="form-control" id="tel" name="tel" placeholder="" >
          </div>

          <div class="mb-3">
            <label for="adress" class="form-label">Adress</label>
            <input type="text" class="form-control" id="adress" name="adress" placeholder="" >
          </div>

          <div class="mb-3">
            <label for="post" class="form-label">Post Recherché</label>
            <input type="text" class="form-control" id="post" name="post" placeholder="" >
          </div>


          <div class="row">
            <div class="col-9">
                <a  class="btn btn-prev btn-secondary mt-2 ms-1">Retour</a>
             </div>
           <div class="col-3 text-end">
            <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
           </div>
        </div>

    </div>


    <div class="form-step" >
           <h4 class="text-secondary">Formation</h4>

           <div class="row">
            <div class=" mb-3">
                <label for="formation" class="form-label">Formation/Diplome</label>
                <input type="text" class="form-control" id="formation" name="formation" placeholder="" >
              </div>
           </div>

           <div class="row">
                <div class="col-6 mb-3">
                    <label for="etablissement" class="form-label">Etablissement</label>
                    <input type="text" class="form-control" id="etablissement" name="etablissement" placeholder="" >
                </div>

            <div class="col-6 mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" placeholder="" >
            </div>
       </div>

       <div class="row">
        <div class="col-6 mb-3">
            <label for="dateDeb" class="form-label">Date de Debut</label>
            <input type="date" class="form-control" id="dateDeb" name="dateDeb" placeholder="" >
        </div>
        <div class="col-6 mb-3">
            <label for="dateFin" class="form-label">Date de fin</label>
            <input type="date" class="form-control" id="dateFin" name="dateFin" placeholder="" >
        </div>

      </div>

        <div class=" mb-3">
            <label for="description" class="form-label">Description</label>
           <textarea  id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="row">
            <div class="col-9">
                <a  class="btn btn-prev btn-secondary mt-2 ms-1">Retour</a>
             </div>
           <div class="col-3 text-end">
            <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
           </div>
        </div>

    </div>

    <div class="form-step" >
        <h4 class="text-secondary">Experiences</h4>

        <div class="row">
         <div class=" mb-3">
             <label for="experience" class="form-label">Fonction/Poste</label>
             <input type="text" class="form-control" id="experience" name="experience" placeholder="" >
           </div>
        </div>

        <div class="row">
             <div class="col-6 mb-3">
                 <label for="lieu" class="form-label">Lieu</label>
                 <input type="text" class="form-control" id="lieu" name="lieu" placeholder="" >
             </div>

         <div class="col-6 mb-3">
             <label for="entreprise" class="form-label">Entreprise</label>
             <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="" >
         </div>
    </div>

    <div class="row">
     <div class="col-6 mb-3">
         <label for="dateDebExp" class="form-label">Date de Debut</label>
         <input type="date" class="form-control" id="dateDebExp" name="dateDebExp" placeholder="" >
     </div>
     <div class="col-6 mb-3">
         <label for="dateFinExp" class="form-label">Date de fin</label>
         <input type="date" class="form-control" id="dateFinExp" name="dateFinExp" placeholder="" >
     </div>

   </div>

     <div class=" mb-3">
         <label for="decrire" class="form-label">Description</label>
        <textarea id="decrire" name="decrire" class="form-control"></textarea>
     </div>

     <div class="row">
         <div class="col-9">
             <a  class="btn btn-prev btn-secondary mt-2 ms-1">Retour</a>
          </div>
        <div class="col-3 text-end">
         <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
        </div>
     </div>

 </div>

 <div class="form-step" >
    <div class="row">
        <div class=" mb-3">
            <label for="specialite" class="form-label">Specialite/Competences</label>
            <input type="text" class="form-control" id="specialite" name="specialite" placeholder="" >
          </div>
       </div>

       <div class="row">
        <div class="col-9">
            <a  class="btn btn-prev btn-secondary mt-2 ms-1">Retour</a>
         </div>
       <div class="col-3 text-end">
        <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
       </div>


 </div>
 </div>

 <div class="form-step" >
    <div class="row">
        <div class="col-6 mb-3">
            <label for="langue" class="form-label">Langue</label>
            <input type="text" class="form-control" id="langue" name="langue" placeholder="" >
          </div>
          <div class="col-6 mb-3">
            <label for="niveau" class="form-label">Niveau</label>
            <select class="form-select mb-3 form-light bg-light" style="border-color: #517EBC; background-color: light" aria-label=".form-select-lg example" name="niveau" placeholder="Choisi">
                @if(count($niveau) >= 1)
                <option value="" class="bg-light"></option>

                  @foreach($niveau as $ID => $niv)
               <option value="{{ $ID }}" class="bg-light"> {{ $niv->nom }}</option>
                @endforeach
                @endif
              </select>

          </div>
       </div>

       <div class="row">
        <div class="col-9">
            <a  class="btn btn-prev btn-secondary mt-2 ms-1">Retour</a>
         </div>
       <div class="col-3 text-end">
        <a  class="btn btn-next btn-primary  mt-2 ms-1">Continuer</a>
       </div>

       </div>
 </div>


 <div class="form-step" >
    <div class="row">
        <div class=" mb-3">
            <label for="divers" class="form-label">Loisir</label>
            <input type="text" class="form-control" id="divers" name="divers" placeholder="" >
          </div>
       </div>

    <div class="row mt-3">
        <div class="col-9">
      <a  class="btn btn-prev btn-primary mt-2 ms-1">Retour</a>
     </div>
     <div class="col-3">
      <button type="submit" class="btn btn-success mt-2 ms-1">Publier</button>
     </div>
  </div>

 </div>





 </form>


</div>
</div>


<script>
  const prevBtns = document.querySelectorAll(".btn-prev");
  const nextBtns = document.querySelectorAll(".btn-next");
  const formSteps = document.querySelectorAll(".form-step");
  let formeStepNum = 0;

  nextBtns.forEach((btn) => {

  btn.addEventListener("click", () => {

    formeStepNum++;
     updateFormStep();

  });

 });

 prevBtns.forEach((btn) => {

    btn.addEventListener("click", () => {

      formeStepNum--;
       updateFormStep();

    });

   });

 function updateFormStep(){

    formSteps.forEach((formStep) => {
      formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active")
    })

    formSteps[formeStepNum].classList.add("form-step-active");
}


</script>

@endsection
