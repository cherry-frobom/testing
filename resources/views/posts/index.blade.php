@php
    $title = __('Posts');
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        <a href="{{ url('posts/'.$post->id) }}">{{ $post->name }}</a>
                    </td>
                    <td>{{ $post->created_at->format('Y/m/d') }}</td>
                    <td>{{ $post->updated_at->format('Y/m/d') }}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ ('posts/'.$post->id) }}">Show</a>
                        <a class="btn btn-small btn-info" href="{{ ('posts/'.$post->id. '/edit') }}">Edit</a>
                        <a onclick="return confirm('Are you sure?')" class="btn btn-small btn-danger" href="{{ route('posts.destroy', $post->id) }}">Delete</a>
                    </td>
                 </tr>
            @endforeach
            <?php echo $posts->render(); ?>
            </tbody>
        </table>
    </div>
</div>
@endsection