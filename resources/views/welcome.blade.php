@extends('layouts.main')
@section('content')

<style>
    .img:hover{
        box-shadow: 10px 10px 20px grey ;
        transform: translate(0px,-10px);
    }
</style>

<div class="slider_area">
    <div class="slider_active owl-carousel">
        @php
            $banners = \App\Models\Banners::all();
        @endphp
        @foreach ($banners as $banner)
            <div class="single_slider  d-flex align-items-center overlay" style="background-image: url({{asset('storage/'.$banner->banner)}})">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>{{$banner->title}}</h3>
                                <p>{{$banner->tagline}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title mb_70" style="text-align: center">
                        <h3 style="text-align: center">Activities</h3>
                        <p>Embrace the thrill of adventure as uou explore a world of exciting activities. Dive into unforgettable experiences that go beyond the ordinary. Whether it's scaling towering peaks, diving into crystal clear waters, or immersing in vibrant cultures, our activities are designed to ignite your sense of wonder.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $activities = \App\Models\Activities::all();
                @endphp
                @foreach ($activities as $activity)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src={{asset('storage/'.$activity->image)}} alt="">
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center">{{$activity->name}} <a href="{{url('activity/'.$activity->id)}}">
                                    @php
                                        $c=1;
                                    @endphp
                                    @foreach ($activity->tags as $tags)
                                    @if($c<count($activity->tags))
                                        {{$tags.' ,'}}
                                        @php
                                            $c++
                                        @endphp
                                    @else
                                        {{$tags}}
                                    @endif
                                    @endforeach
                                </a> </p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Packages Available</h3>
                        <p>Explore a world of captivating experiences with our diverse range of packages tailored to your desires. Whether you seek the romantic allure of our honeymoon getaways, the thrill of adventure in our action-packaed itineraries, or the tranquility of a beachfront escape, our packages offer something for every traveller.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @php
                    $packages = App\Models\Packages::all()->take(6);
                @endphp
                @foreach ($packages as $package)
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single_place img">
                            <div class="thumb">
                                <img src={{asset('storage/'.$package->image)}} alt="{{$package->name}}">
                                <a href="#" class="prise">
                                    @if ($package->price!='')
                                        {{$package->price}}
                                    @else
                                        Price on Demand
                                    @endif
                                </a>
                            </div>
                            <div class="place_info">
                                <a href={{url('detail/'.$package->id)}}><h3>{{$package->name}}</h3></a>
                                <p>{{$package->type}}</p>
                                <div class="rating_days d-flex justify-content-between">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        @php
                                            $total = App\Models\Posts::where('packages_id',$package->id)->get()->take(10)

                                        @endphp
                                        <a href="#">({{count($total)}} Review)</a>
                                    </span>
                                    <div class="days">
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#">{{date('F d Y',strtotime($package->created_at))}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn" href="{{url('packages')}}">More Packages  <span class="fa fa-right-arrow"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        @php
                            $posts = \App\Models\Posts::all()->inRandomOrder();
                        @endphp
                        @foreach ($posts as $post)
                            <div class="single_carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="single_testmonial text-center">
                                            <div class="author_thumb">
                                                <img height="100px" src="https://static-00.iconduck.com/assets.00/user-icon-1024x1024-dtzturco.png" alt="">
                                            </div>
                                            <p>"{{$post->comment}}"</p>
                                            <div class="testmonial_author">
                                                <h3>- {{$post->name}}</h3>
                                                <a href="{{url('detail/'.$post->packages->id)}}"> <p>- {{$post->packages->name}}</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Cruise</h3>
                        <p>Cruise availability in the <strong>{{str_replace('_',' ',env('APP_NAME'))}}</strong> offers travellers a convinient and scenic way to navigate the archipelago's stunning destinations. With several reputable cruise operators, such as Makruzz, Green Ocean and Coastal Cruise, visitors can choose from various classes and routes to suit their preferences and budgets.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @php
                    $cruzs = \App\Models\Ferries::all()
                @endphp
                @foreach ($cruzs as $cruz)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_trip img" style="border-radius: 10px;text-align: center">
                            <div class="thumb ">
                                <img src={{asset('storage/'.$cruz->image)}} alt="{{$cruz->name}}">
                            </div>
                            <div class="info">
                                {{-- <div class="date">
                                    <span>Oct 12, 2019</span>
                                </div> --}}
                                <a href="#">
                                    <h3>{{$cruz->name}}</h3>
                                </a>
                            </div>
                        </div>
                </div>
                @endforeach

        </div>
    </div>


    <div class="recent_trip_area">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Places</h3>
                        <p><strong>{{str_replace('_',' ',env('APP_NAME'))}}</strong> welcomes you to discover the enchanting beauty of the Andaman and Nicobar Islands through our carefully crafted tours. Explore the captivating wonders of Shaheed Dweep, known for its pristine beaches and vibrant marine life, or embark on a cultural journey in Port Blair.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @php
                    $places = \App\Models\Places::all()->take(6)
                @endphp
                @foreach ($places as $place)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_trip img" style="border-radius: 10px;text-align: center;border-bottom-left-radius: 50%;border-bottom-right-radius: 50%">

                            <div class="info" style="padding-bottom: 15px">
                                {{-- <div class="date">
                                    <span>Oct 12, 2019</span>
                                </div> --}}
                                <a href={{url('place/'.$place->id)}}>
                                    <h3>{{$place->name}}</h3>
                                </a>
                            </div>
                            <div class="thumb">
                                <img style="border-radius: 50%" src={{asset('storage/'.$place->image)}} alt="{{$place->name}}">
                            </div>
                        </div>
                </div>
                @endforeach

        </div>
        <div class="row" style="margin-bottom: 50px">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">

                </div>
            </div>
        </div>
    </div>

@endsection
