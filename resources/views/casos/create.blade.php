@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Novo Caso</h1>
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
      <form method="post" action="{{ route('casos.store') }}">
          @csrf
          <div class="form-group row">    
              <label for="nome" class="col-sm-3 font-weight-bold col-form-label">Nome:</label>
              <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="nome" />
              </div>
          </div>

          <div class="form-group row">
              <label for="sobrenome" class="col-sm-3 font-weight-bold col-form-label">Sobrenome:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="sobrenome"/>
              </div>
          </div>

          <div class="form-group row">
              <label for="rua" class="col-sm-3 font-weight-bold col-form-label">Rua:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="rua"/>
              </div>
          </div>

          <div class="form-group row">
              <label for="numero" class="col-sm-3 font-weight-bold col-form-label">Numero:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="numero"/>
              </div>
          </div>

          <div class="form-group row">
              <label for="complemento" class="col-sm-3 font-weight-bold col-form-label">Complemento:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control input-sm" name="complemento"/>
              </div>
          </div>

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

          <a class="btn btn-outline-danger" href="{{ route('casos.index') }}">Cancel</a>                         
          <button type="submit" class="btn btn-primary">Add caso</button>
      </form>
  </div>
</div>
</div>
@endsection