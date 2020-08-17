@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">{{ trans('task.task_list_title') }}</h1>
    <div class="row justify-content-center card-body">
        <div class="col-md-8">
            @include('common.errors')
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ trans('task.add_task_header') }}
                </div>

                <div class="card-body">
                    <form action="{{ route('tasks.index') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text" 
                                class="form-control" 
                                placeholder="{{ trans('task.name') }}" 
                                name="name"
                            >
                        </div>
                        <div class="form-group">
                            <textarea 
                                name="description" 
                                placeholder="{{ trans('task.description') }}" 
                                rows="5" 
                                class="form-control"
                                ></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                {{ trans('task.create_task_button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center card-body">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ trans('task.task_list_header') }}
                </div>

                <div class="card-body">
                    @if (count($tasks) > config('constains.zero'))
                        <ul class="list-group">
                            <table class="table table-striped task-table">
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td class="table-text">
                                                <div>{{ $task->name }}</div>
                                            </td>

                                            <td>
                                            <form 
                                                action=" {{ route('tasks.destroy', $task->id) }} " 
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger float-right">
                                                    <i class="fa fa-trash"></i> 
                                                    {{ trans('task.delete') }}
                                                </button>
                                            </form>
                                            </td>

                                            <td>
                                            <form 
                                                action=" {{ route('tasks.edit', $task->id) }} " 
                                                method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-primary float-right">
                                                    <i class="fa fa-trash"></i> 
                                                    {{ trans('task.edit') }}
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
