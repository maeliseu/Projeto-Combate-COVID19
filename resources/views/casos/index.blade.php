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
    <a style="margin: 19px;" href="{{ route('casos.create')}}" class="btn btn-primary">Novo Caso</a>
</div>

<div class="row">
  <div class="col-sm-12">
      <h1 class="display-3">Casos</h1>    
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Rua</td>
            <td>Numero</td>
            <td>Complemento</td>
            <td>Bairro</td>
            <td>Região</td>
            <td colspan = 2>Ações</td>
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
              <td>{{$caso->bairro}}</td>
              <td>{{$caso->regiao}}</td>
              <td>
                  <a href="{{ route('casos.edit',$caso->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                  <form action="{{ route('casos.destroy', $caso->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                  </form>
                  {{-- <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$caso->id}})" 
                    data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a> --}}
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
{{-- <div id="DeleteModal" class="modal fade text-danger" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
    <form action="" id="deleteForm" method="post">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center white">DELETE CONFIRMATION</h4>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <p class="text-center">Are You Sure Want To Delete ?</p>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                </center>
            </div>
        </div>
    </form>
  </div>
 </div> --}}
@endsection

@section('scripts')
<script src="{{ asset('site/sitejs.js') }}"></script>
@endsection