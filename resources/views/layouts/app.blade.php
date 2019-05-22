<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Título da página -->
        <title>@yield('title')</title>

        <!-- CSS -->
        <link href ="css/app.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Conteúdo da página -->
        <div class="container">
            <div class="box">
        <div class="box-header"><h3>@yield('tituloCaixa')</h3></div>
        <div class="box-body">
            <h4 class="filtro">@yield('subtituloCaixa')</h4>
            @yield('content')
        </div>
        
    </div>
        </div>
    </body>
</html>