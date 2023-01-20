<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    .hr{
        border:         none;
        border-left:    1px solid hsla(200, 10%, 50%,100);
        height:         100vh;
        width:          1px;
    }

    .your_div_nameclass{
        border-left: 1px solid black;
        height: 500px;
      }


</style>
<body>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ URL::asset('images/images.jpeg') }}"  class="d-block w-100"  style="height:200px; opacity: 0.8" alt="...">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(14, 22, 30, 0.167); ">
              <h5 style="border: solid 2px rgb(219, 172, 80); color:white; padding-left: -100px; padding-right: -100px" id="nomC1" class="py-1">Nadi YourQueen</h5>
              <p style="color: white" id="Post1">Developer web</p>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-2">
        <div class="col-8">
            <h5 class="text-dark" style="font-weight: bolder">EXPERIENCES</h5>
            <hr>
            <div class="row">
                <div class="col-3">
                   <p>01/2019 </p> <p>09/2019</p>
                </div>
                <div class="col-2">
                 <hr class="hr your_div_nameclass">
              </div>

            </div>
        </div>
        <div class="col-4">
            <h5 class="text-dark" style="font-weight: bolder; font-style:arial">CONTACTS</h5>
            <hr >
        </div>
      </div>

</body>
</html>
