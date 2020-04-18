@extends('index');

@section('main-content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8 ">

        <h1 class="my-4">Welcome
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          @foreach ($posts as $post)
            <div class="card-body">
              <h2 class="card-title"> {{ $post->title }} </h2>
              <p class="card-text">{{ $post->description }}</p>
              <a href=" {{ route('post.show', $post->id )}} " class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              {{ $post->created_at->diffForHumans() }}
            </div>
          
          @endforeach
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
