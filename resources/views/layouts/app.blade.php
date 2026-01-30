<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Galaxy Traco')</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" overflow-x-hidden bg-no-repeat bg-cover bg-center bg-fixed" >
@include('partials.header')

<main>
  @yield('content')
  
</main>


@include('partials.footer')
</body>
</html>