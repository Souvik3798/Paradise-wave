@extends('layouts.main')
@section('content')
    <!-- header-end -->
    <div class="destination_banner_wrap overlay" style="background-image: url({{asset('storage/'.$packages->image)}})">
        <div class="destination_text text-center">
            <h3>{{$packages->name}}</h3>
            <p>{{$packages->type}}</p>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <p>{{$packages->description}}</p>
                        @foreach ($packages->days as $day)
                            <div class="single_destination">
                                @if($day['days']<10)
                                    <h4>Day - 0{{$day['days']}}</h4>
                                @else
                                    <h4>Day - {{$day['days']}}</h4>
                                @endif
                                <header><strong>{{$day['title']}}</strong></header>
                                <p>{{$day['Description']}}</p>
                            </div>
                        @endforeach

                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Review</h3>
                        @if (session('success'))
                            <span style="color: green">{{session('success')}}</span>
                        @endif
                        @if (session('error'))
                            <span style="color: red">{{session('error')}}</span>
                        @endif
                        <form action={{url('comment')}} method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input name="email" type="email" placeholder="Email">
                                        <input type="hidden" name="packages_id" value="{{$packages->id}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="comment" id="" cols="30" rows="10"placeholder="Review" ></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
