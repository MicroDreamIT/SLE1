@extends('layouts.app')


@section('content')


    <div class="container">
        @include('common.errors')
        <form action="{{ url('tasks')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                </div>
            </div>

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-int" class="col-sm-3 control-label">TaskInt</label>

                <div class="col-sm-6">
                    <input type="number" name="value" id="value" class="form-control" value="{{ old('value') }}">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Add Task
                    </button>
                </div>
            </div>
        </form>

        <hr>
        <ul class="list-group">

            @foreach($tasks as $task)

                <li class="list-group-item">
                    <p>name: {{$task->name}}</p>
                    <p>value: {{$task->value}}</p>
                </li>


            @endforeach

        </ul>


    </div>


@endsection