@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Qui puoi modificare i tuoi post</h1>

    <table class="table table-striped table-dark">
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
                <a href="#">Dettagli</a>
              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
</div>
@endsection



