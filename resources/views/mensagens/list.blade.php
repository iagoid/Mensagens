<h1>Lista de Mensagens</h1>
@foreach($mensagens as $m)
<h2>Titulo: <a href="/mensagens/{{$m->id}}">{{$m->titulo}}</a></h2>
<h2>Autor: <a href="/mensagens/{{$m->id}}">{{$m->autor}}</a></h2>
<h2>Texto: <a href="/mensagens/{{$m->id}}">{{$m->texto}}</a></h2>
<br><br>

@endforeach
