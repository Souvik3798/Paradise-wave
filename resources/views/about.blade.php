@extends('layouts.main')
@section('content')


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                        <p>Lets know something about Paradise Waves</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">

                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <header>
                                            <h1>Welcome to {{str_replace('_',' ',env('APP_NAME'))}}: Your Gateway to Unforgettable Journeys</h1>
                                        </header>

                                        <main>
                                            <section>
                                                <h2>Our Vision</h2>
                                                <p>Our vision is simple yet profound: to transform your travel aspirations into reality. With a passion for exploration, an unwavering commitment to quality, and a dedication to personalized service, we've embarked on a mission to redefine the way you travel. Whether you're seeking an opulent escape, an adventurous expedition, a romantic getaway, or a cultural immersion, Paradise Waves is here to make it happen.</p>
                                            </section>

                                            <section>
                                                <h2>What Sets Us Apart</h2>
                                                <ul>
                                                    <li><strong><h4>Tailored Experiences:</h4></strong> We understand that no two travelers are alike, and neither should their journeys be. Our team of experienced travel experts specializes in crafting bespoke itineraries that align perfectly with your desires, preferences, and budget.</li><br><br>
                                                    <li><strong><h4>Hotel Booking Excellence:</h4></strong> Paradise Waves has established partnerships with the finest hotels and resorts across the globe. We ensure that your accommodation is not just a place to stay but an integral part of your overall travel experience.</li><br><br>
                                                    <li><strong><h4>Seamless Travel Arrangements:</h4></strong> Leave the logistics to us. From flights to ground transportation, visas to travel insurance, we handle every detail, allowing you to focus on savoring every moment of your adventure.</li><br><br>
                                                    <li><strong><h4>Boat Tickets & Beyond:</h4></strong> As a travel agency that leaves no stone unturned, we even offer boat tickets for those seeking aquatic adventures. Explore hidden islands, coastal wonders, or take a romantic cruise—all with the ease of Paradise Waves.</li><br><br>
                                                    <li><strong><h4>Price on Demand:</h4></strong> Our unique feature, "Price on Demand," empowers you to set your budget, and we create a tailor-made package that aligns with it. No more compromising on your travel dreams; we adapt to your financial comfort.</li><br><br>
                                                </ul>
                                            </section>
                                        </main>

                                        <footer>
                                            <p>Your adventure awaits—contact us today to start planning your next extraordinary journey.</p>
                                        </footer>



                                    </div>
                                </div>
                            </div>
                            <div class="story_thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="thumb padd_1">
                                            <img src="https://images.unsplash.com/photo-1587920699329-642cdce3d43d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGFuZGFtYW4lMjBhbmQlMjBuaWNvYmFyJTIwaXNsYW5kcyUyMGluZGlhfGVufDB8fDB8fHww&w=1000&q=80" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumb">
                                            <img src="https://hindishayariweb.com/wp-content/uploads/andaman.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3  class="counter">378</h3>
                                            <p>Tour has done successfully</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">4   </h3>
                                            <p>Yearly tour arrange</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">2263</h3>
                                            <p>Happy Clients</p>
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
                                            $total = App\Models\Posts::where('packages_id',$package->id)->get()->take(5)

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
                        <a class="boxed-btn" href="#">More Packages  <span class="fa fa-right-arrow"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
