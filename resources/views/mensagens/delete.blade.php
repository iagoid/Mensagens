<h1> Exclusão de Mensagem</h1>
<hr>

    <form action="/mensagens/{{$mensagem->id}}" method="POST">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <h1>Você realmente deseja excluir o registro {{$mensagem->id}}</h1>
    <input type="submit" value="Deletar"> 
    </h1>
    </form>