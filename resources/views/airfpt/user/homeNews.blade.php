@extends('airfpt.layout.layout')
@section('title', 'Term & Conditions')
@section('content')
<div style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container" style="max-width:900px">
        <h2 style="background-color: #FDF4A8; text-align: center; margin-top: 20px; margin-bottom: 20px;"><b> Discover the news of Air FPT </b></h2>
        <div class="row">

            @foreach($allNews as $news)
            <div class="col-lg-6 col-md-6">

                <div>
                    <a href="{{  route('airfpt.user.details',$news->id) }}"><img src="{{ url('./img/trucduy/'.$news->image) }}" style="width:100%" class="mx-auto d-block" alt=""></a>
                </div>
                <div style="background-color: #6F55E4; text-align: center; color: whitesmoke;">
                    <p style="font-size: 20px;">{{ $news->topic }}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>

@endsection @section('script-section') <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection