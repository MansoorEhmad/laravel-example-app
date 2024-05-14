<!DOCTYPE html>
<html>
<head>
    @include('layouts.site-css')
    @php
        $theme = '';
    
        if(Session::has('theme')){
            $theme = Session::get('theme');
        }
    @endphp
</head>
<body class="{{ $theme == 'dark' ? 'bg-dark' : ''}}">
    @include('layouts.top-bar')

    @yield('content')
    
    @include('layouts.site-js')
    
     @if (Session::has('message'))
        <script>
            var message = "{{ Session::get('message') }}";
            if (message !== '') {
                alert(message);
            }
        </script>
        @endif
</body>
</html>