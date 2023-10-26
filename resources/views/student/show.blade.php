<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>
        Student:
        @if($student)
            {{ $student->first_name }} {{ $student->last_name }}
        @else
            Not Found
        @endif
    </title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if($student)
                    <!-- Valid Student -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Student: <span class="text-success">{{ $student->first_name }} {{ $student->last_name }}</span></h2>
                        <a href="{{ route('student_index') }}" class="btn btn-outline-success">All Students</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fuga, illo nesciunt quas rem soluta.</p>
                    <table class="table table-hover table-student-info">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{ $student->id }}</td>
                            </tr>
                            <tr>
                                <td>First name</td>
                                <td>{{ $student->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>{{ $student->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    @if($student->is_male)
                                        <span>Male</span>
                                    @else
                                        <span>Female</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @else
                    <!-- Invalid Student -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="text-danger">Student Not Found</h2>
                        <a href="{{ route('student_index') }}" class="btn btn-outline-success">All Students</a>
                    </div>
                @endif
                <td> <a href="edit_record/{{$student->id}}" class="btn btn-primary">Edit</a>  </td> 
                <td> <a href="delete_record/{{$student->id}}" class="btn btn-danger">Delete</a> </td>
            </div>
        </div>
    </div>
</body>
</html>
