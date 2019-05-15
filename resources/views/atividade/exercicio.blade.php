<h1>Lista de Atividades</h1>
<hr>
@foreach($atividades as $a)
	<h3>{{$a->id}}</h3>
	<p>{{$a->titulo}}</p>
    <p>{{$a->texto}}</p>
    <p>{{$a->autor}}</p>
    <p>{{$a->updated_at}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->