@extends('layouts_porto.app')
@section('content')


<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>About</h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{route('portolio.index')}}">Home</a></li>
          <li class="current">About</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-5 d-flex justify-content-center">
          <img style="height:350px; width:auto; border-radius:10px" src="{{asset('storage/image/'. $profile->gambar)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 content">
          <h2>{{$profile->nama_lengkap}}</h2>
          
          <div class="row">
            <div class="col-lg-6 py-3">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{{$profile->email}}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$profile->alamat}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$profile->no_tel}}</span></li>
              </ul>
            </div>
          </div>
          <p class="py-3" style="text-align: justify">
            {{$profile->tentang_saya}}
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Skills Section -->
  <section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Skills</h2>
      <div><span>My</span> <span class="description-title">Skills</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row skills-content skills-animation">

        @foreach ($skill as $sk)
          @if ($loop->iteration % 3 == 1)
            <div class="col-lg-6">
          @endif

              <div class="progress">
                <span class="skill"><span>{{$sk->nama_skill}}</span> <i class="val">{{$sk->persentase}}</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$sk->persentase}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>

        @if ($loop->iteration % 3 == 0 || $loop->last)
            </div>
        @endif
        @endforeach


        </div>

      </div>

    </div>

  </section><!-- /Skills Section -->



@endsection