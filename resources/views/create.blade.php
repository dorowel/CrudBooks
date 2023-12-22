@extends('templates.templates')

@section('content')
    <h1 class="text-center m-3 m-4"> @if(isset($book))Editar Cadastrar de Livros @else Cadastrar Livros @endif</h1>

   <div class="col-8 m-auto">

           @if(isset($erros) && count($erros)>0)
           <div class="text-center mt-4 p-2 alert-danger">
               @foreach($erros->all() as $erro)
                 {{$erros}}<br>
               @endforeach
           </div>
           @endif
            @if(isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
             @method('PUT')
               @else
             <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @endif

        @csrf
    <input class="form-control m-2" type="text" name="title" id="title" placeholder="Titulo" value="{{$book->title}}" required>
        <select class="form-control m-2" name="id_user" id="id_user"  required>
            <option value="{$book->relUsers->id}}">{{$book->relUsers->name}}</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    <input class="form-control m-2" type="text" name="pages" id="pages" placeholder="Paginas" value="{{$book->pages}}" required>
    <input class="form-control m-2" type="text" name="price" id="price" placeholder="Price" value="{{$book->price}}" required>
        <input  class="btn btn-primary m-2" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
    </form>
   </div>
@endsection
