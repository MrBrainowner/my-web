<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/template.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
      <div class="logo"><a href="/"></a></div>
      <div class="nav-list">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="products">Products</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <div class="account">
        <ul>
          <li><a href="">Log In</a></li>
          <li><a href="">Sign Up</a></li>
        </ul>
      </div>
    </nav>
      <div>
        @yield('content')
      </div>
</body>
</html>