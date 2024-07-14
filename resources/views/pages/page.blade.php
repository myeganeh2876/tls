@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="pages">
                <div class="pages__wrapper">
                    {!! $page->content !!}
                </div>
            </section>
        </div>
    </main>

@endsection
