@extends('admin.layout.index')

@section('content')
    <section class="content-header">
        <h1>
            Application List
            <small>All Current submitted Application</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Application</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="box-title">Application List</div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Registrant Name</th>
                        <th>Registrant Category</th>
                        <th>Registrant Status</th>
                        <th>Connection Type</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    @foreach($applications as $apps)
                        <tr>
                            <td>{{$apps->id}}</td>
                            <td>{{$apps->name}}</td>
                            <td>{{$apps->category}}</td>
                            <td>{{$apps->status}}</td>
                            <td>{{$apps->connection_type}}</td>
                            <td>{{$apps->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{action('AdminController@getEditApplication',$apps->id)}}" class="btn btn-xs btn-info">Edit</a>
                                    <a href="{{action('AdminController@getDeleteApplication')}}" class="btn btn-xs btn-danger confirm">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection