@extends('layout.mainlayout')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['url'=>'blog\poster','method'=>'post']) !!}
			<div class="form-group">
				<label for="id_titre">Titre de l'article</label>
				{!! Form::text('title',null,['class'=>'form-control','id'=>'id_titre']) !!}	
			</div>
			<div>
				<label for="id_content">Contenu de l'article</label>
				{!! Form::text('content',null,['class'=>'form-control','id'=>'id_content']) !!}
				<hr>
			</div>

			{!! Form::submit('Ajouter',['class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection