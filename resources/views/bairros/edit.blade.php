@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edição de Bairro</h1>

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
        <form method="post" action="{{ route('bairros.update', $bairro->id) }}">
            @method('PATCH') 
            @csrf  
            <!-- value={{ $bairro->first_name }} -->
            <div class="form-group row">
                <label for="bairro" class="col-sm-3 font-weight-bold col-form-label">Bairro:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="bairro" value={{ $bairro->bairro }} />
                </div>
            </div>
            <div class="form-group row">
                <label for="regiao" class="col-sm-3 font-weight-bold col-form-label">Regiao:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control input-sm" name="regiao" value={{ $bairro->regiao }} />
                </div>
            </div>
            <div class="form-group pull-right">
                <a class="btn btn-outline-danger" href="{{ route('bairros.index') }}">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection