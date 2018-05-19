<html lang="fr">
 	<head>
   		@include('layout.partials.head')
 	</head>
<body>
	<div class="container">
		@include('layout.partials.header')
		@include('layout.partials.nav')
    	@yield('content')
    	@include('layout.partials.footer-script')
		@include('layout.partials.footer')
		
	</div>
</body> 
</html>