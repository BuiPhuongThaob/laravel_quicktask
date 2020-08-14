@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{ trans('task.update_task_title') }}</h1>
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ trans('task.update_task_header') }}
                </div>

                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="name"
                                value="{{ $task->name }}">
                        </div>
                        <div class="form-group">
                            <textarea 
                                name="description" 
                                rows="5" 
                                class="form-control"
                                placeholder="{{ $task->description->description }}"
                                >{{ $task->description->description }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                {{ trans('task.update_task_button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
