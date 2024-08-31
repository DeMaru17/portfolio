@extends('layouts.app')
@section('title','Add Skill')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add Skill Data</h4>
    </div>
    <div class="card-body">
        <form action="{{route('skill.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_skill">Nama Skill</label>
                <input type="text" name="nama_skill" id="nama_skill" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="persentase">persentase</label>
                <input type="number" name="persentase" id="persentase" class="form-control" required>
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">ADD</button>
                <a href="{{url('skill')}}" class="btn btn-outline-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection
