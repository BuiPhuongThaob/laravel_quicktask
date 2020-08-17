@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{ trans('task.show_task_title') }}</h1>
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ $task->name }}
                </div>

                <div class="card-body">
                    {{ $task->description->description }}
                </div>

                <div class="card-body">
                    <a href="{{ route('tasks.index') }}" class="btn btn-info my-2">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
