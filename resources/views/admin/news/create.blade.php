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
                        <h3 class="card-title">Create News Destination</h3>
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
                    <form role="form" action="{{ Route('admin.news.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                           
                            <div class="form-group">
                                <label for="txt-topic">News Topic</label>
                                <input type="text" class="form- control" id="topic" name="topic" placeholder="Input Topic">
                            </div>
                            <div class="form-group">
                                <label for="txt-title">News Title</label>
                                <input type="text" class="form- control" id="title" name="title" placeholder="Input title">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                 <textarea style="resize: none;" class="form-control" rows="4" name="content" id="content" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post_date">Post Date:</label>
                                <input type="date" id="created_at" name="created_at"> 

                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection