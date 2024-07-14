@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="package">
                <div class="package__text">
                    {{__('texts.packages_description')}}
                </div>
                <div class="row">
                    @foreach($packages as $package)
                        <div class="col-sm-6 col-lg-4 mb-3">
                            <div class="packageBox">
                                <div class="packageBox__head">
                                    <div class="packageBox__name">
                                        {{$package->title}}
                                    </div>
                                    <div class="packageBox__icon">
                                    <span class="icon-star"><span class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></span>
                                    </div>
                                </div>
                                <div class="packageBox__wrpaerTag">
                                    <div class="packageBox__tag">
                                    <span>
                                        {{$package->pricing}}
                                    </span>
                                    </div>
                                </div>
                                <div class="packageBox__text">
                                    {{$package->description}}
                                </div>
                                <div class="packageBox__more">
                                    <a href="{{route('page', 'contact-us')}}" class="packageBox_btn btnAnimation">
                                    {{__('texts.contact_us')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </section>
        </div>
    </main>

@endsection
