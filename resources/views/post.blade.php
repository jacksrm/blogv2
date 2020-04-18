@extends('index')

@section('main-content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="card-body">
        <form action=" {{route('post.store')}}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title">
          </div>

          <div class="form-group">
            <label for="author">Author</label>
            <select name="author" id="">
              @foreach ($users as $user)
                <option value=" {{ $user->name}} "> {{$user->name}} </option>
              @endforeach
              
            </select>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

@section('footer-section')

<script src="{{  asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>

@endsection