<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src={{ asset('js/app.js') }} defer></script>
        <link href={{ asset('css/app.css') }} rel="stylesheet">

        <title>{{config('app.name')}}</title>

    </head>
    <body style="font-size: 1rem;">
    	@include('inc.navbar')
    	<div class="container mt-5">
    		@yield('content')
    	</div>
    </body>
</html>