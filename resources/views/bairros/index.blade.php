@extends('base')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>


@section('main')

<div>
    <a style="margin: 19px;" href="{{route('bairros.create')}}" class="btn btn-primary">Novo Bairro</a>
</div>

<div class="row">
  <div class="col-md-12">
    <h1 class="display-3">Bairros</h1>    
    <table class="table table-sm table-striped ">
        
      <thead>
          <tr>
            <td class="">ID</td>            
            <td class="">Bairro</td>
            <td class="">Região</td>
            <td width="10%" colspan = 2>Ações</td>
          </tr>
      </thead>
      <tbody>
          @foreach($bairros as $bairro)
          <tr>
              <td>{{$bairro->id}}</td>
              <td >{{$bairro->bairro}}</td>
              <td>{{$bairro->regiao}}</td>
              <td>
                  <a href="{{route('bairros.edit',$bairro->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{route('bairros.destroy', $bairro->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" onclick="return confirm('Tem certeza?')" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
{{$bairros->links()}}
@endsection

@section('scripts')
<script src="{{asset('site/sitejs.js')}}"></script>
@endsection