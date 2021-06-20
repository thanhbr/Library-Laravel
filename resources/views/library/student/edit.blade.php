@extends('layout.admin')

@section('title')
    <title>Edit Student</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row" style="display:flex; justify-content: center;">
                    <div class="card card-primary m-5" style="width: 50%">
                        <div class="card-header">
                            <h3 class="card-title">Edit Student</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($edit_student as $edit_stu)
                        <form action="{{ route ('students.update', ['id' => $edit_stu->student_id]) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName"
                                           name="first_name" value="{{ $edit_stu->first_name }}" placeholder="Enter first name">

                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName"
                                           name="last_name" value="{{ $edit_stu->last_name }}" placeholder="Enter last name">

                                    <label for="birthday">Birthday</label>
                                    <input type="date" class="form-control" id="birthday"
                                           value="{{ $edit_stu->birthday }}" name="birthday">

                                    <label>Gender</label>
                                    <select name="gender" class="form-control select2" style="width: 100%;">
                                        <?php
                                        if($edit_stu->gender == '0'){
                                            echo '<option value="0" selected="selected">Female</option>
                                                        <option value="1">Male</option><option value="2">Other</option>';
                                        }else if($edit_stu->gender == '1'){
                                            echo '<option value="0">Female</option>
                                                        <option value="1" selected="selected">Male</option><option value="2">Other</option>';
                                        }else{
                                            echo '<option value="0">Female</option>
                                                        <option value="1">Male</option><option value="2" selected="selected">Other</option>';
                                        }
                                        ?>
                                    </select>

                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address"
                                           value="{{ $edit_stu->address }}" name="address">

                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone"
                                           value="{{ $edit_stu->phone_number }}" name="phone_number">

                                    <label for="card">Card Date</label>
                                    <input type="date" class="form-control" id="card-date"
                                           value="{{ $edit_stu->card_expty_date }}" name="card_expty_date">

{{--                                    <label>Active</label>--}}
{{--                                    <select value="{{ $edit_stu->active }}"  name="active" class="form-control select2" style="width: 100%;">--}}
{{--                                        <option value="0">Active</option>--}}
{{--                                        <option value="1">Inactive</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
