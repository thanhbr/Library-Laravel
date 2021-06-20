@extends('layout.admin')

@section('title')
    <title>Add Category</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route ('categories.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Input Category Name">
                            </div>

                            <div class="form-group">
                                <label >Select parent category</label>
                                <select class="form-control"
                                        name="paren_id">
                                    <option value="0">Select parent category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
