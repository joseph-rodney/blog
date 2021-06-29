<!DOCTYPE html>
<html lang="en">

<head>
@include("partialViews._head")
</head>

<body>
    @include("partialViews._navBar")
    
    <div class="container">
       @yield("content")
    </div>
    
    @include("partialViews._javascript")
    @yield("scripts")
</body>
</html>