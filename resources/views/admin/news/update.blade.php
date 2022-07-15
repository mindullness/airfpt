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
                        <h3 class="card-title">Update {{ $n->topic }}</h3>
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
                    <form role="form" action="{{ Route('admin.news.postUpdate',$n->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="txt-id" name="id" placeholder="1" value="{{ $n->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Topic</label>
                                <input type="text" class="form-control" id="txt-topic" name="topic" placeholder="Input Topic" value="{{ $n->topic }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-title">Title</label>
                                <input type="text" class="form-control" id="txt-title" name="title" placeholder="input Title" value="{{ $n->title }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                 <textarea style="resize: none;" class="form-control" rows="8" name="content" id="content" placeholder="Enter ..." ><input value=" {!!$n->content!!}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post_date">Update Date:</label>
                                <input type="date" id="created_at" name="created_at" value="{{ $n->created_at }}">

                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img class="img-fluid" src="{{ url('img/trucduy/'.$n->image) }}" />
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                </div>
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
@section('script-section')
<script>
        DocumentEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection