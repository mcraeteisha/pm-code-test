<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProcessMaker Code Test</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
        <!-- Styles -->
        <style>

        </style>

        <style>
           
        </style>
    </head>
    <body>
    <div id="app">
        <nav class="navbar navbar-findcond">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('web') }}">Self-Affirming Notes</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ route('sign') }}">Leave a love note!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
