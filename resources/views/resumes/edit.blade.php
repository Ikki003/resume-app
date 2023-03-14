@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit resume</div>

        <div class="card-body">
          <form method="POST" action="{{ route('resumes.update', $resume->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="title">Title</label>

                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $resume->title }}" required autocomplete="title" autofocus>

                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
              <label for="name">Name</label>

                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $resume->user->name }}" required autocomplete="name" autofocus>

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>

                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $resume->email }}" required autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
              <label for="website">Website</label>

                <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') ?? $resume->website }}" required autocomplete="website" autofocus>

                @error('website')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
              <label for="picture">Picture</label>

                <input type="file" class="form-control @error('picture') is-invalid @enderror" name="picture">

                @error('picture')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
              <label for="about">About</label>

                <textarea class="form-control @error('about') is-invalid @enderror" name="about">{{ old('about') ?? $resume->about }}</textarea>

                @error('about')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div  class="mt-4">
              <skills :skills="{{ $resume->skills ?? '[]' }}"/>
            </div>

            <div class="row mb-0 mt-4 d-flex">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection