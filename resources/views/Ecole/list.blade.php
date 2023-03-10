<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoles | Accueil</title>
    <link rel="stylesheet" href="{{  asset('scss/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body>

    @include('Ecole.navbar')
    <div class="l-main sidebar-right">
        <div class="sidebar"></div>
        <div class="main-content">
            <div class="wrapper">
                <div class="title-section">
                    <h1>Annuaires des écoles du Sénégal</h1>
                    <span class="small-text">Listes des établissements</span>
                </div>
                <livewire:ecole.filter-ecole />
            </div>
            <livewire:ecole.show-ecole />
            {{ $ecoles->links('vendor.pagination.custom') }}
        </div>
    </div>
    @livewireScripts

    <script>
        $('input[type=checkbox]').change(function() {

            {{--  console.log('bonjour');  --}}
            // Réinitialisez tous les produits pour qu'ils soient visibles
            $('.product').show();

            // Masquez les produits qui ne correspondent pas aux filtres sélectionnés
            $('input[type=checkbox]:not(:checked)').each(function() {
                let color = $(this).val();
                $(`.product[data-color=${color}]`).hide();
            });
        });

    </script>
    <script>
        $('input[type=checkbox]').change(function() {

            {{--  console.log('bonjour');  --}}
            // Réinitialisez tous les produits pour qu'ils soient visibles
            $('.test').show();

            // Masquez les produits qui ne correspondent pas aux filtres sélectionnés
            $('input[type=checkbox]:not(:checked)').each(function() {
                let color = $(this).val();
                $(`.test[data-color=${color}]`).hide();
            });
        });

    </script>
</body>
</html>
