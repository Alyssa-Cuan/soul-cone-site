@extends('app')
@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- Create student Form... -->
        <!-- New student Form -->
        <form action="/student" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- student Name -->
            <div class="form-group">
                <label for="student" class="col-sm-3 control-label">Student</label>

                <div class="col-sm-6">
                    <input type="text" name="first_name" id="student-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="last_name" id="student-name" class="form-control">
                </div>
            </div>

            <!-- Add student Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add student </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current students -->
    @if (count($students) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current students
            </div>

            <div class="panel-body">
                <table class="table table-striped student-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>student</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <!-- student Name -->
                            <td class="table-text">
                                <div>{{ $student->first_name }}</div>
                                <div>{{ $student->last_name }}</div>
                            </td>

                                <!-- Delete Button -->
                            <td>
                                <form action="{{ url('student/'.$student->id) }}" method="POST">
                                    {{ csrf_field() }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection