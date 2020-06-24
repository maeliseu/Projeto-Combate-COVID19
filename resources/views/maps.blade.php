@extends('base')

@section('main')

<body>
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center ">
          <h4 class="card-title text-center">Mostragem de Casos por Região</h4>
          <!-- -->
          <div class="row p-1 pt-2 pr-5 upsidelist" style="background: #E3E76C;">
              <div class="col">Região 1 - CENTRAL</div>
              <div class="col-1">{{$casos->where('regiao','=','1')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #FCBD53;">
              <div class="col">Região 2 - NORTE</div>
              <div class="col-1">{{$casos->where('regiao','=','2')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #41C6EF;">
              <div class="col">Região 3 - OESTE</div>
              <div class="col-1">{{$casos->where('regiao','=','3')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #647BBD;">
              <div class="col">Região 4 - SUL</div>
              <div class="col-1">{{$casos->where('regiao','=','4')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #E189B9;">
              <div class="col">Região 5 - NORDESTE</div>
              <div class="col-1">{{$casos->where('regiao','=','5')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #888DC5;">
              <div class="col">Região 6 - SUDESTE</div>
              <div class="col-1">{{$casos->where('regiao','=','6')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #FFF04E;">
              <div class="col">Região 7 - SUDOESTE</div>
              <div class="col-1">{{$casos->where('regiao','=','7')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="background: #93D0A7;">
              <div class="col">Região 8 - LESTE I</div>
              <div class="col-1">{{$casos->where('regiao','=','8')->count()}}</div>
          </div>
          <!-- -->
          <div class="row botsidelist p-1 pb-2 pr-5 " style="background: #EE5159;">
              <div class="col">Região 9 - LESTE II</div>
              <div class="col-1">{{$casos->where('regiao','=','9')->count()}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="">
              <div class="col"><b>Total</b></div>
              <div class="col-1"><b>{{$casos->count()}}</b></div>
          </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-1 hero-img">
          <img src="{{$new_image}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

  @endsection
