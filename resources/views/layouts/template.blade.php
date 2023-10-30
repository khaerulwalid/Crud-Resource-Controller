<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href={{ URL::to('sharks') }} class="navbar-brand">Wall Tech</a>

                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('sharks') }}">View All Data</a></li>
                    <li><a href="{{ URL::to('sharks/create') }}">Create Data</a></li>
                </ul>
            </div>
        </div>
        <hr>
        


        @yield('content')
    </div>
    
</body>
</html>