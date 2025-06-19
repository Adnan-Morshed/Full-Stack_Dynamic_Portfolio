<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creative CV</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header>
    <div>Adnan Morshed</div>
    <nav>
      <a href="#resume">Resume</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="main">
    <img src="{{ asset('assets/immage/lol.jpg') }}" alt="Profile Picture" class="profile-img" />
    <div class="intro">
      <h1>Hello</h1>
      <strong>A Bit About Me</strong>
      <p>
        I am Adnan Morshed. I am a web developer. I love to create beauty!
      </p>

      <!-- ✅ Buttons Section -->
      <div class="buttons">
      <p id="response-text"></p>

      <div class="buttons">
  <a href="#resume" class="resume-btn">Resume</a>
  <a href="#projects" class="projects-btn">Projects</a>
  <a href="#contact" class="contact-btn">Contact</a>
</div>

<p id="message"></p>


      </div>
    </div>
  </section>

  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

