@extends('layouts.main')

@section('page_title')
    Project: {{ $project->title }}
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-4">
            <h2>About project</h2><br>
            <p>
                <strong>Description:</strong>
                {{ $project->description }}
            </p>

            <p><strong>Created at: </strong>{{ $project->created_at }}</p>
            <p><strong>Updated at: </strong>{{ $project->updated_at }}</p>
        </div>

        <div class="col-md-8">
            <h2>List of recorded tracks <span class="badge badge-secondary">{{ $project->tracks->count() }}</span></h2><br>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Started</th>
                    <th>Finished</th>
                    <th>Total</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project->tracks as $track)
                    <tr>
                        <td>{{ $track->id }}</td>
                        <td>{{ $track->started_at }}</td>
                        <td>{{ $track->finished_at }}</td>
                        {{--<td>{{ $track->finished_at - $track->started_at }}</td>--}}
{{--                        <td>{{ $track->finished_at->diff($track->started_at) }}</td>--}}
{{--                        <td>{{ date_diff(new DateTime($track->started_at), new DateTime($track->finished_at)) }}</td>--}}
                        <td>
                            <?php
                                $start = new DateTime($track->started_at);
                                $finish = new DateTime($track->finished_at);
                                echo $finish->diff($start)->format('%H:%I:%S');
                            ?>
                        </td>
                        <td>{{ $track->comment }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection