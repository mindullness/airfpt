<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.layout')
@section('title', 'AirFpt Aircrafts')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-info mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Update {{$acrt->name}} Airport</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('admin.aircrafts.postUpdate', $acrt->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">A/C ID</label>
                                <input readonly value="{{$acrt->id}}" id="id" name="id" type="text" class="form-control" placeholder="{{$acrt->id}}">
                            </div>
                            <div class="form-group">
                                <label for="reg">A/C REGISTRATION</label>
                                <input value="{{$acrt->reg}}" type="text" class="form-control" id="reg" name="reg" placeholder="Aircraft Registration">
                                @error('reg')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="config">A/C CONFIGURATION</label>
                                <input value="{{$acrt->config}}" type="text" class="form-control" id="config" name="config" placeholder="Configuration">
                                @error('config')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="type">A/C TYPE</label>
                                <input value="{{$acrt->type}}" type="text" class="form-control" id="type" name="type" placeholder="Aircraft Type">
                                @error('type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">A/C TYPE</label>
                                <input value="{{$acrt->image}}" type="text" class="form-control" id="image" name="image" placeholder="Aircraft Image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
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