<h1> Formulário de edição de Atividade</h1>
<hr>

    <form action="/atividades/{{$atividade->id}}" method="POST">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <h1>
    Titulo:        <input type="text" name="title" value="{{$atividade->title}}"><br><br>
    Descrição:     <input type="text" name="description" value="{{$atividade->description}}"><br><br>
    Agendado para: <input type="datetime-local" name="scheduledto" value="{{Carbon\Carbon::parse($atividade->scheduledto)->format('Y-m-d\TH:i:s')}}"><br><br>
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