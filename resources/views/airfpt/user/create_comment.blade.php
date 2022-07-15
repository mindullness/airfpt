@extends('airfpt.layout.layout')
@section('title', 'Term & Conditions')
@section('content')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<div class="container" style="padding-top: 70px; padding-bottom: 70px;">
    <br>
    <center>
        <h2>Customer Care</h2>
        <hr>
    </center>
    <div class="container">
        <div class="row">
            <div class="paragraph">
                <div>
                    <p><span style="font-size:17px;">We are continuously improving our
                            products and services offered, and your feedback is imvaluable.</span></p>
                    <p><span style="font-size:17px;">If your experience with us does not meet
                            your expectations, our Customer Services team </span><span style="color:#005caa;font-size:17px;"><strong>(028)38460846</strong></span><span style="font-size:17px;">
                            are on hand to resolve any issues as quickly as possible.</span>
                    </p>
                    <p><span style="font-size:17px;"><strong>Contact our Customer Service
                                team</strong></span></p>
                    <p><span style="font-size:17px;">• Email:&nbsp;</span><a href="mailto:customerservices@vietravelairlines.vn"><span style="font-size:17px;">customerservice@airfpt.vn</span></a><span style="font-size:17px;">&nbsp;</span>
                    </p>
                    <p><span style="font-size:17px;">• Facebook:&nbsp; </span><a href="https://www.facebook.com/VietravelAirlines.vn/"><span style="font-size:17px;">https://www.facebook.com/airfpt.vn/</span></a></p>
                    <hr>

                    <legend>Give Us Feedback</legend>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form role="form" action="{{ Route('airfpt.user.postCreate_comment') }}" method="post">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="comments">Feedback</label>
                            <textarea rows="4" id="comment" name="comment" class="form-control" placeholder="Input message"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="post_date">Post Date:</label>
                            <input type="date" id="created_at" name="created_at">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success" style=" margin-bottom: 3rem;">Send feedbacks</button>
                        </div>
                        <br>

                    </form>

                </div>
                <br>


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <h1>All Feedbacks:</h1>
                                <div class="card-body">
                                    @if(isset($comments))
                                    @foreach($comments as $c)
                                    <div class="container mt-3">

                                        <div class="media border p-3">
                                            <img src=" {{ asset('./img/trucduy/comment.png') }}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                            <div class="media-body">
                                                <h4 style="color: green;">@ {{ $c->user_name }} </h4>
                                                <p>{{ $c->comment }}</p>
                                                <div class="media p-3">
                                                    <img src=" {{ asset('./img/trucduy/comment2.png') }}" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
                                                    <div class="media-body">
                                                        <h4 style="color: blue;">@ Admin </h4>
                                                        <p> {{ $c->reply }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


</div>

@endsection
@section('script-section')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection