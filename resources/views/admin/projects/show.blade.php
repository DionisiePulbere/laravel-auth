@extends('layouts.admin')

@section('content')
    <h2>{{ $project->name }}</h2>
    <div>
        <strong>Slug:</strong> {{ $project->slug }}
    </div>
    <div>
        <strong>Creato il:</strong> {{ $project->created_at }}
    </div>
    <div>
        <strong>Aggiornato il:</strong> {{ $project->updated_at }}
    </div>

    @if($project->summary)
    <div class="my-3">    
        <strong >Summary: </strong>{{ $project->summary }}
    </div>
    @endif

    <div class="my-5">
        <a href="{{ route('admin.projects.index') }}"><button class="btn btn-secondary">Indietro</button></a>
    </div>
@endsection