@extends('layouts.app')
@section('title','Experience')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Experience Data</h4>
        <a class="btn btn-primary float-right" href="{{route('experience.create')}}" id="add-data-btn">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Jabatan</th>
                    <th>Lama Kerja</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($experience as $exp)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $exp->nama_perusahaan }}</td>
                    <td>{{  $exp->jabatan }}</td>
                    <td>{{  $exp->lama_kerja }}</td>
                    <td>{{  $exp->deskripsi }}</td>
                    <td>
                        <a href="{{route('experience.edit', $exp->id)}}" class="btn btn-primary">Edit</a>
                        <form class="d-inline" action="{{route('experience.destroy', $exp->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete this profile?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
