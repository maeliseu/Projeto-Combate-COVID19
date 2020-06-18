@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Novo Bairro</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('bairros.store')}}">
          @csrf
          <div class="form-group row">
              <label for="bairro" class="col-sm-3 font-weight-bold col-form-label">Bairro:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="bairro"/>
              </div>
          </div>

          <div class="form-group row">
              <label for="regiao" class="col-sm-3 font-weight-bold col-form-label">Regiao:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="regiao"/>
              </div>
          </div>

          <a class="btn btn-outline-danger" href="{{route('bairros.index')}}">Cancel</a>                         
          <button type="submit" class="btn btn-primary">Add bairro</button>
      </form>
  </div>
</div>
</div>
@endsection