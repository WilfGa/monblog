@extends('layout.mainlayout')
@include('blog.navigation')
@section('content')
    <div class="container">
        <div class="row">

        @foreach($postes as $poste)       
                <div class="col-lg-5">

                    <h2>{{$poste->title}}</h2>
                    <p>{{$poste->content}}</p>
                    <hr>
                    <a href="{{ url('blog\poster') }}" target="blank">Lire la suite..</a>
                </div>
            
        @endforeach
       </div>
    </div>
@endsection
</body>
</html>