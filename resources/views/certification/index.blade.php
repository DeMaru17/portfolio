@extends('layouts.app')
@section('title','Certification')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Certification Data</h4>
        <a class="btn btn-primary float-right" href="{{route('certification.create')}}" id="add-data-btn">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sertifikat</th>
                    <th>Penyelenggara</th>
                    <th>Tanggal Sertifikat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($cert as $c)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $c->nama_sertifikat }}</td>
                    <td>{{  $c->penyelenggara }}</td>
                    <td>{{  $c->tanggal_sertifikat }}</td>
                    <td>
                        <a href="{{route('certification.edit', $c->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('certification.destroy', $c->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                        {{-- <form class="d-inline" action="{{route('certification.destroy', $c->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" data-confirm-delete="true" >Delete</button>
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
