<nav class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            @yield('navigation')
            {{ Form::open(array('url' => 'find', 'method' => 'POST', 'class' => 'navbar-search pull-right')) }}
        	{{ Form::text('find', '', array('class' => 'search-query', 'placeholder' => 'Recherche')) }}
        {{ Form::close() }}
        </ul>
        
    </div>
</nav>