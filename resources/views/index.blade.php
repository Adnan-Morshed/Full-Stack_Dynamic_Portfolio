<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @stack('style')
  
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header>
    <div><b>Adnan Morshed</b></div>
    <nav>
      <a href="#resume"><b>Resume</b></a>
      <a href="#projects"><b>Projects</b></a>
      <a href="#contact"><b>Contact</b></a>
</nav>
  </header>

    @yield('main-content')
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

