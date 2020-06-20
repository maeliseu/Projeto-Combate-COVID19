@extends('base')

@section('main')

    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="{{$new_image}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Mostragem de Casos por Região</h4>
                        <div class="row" style="background: #E3E76C;">
                            <div class="col-sm-9">CENTRAL - Região 1</div> <div class="col-sm-2">{{$casos->where('regiao','=','1')->count()}}</div>
                        </div>
                        <div class="row" style="background: #FCBD53;">
                            <div class="col-sm-9">NORTE - Região 2</div> <div class="col-sm-2">{{$casos->where('regiao','=','2')->count()}}</div>
                        </div>
                        <div class="row" style="background: #41C6EF;">
                            <div class="col-sm-9">OESTE - Região 3</div> <div class="col-sm-2">{{$casos->where('regiao','=','3')->count()}}</div>
                        </div>
                        <div class="row" style="background: #647BBD;">
                            <div class="col-sm-9">SUL - Região 4</div> <div class="col-sm-2">{{$casos->where('regiao','=','4')->count()}}</div>
                        </div>
                        <div class="row" style="background: #E189B9;">
                            <div class="col-sm-9">NORDESTE - Região 5</div> <div class="col-sm-2">{{$casos->where('regiao','=','5')->count()}}</div>
                        </div>
                        <div class="row" style="background: #888DC5;">
                            <div class="col-sm-9">SUDESTE - Região 6</div> <div class="col-sm-2">{{$casos->where('regiao','=','6')->count()}}</div>
                        </div>
                        <div class="row" style="background: #FFF04E;">
                            <div class="col-sm-9">SUDOESTE - Região 7</div> <div class="col-sm-2">{{$casos->where('regiao','=','7')->count()}}</div>
                        </div>
                        <div class="row" style="background: #93D0A7;">
                            <div class="col-sm-9">LESTE I - Região 8</div> <div class="col-sm-2">{{$casos->where('regiao','=','8')->count()}}</div>
                        </div>
                        <div class="row" style="background: #EE5159;">
                            <div class="col-sm-9">LESTE II - Região 9</div> <div class="col-sm-2">{{$casos->where('regiao','=','9')->count()}}</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection



