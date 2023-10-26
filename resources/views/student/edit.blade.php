<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/dist/bootstrap-5.2.3/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Edit Student</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Edit Student</h2>
                    <a href="{{ route('student_index') }}" class="btn btn-outline-success">All Students</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi delectus, maxime molestiae quis vitae?</p>
                <form action="{{ url('update_student', $student->id) }}" method="post">                    @csrf

                    <!-- First Name -->
                    <div class="mb-3">
                        <label for="First Name" class="form-label" for="first_name">First Name</label>
                        <input type="text" value="{{ $student->first_name }}" class="form-control" id="first_name" name="first_name">                    </div>

                    <!-- Last Name -->
                    <div class="mb-3">
                        <label for="Last Name" class="form-label" for="last_name">Last Name</label>
                        <input type="text" value="{{ $student->last_name }}" class="form-control" id="last_name" name="last_name">                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <label for="Last Name" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_male" id="gender_male" value="1">
                            <label class="form-check-label" for="gender_male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_male" id="gender_female" value="0">
                            <label class="form-check-label" for="gender_female">
                                Female
                            </label>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="mb-3">
                        <button type="Submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
