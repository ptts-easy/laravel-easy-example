@extends('my.parent')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content')
  <div>This is Controller Blade.</div>
  @verbatim
  <div>Controller, Route=>get(MyController::class), trait</div>
  @endverbatim
  @include('my.include')
@endsection