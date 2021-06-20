
@extends('layout.admin')

@section('title')
    <title>Student</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <h1 class="ml-5 p-2">Student Page</h1>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('students.create') }}" class="btn btn-primary float-right m-2">Add Student</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Card Date</th>
{{--                                <th scope="col">Active</th>--}}
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($all_student as $stu)
                                <tr>
                                    <th scope="row">{{ $stu->student_id }}</th>
                                    <td>{{ $stu->first_name }}  {{ $stu->last_name }}</td>
                                    <td>{{ $stu->birthday }}</td>
                                    <td>{{ $stu->gender }}</td>
                                    <td>{{ $stu->address }}</td>
                                    <td>{{ $stu->phone_number }}</td>
                                    <td>{{ $stu->card_expty_date }}</td>
{{--                                    <td>--}}
{{--                                        <?php--}}
{{--                                            if($stu->active == 0){--}}
{{--                                                echo 'Active';--}}
{{--                                            }else{--}}
{{--                                                echo 'Inactive';--}}
{{--                                            }--}}
{{--                                        ?>--}}
{{--                                    </td>--}}
                                    <td>
                                        <a href="{{ route('students.edit', ['id' => $stu->student_id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('students.delete', ['id' => $stu->student_id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
