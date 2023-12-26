@extends('templates.templates')

@section('content')

    <h1 class="text-center m-3 m-4"><img src="..\..\asserts\img\book.svg" alt="Livro" height="50" width="50"> @if(isset($book))Editar Cadastrar de Livros @else Cadastrar Livros @endif</h1>

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
                 <caption><strong>Titulo</strong></caption>
    <input class="form-control m-2" type="text" name="title" id="title" placeholder="Titulo" value="@if(isset($book)){{$book->title}} @else  @endif" required>
        <caption><strong>Autor</strong></caption>
        <select class="form-control m-2" name="id_user" id="id_user"  required>
            <option value="{$book->relUsers->id}}">@if(isset($book)) {{$book->relUsers->name}}@else @endif</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    <caption><strong>Paginas</strong></caption>
    <input class="form-control m-2" type="text" name="pages" id="pages" placeholder="Paginas" value=" @if(isset($book)){{$book->pages}} @else  @endif" required>
    <caption><strong>Price</strong></caption>
    <input class="form-control m-2" type="text" name="price" id="price" placeholder="Price" value="@if(isset($book)){{$book->price}} @else  @endif" required>
        <input  class="btn btn-primary m-2" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
    </form>
   </div>
@endsection
