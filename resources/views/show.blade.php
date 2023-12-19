@extends('templates.templates')

@section('content')
    <h1 class="text-center">Visualizar</h1>
    <div class="text-center">

    </div>
   <div class="col-8 m-auto">
       {{$book}}
{{--       @php--}}
{{--            $user = $book->find($book->id)->relUsers;--}}
{{--       @endphp--}}

{{--    Titulo: {{$book->tigle}}<br>--}}
{{--    Paginas: {{$book->pages}}<br>--}}
{{--    Price: R$ {{$book->price}}<br>--}}
{{--    Autor: {{$user->name}}<br>--}}
{{--    Email: {{$user->email}}<br>--}}

   </div>
@endsection
