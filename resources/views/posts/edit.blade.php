<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('posts') }}">Product Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">View All Products</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Create a Product</a>
    </ul>
</nav>

<h3 class="text-primary">Edit {{ $post->name }}</h3>

<!-- if there are creation errors, they will show here -->

<div class="box animation flipInX">
    <!-- Notifications -->
    <div id="notific">
    @include('notifications')
    </div>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label class="sr-only">Name</label>
            <input type="text" class="form-control" name="name" value="@if (isset($post->name)) {{ $post->name }}@endif">
        </div>
        <button type="submit" class="btn btn-block btn-primary">Submit</button>
    </form>
</div>

</div>
</body>
</html>