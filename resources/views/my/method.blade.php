@extends('my.parent')

@section('title')
    <title>{{ $title }}</title>
@endsection

@section('content')
  <div>This is Method Blade.</div>
  <div>Method, Route=>any, XMLHttpRequest, fetch</div>
  <div>XMLHttpRequest</div>
  <div>
    <button onClick="xhr_method_click('GET')">get</button>
    <button onClick="xhr_method_click('POST')">post</button>
    <button onClick="xhr_method_click('PUT')">put</button>
    <button onClick="xhr_method_click('PATCH')">patch</button>
    <button onClick="xhr_method_click('DELETE')">delete</button>
    <button onClick="xhr_method_click('OPTIONS')">options</button>
  </div>
  <div>Fetch</div>
  <div>
    <button onClick="fetch_method_click('GET')">get</button>
    <button onClick="fetch_method_click('POST')">post</button>
    <button onClick="fetch_method_click('PUT')">put</button>
    <button onClick="fetch_method_click('PATCH')">patch</button>
    <button onClick="fetch_method_click('DELETE')">delete</button>
    <button onClick="fetch_method_click('OPTIONS')">options</button>
  </div>
  <div>Method = {{ $method }}</div>
@endsection