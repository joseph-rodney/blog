@extends("partialViews._main")

@section("title", "| About")

@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron mt-5 pt-5">
            <h1>About {{ $fullname }}</h1>
            <p>Email me at {{ $email }}</p>
            <p class="lead">Thank you for visiting. This is my test Website built with Laravel. Please read my Latest post.</p>
            
        </div>
    </div>
</div>
@endsection
        
   