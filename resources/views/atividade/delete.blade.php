<h1> Exclusão de Atividade</h1>
<hr>

    <form action="/atividades/{{$atividade->id}}" method="POST">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <h1>Você realmente deseja excluir o registro {{$atividade->id}}</h1>
    <input type="submit" value="Deletar"> 
    </h1>
    </form>