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
        <li><a href="{{ URL::to('posts') }}">View All Product</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Create a Product</a>
    </ul>
</nav>

<h1>Showing {{ $post->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $post->name }}</h2>
        <p>
            <strong>Created Date:</strong> {{ $post->created_at->format('Y/m/d') }}<br>
            <strong>Updated Date:</strong> {{ $post->updated_at->format('Y/m/d') }}
        </p>
    </div>

</div>
</body>
</html>