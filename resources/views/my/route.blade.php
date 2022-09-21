@extends('my.parent')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content')
  <div>This is Route Blade.</div>
  <div class="route">
    <ul>
      <li>
        <a href="1">1</a>
      </li>
      <li>
        <a href="2">2</a>
      </li>
      <li>
        <a href="3">3</a>
      </li>
      <li>
        <a href="4">4</a>
      </li>
      <li>
        <a href="5">5</a>
      </li>
    </ul>
  </div>
  @if ($num == 1)
    <div>The number is one.</div>
  @elseif ($num == 2)
    <div>The number is two.</div>
  @else
    <div>The number is {{ $num }}.</div>
  @endif
@endsection