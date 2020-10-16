@extends('layouts.site-layout')

@section('content')
    <div class="jumbotron  text-white bg-dark" style="background-image: url({{asset('images/case.jpg')}}); background-size: cover;">

        <h2 class="display">Blogs</h2>
        <p class=" my-3">Know us from what we have to say.
        </p>

    </div>

    <div class="container">

        <div class="row mb-2">

            @foreach($blogs as $blog)

            <div class="col-md-6" id="case1">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h5 class="mb-0">{{$blog->title}}</h5>
                        <br>
                        <p class="card-text mb-auto">
                            @if(strlen($blog->content) > 50)
                                {{ substr($blog->content, 0, 50) }}
                                ....
                            @else
                                {{$blog->content}}
                            @endif
                        </p>
                        <br>
                        <a href="{{route('site.single.blog', [$blog->id])}}"><div class="btn btn-sm btn-primary">Read More</div></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('images/'.$blog->image)}}" alt="" width="200" style="min-height:250px;object-fit: cover;object-position: center" class="img-fluid">
                    </div>
                </div>
            </div>

                @endforeach


        </div>

    </div>
    @endsection