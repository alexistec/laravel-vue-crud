<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel AND VUEJS</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>           
    </body>
</html>
