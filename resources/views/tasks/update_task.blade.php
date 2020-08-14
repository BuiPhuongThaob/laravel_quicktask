@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">UPDATE TASK</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Update task
                </div>

                <div class="card-body">
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text" 
                                class="form-control" 
                                placeholder="Name" 
                                name="name"
                            >
                        </div>
                        <div class="form-group">
                            <textarea 
                                name="description" 
                                placeholder="Description" 
                                cols="5" rows="5" 
                                class="form-control">
                            </textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                Update Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
