<h1> Formulário de edição de Mensagem</h1>
<hr>

    <form action="/mensagens/{{$mensagens->id}}" method="POST">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <h1>
    Titulo:        <input type="text" name="titulo" value="{{$mensagens->titulo}}"><br><br>
    Autor:     <input type="text" name="autor" value="{{$mensagens->autor}}"><br><br>
    Texto: <input type="text" name="texto" value="{{$mensagens->texto}}"><br><br>
    <input type="submit" value="Salvar"> 
    </h1>
    </form>



     <!-- EXIBE MENSAGENS DE ERROS -->
     @if ($errors->any())
		<div class="row">
		  <div class="alert alert-danger">
		    <ul>
		      @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
		      @endforeach
		    </ul>
		  </div>
		</div>
	  @endif