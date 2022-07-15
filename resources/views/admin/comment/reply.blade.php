<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt News')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Reply Feedback</h3>
                    </div>
                    <!-- /.card-header -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- form start -->
                    <form role="form" action="{{ Route('admin.comment.addReply',$c->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="txt-id" name="id" placeholder="1" value="{{ $c->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-id">Member Id</label>
                                <input type="text" class="form-control" id="txt-id" name="mem_id" placeholder="1" value="{{ $c->mem_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-user_name">User name</label>
                                <input type="text" class="form-control" id="txt-user_name" name="user_name" placeholder="admin" value="{{ $c->user_name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-comment">Feedback</label>
                                <input type="text" class="form-control" id="comment" name="comment" placeholder="feedback" value="{{ $c->comment }}"  >
                            </div>
                            <div class="form-group">
                                <label for="txt-reply">Reply feedback</label>
                                <input type="text" class="form-control" id="reply" name="reply" placeholder="input reply feedback" placeholder="Reply feedback" >
                            </div>
                            <div class="form-group">
                                <label for="post_date">Update Date:</label>
                                <input type="date" id="created_at" name="created_at" value="{{ $c->created_at }}">

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
        </div>
    </div>
</section>
@endsection
