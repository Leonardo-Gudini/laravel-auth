@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crea un nuovo post</h1>
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"/>
                  @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}"/>
                  @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <button class="btn btn-success" type="submit">Crea</button>
        </form>
    </div>

@endsection
