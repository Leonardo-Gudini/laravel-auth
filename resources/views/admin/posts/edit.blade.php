@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Modifica il post</h1>

        <a class="btn btn-primary mb-3" href="{{ route('admin.posts.index') }}">Torna indietro</a>

        <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" />
                  @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->description) }}"/>
                  @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div> --}}

                <button class="btn btn-success" type="submit">Aggiorna</button>
        </form>


    </div>

@endsection
