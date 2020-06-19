@extends('base')

@section('main')

<div class="row">
    <div class="col-sm-3">
        <div>
            CENTRAL - Região 1 = {{$casos->where('regiao','=','1')->count()}} 
        </div>
        <div>
            NORTE - Região 2 = {{$casos->where('regiao','=','2')->count()}}
        </div>
        <div>
            OESTE - Região 3 = {{$casos->where('regiao','=','3')->count()}}
        </div>
        <div>
            SUL - Região 4 = {{$casos->where('regiao','=','4')->count()}}
        </div>
        <div>
            NORDESTE - Região 5 = {{$casos->where('regiao','=','5')->count()}}
        </div>
        <div>
            SUDESTE - Região 6 = {{$casos->where('regiao','=','6')->count()}}
        </div>
        <div>
            SUDOESTE - Região 7 = {{$casos->where('regiao','=','7')->count()}}
        </div>
        <div>
            LESTE I - Região 8 = {{$casos->where('regiao','=','8')->count()}}
        </div>
        <div>
            LESTE II - Região 9 = {{$casos->where('regiao','=','9')->count()}}
        </div>
    </div>
    <div class="col-sm-6">
        <img src="mapaop.png" alt="">
    </div>
</div>

@endsection



