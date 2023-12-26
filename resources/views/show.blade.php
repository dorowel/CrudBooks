@extends('templates.templates')

@section('content')
    <h1 class="text-center m-3 m-4"><img src="..\..\asserts\img\book.svg" alt="Livro" height="50" width="50"> Visualizar Detalhes do Livro</h1>
    <div class="text-center">

    </div>
   <div class="col-8 m-auto">
    @if($book)
       @php
            $user = $book->find($book->id)->relUsers;
       @endphp

           <strong>Titulo:</strong> {{$book->title}}<br>
           <strong>Paginas:</strong> {{$book->pages}}<br>
           <strong>Price: R$</strong> {{$book->price}}<br>
           <strong>Autor:</strong> {{$user->name}}<br>
           <strong>Email:</strong> {{$user->email}}<br>
       @else
{{--           <p>Livro não encontrado</p>--}}
        {{url('books/create')}}

       @endif
       <div class="text-center">
           <br>
           <a href="{{url('books')}}">
               <button class="button btn btn-primary">Voltar para Home</button>
           </a>
       </div>
   </div>
@endsection
