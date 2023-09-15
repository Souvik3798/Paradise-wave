@extends('layouts.main')
@section('content')
     <!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_4" style="background-image: url({{asset('storage/'.$activity->image)}}); background-size: cover">
        <div class="container" >
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{$activity->name}}</h3>
                        <p>Activity to visit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

     <!--================Blog Area =================-->
     <section class="blog_area single-post-area section-padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                 <div class="single-post">

                    <div class="blog_details">
                       <h2>Description</h2>
                       <ul class="blog-info-link mt-3 mb-4">
                          <li><a><i class="fa fa-clock-o"></i> {{date('F d ,Y',strtotime($activity->created_at))}}</a></li>
                       </ul>
                       <p class="excert">
                         {{$activity->description}}
                       </p>

                    </div>
                 </div>
              </div>


              <div class="col-lg-4">
                 <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget popular_post_widget">
                       <h3 class="widget_title">Recent Post</h3>
                        @php
                            $activitys = \App\Models\Activities::all();
                        @endphp
                        @foreach ($activitys as $activityd)
                            <div class="media post_item">
                                <img height="70px" style="border-radius: 10%" src={{asset('storage/'.$activityd->image)}} alt="{{$activityd->name}}">
                                <div class="media-body">
                                <a href={{url('activity/'.$activityd->id)}}>
                                    <h3>{{$activityd->name}}</h3>
                                </a>
                                <p>{{date('F d ,Y',strtotime($activityd->created_at))}}</p>
                                </div>
                            </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tags</h4>
                        <ul class="list">
                           @foreach ($activity->tags as $tags)
                                <li>
                                    <a>{{$tags}}</a>
                                </li>
                           @endforeach


                        </ul>
                     </aside>

                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--================ Blog Area end =================-->

@endsection
