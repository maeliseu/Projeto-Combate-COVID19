@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edição de Caso</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('casos.update', $caso->id) }}">
            @method('PATCH') 
            @csrf  
            <!-- value={{ $caso->first_name }} -->
            <div class="form-group">    
              <label for="nome">Nome:</label>
              <input type="text" class="form-control input-sm" name="nome" value={{ $caso->nome }} />
          </div>

          <div class="form-group">
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" class="form-control input-sm" name="sobrenome" value={{ $caso->sobrenome }} />
          </div>

          <div class="form-group">
              <label for="rua">Rua:</label>
              <input type="text" class="form-control input-sm" name="rua" value={{ $caso->rua }} />
          </div>
          <div class="form-group">
              <label for="numero">Numero:</label>
              <input type="text" class="form-control input-sm" name="numero" value={{ $caso->numero }} />
          </div>
          <div class="form-group">
              <label for="complemento">Complemento:</label>
              <input type="text" class="form-control input-sm" name="complemento" value={{ $caso->complemento }} />
          </div>
          <div class="form-group">
              <label for="bairro">Bairro:</label>
              <input type="text" class="form-control input-sm" name="bairro" value={{ $caso->bairro }} />
          </div>
          <div class="form-group">
              <label for="regiao">Regiao:</label>
              <input type="text" class="form-control input-sm" name="regiao" value={{ $caso->regiao }} />
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection