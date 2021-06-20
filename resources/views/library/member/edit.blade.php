@extends('layout.admin')

@section('title')
    <title>Add Member</title>

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
                            <h3 class="card-title">Add Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('members.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name">

                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name">

                                    <label>Gender</label>
                                    <select name="level" class="form-control select2" style="width: 100%;">
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>
                                        <option value="2">Other</option>
                                    </select>

                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address"  name="address" placeholder="Enter address">

                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">

                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Enter phone number">

                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" id="username"  name="user_name" placeholder="Enter user name">

                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password">

                                    <label>Status</label>
                                    <select name="status" class="form-control select2" style="width: 100%;">
                                        <option value="0" selected="selected">Offline</option>
                                        <option value="1">Online</option>
                                    </select>

                                    <label>Level</label>
                                    <select name="level" class="form-control select2" style="width: 100%;">
                                        <option value="0" selected="selected">Student</option>
                                        <option value="1">Lecturers</option>
                                    </select>

                                    <label>Active</label>
                                    <select name="active" class="form-control select2" style="width: 100%;">
                                        <option value="0" selected="selected">Unexpired</option>
                                        <option value="1">Expired</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
