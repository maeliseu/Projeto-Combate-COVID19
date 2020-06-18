@extends('base')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{session()->get('success')}}  
    </div>
  @endif
</div>

@section('main')

<div>
    <a style="margin: 19px;" href="{{ route('casos.create')}}" class="btn btn-primary">Novo Caso</a>
</div>

<div class="row">
  <div class="col-sm-12">
      <h1 class="display-3">Casos</h1>    
    <table class="table table-sm table-striped table-bordered">
      <thead>
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Rua</td>
            <td>Numero</td>
            <td>Complemento</td>
            <td>Bairro</td>
            <td width="10%" colspan = 2>Ações</td>
          </tr>
      </thead>
      <tbody>
          @foreach($casos as $caso)
          <tr>
              <td>{{$caso->id}}</td>
              <td>{{$caso->nome}} {{$caso->sobrenome}}</td>
              <td>{{$caso->rua}}</td>
              <td>{{$caso->numero}}</td>
              <td>{{$caso->complemento}}</td>
              <td>{{$caso->find($caso->id)->relBairros->bairro}}</td>
              
              <td>
                  <a href="{{route('casos.edit',$caso->id)}}" class="btn btn-primary">Edit</a>
              </td> 
              <td>
                  <form action="{{route('casos.destroy', $caso->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" onclick="return confirm('Tem Certeza?')" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    {{$casos->links()}}
  </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('site/sitejs.js')}}"></script>
@endsection