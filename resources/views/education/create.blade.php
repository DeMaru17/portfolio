@extends('layouts.app')
@section('title','Add Education')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add Education Data</h4>
    </div>
    <div class="card-body">
        <form action="{{route('education.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="no_telpon">No Telp</label>
                <input type="number" name="no_tel" id="no_tel" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="descriptions">Tentang Saya</label>
                <textarea name="tentang_saya" id="tentang_saya" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="facebook">Facebook</label>
                <input type="url" name="facebook" id="facebook" class="form-control" placeholder="https://example.com">
            </div>
            <div class="mb-3">
                <label for="x">X</label>
                <input type="url" name="x" id="x" class="form-control" placeholder="https://example.com">
            </div>
            <div class="mb-3">
                <label for="linkedin">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="https://example.com">
            </div>
            <div class="mb-3">
                <label for="instagram">Instagram</label>
                <input type="url" name="instagram" id="instagram" class="form-control" placeholder="https://example.com">
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">ADD</button>
                <a href="{{url('education')}}" class="btn btn-outline-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection
