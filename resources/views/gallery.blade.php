@extends('layouts.main')
@section('content')

<style>
     .img:hover{
        box-shadow: 10px 10px 20px grey ;
        transform: translate(0px,-10px);
    }
    image{
        box-shadow: 10px 10px 20px grey ;
    }
</style>
<div style="padding: 50px">
    <div class="section-top-border">
        <h3>Image Gallery</h3>
        <div class="row gallery-item">
            @php
                $galleries = \App\Models\Galleries::all()
            @endphp
            @foreach ($galleries as $gallery)
                <div class="col-md-4 img" style="padding-bottom: 40px">
                    <a href="storage/{{$gallery->images}}" class="img-pop-up image">
                        <div class="single-gallery-image" style="background: url({{'storage/'.$gallery->images}});"></div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
