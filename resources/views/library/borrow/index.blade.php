
@extends('layout.admin')

@section('title')
    <title>Borrow</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <h1 class="ml-5 p-2">Borrow Page</h1>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('borrows.create') }}" class="btn btn-primary float-right m-2">Add Borrow</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Member Name</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_borrow as $bor)
                                <tr>
                                    <th scope="row">{{ $bor->borrow_id }}</th>
                                    <td>{{ $bor->first_name }} {{ $bor->last_name }}</td>
                                    <td>{{ $bor->expiry_date }}</td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
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
