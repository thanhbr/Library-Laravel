@extends('layout.admin')

@section('title')
    <title>Add Borrow</title>

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
                            <h3 class="card-title">Add Borrow</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('borrows.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Student Name</label>
                                    <select name="student_borrow" class="form-control select2" style="width: 100%;">
                                        @foreach($student_borrow as $stu_bor)
                                            <option value="{{ $stu_bor->student_id }}">
                                                {{ $stu_bor->first_name }}
                                                {{ $stu_bor->last_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <label>Member Name</label>
                                    <select name="member_borrow" class="form-control select2" style="width: 100%;">
                                        @foreach($member_borrow as $mem_bor)
                                            <option value="{{ $mem_bor->member_id }}">
                                                {{ $mem_bor->first_name }}
                                                {{ $mem_bor->last_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <label for="firstName">Expiry Date</label>
                                    <input type="date" class="form-control" id="expiry_date" name="expiry_date">


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
