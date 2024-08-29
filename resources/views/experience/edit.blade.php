@extends('layouts.app')
@section('title','Edit Experience')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Experience Data</h4>
    </div>
    <div class="card-body">
        <form action="{{route('experience.update', $experience->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" value="{{$experience->nama_perusahaan}}">
            </div>
            <div class="mb-3">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{$experience->jabatan}}">
            </div>
            <div class="mb-3">
                <label for="lama_kerja">Lama Kerja</label>
                <input type="text" name="lama_kerja" id="lama_kerja" class="form-control" value="{{$experience->lama_kerja}}">
            </div>
            <div class="mb-3">
                <label for="deskripsi">deskripsi</label>
                <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{$experience->deskripsi}}"></textarea>
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">ADD</button>
                <a href="{{url('experience')}}" class="btn btn-outline-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection
