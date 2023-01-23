<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container"><br><br>
        <form action="{{ route('save.ecole') }}" method="post">

            @csrf
        <input type="text" name="etablissement" value="public"><br><br>
        <input type="text" name="fr_enseignements" value="francais"><br><br>
        Systeme Educatif
        @foreach ($systemeEducatifs  as $systemeEducatif)
        <div class="form-check">
            <input name="systemeEducatif" class="form-check-input" value="{{ $systemeEducatif->id }}" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              {{ $systemeEducatif->Systeme_educatif }}
            </label>
          </div>
        @endforeach
        <br><br>

        Systeme Enseignment
        <br>
        @foreach ($enseignements as $enseignement)
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="enseignement[]" type="checkbox" id="inlineCheckbox2" value="{{ $enseignement->id }}">
            <label class="form-check-label" for="inlineCheckbox2">{{ $enseignement->enseignement }}</label>
          </div>
        @endforeach
        <br><br>


        Cycle

        @foreach ($cycles as $cycle)
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="cycle[]" type="checkbox" id="inlineCheckbox2" value="{{ $cycle->id }}">
            <label class="form-check-label" for="inlineCheckbox2">{{ $cycle->cycle }}</label>
          </div>
        @endforeach


        <br><br>
          <button type="submit">enregistrer</button>
        </form>

    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

