@extends('layout.admin')

@section('title')
    <title>Add Menu</title>

@endsection



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route ('menus.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Menu Name</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Input Menu Name">
                            </div>

                            <div class="form-group">
                                <label >Select parent menu</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Select parent menu</option>
                                    {!! $optionSelect !!}
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
