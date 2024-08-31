@extends('layouts_porto.app')
@section('content')


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Resume</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route('portolio.index')}}">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>{{$profile->nama_lengkap}}</h4>
              <p><em>{{$profile->tentang_saya}}</em></p>
              <ul>
                <li>{{$profile->alamat}}</li>
                <li>{{$profile->no_tel}}</li>
                <li>{{$profile->email}}</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            
            
            @foreach ($education as $edu )
            <div class="resume-item">
              <h4>{{$edu->jurusan}}</h4>
              <h5>{{$edu->tahun_lulus}}</h5>
              <p><em>{{$edu->nama_sekolah}}</em></p>
            </div><!-- Edn Resume Item -->
            @endforeach

            

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach ($experience as $exp )
            <div class="resume-item">
              <h4>{{$exp->jabatan}}</h4>
              <h5>{{$exp->lama_kerja}}</h5>
              <p><em>{{$exp->nama_perusahaan}}</em></p>
              <ul>
                <li>{{$exp->deskripsi}}</li>
              </ul>
            </div>
            @endforeach<!-- Edn Resume Item -->

            <h3 class="resume-title">Certification</h3>

            @foreach ($certification as $cert )
            <div class="resume-item">
              <h4>{{$cert->nama_sertifikat}}</h4>
              <h5>{{$cert->tanggal_sertifikat}}</h5>
              <p><em>{{$cert->penyelenggara}}</em></p>
            </div><!-- Edn Resume Item -->
            @endforeach
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->


@endsection