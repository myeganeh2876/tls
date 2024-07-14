@extends('index')

@section('content')

    <main>
        <div class="container">
            <div class="">
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-md-6">
                            <div class="featuredProjectsBox pageProject">
                                <figure class="featuredProjectsBox__img">
                                    <img src="{{ Storage::url($project->images[0]) }}"/>

                                </figure>
                                <div class="featuredProjectsBox__content">
                                    <div class="featuredProjectsBox__title">
                                        {{$project->title}}
                                    </div>
                                    <div class="featuredProjectsBox__location">
                                        <i class="icon-map"></i>
                                        <span>{{$project->location}}</span>
                                    </div>
                                    <div class="featuredProjectsBox__text">
                                        {{$project->short_description}}
                                    </div>

                                    <a href="{{route('projects.single', $project)}}" class="featuredProjectsBox__more">
                                        <i class="icon-arrow__right"></i>
                                        <span>Read more</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </main>
@endsection
