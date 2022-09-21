@extends('my.parent')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content')
  <div>This is View Blade.</div>
  @verbatim
  <div>View, Route=>get, Escape @, @include</div>
  @endverbatim
  @include('my.include')
@endsection