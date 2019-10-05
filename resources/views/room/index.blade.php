@extends('layouts.app')

@section('content')
<h1>Index</h1>
@endsection

@extends('layouts.main')

@section('title','Tasks Home')

        @foreach($rooms as $room)
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        {{ $room->rooms }}
                        <h4> Due Date: <small> {{ $room->created_at }}</small> </h4>
                    </h2>

                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE']) !!}
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    {!! Form::close() !!}
                    <hr>
                </div>
            </div>

        @endforeach

    @endif




