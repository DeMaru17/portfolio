@extends('layouts.app')
@section('title','Dashboard')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Profil Saya</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2 text-center">
                <img src="{{ asset('storage/image/'.$profile->gambar) }}" alt="Avatar" class="img-fluid rounded-circle mx-auto"  style="max-width: 130px;">
              </div>     
              <div class="col-md-10">
                <h5>Nama: {{ $profile->nama_lengkap }}</h5>
                <p>Email: {{ $profile->email }}</p>
                <p>No. HP: {{ $profile->no_tel }}</p>
                <p>Tentang Saya: {{ $profile->tentang_saya }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Pendidikan</h3>
          </div>
          <div class="card-body">
            <ul>
              @foreach($education as $edu)
                <li>
                  <h5>{{ $edu->nama_sekolah }}</h5>
                  <p>{{ $edu->jurusan }} ({{ $edu->tahun_lulus }})</p>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Pengalaman Kerja</h3>
          </div>
          <div class="card-body">
            <ul>
              @foreach($experience as $exp)
                <li>
                  <h5>{{ $exp->nama_perusahaan }}</h5>
                  <p>{{ $exp->jabatan }} ({{ $exp->lama_kerja }})</p>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Skill</h3>
          </div>
          <div class="card-body">
            <ul>
              @foreach($skill as $s)
                <li>{{ $s->nama_skill }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>Sertifikasi</h3>
          </div>
          <div class="card-body">
            <ul>
              @foreach($certification as $cert)
                <li>
                  <h5>{{ $cert->nama_sertifikat }}</h5>
                  <p>{{ $cert->penyelenggara }}</p>
                  <p>{{$cert->tanggal_sertifikat}}</p>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection