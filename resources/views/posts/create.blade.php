@extends("partialViews._main")

@section("title", "| Create New Post")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto pt-5">
            <h1 class="text-center">Create New Posts</h1>
            <hr>
            <form action="App\Http\Controllers\PostController@store " method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">A suitable title for your post</small>

                  <div class="form-group">
                    <label for="body">Post Body</label>
                    <textarea class="form-control" name="body" id="body" rows="8"></textarea>
                  </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block mt-1">Create Post</button>     
                </div>
                


            </form>
        </div>
    </div>
</div>
@endsection