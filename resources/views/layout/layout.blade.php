@include('layout.header')

    <main>
    
    @yield('section')
    
</main>

<div>

    @yield('feedback')
        
</div>
   


@includeIf('layout.footer')