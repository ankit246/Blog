@extends('layouts.blog')


@component('_partials.blog-header')
<div class="site-heading">
  @slot('url')
       {{asset('img/'.$about->image)}}
  @endslot
  <h1>{{$about->title}}</h1>
<span class="subheading">{{$about->sub_title}}</span>
</div>
@endcomponent
@section('content')
<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {{$about->content}}
        </div>
      </div>
    </div>
@endsection