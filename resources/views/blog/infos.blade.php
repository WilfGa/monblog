@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <hr>                
                {!! Form::open(['url' => 'users']) !!} 

                    <div class="row">
                        
                        {!! Form::label('name','Entrez votre nom') !!}
                        {!! Form::text('name') !!}
                    
                        {!! Form::submit('Envoyer') !!}
                        
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection