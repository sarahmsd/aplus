
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

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


@if(isset($candidat))
<div class="row" style="margin-left: 90px">
    <div class="col-6">
        <button onclick="generer()" class="btn btn-primary my-2">Generer</button>

    </div>
    <div class="col-6">
        <button class="btn btn-primary btn-lg my-2" id="btn-print-this" style="margin-left: 400px">Telecharger</button>
    </div>
</div>


<div id="invoice">
<div class="card mb-3 h-50" style="margin-left: 30px">
<div class="card-body">
    <div class="row">
        <div class="col-3">
    <form action="{{ route('cvs.store') }}" method="POST" class="form text-secondary">
        @csrf


    <div class="form-step form-step-active" >
        <h3>Choisissez un modèle de cv</h3>
        <div class="row"  style="display: flex; flex-direction:row">
            @if(!is_null($models))
               @foreach ($models as $model)


         <div class="wrapper">
           <div class="radio-buttons">
             <label for="" class="custom-radio">
               <input type="radio" class="input" value="{{ $model->id }}" name="model" id="model" required>
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
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $candidat->nom }}" placeholder="" required>
          </div>


          <div class=" col-6 mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $candidat->prenom }}" required>
          </div>
         </div>

          <div class="mb-3">
            <label for="email" class="form-label">Mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $candidat->email }}" required>
          </div>

          <div class="mb-3">
            <label for="tel" class="form-label">Telephone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="{{ $candidat->tel }}" placeholder="" required>
          </div>

          <div class="mb-3">
            <label for="adress" class="form-label">Adress</label>
            <input type="text" class="form-control" id="adress" name="adress" value="{{ $candidat->adress }}" placeholder="" required>
          </div>

          <div class="mb-3">
            <label for="post" class="form-label">Post Recherché</label>
            <input type="text" class="form-control" id="post" name="post" placeholder="" required>
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

           <div class="field_wrapper">
           <div class="row">
            <div class=" mb-3">
                <label for="formation" class="form-label">Formation/Diplome</label>
                <input type="text" class="form-control" id="formation1" name="formation[]" placeholder="" required>
              </div>
           </div>

           <div class="row">
                <div class="col-6 mb-3">
                    <label for="etablissement" class="form-label">Etablissement</label>
                    <input type="text" class="form-control" id="etablissement1" name="etablissement[]" placeholder="" required>
                </div>

            <div class="col-6 mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville[]" placeholder="" required>
            </div>
       </div>

       <div class="row">
        <div class="col-6 mb-3">
            <label for="dateDeb" class="form-label">Date de Debut</label>
            <input type="date" class="form-control" id="dateDeb1" name="dateDeb[]" placeholder="" required>
        </div>
        <div class="col-6 mb-3">
            <label for="dateFin" class="form-label">Date de fin</label>
            <input type="date" class="form-control" id="dateFin1" name="dateFin[]" placeholder="" required>
        </div>

      </div>

        <div class=" mb-3">
            <label for="description" class="form-label">Description</label>
           <textarea  id="description" name="description[]" class="form-control" required></textarea>
        </div>
      </div>

        <a href="javascript:void(0);" class="addFormation btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter une formation</a>

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

        <div class="wraper">
        <div class="row">
         <div class=" mb-3">
             <label for="experience" class="form-label">Fonction/Poste</label>
             <input type="text" class="form-control" id="experience" name="experience[]" placeholder="" required>
           </div>
        </div>

        <div class="row">
             <div class="col-6 mb-3">
                 <label for="lieu" class="form-label">Lieu</label>
                 <input type="text" class="form-control" id="lieu" name="lieu[]" placeholder="" required>
             </div>

         <div class="col-6 mb-3">
             <label for="entreprise" class="form-label">Entreprise</label>
             <input type="text" class="form-control" id="entreprise" name="entreprise[]" placeholder="" required>
         </div>
    </div>

    <div class="row">
     <div class="col-6 mb-3">
         <label for="dateDebExp" class="form-label">Date de Debut</label>
         <input type="date" class="form-control" id="dateDebExp" name="dateDebExp[]" placeholder="" required>
     </div>
     <div class="col-6 mb-3">
         <label for="dateFinExp" class="form-label">Date de fin</label>
         <input type="date" class="form-control" id="dateFinExp" name="dateFinExp[]" placeholder="" required>
     </div>

   </div>

     <div class=" mb-3">
         <label for="decrire" class="form-label">Description</label>
        <textarea id="decrire" name="decrire[]" class="form-control" required></textarea>
     </div>
     <a href="javascript:void(0);" class="addExperience btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter une experience</a>
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

    <div class="wrapp">
    <div class="row">
        <div class=" mb-3">
            <label for="specialite" class="form-label">Specialite/Competences</label>
            <input type="text" class="form-control" id="specialite" name="specialite[]" placeholder="" required>
          </div>
       </div>
    </div>
       <a href="javascript:void(0);" class="addCompetence btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter competence</a>


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

    <div class="wrappe">
    <div class="row">
        <div class="col-6 mb-3">
            <label for="langue" class="form-label">Langue</label>
            <input type="text" class="form-control" id="langue[]" name="langue" placeholder="" required>
          </div>
          <div class="col-6 mb-3">
            <label for="niveau" class="form-label">Niveau</label>
            <select class="form-select mb-3 form-light bg-light" style="border-color: #517EBC; background-color: light" aria-label="form-select-lg example" name="niveau[]" placeholder="Choisi" required>
                @if(count($niveau) >= 1)
                <option value="" class="bg-light"></option>

                  @foreach($niveau as $ID => $niv)
               <option value="{{ $niv->id }}" class="bg-light"> {{ $niv->nom }}</option>
                @endforeach
                @endif
              </select>

          </div>
       </div>
    </div>

       <a href="javascript:void(0);" class="addLangue btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter une langue</a>

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

    <div class="wrap">
    <div class="row">
        <div class=" mb-3">
            <label for="divers" class="form-label">Loisir</label>
            <input type="text" class="form-control" id="divers" name="loisir[]" placeholder="" required>
          </div>
       </div>
    </div>

       <a href="javascript:void(0);" class="addLoisir btn btn-outline-primary mb-3" style="align-items: center"><i class="bi bi-plus-circle"></i> Ajouter un loisir</a>

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


    <div class="col-9" style="margin-top: 37px">
        <div class="content" id="content">
          @include('Cvs .modeles.mimi')
        </div>
    </div>
</div>

</div>
</div>
</div>


@else
<h3> Vous devez être un candidat</h3>

@endif

@livewireScripts

<script src="{{ asset('js/cv.js') }}"></script>
<script src="{{ asset('js/print.js') }}"></script>


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

{{--  $(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.addLangue'); //Add button selector
    var wrapper = $('.wrappe'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    function addInput() {

        let sup = document.createElement("a");
        sup.href = "javascript:void(0);";
        sup.className = "remove_button btn btn-danger mb-2";

        let trash = document.createElement("i");
        trash.className = "bi bi-trash";

        sup.appendChild(trash);

        let labelLangue = document.createElement('label');
        labelLangue.for = "langue";
        labelLangue.innerText = "Langue";

        let langue = document.createElement("input");
        langue.type = "text";
        langue.className = "form-control";
        langue.name = "langue[]";
        langue.id = "langue";

        let labelNiveau = document.createElement('label');
        labelNiveau.for = "niveau";
        labelNiveau.innerText = "Niveau";

        let niveau = document.createElement("select");
        niveau.className = "form-select mb-3 form-light form-select-lg ";
        niveau.name = "niveau[]";
        niveau.id = "niveau";

        foreach($niveau as $ID => $niv) {

            let option = document.createElement("option");
            option.className = "bg-light ";
            option.value = {{ $ID }};
            option.innerText = $niv;
        }

        niveau.appendChild(option);

        let divcol1 = document.createElement("div");
        divcol1.className = "col-6";
        divcol1.appendChild(labelLangue);
        divcol1.appendChild(langue);

        let divcol2 = document.createElement("div");
        divcol2.className = "col-6";
        divcol2.appendChild(labelNiveau);
        divcol2.appendChild(niveau);


        let div1 = document.createElement("div");
        div1.className = "row";
        div1.className = "row mb-3";
        div1.appendChild(divcol1);
        div1.appendChild(divcol2);


        let div = document.createElement("div");
        div.className = "mt-3";
        div.appendChild(sup);
        div.appendChild(div1);

        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(div); //Add field html
        }


    }

    $(addButton).click(addInput);

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();

        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
  --}}
</script>

</body>
</html>


