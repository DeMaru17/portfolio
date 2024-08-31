@extends('layouts_porto.app')
@section('content')
<section id="hero" class="hero section dark-background">

    <img src="{{asset('porto/assets/img/herodennis.jpg')}}" alt="" data-aos="fade-in">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      @php
      $namaLengkap = explode(' ', $profile->nama_lengkap);
      $namaDepan = implode(' ', array_slice($namaLengkap, 0, 2));
      $namaBelakang = implode(' ', array_slice($namaLengkap, 2));
    @endphp
    <h2>{{ $namaDepan }}<br>{{ $namaBelakang }}</h2>
      <p>I'm <span class="typed" data-typed-items="Laboratory Administrator, Junior Web Developer, Freelancer">Junior Web Developer</span><span class="typed-cursor typed-cursor--blink"></span></p>
      <div class="social-links">
        <a href="{{$profile->facebook}}"><i class="bi bi-facebook"></i></a>
        <a href="{{$profile->instagram}}"><i class="bi bi-instagram"></i></a>
        <a href="{{$profile->linkedin}}"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </section><!-- /Hero Section -->

@endsection