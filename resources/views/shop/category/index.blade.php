@extends('layout.admin')

@section('title')
    <title>Category</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary float-right m-2">Add Category</a>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Parent id</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $category)

                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->paren_id }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>

                    <div class="col-md-12">
                        {{ $categories->links() }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
