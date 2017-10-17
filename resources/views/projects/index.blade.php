@extends('layouts.main')

@section('page_title')
    On going projects
    <a href="{{ route('projects.create') }}" class="btn btn-success">+</a>
@endsection

@section('page_content')
    <div class="card-columns">
        @foreach($projects as $project)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
{{--                        <a href="/projects/{{ $project->id }}" class="text-dark">{{ $project->title }}</a>--}}
                        <a href="{{ route('projects.show', ['project_id' => $project->id]) }}" class="text-dark">{{ $project->title }}</a>
                        <span class="badge badge-secondary">{{ $project->tracks->count() }}</span>
                    </h4>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text"><small class="text-muted">Created at: {{ $project->created_at }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection