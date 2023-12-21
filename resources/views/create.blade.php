@extends('templates.templates')

@section('content')
    <h1 class="text-center m-3 m-4"> Cadastrar Livros</h1>

   <div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @csrf
    <input class="form-control m-2" type="text" name="title" id="title" placeholder="Titulo" >
        <select class="form-control m-2" name="id_user" id="id_user">
            <option value="">Autor</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    <input class="form-control m-2" type="text" name="pages" id="title" placeholder="Paginas" >
    <input class="form-control m-2" type="text" name="price" id="title" placeholder="Price">
        <input  class="btn btn-primary m-2" type="submit" value="Cadastrar">
    </form>
   </div>
@endsection
