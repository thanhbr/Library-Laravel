
@extends('layout.admin')

@section('title')
    <title>Member</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <h1 class="ml-5 p-2">Member Page</h1>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('members.create') }}" class="btn btn-primary float-right m-2">Add Member</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Level</th>
                                <th scope="col">Active</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_member as $mem)
                                <tr>
                                    <th scope="row">{{$mem->member_id}}</th>
                                    <td>{{ $mem->first_name }} {{ $mem->last_name }}</td>
                                    <td>
                                        <?php
                                            if($mem->gender == '0'){
                                                echo 'Female';
                                            }else if($mem->gender == '1'){
                                                echo 'Male';
                                            }else{
                                                echo 'Other';
                                            }
                                        ?>
                                    </td>
                                    <td>{{ $mem->address }}</td>
                                    <td>{{ $mem->email }}</td>
                                    <td>{{ $mem->phone_number }}</td>
                                    <td>
                                        <?php
                                        if($mem->status == '0'){
                                            echo 'Online';
                                        }else{
                                            echo 'Offline';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($mem->level == '0'){
                                            echo 'Student';
                                        }else{
                                            echo 'Lecturers';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($mem->active == '0'){
                                            echo 'Unexpired';
                                        }else{
                                            echo 'Expired';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="{{ route('members.edit' , ['id' => $mem->member_id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('members.delete' , ['id' => $mem->member_id]) }}" class="btn btn-danger">Delete</a>
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
