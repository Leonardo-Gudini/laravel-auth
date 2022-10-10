@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Qui puoi modificare i tuoi post</h1>

    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea nuovo post</a>

    <table class="mt-3 table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($posts as $post)
        <tbody>
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ $post->slug }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('admin.posts.show', compact('post'))}}">Dettagli</a>
                <a class="btn btn-warning" href="{{ route('admin.posts.edit', compact('post'))}}">Modifica</a>
              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
</div>
@endsection



