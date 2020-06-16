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
            <div class="form-group row">    
              <label for="nome" class="col-sm-3 font-weight-bold col-form-label">Nome:</label>
              <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="nome" value={{ $caso->nome }} />
              </div>
            </div>

            <div class="form-group row">
                <label for="sobrenome" class="col-sm-3 font-weight-bold col-form-label">Sobrenome:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="sobrenome" value={{ $caso->sobrenome }} />
                </div>
            </div>

            <div class="form-group row">
                <label for="rua" class="col-sm-3 font-weight-bold col-form-label">Rua:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="rua" value={{ $caso->rua }} />
                </div>
            </div>
            <div class="form-group row">
                <label for="numero" class="col-sm-3 font-weight-bold col-form-label">Numero:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="numero" value={{ $caso->numero }} />
                </div>
            </div>
            <div class="form-group row">
                <label for="complemento" class="col-sm-3 font-weight-bold col-form-label">Complemento:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="complemento" value={{ $caso->complemento }}></input>
                </div>
            </div>
            <div class="form-group row">
                <label for="bairro" class="col-sm-3 font-weight-bold col-form-label">Bairro:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="bairro" value={{ $caso->bairro }} />
                </div>
            </div>
            <div class="form-group row">
                <label for="regiao" class="col-sm-3 font-weight-bold col-form-label">Regiao:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="regiao" value={{ $caso->regiao }} />
                </div>
            </div>
            <div class="form-group pull-right">
                <a class="btn btn-outline-danger" href="{{ route('casos.index') }}">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection