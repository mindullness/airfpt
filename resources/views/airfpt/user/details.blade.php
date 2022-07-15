@extends('airfpt.layout.layout')
@section('title', 'Term & Conditions')
@section('content')



<section class="content light-grey" style="padding-top: 70px; padding-bottom: 70px;"> 


    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">
        <br>

        <div class="w3-row" class="w3-card-4 w3-margin w3-white ">


            <div class="container-fluid text-center">
                <div class="row content">
                    <div class="col-sm-2 ">

                    </div>
                    <div class="col-sm-8 " style="background-color: whitesmoke">
                        <div class="w3-card-4 w3-margin w3-white">

                            <div class="w3-container">
                                <p><span class="w3-opacity" style="text-align: left;">Ho Chi Minh, {{$n->created_at}}</span></p>
                                <h1 style="text-align: center;"><b>{{$n->topic}}</b></h1>
                                <h2 style="text-align: center;">{{$n->title}}</h2>

                            </div>

                            <div class="w3-container">
                                <p style="text-align: left;">{!!$n->content!!}</p>
                                <div class="w3-row">


                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-2 ">

                        </div>
                </div>

                <!-- END GRID -->
            </div><br>

            <!-- END w3-content -->
        </div>



</section>
@endsection

@section('script-section')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection