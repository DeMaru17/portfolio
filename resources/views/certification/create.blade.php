@extends('layouts.app')
@section('title','Add Certification')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add Certification Data</h4>
    </div>
    <div class="card-body">
        <form action="{{route('certification.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_sertifikat">Nama Sertifikat</label>
                <input type="text" name="nama_sertifikat" id="nama_sertifikat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="penyelenggara">Penyelenggara</label>
                <input type="text" name="penyelenggara" id="penyelenggara" class="form-control">
            </div>
            <div class="mb-3">
                <label for="tanggal_sertifikat">Tanggal Sertifikat</label>
                <input type="text" name="tanggal_sertifikat" id="tanggal_sertifikat" class="form-control">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">ADD</button>
                <a href="{{url('certification')}}" class="btn btn-outline-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection
