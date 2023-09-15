@extends('layouts.main')
@section('content')
     <!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Packages</h3>
                        <p>Packages to Explore </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->




    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <form action={{route('packages')}} method="Post" class="filter_bordered">
                            @csrf
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select name="search">
                                                <option data-display="Travel type">Travel type</option>
                                                <option value="Honeymoon">Honeymoon</option>
                                                <option value="Solo">Solo</option>
                                                <option value="Family">Family</option>
                                                <option value="Group">Group</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="reset_btn">
                                <button class="boxed-btn4" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">


                        @foreach ($packages as $package)
                            <div class="col-lg-6 col-md-6 ">
                                <div class="single_place img">
                                    <div class="thumb">
                                        <img src={{asset('storage/'.$package->image)}} alt="">
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
                                                    $total = App\Models\Posts::where('packages_id',$package->id)->get()
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

                </div>
            </div>
        </div>
    </div>

        <!-- newletter_area_start  -->
        <div class="newletter_area overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="newsletter_text">
                                    <h4>Subscribe Our Newsletter</h4>
                                    <p>Subscribe newsletter to get offers and about
                                        new places to discover.</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mail_form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-9 col-md-8">
                                            <div class="newsletter_field">
                                                <input type="email" placeholder="Your mail" >
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="newsletter_btn">
                                                <button class="boxed-btn4 " type="submit" >Subscribe</button>
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
        <!-- newletter_area_end  -->
@endsection
