@extends("partialViews._main")

@section("title", "| Contact")

@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron mt-5 pt-5">
            <h1>Contact Me</h1>
            <p class="lead">Thank you for visiting. This is my test Website built with Laravel. Please read my Latest post.</p>
            <hr>
            <div class="contact-form">
                <form action="">
                    <div class="form-group">
                        <label class="control-label p-2" for="email">Email</label>
                        <input id="email" name="email" class="form-control p-2" type="text">
                    </div>

                    <div class="form-group">
                        <label class="control-label p-2" for="subject">Subject</label>
                        <input id="subject" name="subject" class="form-control p-2" type="text">
                    </div>
                     <div class="form-group">
                         <label class="control-label p-2" for="message">Message</label>
                         <textarea name="message" id="message" cols="30" rows="5" class="form-control p-2">Message goes here</textarea>
                     </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-success m-3">Submit</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
        