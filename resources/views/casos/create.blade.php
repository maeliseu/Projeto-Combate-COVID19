@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Formulário de Caso</h1>
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
          <div class="form-group">    
              <label for="nome">Nome:</label>
              <input type="text" class="form-control input-sm" name="nome"/>
          </div>

          <div class="form-group">
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" class="form-control input-sm" name="sobrenome"/>
          </div>

          <div class="form-group">
              <label for="rua">Rua:</label>
              <input type="text" class="form-control input-sm" name="rua"/>
          </div>
          <div class="form-group">
              <label for="numero">Numero:</label>
              <input type="text" class="form-control input-sm" name="numero"/>
          </div>
          <div class="form-group">
              <label for="complemento">Complemento:</label>
              <input type="text" class="form-control input-sm" name="complemento"/>
          </div>
          <div class="form-group">
              <label for="bairro">Bairro:</label>
              <input type="text" class="form-control input-sm" name="bairro"/>
          </div>
          <div class="form-group">
              <label for="regiao">Regiao:</label>
              <input type="text" class="form-control input-sm" name="regiao"/>
          </div>                          
          <button type="submit" class="btn btn-primary">Add caso</button>
      </form>
  </div>
</div>
</div>
@endsection