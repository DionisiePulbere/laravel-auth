@extends('layouts.admin')

@section('content')
    <h1>Stai modificando il progetto {{ $project->name }}</h1>
    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div class="mb-3">
            <label for="client_name" class="form-label">Nome del cliente</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $project->client_name }}">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary" rows="5" name="summary">{{ $project->summary }}</textarea>
        </div>
        <div class="my-5">
        <a href="{{ route('admin.projects.index') }}"><button class="btn btn-secondary">Indietro</button></a>
        <button type="submit" class="btn btn-primary">Salva</button>
    </div>
    </form>

    
@endsection