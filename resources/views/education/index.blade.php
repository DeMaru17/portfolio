@extends('layouts.app')
@section('title','Education')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Education Data</h4>
        <a class="btn btn-primary float-right" href="{{route('education.create')}}" id="add-data-btn">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($education as $edu)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $edu->nama_sekolah }}</td>
                    <td>{{  $edu->jurusan }}</td>
                    <td>{{  $edu->tahun_lulus }}</td>
                    <td>
                        <a href="{{route('education.edit', $edu->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('education.destroy', $edu->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                        {{-- <form class="d-inline" action="{{route('education.destroy', $edu->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete this profile?')">Delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
