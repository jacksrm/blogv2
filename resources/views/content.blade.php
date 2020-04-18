@extends('index')

@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0&appId=2803987703053963&autoLogAppEvents=1"></script>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"> {{$post->title}} </h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $post->author }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>{{ $post->created_at->diffForHumans() }}</p>

        <hr>

        <!-- Preview Image -->

        <hr>
          
          {!! $post->content !!}

        <hr>


        <div class="fb-like" data-href="{{Request::url()}}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
        <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10" data-width=""></div>
    
@endsection

