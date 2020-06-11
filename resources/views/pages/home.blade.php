@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 text-center">
      <h4>{{ $title }}</h4>
    </div>
    <div class="medium-6 columns">
      <img class="thumbnail" src="{{ asset($image) }}">
    </div>
    <div class="medium-6 large-5 columns">
      {!! $content !!}
    </div>
</div>
@endsection

@section('featured')
    {{-- hier kan extra featerues toevegoen --}}
@endsection
