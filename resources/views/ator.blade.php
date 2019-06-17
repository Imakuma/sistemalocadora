@extends('template')

@section('container')
<h1>Atores</h1>

<ul>
@foreach($todosAtores as $ator)

<!--as duas chaves substituem o echo-->
    <li> {{ $ator->primeiro_nome}}</li>
    


@endforeach
</ul>
@endsection