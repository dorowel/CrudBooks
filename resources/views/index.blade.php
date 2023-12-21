@extends('templates.templates')

@section('content')
    <h1 class="text-center m-3 m-4"><img src="asserts\img\book.svg" alt="Livro" height="50" width="50"> Crud the Books</h1>
    <div class="text-center">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
   <div class="col-8 m-auto">
    <table class="table caption-top text-center">
        <caption>Lista de Livros</caption>
        <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($book as $books)
            @php
                $user = $books->find($books->id)->relUsers;
            @endphp
            <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$books->title}}</td>
                <td>{{$user->name}}</td>
                <td>R${{$books->price}}</td>
                <td>
                    <a href="{{url("books/$books->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>
   </div>
@endsection
