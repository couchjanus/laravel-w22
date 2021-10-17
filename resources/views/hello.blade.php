<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Hello {{ $name }}</h2>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi numquam incidunt quo suscipit rem dolor a obcaecati, reprehenderit cupiditate placeat sapiente adipisci similique velit ab eaque minima distinctio mollitia voluptates!</div>

        <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        <h3>{{ date('Y') }}</h3>
        {{ time() }}
    </body>
    </html>