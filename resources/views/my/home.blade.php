@extends('my.parent')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content')
  <div>This is Home Blade.</div>
  <div>Blade, Route=>View, Parameter, For.</div>
  @for ($i = 0; $i < 10; $i++)
    <div>The current value is {{ $i }}</div>
  @endfor
@endsection