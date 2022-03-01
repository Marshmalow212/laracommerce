@extends('components.master')
@section('content')
<section id="create__form">
    <div class="container">
        <div class="row col-md-6">
            <h1 class="text-center mb-4 mt-2">Slider Details</h1>
            <dl class="row">

                {{--@foreach($slider as $item )--}}
                <dt class="col-sm-4">Title</dt>
                <dd class="col-sm-5">{{$slider->title}}</dd>
            </dl>
            <dl class="row">

                {{--@foreach($slider as $item )--}}
                <dt class="col-sm-4">Subtitle</dt>
                <dd class="col-sm-5">{{$slider->subtitle}}</dd>
            </dl>
            <dl class="row">

                {{--@foreach($slider as $item )--}}
                <dt class="col-sm-4">Image</dt>
                <dd class="col-sm-5">{{$slider->image}}</dd>
            </dl>
            <dl class="row">

                {{--@foreach($slider as $item )--}}
                <dt class="col-sm-4">Status</dt>
                <dd class="col-sm-5">{{$slider->status}}</dd>
            </dl>
            <dl class="row">

                {{--@foreach($slider as $item )--}}
                <dt class="col-sm-4">Price</dt>
                <dd class="col-sm-5">{{$slider->price}}</dd>
            </dl>

            {{--@endforeach--}}


        </div>
    </div>
</section>
@endsection