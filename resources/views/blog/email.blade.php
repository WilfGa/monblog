@extends('layout.mainlayout')

@section('content')
	<br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Inscription a la lettre d'inscription
			</div>
			<div class="panel-body">
				{!! Form::open(['url'=>'storeEmail']) !!}
					<div class="form-group {!! $errors->has('email') ? 'has-error':'' !!}">
						{!! Form::email('email',null,array('class'=>'form-control','placehold'=>'Entrez votre email')) !!}
						{!! $errors->first('email','<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer!',['class'=>'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
   			</div>
		</div>
	</div>
@endsection