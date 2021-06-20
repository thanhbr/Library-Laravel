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
                            <h3 class="card-title">Edit Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($edit_member as $edit_mem)
                        <form action="{{ route('members.update', ['id'=>$edit_mem->member_id] )}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName"
                                           value="{{ $edit_mem->first_name }}" name="first_name" placeholder="Enter first name">

                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName"
                                           value="{{ $edit_mem->last_name }}" name="last_name" placeholder="Enter last name">

                                    <label>Gender</label>
                                    <select name="gender" class="form-control select2" style="width: 100%;">
                                        <?php
                                            if($edit_mem->gender == '0'){
                                                echo '<option value="0" selected="selected">Female</option>
                                                        <option value="1">Male</option><option value="2">Other</option>';
                                            }else if($edit_mem->gender == '1'){
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
                                           value="{{ $edit_mem->address  }}" name="address" placeholder="Enter address">

                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                           value="{{ $edit_mem->email }}" name="email" placeholder="Enter email">

                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone"
                                           value="{{ $edit_mem->phone_number }}" name="phone_number" placeholder="Enter phone number">

                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" id="username"
                                           value="{{ $edit_mem->user_name }}" name="user_name" placeholder="Enter user name">

                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                           value="{{ $edit_mem->password }}" name="password" placeholder="Enter password">

                                    <label>Status</label>
                                    <select name="status" class="form-control select2" style="width: 100%;">
                                        <?php
                                        if($edit_mem->status == '0'){
                                            echo '<option value="0" selected="selected">Online</option>
                                                    <option value="1">Offline</option>';
                                        }else{
                                            echo '<option value="0">Online</option>
                                                    <option value="1" selected="selected">Offline</option>';
                                        }
                                        ?>
                                    </select>

                                    <label>Level</label>
                                    <select name="level" class="form-control select2" style="width: 100%;">
                                        <?php
                                        if($edit_mem->level == '0'){
                                            echo '<option value="0" selected="selected">Student</option>
                                                    <option value="1">Lecturers</option>';
                                        }else{
                                            echo '<option value="0">Student</option>
                                                    <option value="1" selected="selected">Lecturers</option>';
                                        }
                                        ?>
                                    </select>

                                    <label>Active</label>
                                    <select name="active" class="form-control select2" style="width: 100%;">
                                        <?php
                                        if($edit_mem->active == '0'){
                                            echo '<option value="0" selected="selected">Unexpired</option>
                                                    <option value="1">Expired</option>';
                                        }else{
                                            echo '<option value="0">Unexpired</option>
                                                    <option value="1" selected="selected">Expired</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
