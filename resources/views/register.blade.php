@extends('index')

@section('main-content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="card-body">
        <form action=" {{route('user.store')}}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
