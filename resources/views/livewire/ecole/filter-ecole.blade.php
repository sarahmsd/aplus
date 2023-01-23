<div class="search-form">
    <form action="{{ route('ecole.search') }}" class="search-form">
        <input type="sumbit" name="q" value="{{ request()->q ??  '' }}" id="" class="input-search search-style-large" placeholder="rechercher une école, une formation...">

        {{--  <select wire:model="etablissement_id" wire:change="filter" class="input-search search-style-large" name="test" id="">
            <option>type etablissement</option>
            <option value="public">public</option>
            <option value="prive">prive</option>
        </select>  --}}





            {{--  <div class="product" data-color="red">Product 1</div>
        <div class="product" data-color="green">Product 2</div>
        <div class="product" data-color="blue">Product 3</div>
        <div class="product" data-color="red">Product 4</div>
        <div class="product" data-color="green">Product 5</div>
        <div class="product" data-color="blue">Product 6</div>  --}}


        {{--  <select wire:model="etablissement_id" wire:change="filter" class="input-search search-style-large" name="test" id="">
            <option>type etablissement</option>
            @foreach ($systemeEducatifs as $se)
            <option value="{{ $se->is }}">{{ $se->Systeme_educatif }}</option>
            @endforeach
            <option value="public">public</option>
            <option value="prive">prive</option>
        </select>  --}}


    </form>


    <div class="small-text">378 resultats Trouvés</div>

    {{--  <div class="small-text">378 resultats Trouvés</div>
    <div class="filtres horizontal-filtre ">
        <div class="tags">
            <span class="small-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                </svg>
                Tous
            </span>
        </div>
        <div class="tags">
            <span class="small-text active">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/>
                </svg>
            Enseignement Supérieur
            </span>
        </div>
        <div class="tags">
            <span class="small-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                </svg>
                Enseignement Sécondaire
            </span>
        </div>
        <div class="tags">
            <span class="small-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M96 32C60.7 32 32 60.7 32 96V384H96V96l384 0V384h64V96c0-35.3-28.7-64-64-64H96zM224 384v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H416V384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32z"/>
                </svg>
                Enseignement Primaire
            </span>
        </div>
        <div class="tags">
            <span class="small-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z"/>
                </svg>
                Enseignement Général
            </span>
        </div>
    </div>  --}}
</div>
