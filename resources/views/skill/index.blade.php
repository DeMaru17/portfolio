@extends('layouts.app')
@section('title','Skill')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Skill Data</h4>
        <a class="btn btn-primary float-right" href="{{route('skill.create')}}" id="add-data-btn">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Skill</th>
                    <th>persentase</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($skill as $sk)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $sk->nama_skill }}</td>
                    <td>{{  $sk->persentase }}</td>
                    <td>
                        <a href="{{route('skill.edit', $sk->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('skill.destroy', $sk->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                        {{-- <form class="d-inline" action="{{route('skill.destroy', $sk->id)}}" method="post">
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
