@extends('templates.templates')

@section('content')
    <h1 class="text-center"> Cadastrar Books</h1>

   <div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @csrf
teste
    </form>
   </div>
@endsection
