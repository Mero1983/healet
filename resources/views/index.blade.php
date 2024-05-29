@extends('layouts.main')


@include('includes.header')



@section('content')


  <!-- slider section -->
  @include('includes.slider')
  <!-- end slider section -->

  <!-- shop section -->
@include('includes.shopSection')

  <!-- end shop section -->

  <!-- about section -->

@include('includes.about')


  <!-- end about section -->

  <!-- offer section -->

@include('includes.offer')
  <!-- end offer section -->

  <!-- blog section -->

  @include('includes.blog')

  <!-- end blog section -->

  <!-- client section -->

  @include('includes.clients')

  <!-- end client section -->



  <!-- end info_section -->
  @endsection