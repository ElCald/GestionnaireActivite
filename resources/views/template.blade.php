<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>@yield('titre')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">
      <div class="card mt-4">
        <!-- Contenu centrale -->
        <div class="card-header bg-primary text-white text-center">@yield('titre')</div>
        
        <div class="card-body">@yield('contenu')</div>
        

      </div>
    </div>
  </body>
</html>