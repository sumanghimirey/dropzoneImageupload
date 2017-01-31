<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test example test </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! HTML::style('/packages/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('/assets/css/style.css') !!}
    {!! HTML::script('https://code.jquery.com/jquery-2.1.4.min.js') !!}

    @yield('head')

</head>

<body>

<div class="container">

    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Test </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

            </ul>
        </div>
    </div>

    <br><br>

@yield('content')

</div>
</body>

@yield('footer')
</html>