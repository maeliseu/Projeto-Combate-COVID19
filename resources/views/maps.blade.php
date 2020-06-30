@extends('base')

@section('main')

<body>
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="mt-lg-5 col-12 col-lg-6 col-xl-5 offset-xl-1">
          <h4 class="card-title text-center">Mostragem de Casos por Região</h4>
          <!-- -->
          <div class="row m-2 p-1 pt-2 pr-5 upsidelist" style="background: #E3E76C;">
              <div class="col">Região 1 - CENTRAL</div>
              <div class="col-1">{{$casosTotais->regiao1}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #FCBD53;">
              <div class="col">Região 2 - NORTE</div>
              <div class="col-1">{{$casosTotais->regiao2}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #41C6EF;">
              <div class="col">Região 3 - OESTE</div>
              <div class="col-1">{{$casosTotais->regiao3}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #647BBD;">
              <div class="col">Região 4 - SUL</div>
              <div class="col-1">{{$casosTotais->regiao4}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #E189B9;">
              <div class="col">Região 5 - NORDESTE</div>
              <div class="col-1">{{$casosTotais->regiao5}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #888DC5;">
              <div class="col">Região 6 - SUDESTE</div>
              <div class="col-1">{{$casosTotais->regiao6}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #FFF04E;">
              <div class="col">Região 7 - SUDOESTE</div>
              <div class="col-1">{{$casosTotais->regiao7}}</div>
          </div>
          <!-- -->
          <div class="row m-2 p-1 pr-5 " style="background: #93D0A7;">
              <div class="col">Região 8 - LESTE I</div>
              <div class="col-1">{{$casosTotais->regiao8}}</div>
          </div>
          <!-- -->
          <div class="row m-2 botsidelist p-1 pb-2 pr-5 " style="background: #EE5159;">
              <div class="col">Região 9 - LESTE II</div>
              <div class="col-1">{{$casosTotais->regiao9}}</div>
          </div>
          <!-- -->
          <div class="row p-1 pr-5 " style="">
              <div class="col pl-5"><b>Total</b></div>
              <div class="col-1 pr-5"><b>{{$casosTotais->regiaototal}}</b></div>
          </div>
        </div>
        <div class="mt-lg-5 col-12 col-lg-6 col-xl-5 offset-xl-1">
          <img src="{{$new_image}}" class="img-fluid" alt="mapa com os totais de cada regiao">
        </div>
      </div>
    </div>

  </section>

  @endsection
