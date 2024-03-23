<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/about.css">
    <title>@yield('title') {{ config('app.name') }}</title>
</head>
<body>
    {{-- nav bar --}}
    <nav class="nav">
      <div class="logo"><a href="/"><svg class="svg" width="30px" height="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.15 111.46"><defs><style>.cls-1{fill:#3f7e55;}.cls-2{fill:#abd486;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M67.39,34.73C56.31,36.39,45,37.14,31.69,48.14c-23.15,19.16-15.19,62-15,63.08-.68-1-29.28-43.17-10.1-69.56C26,15,48.66,13.75,48.26,0,48.26,0,61,15.11,67.39,34.73Z"/><path class="cls-2" d="M93.17,24.27C89.59,41.11,80.13,56.25,69,69a0,0,0,0,0,0,0c-22.46,25.82-51.62,41.83-52.3,42.2h0v0c-.21-1.12-8.17-43.92,15-63.08,13.28-11,24.62-11.75,35.7-13.41C75.88,33.45,84.22,31.64,93.17,24.27Z"/><path class="cls-1" d="M16.72,111.24h0c.68-.37,29.84-16.38,52.3-42.2a0,0,0,0,1,0,0c11.09-12.76,20.55-27.9,24.13-44.74C93.17,24.27,123.51,116.49,16.72,111.24Z"/></g></g></svg>    LeafyUniverse</a></div>
      <div class="nav-list">
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="products">Products</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <div class="account">
        <ul>
          <li><div class="log-in"><a href="account">Sign In</a></div></li>
          <li><div class="sign-up"><a href="account">Sign Up</a></div></li>
        </ul>
      </div>
    </nav>
      {{-- yield content --}}
      @yield('content')
      {{-- footer --}}
    <div class="footer">
      <div class="box1"></div>
      <div class="box2"></div>
      <div class="box3"></div>
    </div>
</body>
</html>