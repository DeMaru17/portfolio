@extends('layouts.app')
@section('title','Profile')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Profile Data</h4>
        <a class="btn btn-primary float-right" href="{{route('profil.create')}}" id="add-data-btn">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($profiles as $profile)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $profile->nama_lengkap }}</td>
                    <td>{{  $profile->email }}</td>
                    <td>{{  $profile->no_tel }}</td>
                    <td>{{  $profile->Alamat }}</td>
                    <td><img width="300" height="300" src="{{asset('storage/image/'. $profile->gambar)}}" alt=""></td>
                    <td>
                        <a href="{{route('profil.edit', $profile->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('profil.destroy', $profile->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                        {{-- <form class="d-inline" action="{{route('profil.destroy', $profile->id)}}" method="post">
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
