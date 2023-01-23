<div>
    <form>

        <label for="show_red">Public</label>
        <input type="checkbox" name="etablissement" value="public">
        <label for="show_green">prive</label>
        <input type="checkbox" name="etablissement" value="prive">

        {{--  <label for="show_red">THIES</label>
        <input type="checkbox" name="adresse" value="THIES">
        <label for="show_green">DAKAR</label>
        <input type="checkbox" name="adresse" value="DAKAR">  --}}

    </form>

    <div class="wrapper">
        @foreach ($ecoles as $ecole)
        <div class="card card-style-2 search-result product"

            data-color= "{{ $ecole->etablissement}}"



            >

            <div class="card-left">
                <div class="card-title">
                    <h1>{{ $ecole->ecole }}</h1>
                    <h2>({{ $ecole->sigle }})</h2>
                </div>
                <div class="card-icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <span class="small-text">{{ $ecole->email }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/>
                    </svg>
                    <span class="small-text">{{ $ecole->adresse }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
                    </svg>
                    <span class="small-text">{{ $ecole->telephone }}</span>
                </div>
                <div class="card-description">
                    <p>{{ $ecole->description }}</p>
                </div>
            </div>
            <div class="card-right">
                <div class="card-tags">
                    {{--  @foreach ($ecole->Ecoleens as $enseignement)

                    <div class="tags"><span class="small-text">#{{ $enseignement->enseignement->enseignement }}</span></div>
                    @endforeach  --}}
                    {{--  <div class="tags"><span class="small-text">#Systeme francais</span></div>
                    <div class="tags"><span class="small-text">#Management</span> <span class="small-text">#Informatique</span></div>
                    <div class="tags"><span class="small-text">#Enseigne;ent Superieur</span></div>  --}}
                </div>
                <div class="card-btn">
                    <img src="{{ asset('images/LOGO_ACADEMIEPLUS_V3_SYMBOL.svg') }}" alt="" class="card-logo">
                    <button class="btn btn-small"> <a href="{{ route('show.ecole',$ecole->id) }}">DECOUVRIR</a></button>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
