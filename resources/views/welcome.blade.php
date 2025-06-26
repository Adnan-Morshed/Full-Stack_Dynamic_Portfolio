@extends('index')
@push('style')
<title>Creative CV</title>
@endpush
@section('main-content')

  <section class="main">
    <img src="{{ asset('assets/immage/lol.jpg') }}" alt="Profile Picture" class="profile-img" />
    <div class="intro">
      <h1>Hello</h1>
      <strong>A Bit About Me</strong>
      <p>
        I am Adnan Morshed. I am a web developer. I love to create beauty!
      </p>

      <!-- ✅ Buttons Section -->
      <div class="button">
      <p id="response-text"></p>

      <div class="buttons">
  <a href="{{url('/resume.blade.php')}}" class="resume-btn">Resume</a>
  <a href="{{url('/projects.blade.php')}}" class="projects-btn">Projects</a>
  <div class="contact-wrapper">
  <a href="#contact" class="contact-btn">Contact</a>
  <div class="contact-popup">
    <p><a href="mailto:adnan@example.com" target="_blank">📧 Email</a></p>
    <p><a href="https://facebook.com/dummyprofile" target="_blank">📘 Facebook</a></p>
    <p><a href="https://linkedin.com/in/dummyprofile" target="_blank">🔗 LinkedIn</a></p>
    <p><a href="https://instagram.com/dummyprofile" target="_blank">📸 Instagram</a></p>
    <p><a href="https://wa.me/1234567890" target="_blank">💬 WhatsApp</a></p>
  </div>
</div>


</div>

<p id="message"></p>


      </div>
    </div>
  </section>
  @endsection
 


