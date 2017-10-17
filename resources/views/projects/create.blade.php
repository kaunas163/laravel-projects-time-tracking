@extends('layouts.main')

@section('page_title')
    Create a new project
@endsection

@section('page_content')
    {!! Form::open(['route' => 'projects.store']) !!}
        <form>
            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="titleInput">Title</label>
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="descriptionInput">Description</label>
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    {!! Form::close() !!}
@endsection