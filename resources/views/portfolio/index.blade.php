@extends('layouts_porto.app')
@section('content')
<section id="hero" class="hero section dark-background">

    <img src="{{asset('porto/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2>{{$profile->nama_lengkap}}</h2>
      <p>I'm <span class="typed" data-typed-items="Administrator, Junior Web Developer, Freelancer">Junior Web Developer</span><span class="typed-cursor typed-cursor--blink"></span></p>
      <div class="social-links">
        <a href="{{$profile->facebook}}"><i class="bi bi-facebook"></i></a>
        <a href="{{$profile->instagram}}"><i class="bi bi-instagram"></i></a>
        <a href="{{$profile->linkedin}}"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </section><!-- /Hero Section -->

@endsection