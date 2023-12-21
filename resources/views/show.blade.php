@extends('templates.templates')

@section('content')
    <h1 class="text-center m-3 m-4">Visualizar</h1>
    <div class="text-center">

    </div>
   <div class="col-8 m-auto">
    @if($book)
       @php
            $user = $book->find($book->id)->relUsers;
       @endphp

    Titulo: {{$book->title}}<br>
    Paginas: {{$book->pages}}<br>
    Price: R$ {{$book->price}}<br>
    Autor: {{$user->name}}<br>
    Email: {{$user->email}}<br>
       @else
{{--           <p>Livro não encontrado</p>--}}
        {{url('books/create')}}

       @endif
   </div>
@endsection
