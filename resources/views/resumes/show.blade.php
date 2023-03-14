@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-inline-flex">
    <div>
        <img style="width: 120px;" src="{{ $resume->picture }}">
    </div>
    <div class="ms-4">
        <h1>{{ $resume->title }}</h1>
    <div>
        <h2>{{ $resume->name }}</h2>
    </div>
    <div class="d-infline-flex">
        <div class="font-weight-bold">
            <a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a>
        </div>
    </div>
    <div class="d-infline-flex">
        <div class="font-weight-bold">
            <a href="{{ $resume->website }}">{{ $resume->website }}</a>
        </div>
    </div>
    </div>
</div>

  @if(isset($resume->about))
    <div class="mt-3">
        <p class="font-weight-bold">{{ $resume->about }}</p>
    </div>
  @endif
</div>
@endsection