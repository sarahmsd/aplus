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

    @include('Ecole.navbar');

    <div class="l-main sidebar-right">
        <div class="sidebar"></div>
        <div class="main-content">
            <div class="wrapper">
                <div class="title-section">
                    <h1>Annuaires des écoles du Sénégal</h1>
                    <span class="small-text">Etablissements Supérieurs</span>
                </div>
                <livewire:ecole.filter-ecole />

            </div>
            <livewire:ecole.show-ecole />
            <div class="wrapper">
                <nav>
                  <ul class="pager">
                    <li class="pager-item pager-item-prev"><a class="pager-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                          <g fill="none" fill-rule="evenodd">
                            <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                          </g>
                        </svg></a>
                    </li>
                    <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                    <li class="pager-item active"><a class="pager-link" href="#">3</a></li>
                    <li class="pager-item"><a class="pager-link" href="#">4</a></li>
                    <li class="pager-item"><a class="pager-link" href="#">5</a></li>
                    <li class="pager-item"><a class="pager-link" href="#">6</a></li>
                    <li class="pager-item"><a class="pager-link" href="#">...</a></li>
                    <li class="pager-item pager-item-next"><a class="pager-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                          <g fill="none" fill-rule="evenodd">
                            <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                          </g>
                        </svg></a>
                    </li>
                  </ul>
                </nav>
            </div>
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
