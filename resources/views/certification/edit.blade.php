@extends('layouts.app')
@section('title','Edit Certification')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Certification Data</h4>
    </div>
    <div class="card-body">
        <form action="{{route('certification.update', $cert->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_sertifikat">Nama Sertifikat</label>
                <input type="text" name="nama_sertifikat" id="nama_sertifikat" class="form-control" value="{{$cert->nama_sertifikat}}">
            </div>
            <div class="mb-3">
                <label for="penyelenggara">Penyelenggara</label>
                <input type="text" name="penyelenggara" id="penyelenggara" class="form-control" value="{{$cert->penyelenggara}}">
            </div>
            <div class="mb-3">
                <label for="tanggal_sertifikat">Tanggal Sertifikat</label>
                <input type="text" name="tanggal_sertifikat" id="tanggal_sertifikat" class="form-control" value="{{$cert->tanggal_sertifikat}}">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">ADD</button>
                <a href="{{url('certification')}}" class="btn btn-outline-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection
