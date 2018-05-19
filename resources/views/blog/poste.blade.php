@extends('layout.mainlayout')
 
@include('blog/navigation')
 
@section('content')
 
<div class="row">
    <div class="span12">
        <div class="well">
            <em class="pull-right">
                Ecrit le {{date('d-m-Y',strtotime($poste->created_at))}}
            </em>
            <h3>
                {{$postes->title}}
            </h3>
            <p>
                {{$postes->full_text}}
            </p>
        </div>
    </div>
</div>
 
@foreach ($comments as $comment)
<div class="row">
    <div class="span12">
        <div class="comment">
            <em class="pull-right">
                Ecrit par {{$comment->username}} le {{date('d-m-Y',strtotime($comment->created_at))}}
            </em>
            <h5>
                {{$comment->title}}
            </h5>
            <p>
                {{$comment->text}}
            </p>
        </div>
    </div>
</div>
@endforeach
 
<hr />
<div class="row">
    <div class="span12">
        <div class="well">
            {{ Form::open(array('url' => 'comment')) }}
            {{ Form::hidden('id_art', $poste->id) }}
            {{ Form::hidden('id_cat', $actif) }}
            {{ Form::label('title', 'Titre de votre commentaire :') }}
            {{ Form::text('title') }}
            {{ Form::label('comment', 'Votre commentaire :') }}
            {{ Form::textarea('comment') }}
            {{ Form::submit('Envoyer') }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection