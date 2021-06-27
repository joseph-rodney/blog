@extends("partialViews._main")

@section("title", "| Homepage")

@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron mt-5 pt-5">
            <h1>Welcome to my Blog</h1>
            <p class="lead">Thank you for visiting. This is my test Website built with Laravel. Please read my Latest post.</p>
            <a href="#" class="btn btn-danger btn-lg" role="button">Popular Post</a>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-8">
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="post mt-3">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="post mt-3">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="post mt-3">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h3>Side bar</h3>
    </div>
</div>

@endsection
        